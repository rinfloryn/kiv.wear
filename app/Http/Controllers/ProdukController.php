<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProdukController extends Controller
{
    /**
     * Tampilkan semua produk (COLLECTION)
     */
    public function index()
{
    $produks = Produk::all();
    return view('produk.index', compact('produks'));
}

public function showCollection()
{
    $produks = Produk::all();
    return view('page4', compact('produks'));
}

    /**
     * Tampilkan form tambah produk
     */
    public function create()
    {
        return view('produk.create');
    }

    /**
     * Simpan data produk ke database
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
        'nama_produk' => 'required|string|max:255',
        'harga' => 'required|numeric|min:1000',
        'deskripsi' => 'nullable|string',
        // Validasi untuk gambar: harus ada, harus berupa gambar, format, dan ukuran maks 2MB
        'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', 
    ]);

    $data = $validatedData;

    // 2. Proses Upload Gambar
    if ($request->hasFile('gambar')) {
        // Simpan file ke folder 'public/produk-images'
        // store() akan otomatis memberikan nama file yang unik
        $path = $request->file('gambar')->store('public/produk-images');
        
        // Simpan path relatif ke database
        // Kita buang "public/" agar bisa diakses dari view menggunakan asset() atau Storage::url()
        $data['gambar'] = str_replace('public/', '', $path); 
    }
    
    // 3. Simpan Data Produk ke Database
    Produk::create($data); // Pastikan Model Produk sudah ada

    return redirect()->route('produk.index')->with('success', 'Produk berhasil ditambahkan.');
    }

    /**
     * Detail satu produk
     */
    public function show(Produk $produk)
    {
        return view('produk.show', compact('produk'));
    }

    /**
     * Form edit produk
     */
    public function edit(Produk $produk)
    {
        return view('produk.edit', compact('produk'));
    }

    /**
     * Update data produk
     */
    public function update(Request $request, Produk $produk)
{
    // 1. Validasi data
    $validatedData = $request->validate([
        'nama_produk' => 'required|string|max:255',
        'harga' => 'required|numeric|min:1000',
        'deskripsi' => 'nullable|string',
        // Gambar tidak wajib di sini, karena ini adalah edit
        'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', 
    ]);

    $data = $validatedData;

    // 2. Cek apakah ada file gambar baru yang diunggah
    if ($request->hasFile('gambar')) {
        
        // Hapus gambar lama (penting agar tidak menumpuk di storage)
        if ($produk->gambar) {
            Storage::disk('public')->delete($produk->gambar);
        }

        // Simpan gambar baru
        $pathWithPublic = $request->file('gambar')->store('public/produk-images');
        
        // Simpan path yang bersih ke database
        $data['gambar'] = str_replace('public/', '', $pathWithPublic); 
    }

    // 3. Update data produk
    $produk->update($data);

    return redirect()->route('produk.index')->with('success', 'Produk berhasil diperbarui.');
}

    /**
     * Hapus produk
     */
    public function destroy(Produk $produk)
    {
        $produk->delete();

        return redirect()->route('produk.index')
                         ->with('success', 'Produk berhasil dihapus');
    }
}
