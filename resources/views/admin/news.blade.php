@extends('layouts.admin')

@section('main')

  <h2>News</h2>
  <div class="table-responsive">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Title</th>
          <th scope="col">Description</th>
          <th scope="col">Author</th>
          <th scope="col">Date</th>
          <th scope="col">Actions</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1,001</td>
          <td>random</td>
          <td>data</td>
          <td>MZ</td>
          <td>placeholder</td>
          <td>
            <a href="#" class="link-primary">Edit</a>
            &nbsp;|&nbsp;
            <a href="#" class="link-danger">Delete</a>
          </td>
        </tr>
      </tbody>
    </table>
  </div>


@endsection
