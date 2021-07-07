<?php

namespace App\Http\Controllers\chart;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\users;

class chartController extends Controller
{
    public function index(){
     $users=users::select(DB::raw("COUNT(*) as count"))
     ->whereYear('created_at',date('y'))
     ->groupeBy(BD::raw("month(created_at) as month"))
     ->pluck('count');

     $months= user::select(DB::raw("Month(created_at) as month"))
     ->whereYear('created_at',date('y'))
     ->groupeBy(BD::raw("month(created_at) as month"))
     ->pluck('count');
     $datas=array(0,0,0,0,0,0,0,0,0,0,0,0);

     foreach($months as $index=>$month){

        $datas[$month] = $users[index];
     }
     return view('chart',compact(datas));

    }
}
