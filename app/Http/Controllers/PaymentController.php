<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Paystack;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
class PaymentController extends Controller
{
    public function redirectToGateway()
    {
        return Paystack::getAuthorizationUrl()->redirectNow();
    }
}
