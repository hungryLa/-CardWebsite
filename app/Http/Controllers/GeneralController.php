<?php

namespace App\Http\Controllers;

use App\Http\Requests\General\SendMailRequest;
use App\Mail\AgreementEmail;
use App\Mail\MainFormMail;
use Illuminate\Support\Facades\Mail;

class GeneralController extends Controller
{
    public function sendMail(SendMailRequest $request)
    {
        try {
            $data = $request->validated();

            $success = Mail::to($request->email)
                ->send(new MainFormMail($data));

            if($success){
                return response()->json([
                    'message' => __('flash.The application has been successfully submitted')
                ]);
            }
        } catch (\Exception $exception) {
            return response()->json([
                'message' => $exception->getMessage()
            ], 500);
        }

    }
}
