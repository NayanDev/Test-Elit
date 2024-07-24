<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Alumni;
use App\Mahasiswa;
use App\Pekerjaan;
use Yajra\DataTables\DataTables;

class AlumniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('alumni.index', [
            'title' => 'Alumni',
            'active' => 'alumni',
            'mahasiswa' => Mahasiswa::get(),
            'pekerjaan' => Pekerjaan::get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'mahasiswa_id' => 'required',
            'pekerjaan_id' => 'required',
            // 'file' => 'min:1024',
        ]);

        Alumni::create($request->all());

        return response()->json([
            'success' => true,
            'message' => 'Alumni berhasil ditambahkan.'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $alumni = Alumni::findOrFail($id);
        return $alumni;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $alumni = Alumni::findOrFail($id);
        return $alumni;
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
        $this->validate($request, [
            'mahasiswa_id' => 'required',
            'pekerjaan_id' => 'required',
        ]);

        $alumni = Alumni::findOrFail($id);
        $alumni->update($request->all());

        return response()->json([
            'success' => true,
            'message' => 'Alumni berhasil di update.'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Alumni::destroy($id);
        return response()->json([
            'success' => true,
            'message' => 'Alumni berhasil dihapus.'
        ]);
    }

    public function getData()
    {
        $alumni = Alumni::all()->sortByDesc('id');

        return Datatables::of($alumni)
            ->addColumn('action', function ($alumni) {
                return '<button onclick="editForm(' . $alumni->id . ')" data-target="#modal-form" data-toggle="modal" class="text-white m-xxs btn rounded-0 btn-xs btn-warning"><i class="fa fa-pencil"></i></button>' .
                    '<a onclick="deleteData(' . $alumni->id . ')" class="text-white m-xxs btn rounded-0 btn-xs btn-danger"><i class="fa fa-trash"></i></a>';
            })
            ->addColumn('nama', function ($alumni) {
                return $alumni->mahasiswa->namaMahasiswa;
            })
            ->addColumn('foto', function ($alumni) {
                return $alumni->foto;
            })
            ->addColumn('pekerjaan', function ($alumni) {
                return $alumni->pekerjaan->nama;
            })
            ->addColumn('judulskripsi', function ($alumni) {
                return $alumni->mahasiswa->judulskripsiMahasiswa;
            })
            ->rawColumns(['mahasiswa', 'supplier', 'action'])->make(true);
    }
}
