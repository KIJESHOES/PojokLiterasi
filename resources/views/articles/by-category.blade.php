@extends('layouts.app')

@section('title', $categoryName . ' - BPOM Bogor')

@section('content')
    <!-- Start Breadcrumb -->
    <div class="breadcrumb-area shadow dark bg-fixed text-center padding-xl text-light"
        style="background-image: url({{ asset('assets/img/banner/1.jpg') }})">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 mt-5">
                    <h1>{{ $categoryName }}</h1>
                    <ul class="breadcrumb">
                        <li><a href="{{ url('/') }}">Beranda</a></li>
                        @if (isset($categoryName) && $categoryName != '')
                            <li class="active">{{ $categoryName }}</li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Articles List -->
    <div class="blog-area full-width bg-white default-padding">
        <div class="container">
            <div class="row">
                @forelse ($articles as $article)
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="single-blog-item">
                            <div class="info mt-3">
                                <h4>
                                    <a href="{{ route('articles.detail', $article->slug) }}">
                                        {{ Str::limit($article->title, 50) }}
                                    </a>
                                </h4>
                                <div class="meta mb-2">
                                    <small>
                                        <i class="fas fa-calendar-alt"></i> {{ $article->created_at->format('d M Y') }}
                                        &nbsp;|&nbsp;
                                        <i class="fas fa-user"></i> {{ $article->author }}
                                    </small>
                                </div>
                                <p>{{ Str::limit(strip_tags($article->content), 100) }}</p>
                                <a href="{{ route('articles.detail', $article->slug) }}" class="btn btn-sm btn-theme mt-2">
                                    Baca Selengkapnya
                                </a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12 text-center">
                        <p>Tidak ada artikel untuk kategori ini.</p>
                    </div>
                @endforelse
            </div>

            <div class="col-lg-12 col-md-12 pagi-area d-flex justify-content-between align-items-center">
                {{-- Teks info hasil --}}
                <div class="pagination-info">
                    Showing {{ $articles->firstItem() }} to {{ $articles->lastItem() }} of
                    {{ $articles->total() }} results
                </div>

                {{-- Pagination --}}
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        {{-- Previous --}}
                        <li class="page-item {{ $articles->onFirstPage() ? 'disabled' : '' }}">
                            <a class="page-link" href="{{ $articles->previousPageUrl() }}">Previous</a>
                        </li>

                        {{-- Number Pages --}}
                        @foreach ($articles->getUrlRange(1, $articles->lastPage()) as $page => $url)
                            <li class="page-item {{ $page == $articles->currentPage() ? 'active' : '' }}">
                                <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                            </li>
                        @endforeach

                        {{-- Next --}}
                        <li class="page-item {{ !$articles->hasMorePages() ? 'disabled' : '' }}">
                            <a class="page-link" href="{{ $articles->nextPageUrl() }}">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
@endsection
