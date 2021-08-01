@extends('layouts.admin')
@section('title') Admin - Create news @endsection

@section('main')
  <h2>Create news</h2>
  @if ($errors->any())
    <div class="alert alert-danger">
      <ul class="mb-0">
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif
  @isset($message)
    <div class="alert alert-success">{{ $message }}</div>
  @endisset
  <form method="POST" action="/admin/news" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label class="fw-bolder" for="category">Category</label>
      <select class="form-control" id="category" name="category_id">
        <option></option>
        @foreach ($categories as $category)
          <option value="{{ $category->id }}" @if (old('category_id') === $category->id) selected @endif>
            {{ $category->title }}
          </option>
        @endforeach
      </select>
    </div>
    <div class="form-group">
      <label class="fw-bolder" for="title">Title</label>
      <input type="text" class="form-control" id="title" name="title" placeholder="Title" value="{{ old('title') }}">
    </div>
    <div class="form-group">
      <label class="fw-bolder" for="author">Author</label>
      <input type="text" class="form-control" id="author" name="author" placeholder="Author"
        value="{{ old('author') }}">
    </div>
    <div class="form-group">
      <label class="fw-bolder" for="description">Description</label>
      <textarea class="form-control" id="description" name="description" placeholder="Description"
        rows="3">{{ old('description') }}</textarea>
    </div>
    <div class="form-group">
      <label class="fw-bolder" for="formFile">News image</label>
      <input class="form-control" type="file" id="formFile" name="image">
    </div>
    <div class="form-group">
      <label class="fw-bolder" for="status">Status</label>
      <select class="form-control" id="status" name="status">
        <option @if (old('status') === 'DRAFT') selected @endif>
          DRAFT
        </option>
        <option @if (old('status') === 'PUBLISHED') selected @endif>
          PUBLISHED
        </option>
        <option @if (old('status') === 'BLOCKED') selected @endif>
          BLOCKED
        </option>
      </select>
    </div>
    <button type="submit" class="btn btn-primary">Save</button>
  </form>

  <a href="{{ route('admin.storeRss') }}" class="btn btn-dark mt-3">Save from RSS</a>

@endsection

@push('js')
  <script type="text/javascript" src="/assets/js/editorInit.js"></script>
@endpush
