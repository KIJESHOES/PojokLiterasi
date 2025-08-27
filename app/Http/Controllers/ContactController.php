<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'name'     => 'required|string|max:255',
            'email'    => 'required|email|max:255',
            'phone'    => 'nullable|string|max:20',
            'comments' => 'required|string',
        ]);

        // Simpan ke database
        Contact::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'phone'    => $request->phone,
            'comments' => $request->comments,
        ]);

        // Redirect balik ke halaman kontak dengan pesan sukses
        return redirect()->route('kontak.kami')->with('success', 'Pesan Anda berhasil dikirim!');
    }
}
