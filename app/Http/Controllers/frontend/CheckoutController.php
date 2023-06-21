<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddressRequest;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class CheckoutController extends Controller
{
    public function checkoutShippingAddress(AddressRequest $request)
    {

        $shippingaddress = new OrderDetail();
        $shippingaddress->company = $request->company;
        $shippingaddress->vat = $request->vat;
        $shippingaddress->first_name = $request->first_name;
        $shippingaddress->last_name = $request->last_name;
        $shippingaddress->phone =$request->phone;
        $shippingaddress->address =$request->address;
        $shippingaddress->address_2 =$request->address_2;
        $shippingaddress->city =$request->city;
        $shippingaddress->zipcode = $request->zipcode;
        $shippingaddress->province=$request->province;
        $shippingaddress->country =$request->country;
        $shippingaddress->shipping = true;


//        $orderdetails->user_id = $request->customer_id;
        $shippingaddress->save();

        session::put ('shipping', $shippingaddress);
        return redirect()
            ->route('cart-address');
    }

    public function checkoutBillingAddress(Request $request)
    {
        if($request->billing == 'true'){
            $billingaddress = session('shipping') ;
//            dd($billingaddress);
            $billingaddress->billing = true;
            $billingaddress->save();
            session::put ('billing', $billingaddress);
        }else{
//            dd($request);
//            request()->validate([
//                'first_name'=> 'required|string|between:2,255',
//                'last_name'=> 'required|string|between:2,255',
//                'address_1'=> 'required|string|between:2,255',
//                'address_2'=> 'nullable|string|between:2,255',
//                'city'=> 'required|string|between:2,255',
//                'zipcode'=> 'required|string|between:2,255',
//                'province'=> 'required|string|between:2,255',
//                'country'=> 'required|string|between:2,255',
//                "phone" => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
//                "email" => "required |email",
//            ],
//                [
//
//                    'first_name.string'=>'This name is a bit strange. Can you do this correctly',
//                    'first_name.between'=>'The name must be between 2 and 255 characters',
//                    'last_name.string'=>'This name is a bit strange. Can you do this correctly',
//                    'last_name.between'=>'The name must be between 2 and 255 characters',
//                    'address_1.required'=>'Please fill in a address line',
//                    'city.required'=>'Please fill in the City name',
//                    'zipcode.required'=>'Please fill in the Zipcode name',
//                    "phone" => "Please enter a vilid phone number",
//                    "email.email" => "Please enter a valid email adres",
//
//                ]);

            $billingaddress = new OrderDetail();
            $billingaddress->company = $request->company;
            $billingaddress->vat = $request->vat;
            $billingaddress->first_name = $request->first_name;
            $billingaddress->last_name = $request->last_name;
            $billingaddress->phone =$request->phone;
            $billingaddress->address =$request->address;
            $billingaddress->address_2 =$request->address_2;
            $billingaddress->city =$request->city;
            $billingaddress->zipcode = $request->zipcode;
            $billingaddress->province=$request->province;
            $billingaddress->country =$request->country;
            $billingaddress->billing = true;
            $billingaddress->save();


            return redirect()
                ->route('cart-address');

        }



//        $orderdetails->user_id = $request->customer_id;
//        $billingaddres->update();


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
        $order->save();
        return redirect($session->url);
    }

    public function success(Request $request)
    {
        \Stripe\Stripe::setApiKey(env('STRIPE_SECRET_KEY'));
        $sessionId = $request->get('session_id');

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

            return view('product.checkout-success');
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
}
