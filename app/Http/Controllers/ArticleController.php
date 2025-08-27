<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Visit;
use Illuminate\Http\Request;
class ArticleController extends Controller
{
    public function byCategory($categoryName)
    {
        $articles = Article::whereHas('category', function ($query) use ($categoryName) {
            $query->where('name', $categoryName);
        })->paginate(6);

        return view('articles.by-category', [
            'articles' => $articles,
            'categoryName' => $categoryName
        ]);
    }

    public function show(string $slug)
    {
        $article = Article::with('category')->where('slug', $slug)->firstOrFail();

        $totalVisitors = Visit::count();

        $articleVisitors = Visit::where('page_type', 'article')
            ->where('page_id', $article->id)
            ->count();

        $ip = request()->ip();
        $alreadyVisited = Visit::where('page_type', 'article')
            ->where('page_id', $article->id)
            ->where('ip_address', $ip)
            ->where('created_at', '>=', now()->subHours(1))
            ->exists();

        if (!$alreadyVisited) {
            Visit::create([
                'page_type' => 'article',
                'page_id' => $article->id,
                'ip_address' => $ip,
            ]);
        }

        return view('articles.detail', compact('article'));
    }

    public function search(Request $request)
    {
        $keyword = $request->keyword;
        $categoryName = $request->category; // diambil dari form hidden input

        $articles = Article::whereHas('category', function ($query) use ($categoryName) {
            if ($categoryName) {
                $query->where('name', $categoryName);
            }
        })
            ->where(function ($query) use ($keyword) {
                $query->where('title', 'like', "%{$keyword}%")
                    ->orWhere('content', 'like', "%{$keyword}%");
            })
            ->paginate(6);

        return view('articles.by-category', compact('articles', 'categoryName', 'keyword'));
    }
}