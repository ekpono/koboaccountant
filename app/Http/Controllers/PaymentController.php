<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Paystack;
use App\Member;
use Uuid;
use App\Mail\SubscriptionReceived;
use Illuminate\Support\Facades\Mail;
class PaymentController extends Controller
{
    public function redirectToGateway(Request $request)
    {    
        try {
        
        $member = new Member;
        $member->id = Uuid::generate(5,str_random(5), Uuid::NS_DNS);
        $member->name = $request->input('name');
        $member->phone = $request->input('phone');
        $member->email = $request->input('email');
        $member->business_name = $request->input('business_name');
        $member->package = $request->input('amount');
        $member->business_location = $request->input('business_location');
        $member->save();
        
        Mail::to('ekponoambrose@gmail.com')->send(new SubscriptionReceived($member));
         return Paystack::getAuthorizationUrl()->redirectNow();
        }
        catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}
