<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{

    public function index()
    {
        return view('mails.contact');
    }


    public function store(Request $request)
    {

        $data = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required'
        ]);

        //Mudar para nuarteip.ifrn.edu.br
        Mail::to('dilsono316@gmail.com')->send(new SendMail($data));

        return back()->with('data', $data)->with('flash', 'Mensagem enviada com sucesso');
    }
}
