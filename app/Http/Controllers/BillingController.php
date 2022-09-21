<?php

namespace App\Http\Controllers;

use Stripe;

class BillingController extends Controller
{
    public function index()
    {
        $prices = \Stripe\Price::all([
        ]);
        return $prices->data;
    }
}
