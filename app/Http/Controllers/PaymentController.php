<?php

namespace App\Http\Controllers;

use App\Paypal\CreatePayment;
use App\Paypal\ExecutePayment;
use PayPal\Api\Payment;
use PayPal\Api\PaymentExecution;
use PayPal\Api\Transaction;
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Payer;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\RedirectUrls;

class PaymentController extends Controller
{
    public function create()
    {
        $payment = new CreatePayment;
        return $payment->create();
    }

    public function execute()
    {
        $payment = new ExecutePayment;
        return $payment->execute();
    }
}
