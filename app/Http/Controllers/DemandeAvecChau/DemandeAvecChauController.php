<?php

namespace App\Http\Controllers\DemandeAvecChau;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\DemandeAvecChau;
use Illuminate\Http\Request;

class DemandeAvecChauController extends Controller
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
                $demandeavecchau = demandeavecchau::where('id', 'LIKE', "%$keyword%")
                    ->orWhere('num_référence', 'LIKE', "%$keyword%")
                    ->orWhere('nom', 'LIKE', "%$keyword%")
                    ->orWhere('prenom', 'LIKE', "%$keyword%")
                    ->orWhere('grade', 'LIKE', "%$keyword%")
                    ->orWhere('lieu_deplacement', 'LIKE', "%$keyword%")
                    ->orWhere('date', 'LIKE', "%$keyword%")
                    ->orWhere('date_depart', 'LIKE', "%$keyword%")
                    ->orWhere('heure_depart', 'LIKE', "%$keyword%")
                    ->orWhere('motif', 'LIKE', "%$keyword%")
                    ->latest()->paginate($perPage);
            } else {
                $demandeavecchau = demandeavecchau::latest()->paginate($perPage);
            }
    
            return view('demandes.DemandeAvecChau.index', compact('demandeavecchau'));
        }
    
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\View\View
         */
        public function create()
        {
            return view('demandes.DemandeAvecChau.create');
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
            
            demandeavecchau::create($requestData);
    
            return redirect('DemandeAvecChau')->with('flash_message', 'demande avec chauffeur added!');
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
            $demandeavecchau = demandeavecchau::findOrFail($id);
    
            return view('demandes.DemandeAvecChau.show', compact('demandeavecchau'));
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
            $demandeavecchau = demandeavecchau::findOrFail($id);
    
            return view('demandes.DemandeAvecChau.edit', compact('demandeavecchau'));
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
            
            $demandeavecchau = demandeavecchau::findOrFail($id);
            $demandeavecchau->update($requestData);
    
            return redirect('DemandeAvecChau')->with('flash_message', 'demande avec chauffeur updated!');
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
            
            demandeavecchau::destroy($id);
    
            return redirect('DemandeAvecChau')->with('flash_message', 'demande avec chauffeur deleted!');
        }
}
