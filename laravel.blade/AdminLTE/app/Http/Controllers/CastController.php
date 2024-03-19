<?php

namespace App\Http\Controllers;
use App\Models\Cast;

use Illuminate\Http\Request;

class CastController extends Controller
{
   /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $casts=Cast::latest()->paginate(8);
        return view('cast.index',['casts'=>$casts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cast.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData=$request->validate([
            'nama' => 'required',
            'umur' => 'required|integer',
            'bio' => 'required',
        ]);
        
        Cast::create($validatedData);
        return redirect('/cast')->with('pesan','Data berhasil disimpan');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('cast.edit',[
            'casts'=>Cast::find($id),
             
         ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData=$request->validate([
            'nama' => 'required',
            'umur' => 'required|integer',
            'bio' => 'required',
        ]);
        
        Cast::where('id',$id)->update($validatedData);
        return redirect('/cast')->with('pesan','Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Cast::destroy($id);
        return redirect('/cast')->with('pesan','Data berhasil di hapus');
    }
}
