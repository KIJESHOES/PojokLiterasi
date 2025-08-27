<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Rating;

class RatingController extends Controller
{
    // RatingController.php
    public function store(Request $request, Article $article)
    {
        $request->validate([
            'rating' => 'required|integer|min:1|max:5',
        ]);

        $ip = $request->ip();

        $article->ratings()->create([
            'rating'     => $request->rating,
            'ip_address' => $ip,
        ]);

        // Simpan ke session biar gak bisa rating lagi
        $rated = session('rated_articles', []);
        $rated[] = $article->id;
        session(['rated_articles' => $rated]);

        return back()->with('success', 'Terima kasih sudah memberi rating!');
    }

}
