<?php

namespace App\Http\Controllers;

use App\Pekerjaan;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class PekerjaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pekerjaan.index', [
            'title' => 'Pekerjaan',
            'active' => 'pekerjaan',
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
            'nama' => 'required|string'
        ]);

        Pekerjaan::create($request->all());

        return response()->json([
            'success' => true,
            'message' => 'Pekerjaan berhasil ditambahkan.'
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
        $pekerjaan = Pekerjaan::findOrFail($id);
        return $pekerjaan;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pekerjaan = Pekerjaan::findOrFail($id);
        return $pekerjaan;
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
            'nama' => 'required|string'
        ]);

        $pekerjaan = Pekerjaan::findOrFail($id);
        $pekerjaan->update($request->all());

        return response()->json([
            'success' => true,
            'message' => 'Pekerjaan berhasil di update.'
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
        Pekerjaan::destroy($id);
        return response()->json([
            'success' => true,
            'message' => 'Pekerjaan berhasil dihapus.'
        ]);
    }

    public function getData()
    {
        $pekerjaan = Pekerjaan::all()->sortByDesc('id');

        return Datatables::of($pekerjaan)
            ->addColumn('action', function ($pekerjaan) {
                return '<button onclick="editForm(' . $pekerjaan->id . ')" data-target="#modal-form" data-toggle="modal" class="text-white m-xxs btn rounded-0 btn-xs btn-warning"><i class="fa fa-pencil"></i></button>' .
                    '<a onclick="deleteData(' . $pekerjaan->id . ')" class="text-white m-xxs btn rounded-0 btn-xs btn-danger"><i class="fa fa-trash"></i></a>';
            })
            ->rawColumns(['action'])->make(true);
    }
}
