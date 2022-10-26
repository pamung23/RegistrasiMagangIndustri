<?php

namespace App\Http\Controllers;

use App\Models\Perusahaan;
use Illuminate\Http\Request;

class PerusahaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $perusahaan = Perusahaan::latest()->paginate('5');
       
       return view ('perusahaan.index', compact('perusahaan'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('perusahaan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_perusahaan' => 'required',
            'alamat_perusahaan' => 'required',
            'email' => 'required',
            'no_perusahaan' => 'required',
            'no_telpn_contact_person' => 'required',
        ]);
        Perusahaan::create($request->all());
        return redirect()->route('perusahaan.index')
                        ->with('success','Perusahaan Sukses diTambah');
    }

    /**
     * Display the specified resource.
     *
     *
     * @param  \App\Models\Perusahaan  $perusahaan
     * @return \Illuminate\Http\Response
     */
    public function show(Perusahaan $perusahaan)
    {
        return view('perusahaan.show',compact('perusahaan'));    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Perusahaan  $perusahaan
     * @return \Illuminate\Http\Response
     */
    public function edit(Perusahaan $perusahaan)
    {
        return view('perusahaan.edit',compact('perusahaan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Perusahaan  $perusahaan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Perusahaan $perusahaan)
    {
        $request->validate([
            'nama_perusahaan' => 'required',
            'alamat_perusahaan' => 'required',
            'email' => 'required',
            'no_perusahaan' => 'required',
            'no_telpn_contact_person' => 'required',
        ]);
        $perusahaan->update($request->all());
        
        return redirect()->route('perusahaan.index')
                        ->with('success','Data Berhasil diEdit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Perusahaan  $perusahaan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Perusahaan $perusahaan)
    {
        $perusahaan->delete();
        return redirect()->route('perusahaan.index')
                        ->with('success','Perusahaan Deleted Successfully');
    }
}
