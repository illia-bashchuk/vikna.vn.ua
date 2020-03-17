<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App;

class IndexController extends Controller
{
    /**

     */
    public function index()
    {
        App::setLocale('uk');
        return view('index', ['local' => '']);
    }
}
