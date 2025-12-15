<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    // READ: list users
    public function index()
    {
        $users = User::paginate(10);
        return view('users.index', compact('users'));
    }

    // CREATE: form tambah user
    public function create()
    {
        return view('users.create');
    }

    // STORE: simpan data user baru
    public function store(Request $request)
    {
        $request->validate([
            'name'     => 'required',
            'email'    => 'required|email|unique:users',
            'password' => 'required|min:5',
        ]);

        User::create([
            'name'  => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        return redirect()->route('users.index')->with('success', 'User berhasil ditambahkan!');
    }

    // EDIT: form edit user
    public function edit(Produk $produk)
{
    return view('produk.edit', compact('produk'));
}


    // UPDATE: simpan perubahaan user
    
public function update(Request $request, Produk $produk)
{
    $request->validate([
        'nama_produk' => 'required|string|max:255',
        'harga'       => 'required|numeric',
        'deskripsi'   => 'nullable|string',
    ]);

    $produk->update([
        'nama_produk' => $request->nama_produk,
        'harga'       => $request->harga,
        'deskripsi'   => $request->deskripsi,
    ]);

    return redirect()
        ->route('produk.index')
        ->with('success', 'Produk berhasil diperbarui!');
}
    // DELETE: hapus user
    public function destroy($id)
    {
        User::findOrFail($id)->delete();
        return redirect()->route('users.index')->with('success', 'User berhasil dihapus!');
    }
}
