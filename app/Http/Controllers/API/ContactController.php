<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact(Request $request)
    {
        mail(env('EMAIL_ADMIN'), 'Обратная связь с сайта', $request->email.' отправил заявку на обратную связь!');
//        logger()->info('mail sent '. $mail);
    }
}
