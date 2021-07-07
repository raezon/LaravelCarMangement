<?php

namespace App\Http\Controllers\Voiture;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ AttribuerVhcl;

class AttribuerVhclController extends Controller
{
    
 /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $AttribuerVhcl = AttribuerVhcl::where('id', 'LIKE', "%$keyword%")
                ->orWhere('N_serie', 'LIKE', "%$keyword%")
                ->orWhere('entité', 'LIKE', "%$keyword%")
                ->orWhere('direction', 'LIKE', "%$keyword%")
                ->orWhere('ser_expl', 'LIKE', "%$keyword%")
                ->orWhere('nom', 'LIKE', "%$keyword%")
                ->orWhere('prenom', 'LIKE', "%$keyword%")
                ->orWhere('fonction', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $AttribuerVhcl = AttribuerVhcl::latest()->paginate($perPage);
        }

        return view('AttribuerVhcl.index', compact('AttribuerVhcl'));
    }



     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('AttribuerVhcl.create');
    }


 /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        AttribuerVhcl::create($requestData);

        return redirect('AttribuerVhcl')->with('flash_message', 'AttribuerVhcl added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $AttribuerVhcl = AttribuerVhcl::findOrFail($id);

        return view('AttribuerVhcl.show', compact('AttribuerVhcl'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $AttribuerVhcl = AttribuerVhcl::findOrFail($id);

        return view('AttribuerVhcl.edit', compact('AttribuerVhcl'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $AttribuerVhcl = AttribuerVhcl::findOrFail($id);
        $AttribuerVhcl->update($requestData);

        return redirect('AttribuerVhcl')->with('flash_message', 'AttribuerVhcl updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */

    public function destroy($id)
    {
        
        AttribuerVhcl::destroy($id);

        return redirect('AttribuerVhcl')->with('flash_message', 'AttribuerVhcl deleted!');
    }
}
