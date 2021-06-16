<?php

namespace App\Http\Controllers;
use App\DataTables\EmployeDataTable;
use Illuminate\Http\Request;
use  App\Models\Uses;
class EmployeController extends Controller
{
   /* public function employe(EmployeDataTable $dataTable)
    {
        return $dataTable->render('employe');
    }*/
    public function index()
    {
        return view('employe.index');
    }


    public function getEmployes(Request $request)
    {
        if ($request->ajax()) {
            $data = Employes::latest()->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $actionBtn = '<a href="javascript:void(0)" class="edit btn btn-success btn-sm">Edit</a> <a href="javascript:void(0)" class="delete btn btn-danger btn-sm">Delete</a>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
    }
    

 

}


