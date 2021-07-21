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
              <a href="#" rel="deletion" data-id="{{ $category->id }}" class="link-danger delete">Delete</a>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>


@endsection

@push('js-delete-element')
  <script>
    const toastEl = document.querySelector('.toast');
    const toast = new bootstrap.Toast(toastEl);

    const deleteLinks = document.querySelector('.table-responsive').querySelectorAll('.delete');
    deleteLinks.forEach(link => {
      link.addEventListener('click', (e) => {
        const categoryId = e.target.dataset.id;
        fetch(`/admin/categories/${categoryId}`, {
            method: 'DELETE',
            headers: {
              'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
              'Accept': 'text/html'
            }
          }).then(response => {
            return response.json()
          })
          .then(data => {
            showToast(data.success, data.message);
          });
      })
    });

    function showToast(success, message) {
      if (success) {
        document.querySelector('.toast-header').classList.add('text-white', 'bg-success');
        const toastBodyEl = document.querySelector('.toast-body');
        toastBodyEl.classList.add('text-success');
        toastBodyEl.innerText = message;
        toast.show();
        setTimeout(() => location.reload(), 500);
      } else {
        document.querySelector('.toast-header').classList.add('text-white', 'bg-danger');
        const toastBodyEl = document.querySelector('.toast-body');
        toastBodyEl.classList.add('text-danger');
        toastBodyEl.innerText = message;
        toast.show();
      }
    }
  </script>
@endpush
