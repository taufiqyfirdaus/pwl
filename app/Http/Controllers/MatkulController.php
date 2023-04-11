<?php

namespace App\Http\Controllers;

use App\Models\MatkulModel;
use Illuminate\Http\Request;

class MatkulController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mkl = MatkulModel::all();
        return view('matkul.matkul')
        ->with('mkl', $mkl);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('matkul.create_matkul')
            ->with('url_form', url('/matkul'));
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
            'nama_matkul' => 'required|string|max:50',
            'nama_dosen' => 'required|string|max:50',
            'prodi' => 'required|string|max:50',
            'jurusan' => 'required|string|max:50',
        ]);
        $data = MatkulModel::create($request->except(['_token']));
        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect('matkul')
            ->with('success', 'Matkul Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Matkul  $matkul
     * @return \Illuminate\Http\Response
     */
    public function show(MatkulModel $matkul)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Matkul  $matkul
     * @return \Illuminate\Http\Response
     */
    public function edit($id_matkul)
    {
        $matkul = MatkulModel::find($id_matkul);
        return view('matkul.create_matkul')
                    ->with('mkl', $matkul)
                    ->with('url_form', url('/matkul/'. $id_matkul));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Matkul  $matkul
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_matkul)
    {
        $request->validate([
            'nama_matkul' => 'required|string|max:50'.$id_matkul,
            'nama_dosen' => 'required|string|max:50',
            'prodi' => 'required|string|max:50',
            'jurusan' => 'required|string|max:50',
        ]);
        $data = MatkulModel::where('id_matkul', '=', $id_matkul)->update($request->except(['_token', '_method']));
        return redirect('matkul')
            ->with('success', 'Matkul Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Matkul  $matkul
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_matkul)
    {
        MatkulModel::where('id_matkul', '=', $id_matkul)->delete();
        return redirect('matkul')
        ->with('success', 'Matkul Berhasil Dihapus');
    }
}
