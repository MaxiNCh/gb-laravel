@extends('layouts.admin')
@section('title')
  Admin - Categories
@endsection

@section('main')
  <div class="d-flex justify-content-between align-items-center">
    <h2>Categories</h2>
    <a href="{{ route('admin.categories.create') }}" class="btn btn-success">Create new</a>
  </div>
  <div class="table-responsive">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Title</th>
          <th scope="col">Description</th>
          <th scope="col">Date</th>
          <th scope="col">Actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($categories as $category)
          <tr>
            <td>{{ $category->id }}</td>
            <td>{{ $category->title }}</td>
            <td>{{ $category->description }} </td>
            <td>{{ $category->created_at }} </td>
            <td>
              <a href="{{ route('admin.categories.edit', ['category' => $category]) }}" class="link-primary">Edit</a>
              &nbsp;|&nbsp;
              <a href="#" class="link-danger">Delete</a>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>


@endsection
