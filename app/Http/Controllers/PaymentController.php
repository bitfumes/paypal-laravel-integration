<?php

namespace App\Http\Controllers;

use PayPal\Api\Payment;
use PayPal\Api\PaymentExecution;
use PayPal\Api\Transaction;
use PayPal\Api\Amount;
use PayPal\Api\Details;

class PaymentController extends Controller
{
    public function execute()
    {
        $apiContext = new \PayPal\Rest\ApiContext(
        new \PayPal\Auth\OAuthTokenCredential(
            'AWH2YAbzGMKECSHBOw0_BVRFX9tclShcg512AHr9bMNBBG7esnuYwsXPTf0HagiyszMCbyOyhqJoeo9o', // client id
            'EPjnC_q7-rlABNkz7YvSx19KBiU4QS6ltTyweTx_XdWak5Gy6MuGz71bl34tWI6YyVYDDzCy_W4GIxms' // client secret
                )
        );

        $paymentId = request('paymentId');
        $payment = Payment::get($paymentId, $apiContext);

        $execution = new PaymentExecution();
        $execution->setPayerId(request('PayerID'));

        $transaction = new Transaction();
        $amount = new Amount();
        $details = new Details();

        $details->setShipping(1.2)
                ->setTax(1.3)
                ->setSubtotal(17.50);

        $amount->setCurrency('USD');
        $amount->setTotal(20);
        $amount->setDetails($details);
        $transaction->setAmount($amount);

        $execution->addTransaction($transaction);
        $result = $payment->execute($execution, $apiContext);

        return $result;
    }
}
