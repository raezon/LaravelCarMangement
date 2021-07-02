<?php

namespace App\Http\Controllers\DemandeSansChau;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\DemandeSansChau;
use Illuminate\Http\Request;

class GesDemandeSansChauController extends Controller
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
                $demandesanschau = demandesanschau::where('id', 'LIKE', "%$keyword%")
                    ->orWhere('num_référence', 'LIKE', "%$keyword%")
                    ->orWhere('nom', 'LIKE', "%$keyword%")
                    ->orWhere('prenom', 'LIKE', "%$keyword%")
                    ->orWhere('grade', 'LIKE', "%$keyword%")
                    ->orWhere('direction_attache', 'LIKE', "%$keyword%")
                    ->orWhere('lieu_demplacement', 'LIKE', "%$keyword%")
                    ->orWhere('date', 'LIKE', "%$keyword%")
                    ->orWhere('heure_depart', 'LIKE', "%$keyword%")
                    ->orWhere('motif', 'LIKE', "%$keyword%")
                    ->orWhere('Immatriculation', 'LIKE', "%$keyword%")
                    ->orWhere('type', 'LIKE', "%$keyword%")
                    ->orWhere('marque', 'LIKE', "%$keyword%")
                    ->orWhere('état_Véhicule', 'LIKE', "%$keyword%")
                    ->orWhere('date_remise_véhicule', 'LIKE', "%$keyword%")
                    ->orWhere('service_demandeur', 'LIKE', "%$keyword%")
                    ->orWhere('sructure_donatrice', 'LIKE', "%$keyword%")
                    ->latest()->paginate($perPage);
            } else {
                $demandesanschau = demandesanschau::latest()->paginate($perPage);
            }
    
            return view('demandes.GesDemandeSansChau.index', compact('demandesanschau'));
        }
    
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\View\View
         */
        public function create()
        {
            return view('demandes.GesDemandeSansChau.create');
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
            
            demandesanschau::create($requestData);
    
            return redirect('DemandeSansChau')->with('flash_message', 'demande sans chauffeur added!');
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
            $demandesanschau = demandesanschau::findOrFail($id);
    
            return view('demandes.GesDemandeSansChau.show', compact('demandesanschau'));
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
            $demandesanschau = demandesanschau::findOrFail($id);
    
            return view('demandes.DemandeSansChau.edit', compact('demandesanschau'));
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
            
            $demandesanschau = demandesanschau::findOrFail($id);
            $demandesanschau->update($requestData);
    
            return redirect('DemandeSansChau')->with('flash_message', 'demande sans chauffeur updated!');
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
            
            demandesanschau::destroy($id);
    
            return redirect('DemandeSansChau')->with('flash_message', 'demande sans chauffeur deleted!');
        }
}