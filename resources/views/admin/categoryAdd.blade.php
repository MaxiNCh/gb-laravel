@extends('layouts.admin')
@section('title') Admin - Create category @endsection

@section('main')
  <h2>Create category</h2>
  @if ($errors->any())
    <div class="alert alert-danger">
      <ul class="mb-0">
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif
  <form method="POST" action="/admin/categories">
    @csrf
    <div class="form-group">
      <label class="fw-bolder" for="title">Title</label>
      <input type="text" class="form-control" id="title" name="title" placeholder="Title" value="{{ old('title') }}">
    </div>
    <div class="form-group">
      <label class="fw-bolder" for="description">Description</label>
      <textarea class="form-control" id="description" name="description" placeholder="Description"
        rows="3">{{ old('description') }}</textarea>
    </div>
    <div class="form-group">
      <label class="fw-bolder" for="color">Color</label>
      <input type="text" class="form-control" id="color" name="color" placeholder="Color" value="{{ old('color') }}">
    </div>
    <button type="submit" class="btn btn-primary">Save</button>
  </form>

@endsection
