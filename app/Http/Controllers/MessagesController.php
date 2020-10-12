<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\SendEmail;
use Illuminate\Support\Facades\Mail;

class MessagesController extends Controller{
    public function store(){
        $mensaje = request()->validate([
            'full-name' =>array(
                'required',
                'regex:/(^[a-zA-ZÀ-ÿ\s]{1,100}$)/'
        ),
            'email' => array(
                'required',
                'regex:/(^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$)/'
        ),
            'phone' => array(
                'required',
                'regex:/(^\d{9,9}$)/'
        ),
            'department' => array(
                'required',
                'regex:/(^[a-zA-ZÀ-ÿ\s]{1,100}$)/'
        ),
            'message' => 'required'
        ]);
        // $mensaje = [request('full-name'),request('phone')];

        // print_r($mensaje);

         Mail::to('informes@visacol.com.pe')->queue(new SendEmail($mensaje));
            
         return back()->with('msjEnvio','Gracias por comunicarte con nosotros, en menos de 24 horas le estaremos respondiendo.');
    }
}
