<?php
 namespace App\Http\Controllers\Employe;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\Employes;
use Illuminate\Http\Request;

class EmployeeController extends Controller
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
            $employes = Employes::where('id', 'LIKE', "%$keyword%")
                ->orWhere('matricule', 'LIKE', "%$keyword%")
                ->orWhere('nom', 'LIKE', "%$keyword%")
                ->orWhere('prenom', 'LIKE', "%$keyword%")
                ->orWhere('mobile', 'LIKE', "%$keyword%")
                ->orWhere('email', 'LIKE', "%$keyword%")
                ->orWhere('fonction', 'LIKE', "%$keyword%")
                ->orWhere('grade', 'LIKE', "%$keyword%")
                ->orWhere('structure', 'LIKE', "%$keyword%")
                ->orWhere('pc', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $employes = Employes::latest()->paginate($perPage);
        }

        return view('employes.index', compact('employes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('employes.create');
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
        
        Employes::create($requestData);

        return redirect('employes')->with('flash_message', 'Employes added!');
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
        $employes = Employes::findOrFail($id);

        return view('employes.show', compact('employes'));
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
        $employes = Employes::findOrFail($id);

        return view('employes.edit', compact('employes'));
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
        
        $employes = Employes::findOrFail($id);
        $employes->update($requestData);

        return redirect('employes')->with('flash_message', 'Employes updated!');
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
        
        Employes::destroy($id);

        return redirect('employes')->with('flash_message', 'Employes deleted!');
    }
}
