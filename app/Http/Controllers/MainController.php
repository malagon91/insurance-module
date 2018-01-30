<?php
/**
 * Created by PhpStorm.
 * User: miguel
 * Date: 1/22/18
 * Time: 6:23 PM
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;


class MainController extends Controller{
    public function home(){
        return view('main.home',["name" => "new"]);

    }
}