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
              <a href="#" rel="deletion" data-id="{{ $news->id }}" class="link-danger delete">Delete</a>
            </td>
          </tr>
        @endforeach

      </tbody>
    </table>
    {{ $newsList->links() }}
  </div>
@endsection

@push('js-delete-element')
  <script>
    const deleteLinks = document.querySelector('.table-responsive').querySelectorAll('.delete');
    deleteLinks.forEach(link => {
      link.addEventListener('click', (e) => {
        const newsId = e.target.dataset.id;
        fetch(`/admin/news/${newsId}`, {
          method: 'DELETE',
          headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            'Accept': 'text/html'
          }
        }).then(response => {
          if (response.ok) {
            location.reload();
          } else {
            showToast(false, 'The news was not deleted')
          }
        })
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
