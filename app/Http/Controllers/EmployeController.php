<?php

namespace App\Http\Controllers;
use App\DataTables\EmployeDataTable;
use Illuminate\Http\Request;
use  App\Models\Uses;
class EmployeController extends Controller
{
    public function employe(EmployeDataTable $dataTable)
    {
        return $dataTable->render('employe');
    }

 

}


