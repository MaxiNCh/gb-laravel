@extends('layouts.admin')
@section('title')
  Admin - News
@endsection

@section('main')

  <div class="d-flex justify-content-between align-items-center">
    <h2>News</h2>
    <a href="{{ route('admin.news.create') }}" class="btn btn-success">Create new</a>
  </div>
  <div class="table-responsive">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">Category</th>
          <th scope="col">Title</th>
          <th scope="col">Description</th>
          <th scope="col">Author</th>
          <th scope="col">Date</th>
          <th scope="col">Actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($newsList as $news)
          <tr>
            <td>{{ $news->category->title }} </td>
            <td>{{ $news->title }}</td>
            <td>{{ $news->description }}</td>
            <td>{{ $news->author }}</td>
            <td>{{ $news->created_at }}</td>
            <td>
              <a href="{{ route('admin.news.edit', ['news' => $news]) }}" class="link-primary">Edit</a>
              &nbsp;|&nbsp;
              <a href="#" class="link-danger">Delete</a>
            </td>
          </tr>
        @endforeach

      </tbody>
    </table>
  </div>


@endsection
