<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Visitor;
use Carbon\Carbon;
use Illuminate\Http\Request;

class VisitController extends Controller
{
    public function GetvisitorDetails(){
        $ip_address = $_SERVER['REMOTE_ADDR'];
        date_default_timezone_set('Asia/Dhaka');
        $visit_time = date('h:i:sa');
        $visit_date = date("d:m:Y");

        $result = Visitor::insert([
            'ip_address' => $ip_address,
            'visit_time' => $visit_time,
            'visit_date' => $visit_date,
            'created_at' => Carbon::now()
        ]);
        return $result;
    }
}
