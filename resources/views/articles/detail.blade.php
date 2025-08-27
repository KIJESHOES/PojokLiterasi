@extends('layouts.app')

@section('title', $article->title . ' - BPOM Bogor')

@section('content')

    @php
        function getDrivePreviewUrl($url)
        {
            if (preg_match('/\/file\/d\/([^\/]+)\//', $url, $matches)) {
                return 'https://drive.google.com/file/d/' . $matches[1] . '/preview';
            }
            return null;
        }

        $drivePreview = $article->link ? getDrivePreviewUrl($article->link) : null;
        $articleVisitors = \App\Models\Visit::where('page_type', 'article')
            ->where('page_id', $article->id)
            ->count();

        // Cek apakah user sudah pernah rating di session
        $hasRated = in_array($article->id, session('rated_articles', []));
        $average  = $article->ratings()->avg('rating');
    @endphp

    <!-- Start Breadcrumb -->
    <div class="breadcrumb-area shadow dark bg-fixed text-center padding-xl text-light"
        style="background-image: url({{ asset('assets/img/banner/1.jpg') }})">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 mt-5">
                    <h1>{{ $article->title }}</h1>
                    <ul class="breadcrumb">
                        <li><a href="{{ url('/') }}">Beranda</a></li>
                        <li>
                            <a href="{{ route('articles.byCategory', $article->category->name) }}">
                                {{ $article->category->name }}
                            </a>
                        </li>
                        <li class="active">{{ Str::limit($article->title, 30) }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Article Detail -->
    <div class="blog-area full-width bg-white default-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="single-blog-item">
                        <div class="info">
                            <!-- Meta -->
                            <div class="meta mb-3">
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <i class="fas fa-calendar-alt"></i> {{ $article->created_at->format('d M Y') }}
                                    </li>
                                    <li class="list-inline-item">
                                        <i class="fas fa-user"></i> {{ $article->author }}
                                    </li>
                                    <li class="list-inline-item">
                                        <i class="fas fa-book"></i> {{ $article->category->name ?? 'Tanpa Kategori' }}
                                    </li>
                                    <li class="list-inline-item">
                                        <i class="fas fa-eye"></i> Dilihat {{ $articleVisitors }} kali
                                    </li>
                                </ul>
                            </div>

                            <!-- Title -->
                            <h2>{{ $article->title }}</h2>

                            @if ($article->pdf)
                                <iframe
                                    src="{{ asset('storage/' . $article->pdf) }}"
                                    width="100%"
                                    height="600px">
                                </iframe>
                            @endif

                            {{-- ==================== RATING ==================== --}}
                            <div class="mt-6">
                                <h4 class="font-bold text-lg">Beri Rating PDF ini:</h4>

                                @if(!$hasRated)
                                    <form action="{{ route('articles.rating', $article->id) }}" method="POST">
                                        @csrf
                                        <div class="rating-wrap mt-2">
                                            @for ($i = 1; $i <= 5; $i++)
                                                <button
                                                    type="submit"
                                                    name="rating"
                                                    value="{{ $i }}"
                                                    data-value="{{ $i }}"
                                                    class="rating-star"
                                                    aria-label="Beri {{ $i }} bintang"
                                                >★</button>
                                            @endfor
                                        </div>
                                    </form>
                                @else
                                    <p class="text-green-600 mt-2">✅ Kamu sudah memberi rating untuk artikel ini.</p>
                                @endif

                                @if($average)
                                    <div class="flex items-center mt-2 text-lg">
                                        <span class="text-yellow-500 text-2xl">★</span>
                                        <span class="ml-2 text-gray-700">Rata-rata rating: {{ number_format($average, 1) }}/5</span>
                                    </div>
                                @endif
                            </div>

                            <style>
                                /* --- Rating styles --- */
                                .rating-wrap {
                                    display: inline-flex;
                                    gap: .25rem;
                                    direction: ltr;     /* kiri ke kanan */
                                    user-select: none;
                                }
                                .rating-star {
                                    background: none;
                                    border: none;
                                    cursor: pointer;
                                    font-size: 2rem;
                                    line-height: 1;
                                    padding: 0;
                                    color: #d1d5db;     /* abu */
                                    transition: color .15s ease-in-out, transform .05s ease-in-out;
                                }
                                .rating-star:focus { outline: none; }
                                .rating-star.active { color: #facc15; } /* kuning */
                                .rating-star:hover { transform: scale(1.05); }
                            </style>

                            <script>
                                // Hover highlight kiri ➜ kanan
                                document.addEventListener('DOMContentLoaded', function () {
                                    const wrap  = document.querySelector('.rating-wrap');
                                    if (!wrap) return;

                                    const stars = Array.from(wrap.querySelectorAll('.rating-star'));
                                    const reset = () => stars.forEach(s => s.classList.remove('active'));

                                    stars.forEach(star => {
                                        star.addEventListener('mouseenter', () => {
                                            const val = parseInt(star.dataset.value, 10);
                                            reset();
                                            stars.forEach(s => {
                                                if (parseInt(s.dataset.value, 10) <= val) s.classList.add('active');
                                            });
                                        });
                                    });

                                    // reset kalau mouse keluar area
                                    wrap.addEventListener('mouseleave', reset);
                                });
                            </script>
                            {{-- ==================== END RATING ==================== --}}

                            <!-- Content -->
                            <p class="mt-3">{!! nl2br(e($article->content)) !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
