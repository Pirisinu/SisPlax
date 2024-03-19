<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function index(){
        return view(('home'));
    }
    public function serviceContainer(){
        return view(('my_services.container'));
    }
    public function serviceStorage(){
        return view(('my_services.storage'));
    }
    public function serviceVirtualMachine(){
        return view(('my_services.virtualMachine'));
    }
}
