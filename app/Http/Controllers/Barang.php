<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use App\Models\barangdb;
use App\Models\satuan;

class Barang extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pageTitle = 'List Barang';
        $listbarangdb = barangdb::all();

        return view('list', [
            'pageTitle' => $pageTitle,
            'listbarangdb' => $listbarangdb,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pageTitle = 'Tambah barang';
        $satuans = satuan::all();

        return view('tambah', [
            'pageTitle' => $pageTitle,
            'satuans' => $satuans,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $messages = [
            'required' => ':Attribute harus diisi.',
            'numeric' => 'Isi :attribute dengan angka'
        ];

        $validator = Validator::make($request->all(), [
            'kode' => 'required',
            'nama' => 'required',
            'des' => 'required',
            'harga' => 'required|numeric',
            'stok' => 'required|numeric',
        ], $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $barangdb = New barangdb;
        $barangdb->kode_barang = $request->kode;
        $barangdb->name_barang = $request->nama;
        $barangdb->deskripsi = $request->des;
        $barangdb->stok = $request->stok;
        $barangdb->harga = $request->harga;
        $barangdb->satuan_id = $request->satuan;
        $barangdb->save();

        return redirect()->route('barang.index');
    }

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
    public function edit(string $id)
    {
        $pageTitle = 'Edit';

        //$positions = DB::table('positions')->get();

        //$employee = DB::table('employees')
            //->select('employees.*', 'employees.id as employee_id', 'positions.name as position_name')
            //->leftJoin('positions', 'employees.position_id', '=', 'positions.id')
            //->where('employees.id', $id)
            //->first();

        $satuans = satuan::all();
        $listbarangdb = barangdb::find($id);

        return view('edit', [
            'pageTitle' => $pageTitle,
            'satuans' => $satuans,
            'listbarangdb' => $listbarangdb
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $messages = [
            'required' => ':Attribute harus diisi.',
            'numeric' => 'Isi :attribute dengan angka'
        ];

        $validator = Validator::make($request->all(), [
            'kode' => 'required',
            'nama' => 'required',
            'des' => 'required',
            'harga' => 'required|numeric',
            'stok' => 'required|numeric',
        ], $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $barangdb = barangdb::find($id);
        $barangdb->kode_barang = $request->kode;
        $barangdb->name_barang = $request->nama;
        $barangdb->deskripsi = $request->des;
        $barangdb->stok = $request->stok;
        $barangdb->harga = $request->harga;
        $barangdb->satuan_id = $request->satuan;
        $barangdb->save();

        return redirect()->route('barang.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        barangdb::find($id)->delete();
        return redirect()->route('barang.index');
    }
}
