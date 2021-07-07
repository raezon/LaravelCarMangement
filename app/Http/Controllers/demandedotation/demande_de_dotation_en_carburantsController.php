<?php

namespace App\Http\Controllers\demandedotation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\demande_de_dotation_en_carburants;

class demande_de_dotation_en_carburantsController extends Controller
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
            $demande_de_dotation_en_carburants = demande_de_dotation_en_carburants::where('id', 'LIKE', "%$keyword%")
                ->orWhere('id', 'LIKE', "%$keyword%")
                ->orWhere('num_dot', 'LIKE', "%$keyword%")
                ->orWhere('division', 'LIKE', "%$keyword%")
                ->orWhere('direction', 'LIKE', "%$keyword%")
                ->orWhere('réf', 'LIKE', "%$keyword%")
                ->orWhere('lieu', 'LIKE', "%$keyword%")
                ->orWhere('date_jour', 'LIKE', "%$keyword%")
                ->orWhere('date_etab_dmnd', 'LIKE', "%$keyword%")
                ->orWhere('date_dernier_app', 'LIKE', "%$keyword%")
                ->orWhere('km_par', 'LIKE', "%$keyword%")
                ->orWhere('index', 'LIKE', "%$keyword%")
                ->orWhere('date', 'LIKE', "%$keyword%")
                ->orWhere('nbr_bon', 'LIKE', "%$keyword%")
                ->orWhere('nom', 'LIKE', "%$keyword%")
                ->orWhere('prenom', 'LIKE', "%$keyword%")
                ->orWhere('fonction', 'LIKE', "%$keyword%")
                ->orWhere("strctr_attache", 'LIKE', "%$keyword%")
                ->orWhere('type_véhicule', 'LIKE', "%$keyword%")
                ->orWhere('N_serie', 'LIKE', "%$keyword%")
              

                ->latest()->paginate($perPage);
        } else {
            $demande_de_dotation_en_carburants = demande_de_dotation_en_carburants::latest()->paginate($perPage);
        }

        return view('demandes.demande_de_dotation_en_carburants.index', compact('demande_de_dotation_en_carburants'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('demandes.demande_de_dotation_en_carburants.create');
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
        
        demande_de_dotation_en_carburants::create($requestData);

        return redirect('demande_de_dotation_en_carburants')->with('flash_message', 'demande de dotationen carburants added!');
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
        $demande_de_dotation_en_carburants = demande_de_dotation_en_carburants::findOrFail($id);

        return view('demandes.demande_de_dotation_en_carburants.show', compact('demande_de_dotation_en_carburants'));
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
        $demande_de_dotation_en_carburants = demande_de_dotation_en_carburants::findOrFail($id);

        return view('demandes.demande_de_dotation_en_carburants.edit', compact('demande_de_dotation_en_carburants'));
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
        
        $demande_de_dotation_en_carburants = demande_de_dotation_en_carburants::findOrFail($id);
        $demande_de_dotation_en_carburants->update($requestData);

        return redirect('demande_de_dotation_en_carburants')->with('flash_message', 'demande sans chauffeur updated!');
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
        
        demande_de_dotation_en_carburants::destroy($id);

        return redirect('demande_de_dotation_en_carburants')->with('flash_message', 'demande de dotation en carburants deleted!');
    }
}
