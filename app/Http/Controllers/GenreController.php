<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\container\Attributes;
use Illuminate\support\Facades\DB;


class GenreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $genres = DB::table('genres') -> get();
        //return ke view
        return view('genre.index', compact('genres'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('genre.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            "nama" => 'required|min:5',
        ]);
        $query = DB::table('genres')->insert([
            'nama' => $request['nama'],
        ]);

        return redirect()->route('genre.index')->with(['success' => 'Data telah disimpan']);
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
        //
        $genres = DB::table('genres')->where('id', $id)->first();
        return view('genre.update', compact('genres'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            "nama" => 'required|min:5'
        ]);
        //query untuk update data
        $query = DB::table('genres')
            ->where('id' , $id)
            ->update([
                "nama" => $request["nama"]
            ]);
        return redirect()->route('genre.index')->with(['success' =>'data berhasil diubah']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $query = DB::table('genres')
        ->where('id' , $id)
        ->delete();

        return redirect() ->route('genre.index') ->with(['success' => 'data telah di hapus']);
    }
}
