@extends('layouts.app', ['categories' => $categories])

@section('main')
  <div class="row mb-2">
    @foreach ($newsList as $news)
      <div class="col-md-6">
        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-300 position-relative">
          <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-primary">{{ $news->category->title }}</strong>
            <h3 class="mb-0">{{ $news->title }}</h3>
            <div class="mb-1 text-muted">{{ $news->created_at->format('F j') }}</div>
            <p class="card-text mb-auto">{!! $news->description !!}</p>
            <a href="#" class="stretched-link">Continue reading</a>
          </div>
          <div class="col-auto d-none d-lg-block">
            @if ($news->image)
              <div class="d-flex align-items-center"
                style="width: 200px; height: 300px; background-color: #55595c; border: 1px solid #55595c">
                <img src="{{ Storage::disk('public')->url($news->image) }}" alt="Image" class="w-100">
              </div>
            @else
              <svg class="bd-placeholder-img" width="200" height="300" xmlns="http://www.w3.org/2000/svg" role="img"
                aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef"
                  dy=".3em">Thumbnail</text>
              </svg>
            @endif
          </div>
        </div>
      </div>
    @endforeach
    {{ $newsList->links() }}
  </div>
@endsection
