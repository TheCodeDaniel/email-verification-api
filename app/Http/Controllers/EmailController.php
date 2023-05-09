<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class EmailController extends Controller
{

    public function index()
    {
        $AppName = "Form Validator";
        return view('index', compact('AppName'));
    }
    public function verify_email(Request $request)
    {
        $validator = Validator::make($request->all(), [

            'email' => 'required|email',

        ]);

        if ($validator->fails()) {

            return response()->json(['message' => 'invalid-email-format'], 422); // 422 status code - 'Unprocessable Content'

        } else if ($validator->passes()) {

            return response()->json(['message' => 'valid-email-format'], 200); // 200 status code - 'OK'
        }
    }

    public function verify_password(Request $request)
    {
        $validator = Validator::make($request->all(), [

            'password' => 'required|min:6',
            'password_repeat' => 'required|min:6|required_with:password|same:password',

        ]);

        if ($validator->fails()) {

            return response()->json($validator->errors(), 422); // 422 status code - 'Unprocessable Content'

        } else if ($validator->passes()) {

            return response()->json(['message' => 'password-match'], 200); // 200 status code - 'OK'
        }
    }
}
