<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Customers;
use App\Models\NewsletterInfo;
use App\Models\Preference;
use App\Models\User;
use Illuminate\Http\Request;

class BCustomerController extends Controller
{
           public function index()
    {
        $preferencTotal = Preference::all()->count();
        $newsletterinfosTotal = Newsletterinfo::all()->count();
        $customers = User::where('is_employee','=' ,'0')->orderByDesc("id")
            ->withTrashed()
            ->paginate(10);
        return view(
            "backend.customers.index",
            compact("customers", "preferencTotal", "newsletterinfosTotal")
        );
    }
}
