@extends('layouts.admin')
@section('title') Admin - Edit news @endsection

@section('main')
  <h2>Edit news</h2>
  @if ($errors->any())
    <div class="alert alert-danger">
      <ul class="mb-0">
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif
  <form method="POST" action="/admin/news/{{ $news->id }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group">
      <label class="fw-bolder" for="category">Category</label>
      <select class="form-control" id="category" name="category_id">
        @foreach ($categories as $category)
          <option value="{{ $category->id }}" @if ($news->category_id === $category->id) selected @endif>
            {{ $category->title }}
          </option>
        @endforeach
      </select>
    </div>
    <div class="form-group">
      <label class="fw-bolder" for="title">Title</label>
      <input type="text" class="form-control" id="title" name="title" placeholder="Title" value="{{ $news->title }}">
    </div>
    <div class="form-group">
      <label class="fw-bolder" for="author">Author</label>
      <input type="text" class="form-control" id="author" name="author" placeholder="Author"
        value="{{ $news->author }}">
    </div>
    <div class="form-group">
      <label class="fw-bolder" for="description">Description</label>
      <textarea class="form-control" id="description" name="description" placeholder="Description"
        rows="3">{{ $news->description }}</textarea>
    </div>
    <div class="form-group">
      <label class="fw-bolder" for="formFile">News image</label>
      <input class="form-control" type="file" id="formFile" name="image">
    </div>
    <div class="form-group">
      <label class="fw-bolder" for="status">Status</label>
      <select class="form-control" id="status" name="status">
        <option @if ($news->status === 'DRAFT') selected @endif>
          DRAFT
        </option>
        <option @if ($news->status === 'PUBLISHED') selected @endif>
          PUBLISHED
        </option>
        <option @if ($news->status === 'BLOCKED') selected @endif>
          BLOCKED
        </option>
      </select>
    </div>
    <button type="submit" class="btn btn-primary">Save</button>
  </form>

@endsection

@push('js')
  <script type="text/javascript" src="/assets/js/editorInit.js"></script>
@endpush
