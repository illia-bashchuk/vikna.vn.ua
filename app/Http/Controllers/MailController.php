<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App;
use App\Photo;
use App\Mail\OrderShipped;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    /**

     */


    public function mail(Request $request)
  {
    $request->validate([
        'name' => 'string',
        'phone' => 'numeric',
    ]);
    $name = $request->name;
    $phone = $request->phone;
    $mailTo = 'kolyaboiko@gmail.com';
    //$mailTo = 'ilvasilich@gmail.com';

    Mail::to($mailTo)->send(new OrderShipped($name, $phone));
    return redirect()->route('index', ['locale' => App::getLocale()]);


  }

}
