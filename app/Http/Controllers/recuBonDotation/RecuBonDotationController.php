<?php

namespace App\Http\Controllers\recuBonDotation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\RecuBonDotation;

class RecuBonDotationController extends Controller
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
                $RecuBonDotation = RecuBonDotation::where('id', 'LIKE', "%$keyword%")
                    ->orWhere('réf', 'LIKE', "%$keyword%")
                    ->orWhere('lieu', 'LIKE', "%$keyword%")
                    ->orWhere('date_jour', 'LIKE', "%$keyword%")
                    ->orWhere('remis_le', 'LIKE', "%$keyword%")
                    ->orWhere('num_dot', 'LIKE', "%$keyword%")
                    ->orWhere('du', 'LIKE', "%$keyword%")
                    ->orWhere('nbr_bon', 'LIKE', "%$keyword%")
                    ->orWhere('debut_ser', 'LIKE', "%$keyword%")
                    ->orWhere('fin_ser', 'LIKE', "%$keyword%")
                    ->orWhere('nom', 'LIKE', "%$keyword%")
                    ->orWhere('prenom', 'LIKE', "%$keyword%")                  
                    ->orWhere('fonction', 'LIKE', "%$keyword%")
                    ->orWhere('structure_attache', 'LIKE', "%$keyword%")
                    ->orWhere('N_serie', 'LIKE', "%$keyword%")
                    ->latest()->paginate($perPage);
            } else {
                $RecuBonDotation = RecuBonDotation::latest()->paginate($perPage);
            }
    
            return view('demandes.RecuBonDotation.index', compact('RecuBonDotation'));
        }
    
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\View\View
         */
        public function create()
        {
            return view('demandes.RecuBonDotation.create');
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
            
            RecuBonDotation::create($requestData);
    
            return redirect('RecuBonDotation')->with('flash_message', 'demande sans chauffeur added!');
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
            $RecuBonDotation = RecuBonDotation::findOrFail($id);
    
            return view('demandes.RecuBonDotation.show', compact('RecuBonDotation'));
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
            $RecuBonDotation = RecuBonDotation::findOrFail($id);
    
            return view('demandes.RecuBonDotation.edit', compact('RecuBonDotation'));
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
            
            $RecuBonDotation = RecuBonDotation::findOrFail($id);
            $RecuBonDotation->update($requestData);
    
            return redirect('RecuBonDotation')->with('flash_message', 'Recu Bon Dotation updated!');
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
            
            RecuBonDotation::destroy($id);
    
            return redirect('RecuBonDotation')->with('flash_message', 'Recu Bon Dotation deleted!');
        }
}