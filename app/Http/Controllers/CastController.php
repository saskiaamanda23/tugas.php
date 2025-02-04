<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class CastController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $casts = DB::table('cast')->get();
        return view('cast.index', compact('cast'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('cast.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate ([
            'Nama' => 'required|min:4',
            'Umur' => 'required|min:2',
            'Bio' => 'required|string',
        ]);

        $query = DB::table('cast')->insert([
            "Nama" => $request['Nama'],
            'Umur' => $request['Umur'],
            'Bio' => $request['Bio'],
        ]);
        return redirect()->route('cast.index')->with(['success' =>'Data Telah Disimpan']);

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
        $casts = DB::table('cast')->where('id',$id)->first();
        return view('cast.update', compact('cast'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'Nama' => 'required|min:4',
            'Umur' => 'required',
            'Bio' => 'required',
        ]);

        $query = DB::table('cast')->where('id',$id)->update([
             'Nama' => $request['Nama'],
             'Umur' => $request['Umur'],
             'Bio' => $request['Bio'],
        ]);

        return redirect()->route('cast.index')->with(['success' => 'Data telah berhasil diubah']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $query = DB::table('cast')->where('id',$id)->delete();
        return redirect()->route('cast.index')->with(['success' =>'Data telah dihapus']);
    }
}