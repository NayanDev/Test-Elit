<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa;
use Yajra\DataTables\DataTables;
use App\Exports\MahasiswaExport;
use App\Imports\MahasiswaImport;
use Maatwebsite\Excel\Facades\Excel;
use Barryvdh\DomPDF\Facade\Pdf;

class MhsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('mahasiswa.index', [
            'title' => 'Mahasiswa',
            'active' => 'mahasiswa',
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
            'namaMahasiswa' => 'required|string'
        ]);

        Mahasiswa::create($request->all());

        return response()->json([
            'success' => true,
            'message' => 'Mahasiswa berhasil ditambahkan.'
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
        $mhs = Mahasiswa::findOrFail($id);
        return $mhs;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mhs = Mahasiswa::findOrFail($id);
        return $mhs;
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
            'namaMahasiswa' => 'required|string'
        ]);

        $mhs = Mahasiswa::findOrFail($id);
        $mhs->update($request->all());

        return response()->json([
            'success' => true,
            'message' => 'Mahasiswa berhasil di update.'
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
        Mahasiswa::destroy($id);
        return response()->json([
            'success' => true,
            'message' => 'Mahasiswa berhasil dihapus.'
        ]);
    }

    public function getData()
    {
        $mhs = Mahasiswa::all()->sortByDesc('id');

        return Datatables::of($mhs)
            ->addColumn('action', function ($mhs) {
                return '<button onclick="editForm(' . $mhs->id . ')" data-target="#modal-form" data-toggle="modal" class="text-white m-xxs btn rounded-0 btn-xs btn-warning"><i class="fa fa-pencil"></i></button>' .
                    '<a onclick="deleteData(' . $mhs->id . ')" class="text-white m-xxs btn rounded-0 btn-xs btn-danger"><i class="fa fa-trash"></i></a>';
            })
            ->rawColumns(['action'])->make(true);
    }

    public function export()
    {
        return Excel::download(new MahasiswaExport, 'mhs.xlsx');
    }

    public function import()
    {
        Excel::import(new MahasiswaImport, request()->file('file'));
        return back();
    }

    public function print()
    {
        $mahasiswa = Mahasiswa::all();
        $pdf = PDF::loadview('mahasiswa_pdf', ['mahasiswa' => $mahasiswa]);
        return $pdf->download('laporan-mahasiswa-pdf');
    }
}
