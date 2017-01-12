<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class ContactFormController extends Controller
{
    //
    public function postContactForm(Request $request){
        $validator = \Validator::make($request->all(), [
            'name' => 'required|max:255',
            'email' => 'required|min:3',
            'message' => 'required|min:5',
        ]);

        if ($validator->passes()){
            return \Redirect::to('/contact#form-contact')->with('success', true)->with('message', 'Pesan anda telah terkirim');
        }else{
            return \Redirect::to('/contact#form-contact') -> withErrors($validator)->withInput($request->input());
        }
    }
}
