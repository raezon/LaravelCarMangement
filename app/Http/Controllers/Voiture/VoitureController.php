<?php

namespace App\Http\Controllers\voiture;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Voitures;
use App\Http\Requests;



class VoitureController extends Controller
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
            $voitures = Voitures::where('id', 'LIKE', "%$keyword%")
                ->orWhere('N_serie', 'LIKE', "%$keyword%")
                ->orWhere('ancienne_immat', 'LIKE', "%$keyword%")
                ->orWhere('nouvelle_immat', 'LIKE', "%$keyword%")
                ->orWhere('numero_assurance', 'LIKE', "%$keyword%")
                ->orWhere('Energie', 'LIKE', "%$keyword%")
                ->orWhere('type', 'LIKE', "%$keyword%")
                ->orWhere('marque', 'LIKE', "%$keyword%")
                ->orWhere('modele', 'LIKE', "%$keyword%")
                ->orWhere('couleur', 'LIKE', "%$keyword%")
                ->orWhere('Genre', 'LIKE', "%$keyword%")
                ->orWhere('nbr_plc', 'LIKE', "%$keyword%")
                ->orWhere('nbr_chv', 'LIKE', "%$keyword%")
                ->orWhere('tonnage', 'LIKE', "%$keyword%")
                ->orWhere('dmc', 'LIKE', "%$keyword%")
                ->orWhere('etat', 'LIKE', "%$keyword%")
                ->orWhere('qualité', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $voitures = voitures::latest()->paginate($perPage);
        }

        return view('voitures.index', compact('voitures'));
    }



     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('voitures.create');
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
        
        Voitures::create($requestData);

        return redirect('voitures')->with('flash_message', 'Voitures added!');
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
        $Voitures = Voitures::findOrFail($id);

        return view('Voitures.show', compact('Voitures'));
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
        $voitures = voitures::findOrFail($id);

        return view('voitures.edit', compact('voitures'));
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
        
        $voitures = voitures::findOrFail($id);
        $voitures->update($requestData);

        return redirect('voitures')->with('flash_message', 'voitures updated!');
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
        
        voitures::destroy($id);

        return redirect('voitures')->with('flash_message', 'voitures deleted!');
    }
}
