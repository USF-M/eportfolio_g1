<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\PruebaCorreo;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use Throwable;

class MailController extends Controller
{
    public function prueba()
    {
        try {
            Mail::to(Auth::user()->email)->send(new PruebaCorreo());
            $retorno = 'success';
            $mensaje = 'Correo enviado correctamente';
        } catch (Throwable $e) {
            $retorno = 'error';
            $mensaje = 'Error al enviar el correo';
        }
        return back()->with($retorno, $mensaje);
    }
}
