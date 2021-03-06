@extends('layouts.admin')
@section('title') Admin - Edit category @endsection

@section('main')
  <h2>Edit category</h2>
  @if ($errors->any())
    <div class="alert alert-danger">
      <ul class="mb-0">
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif
  <form method="POST" action="/admin/categories/{{ $category->id }}">
    @csrf
    @method('PUT')
    <div class="form-group">
      <label class="fw-bolder" for="title">Title</label>
      <input type="text" class="form-control" id="title" name="title" placeholder="Title"
        value="{{ $category->title }}">
    </div>
    <div class="form-group">
      <label class="fw-bolder" for="description">Description</label>
      <textarea class="form-control" id="description" name="description" placeholder="Description"
        rows="3">{{ $category->description }}</textarea>
    </div>
    <div class="form-group">
      <label class="fw-bolder" for="color">Color</label>
      <input type="text" class="form-control" id="color" name="color" placeholder="Color"
        value="{{ $category->color }}">
    </div>
    <button type="submit" class="btn btn-primary">Save</button>
  </form>

@endsection
