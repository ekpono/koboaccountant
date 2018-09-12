<?php
namespace App\Http\Controllers;
use App\Http\Requests\MemberRequest;

use Illuminate\Http\Request;
use Paystack;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use App\Member;
use Uuid;
class PaymentController extends Controller
{
    public function redirectToGateway(MemberRequest $request)
    {      
        $member = new Member;
        $member->id = Uuid::generate(5,str_random(5), Uuid::NS_DNS);
        $member->name = $request->input('name');
        $member->email = $request->input('email');
        $member->business_name = $request->input('business_name');
        $member->package = $request->input('amount');
        $member->business_location = $request->input('business_location');
        $member->save();
        try {
         return Paystack::getAuthorizationUrl()->redirectNow();
        }
        catch (\Exception $e) {
            return $e->getMessage();
        }
       
    }
}
