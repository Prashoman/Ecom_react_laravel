<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Sitefooter;
use Illuminate\Http\Request;

class SitefooterController extends Controller
{
    public function sitefooter(){
        $result = Sitefooter::get();
        return $result;
    }
}
