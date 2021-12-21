<?php

namespace App\Http\Controllers;

use App\Exports\PegawaiExport;
use App\Imports\PegawaiImport;
use App\Pegawai;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function pegawaiexport()
    {
        return Excel::download(new PegawaiExport, 'pegawai.xlsx');
    }
    public function pegawaiimportexcel(Request $request)
    {
        $file = $request->file('file');
        $namaFile = $file->getClientOriginalName();
        $file->move('DataPegawai', $namaFile);
        Excel::import(new PegawaiImport, public_path('/DataPegawai/' . $namaFile));
        return redirect('blog');
    }
    public function index()
    {
        $pegawai = Pegawai::all();
        return view('blog.blog', compact('pegawai'));
    }
    public function tambahpegawai()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blog.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Pegawai::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'tgllhr' => $request->tgllhr,
            'telp' => $request->telp

        ]);
        return redirect('blog');
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
}
