<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tamu;
use App\Models\Kategori;

class TamuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Tamu::all();
        return view("dashboard.index", compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = Kategori::all();
        return view("dashboard.create",compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $message=[
            'required'=>':attribute harus di isi dulu',
            'min' => ':attribute minimal :min karakter',
            'max' => ':attribute maksimal :max karakter',
            'numeric' => ':attribute harus di isi angka',
            'mimes' => 'nama file harus jpg,jpeg,png,gif,svg'
        ];

        $this->validate($request, [
            'nama_tamu'=>'required',
            'id_kategori'=>'required',
            'alamat'=>'required',
            'no_tlpn'=>'required',
            'tanggal'=>'required',  
            'tujuan'=> 'required',
            'jam_kedatangan'=> 'required',  
        ],$message);

         //proses insert database
         Tamu::create([
            'nama_tamu'=>$request->nama_tamu,
            'id_kategori'=>$request->id_kategori,
            'alamat'=>$request->alamat,
            'no_tlpn'=>$request->no_tlpn,
            'tanggal'=>$request->tanggal,
            'tujuan'=>$request->tujuan,
            'jam_kedatangan'=>$request->jam_kedatangan,
        ]);

        return redirect ('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function hapus($id)
    {
        Tamu::find($id)->delete();
        return redirect('/');
    }
}
