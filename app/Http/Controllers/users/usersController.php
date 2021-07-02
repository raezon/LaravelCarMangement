<?php

namespace App\Http\Controllers\users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\users;
class usersController extends Controller
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
            $users = users::where('id', 'LIKE', "%$keyword%")
                ->orWhere('matricule', 'LIKE', "%$keyword%")
                ->orWhere('email', 'LIKE', "%$keyword%")
                ->orWhere('role_as', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $users = users::latest()->paginate($perPage);
        }

        return view('users.index', compact('users'));
    }



     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
 

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $users = users::findOrFail($id);

        return view('users.show', compact('users'));
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
        $users = users::findOrFail($id);

        return view('users.edit', compact('users'));
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
        
        $users = users::findOrFail($id);
        $users->update($requestData);

        return redirect('users')->with('flash_message', 'users updated!');
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
        
        users::destroy($id);

        return redirect('users')->with('flash_message', 'users deleted!');
    }
}












