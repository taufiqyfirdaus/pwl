<?php

namespace App\Http\Controllers;

use App\Models\KeluargaModel;
use Illuminate\Http\Request;
 
class KeluargaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $klg = KeluargaModel::all();
        return view('keluarga.keluarga')
        ->with('klg', $klg);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('keluarga.create_keluarga')
            ->with('url_form', url('/keluarga'));
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
            'nama' => 'required|string|max:50',
            'nama_ayah' => 'required|string|max:50',
            'telp_ayah' => 'required|string|max:12',
            'nama_ibu' => 'required|string|max:50',
            'telp_ibu' => 'required|string|max:12',
        ]);
        $data = KeluargaModel::create($request->except(['_token']));
        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect('keluarga')
            ->with('success', 'Keluarga Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Keluarga  $keluarga
     * @return \Illuminate\Http\Response
     */
    public function show(KeluargaModel $keluarga)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Keluarga  $keluarga
     * @return \Illuminate\Http\Response
     */
    public function edit($id_keluarga)
    {
        $keluarga = KeluargaModel::find($id_keluarga);
        return view('keluarga.create_keluarga')
                    ->with('klg', $keluarga)
                    ->with('url_form', url('/keluarga/'. $id_keluarga));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Keluarga  $keluarga
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_keluarga)
    {
        $request->validate([
            'nama' => 'required|string|max:50'.$id_keluarga,
            'nama_ayah' => 'required|string|max:50',
            'telp_ayah' => 'required|string|max:12',
            'nama_ibu' => 'required|string|max:50',
            'telp_ibu' => 'required|string|max:12',
        ]);
        $data = KeluargaModel::where('id_keluarga', '=', $id_keluarga)->update($request->except(['_token', '_method']));
        return redirect('keluarga')
            ->with('success', 'Keluarga Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Keluarga  $keluarga
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_keluarga)
    {
        KeluargaModel::where('id_keluarga', '=', $id_keluarga)->delete();
        return redirect('keluarga')
        ->with('success', 'Keluarga Berhasil Dihapus');
    }
}