<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class EmailController extends Controller
{
    public function verify(Request $request)
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
}
