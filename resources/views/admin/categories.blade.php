@extends('layouts.admin')

@section('main')

  <h2>Categories</h2>
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
        <tr>
          <td>1,001</td>
          <td>random</td>
          <td>data</td>
          <td>placeholder</td>
          <td>
            <a href="#" class="link-primary">Edit</a>
            &nbsp;|&nbsp;
            <a href="#" class="link-danger">Delete</a>
          </td>
        </tr>
        <tr>
          <td>1,002</td>
          <td>placeholder</td>
          <td>irrelevant</td>
          <td>visual</td>
          <td>layout</td>
        </tr>
        <tr>
          <td>1,003</td>
          <td>data</td>
          <td>rich</td>
          <td>dashboard</td>
          <td>tabular</td>
        </tr>
        <tr>
          <td>1,003</td>
          <td>information</td>
          <td>placeholder</td>
          <td>illustrative</td>
          <td>data</td>
        </tr>
        <tr>
          <td>1,004</td>
          <td>text</td>
          <td>random</td>
          <td>layout</td>
          <td>dashboard</td>
        </tr>
        <tr>
          <td>1,005</td>
          <td>dashboard</td>
          <td>irrelevant</td>
          <td>text</td>
          <td>placeholder</td>
        </tr>
        <tr>
          <td>1,006</td>
          <td>dashboard</td>
          <td>illustrative</td>
          <td>rich</td>
          <td>data</td>
        </tr>
        <tr>
          <td>1,007</td>
          <td>placeholder</td>
          <td>tabular</td>
          <td>information</td>
          <td>irrelevant</td>
        </tr>
      </tbody>
    </table>
  </div>


@endsection
