@include('Backend.partial.header')
@include('Backend.partial.aside')
@include('Backend.partial.assests')

<div class="layout-wrapper layout-content-navbar">
  <div class="layout-container">
    <div class="layout-page">
      <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">
          <h4 class="fw-bold py-3 mb-4">Manage Files</h4>

  

          <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
              <span>Uploaded Files</span>
              <a href="{{ route('files.create') }}" class="btn btn-sm btn-primary">Add</a>
            </div>

            <div class="table-responsive text-nowrap">
              <table class="table">
                <thead>
                  <tr>
                    <th>S.N</th>
                    <th>Title</th>
                    <th>Image</th>
                    <th>Image Name</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @forelse($files as $i => $file)
                    <tr>
                      <td>{{ $i + 1 }}</td>
                      <td>{{ $file->title }}</td>
                      <td>
                        @if($file->image_path && file_exists(public_path('storage/'.$file->image_path)))
                          <img src="{{ asset('storage/'.$file->image_path) }}" style="height:40px;">
                        @else
                          <span class="text-muted">No image</span>
                        @endif
                      </td>
                      <td>{{ basename($file->image_path) }}</td>
                      <td class="d-flex gap-2">
                        <a href="{{ route('files.edit', $file) }}" class="btn btn-sm btn-outline-secondary">Edit</a>
                        <a href="{{ route('files.show', $file) }}" class="btn btn-sm btn-outline-info">View</a>
                        <form action="{{ route('files.destroy',$file) }}" method="POST" onsubmit="return confirm('Delete this file?');">
                          @csrf @method('DELETE')
                          <button class="btn btn-sm btn-outline-danger">Delete</button>
                        </form>
                      </td>
                    </tr>
                  @empty
                    <tr><td colspan="5" class="text-center">No files yet.</td></tr>
                  @endforelse
                </tbody>
              </table>
            </div>

           <div class="d-flex justify-content-center mt-3">
  {{ $files->links('vendor.pagination.bootstrap-5') }}
</div>

          </div>
        </div>
        <div class="content-backdrop fade"></div>
      </div>
    </div>
  </div>
  <div class="layout-overlay layout-menu-toggle"></div>
</div>
