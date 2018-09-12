<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Member;
class MemberRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'email' => 'required|email',
            'package' => 'required',
        ];
    }

    // public function saveMember()
    // {
    //     $member = new Member;
    //     $member->id = $member->generateUuid();
    //     $member->name = $request->input('name');
    //     $member->email = $request->input('email');
    //     $member->business_name = $request->input('business_name');
    //     $member->package = $request->input('package');
    //     $member->business_location = $request->input('business_location');
    //     $member->save();
        
    // }
}
