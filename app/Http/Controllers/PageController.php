<?php

namespace App\Http\Controllers;

use App\Mail\ContactoConfirmacionMail;
use App\Mail\ContactoMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class PageController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function enviar_email(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
            'phone' => 'required'
        ]);

        if ($validator->fails()) {
            return $validator->getMessageBag()->toArray();
        }

        //Send email to administrator
        Mail::to('kuamatzin@gmail.com')->send(new ContactoMail($request->all()));
        //Send email to contact
        Mail::to($request->email)->send(new ContactoConfirmacionMail($request->all()));

        return "Exito";
    }
}
