<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datasiswa = User::where('role', 'siswa')->get();
        return view('index', compact('datasiswa'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('form_tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        User::create([
            'name' => $request->inputName,
            'nim' => $request->inputNim,
            'email' => $request->inputEmail,
        ]);

        return redirect()->route('siswa.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $datasiswa = User::where('id', $id)->first();
        return view('profil_siswa', compact('datasiswa'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $datasiswa = User::where('id', $id)->first();
        return view('form_ubah', compact('datasiswa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $siswa = User::find($id);
        $siswa->name = $request->inputName;
        $siswa->nim = $request->inputNim;
        $siswa->email = $request->inputEmail;
        $siswa->save();
        return redirect()->route('siswa.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $siswa = User::find($id);
        $siswa->delete();

        return redirect()->route('siswa.index');    
    }
}
