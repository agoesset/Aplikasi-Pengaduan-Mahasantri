<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PengaduanController extends Controller
{
    public function dashboard()
    {
        return view('dashboard');
    }
    public function index()
    {
        $data = Pengaduan::all();
        return view('pengaduan.index', compact('data'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        $show = Pengaduan::findOrFail($id);

        return view('pengaduan.show', compact('show'));
    }

    public function edit(Pengaduan $pengaduan)
    {
        //
    }

    public function update(Request $request, Pengaduan $pengaduan)
    {
        //
    }

    public function destroy(Pengaduan $pengaduan)
    {
        //
    }
}
