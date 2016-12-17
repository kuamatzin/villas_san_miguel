<?php

namespace App\Http\Controllers;

use App\Client;
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
            'phone' => 'required',
            'message' => 'required'
        ]);

        if ($validator->fails()) {
            return $validator->getMessageBag()->toArray();
        }

        Client::create($request->all());

        //Send email to administrator
        Mail::to('contacto@inmobiliariamalintzi.com.mx')->send(new ContactoMail($request->all()));
        //Send email to contact
        Mail::to($request->email)->send(new ContactoConfirmacionMail($request->all()));

        return "Exito";
    }
}
