<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kamar;

class KamarsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kamars = kamar::all();

        return view('Kamar.index', compact('kamars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Kamar $kamars)
    {
        
        return view('Kamar.create', compact('kamars'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       kamar::create($this->validaterequest());
       return redirect('Kamar');
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
    public function edit(Kamar $kamars)
    {
        
        return view('Kamar.edit', compact('kamars'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Kamar $kamars)
    {
        $kamars->update($this->validaterequest());
        return redirect('Kamar');
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

    private function validaterequest()
    {
        return request()->validate([
            "Nomor_Kamar"=>'required',
            "Kapasitas"=>'required',
            "Harga_Per_Bulan"=>'required',
            "Status"=>'required',
        ]);
    }
}
