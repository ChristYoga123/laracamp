<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Checkout;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function update(Request $request, Checkout $checkout){
        $checkout_update = Checkout::find($checkout->id);
        $checkout_update->is_paid = true;
        $checkout_update->save();
        $request->session('success', "Checkout with ID {$checkout->id} has been updated");
        return redirect()->route('admin.dashboard');
    }
}
