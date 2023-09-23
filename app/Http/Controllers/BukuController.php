<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data_buku = Buku::all();
        $jumlahData = Buku::count(); // Mendapatkan jumlah data
        $totalHarga = Buku::sum('harga');

        return view('buku.index', compact('data_buku', 'jumlahData','totalHarga'));

        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(){
        return view('buku.create');
    }
    public function store(Request $request){
        Buku::create([
            'judul' => $request->judul,
            'penulis' => $request->penulis,
            'harga' => $request->harga,
            'tgl_terbit' => $request->tgl_terbit,
        ]);
        return redirect('/buku');
    }

    //edit
    public function edit($id){
        $data_buku= Buku::find($id);
        return view('buku.edit', compact('data_buku'));
    }
    //update
    public function update(Request $request, string $id){
        $data_buku = Buku::find($id);
        $data_buku->update([
            'judul' => $request->nama,
            'penulis' => $request->penulis,
            'harga' => $request->harga,
            'tgl/terbit' => $request->tgl_terbit,
        ]);
        return redirect('/buku');
    }
    //destroy
    public function destroy($id){
        $data_buku = Buku::find($id);
        $data_buku->delete();
        return redirect('/buku');
    }

    /**
     * Store a newly created resource in storage.
     */
    

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


    /**
     * Update the specified resource in storage.
     */
    

    /**
     * Remove the specified resource from storage.
     */
    
}
