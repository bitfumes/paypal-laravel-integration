<?php

namespace App\Http\Controllers;

use App\Paypal\PaypalAgreement;
use App\Paypal\SubscriptionPlan;
use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    /**
     *
     */
    public function createPlan()
    {
        $plan = new SubscriptionPlan();
        $plan->create();
    }

    /**
     * @return \PayPal\Api\PlanList
     */
    public  function listPlan()
    {
        $plan = new SubscriptionPlan();
        return $plan->listPlan();
    }

    public function showPlan($id)
    {
        $plan = new SubscriptionPlan();
        return $plan->planDetails($id);
    }

    public function activatePlan($id)
    {
        $plan = new SubscriptionPlan();
        $plan->activate($id);
    }

    public function CreateAgreement($id)
    {
        $agreement = new PaypalAgreement;
        return $agreement->create($id);
    }

    public function executeAgreement($status)
    {
        if($status == 'true'){
            $agreement = new PaypalAgreement;
            $agreement->execute(request('token'));
            return 'done';
        }
    }
}
