<?php

namespace App\Http\Controllers;
use App\DataTables\EmployeDataTable;
use Illuminate\Http\Request;
use  App\Models\Uses;
use App\Models\Employe;
use Illuminate\Validation\Validator;

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
            $data = Employe::latest()->get();
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
     /**
     * Display the specified resource.
     *
     * @param  \App\Sample_data  $sample_data
     * @return \Illuminate\Http\Response
     */
    public function show(Employe $sample_data)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sample_data  $sample_data
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(request()->ajax())
        {
            $data = Employe::findOrFail($id);
            return response()->json(['result' => $data]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sample_data  $sample_data
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employe $sample_data)
    {
        $rules = array(
            'first_name'        =>  'required',
            'last_name'         =>  'required'
        );

        $error = Validator::make($request->all(), $rules);

        if($error->fails())
        {
            return response()->json(['errors' => $error->errors()->all()]);
        }

        $form_data = array(
            'first_name'    =>  $request->first_name,
            'last_name'     =>  $request->last_name
        );

        Employe::whereId($request->hidden_id)->update($form_data);

        return response()->json(['success' => 'Data is successfully updated']);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sample_data  $sample_data
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Employe::findOrFail($id);
        $data->delete();
    }
    

 

}


