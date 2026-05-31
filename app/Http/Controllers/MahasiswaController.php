<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = Mahasiswa::all();

        return view('mahasiswa.index', compact('mahasiswa'));
    }

    public function create()
    {
        return view('mahasiswa.create');
    }

    public function store(Request $request)
    {
        Mahasiswa::create([
            'npm'  => $request->npm,
            'nidn' => $request->nidn,
            'nama' => $request->nama
        ]);

        return redirect('/mahasiswa');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $npm)
    {
        $mahasiswa = Mahasiswa::findOrFail($npm);

        return view('mahasiswa.edit', compact('mahasiswa'));
    }

    public function update(Request $request, string $npm)
    {
        $mahasiswa = Mahasiswa::findOrFail($npm);

        $mahasiswa->update([
            'nidn' => $request->nidn,
            'nama' => $request->nama
        ]);

        return redirect('/mahasiswa');
    }

    public function destroy(string $npm)
    {
        Mahasiswa::destroy($npm);

        return redirect('/mahasiswa');
    }
}