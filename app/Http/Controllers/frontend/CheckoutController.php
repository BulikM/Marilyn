<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddressRequest;
use App\Models\Images;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\OrderProducts;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Session;
use Stripe\PaymentIntent;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class CheckoutController extends Controller
{
    public function checkoutShippingAddress(AddressRequest $request)
    {
//dd($request);
        $shippingaddress = new OrderDetail();
        $shippingaddress->company = $request->company;
        $shippingaddress->vat = $request->vat;
        $shippingaddress->first_name = $request->first_name;
        $shippingaddress->last_name = $request->last_name;
        $shippingaddress->address =$request->address;
        $shippingaddress->address_2 =$request->address_2;
        $shippingaddress->city =$request->city;
        $shippingaddress->zipcode = $request->zipcode;
        $shippingaddress->province=$request->province;
        $shippingaddress->country =$request->country;
        $shippingaddress->phone =$request->phone;
        $shippingaddress->email =$request->email;
        $shippingaddress->shipping = true;
//        $shippingaddress->save();

        session::put ('shipping', $shippingaddress);
        return redirect()
            ->route('cart-address');
    }
    public function removeShipping(Request $request){
        $request->session()->forget('shipping');
        return redirect()
            ->route('cart-address');
    }


    public function checkoutBillingAddress(Request $request)
    {

        if($request->billing == 'true'){
            $billingaddress = session('shipping') ;
            $billingaddress->billing = true;
            session::put ('billing', $billingaddress);
        }else{
            request()->validate([
                'first_name'=> 'required|string|between:2,255',
                'last_name'=> 'required|string|between:2,255',
                'address'=> 'required|string|between:2,255',
                'city'=> 'required|string|between:2,255',
                'zipcode'=> 'required|string|between:2,255',
                'country'=> 'required|string|between:2,255',
                "phone" => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:9',
                "email" => "required |email",
            ],
                [

                    'first_name.string'=>'This name is a bit strange. Can you do this correctly',
                    'first_name.between'=>'The name must be between 2 and 255 characters',
                    'last_name.string'=>'This name is a bit strange. Can you do this correctly',
                    'last_name.between'=>'The name must be between 2 and 255 characters',
                    'address.required'=>'Please fill in a address line',
                    'city.required'=>'Please fill in the City name',
                    'zipcode.required'=>'Please fill in the Zipcode name',
                    "phone" => "Please enter a valid phone number",
                    "email.email" => "Please enter a valid email adres",

                ]);

            $billingaddress = new OrderDetail();
            $billingaddress->company = $request->company;
            $billingaddress->vat = $request->vat;
            $billingaddress->first_name = $request->first_name;
            $billingaddress->last_name = $request->last_name;
            $billingaddress->address =$request->address;
            $billingaddress->address_2 =$request->address_2;
            $billingaddress->city =$request->city;
            $billingaddress->zipcode = $request->zipcode;
            $billingaddress->province=$request->province;
            $billingaddress->country =$request->country;
            $billingaddress->phone =$request->phone;
            $billingaddress->email =$request->email;
            $billingaddress->billing = true;

            session::put ('billing', $billingaddress);
            return redirect()
                ->route('cart-address');

        }
        return redirect()
            ->route('cart-address');
    }
    public function removeBilling(Request $request){
        $request->session()->forget('billing');
       $shipping = session('shipping');
       $shipping->billing = false;
        session::put('shipping', $shipping);
        return redirect()
            ->route('cart-address');
    }

    public function checkout()
    {
        \Stripe\Stripe::setApiKey(env('STRIPE_SECRET_KEY'));

        $cart = Session::has('cart') ? Session::get('cart'):null;
        $cartitems = $cart->products;
        $ids = Arr::pluck($cartitems,'product_id');
        $products = Product::query()->whereIn('id', $ids)->get();

        $lineItems = [];
        $totalPrice = 0;
        foreach ($cartitems as $cartitem) {
            $product = $products->where('id', $cartitem['product_id'])->first();
            $totalPrice += $cartitem['quantity'] * $product->price;

            $lineItems[] = [
                'price_data' => [
                    'currency' => 'EUR',
                    'product_data' => [
                        'name' => $product->name,
//                        'images' => $product->image
                    ],
                    'unit_amount_decimal' => $product->price * 100,
                ],
                'quantity' => $cartitem['quantity'],
            ];
        }
        $paymentIntent = PaymentIntent::create([
            'amount' => $totalPrice * 100, // This should be in the smallest unit of your currency. (For example, cents in USD.)
            'currency' => 'EUR',
        ]);
//        session::put ('paymentIntentId', $paymentIntent->id);

        $session = \Stripe\Checkout\Session::create([
            'line_items' => $lineItems,
            'mode' => 'payment',
            'success_url' => route('checkout.success', [], true) . "?session_id={CHECKOUT_SESSION_ID}",
            'cancel_url' => route('checkout.failure', [], true),
        ]);

        $order = new Order();
        $order->status = 'unpaid';
        $order->total_price = $totalPrice;
        $order->session_id = $session->id;
        $order->stripe_reference = $paymentIntent->id;
        $order->save();

        if(session('shipping')->billing == true){
            $shipping = session('shipping');
            $shipping->orders_id = $order->id;
            $shipping->save();

        }else{
            $shipping = session('shipping');
            $shipping->orders_id = $order->id;
            $shipping->save();
            $billing = session('billing');
            $billing->orders_id = $order->id;
            $billing->save();
        }
        foreach ($cartitems as $cartitem) {

            $item = $products->where('id', $cartitem['product_id'])->first();

            $orderdproduct = new OrderProducts();
            $orderdproduct->orders_id = $order->id;
            $orderdproduct->product_id = $item->id;
            $orderdproduct->price = $item->price;
            $orderdproduct->name = $item->name;
            $orderdproduct->brand = $cartitem['brand_name'];
            $orderdproduct->quantity =$cartitem['quantity'];
            $orderdproduct->save();
        }


        return redirect($session->url);
    }

    public function success(Request $request)
    {
        \Stripe\Stripe::setApiKey(env('STRIPE_SECRET_KEY'));
        $sessionId = $request->get('session_id');
//        $paymentIntent = PaymentIntent::retrieve(session::get('paymentIntentId'));
//        dd(session('paymentIntentId'));


        $order = Order::with('orderDetails', 'products')->where('session_id',$sessionId)->first();

        try {
            $session = \Stripe\Checkout\Session::retrieve($sessionId);
            if (!$session) {
                throw new NotFoundHttpException;
            }

            $order = Order::where('session_id', $session->id)->first();
            if (!$order) {
                throw new NotFoundHttpException();
            }
            if ($order->status === 'unpaid') {
                $order->status = 'paid';
                $order->save();
            }

            return view('product.checkout-success', compact('order' ));

        } catch (\Exception $e) {
            throw new NotFoundHttpException();
        }

    }

    public function failure(Request $request)
    {
        return view('checkout.failure', ['message' => "something went wrong"]);
    }

    public function webhook()
    {
        // This is your Stripe CLI webhook secret for testing your endpoint locally.
        $endpoint_secret = env('STRIPE_WEBHOOK_SECRET');

        $payload = @file_get_contents('php://input');
        $sig_header = $_SERVER['HTTP_STRIPE_SIGNATURE'];
        $event = null;

        try {
            $event = \Stripe\Webhook::constructEvent(
                $payload, $sig_header, $endpoint_secret
            );
        } catch (\UnexpectedValueException $e) {
            // Invalid payload
            return response('', 400);
        } catch (\Stripe\Exception\SignatureVerificationException $e) {
            // Invalid signature
            return response('', 400);
        }

// Handle the event
        switch ($event->type) {
            case 'checkout.session.completed':
                $session = $event->data->object;

                $order = Order::where('session_id', $session->id)->first();
                if ($order && $order->status === 'unpaid') {
                    $order->status = 'paid';
                    $order->save();
                    // Send email to customer
                }

            // ... handle other event types
            default:
                echo 'Received unknown event type ' . $event->type;
        }

        return response('');
    }
    public function sessionFlush(){
        Session::flush();
        return redirect('home');
    }
}
