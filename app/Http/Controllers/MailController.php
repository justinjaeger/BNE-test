<?php

namespace App\Http\Controllers;
use App\Http\Controllers\EmailVerificationNotificationController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Mailtrap;

class MailController extends Controller
{
  public function index() 
  {
    Mail::to('jjustinjaeger@gmail.com')->send(new Mailtrap());

    return redirect('/sendMail', [EmailVerificationNotificationController::class, '__invoke']);
  }

}