@include('Backend.partial.header')
@include('Backend.partial.aside')
@include('Backend.partial.assests')

<div class="layout-wrapper layout-content-navbar">
  <div class="layout-container">
    <div class="layout-page">
      <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">
          <h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light">Home /</span> View File
          </h4>

          <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
              <h5 class="mb-0">File Details</h5>
              <small class="text-muted float-end">Preview information</small>
            </div>

            <div class="card-body">
              <div class="mb-3">
                <label class="form-label fw-bold">Title:</label>
                <p>{{ $file->title }}</p>
              </div>

              <div class="mb-3">
                <label class="form-label fw-bold">Image:</label><br>
                @if($file->image_path && file_exists(public_path('storage/'.$file->image_path)))
                  <img src="{{ asset('storage/'.$file->image_path) }}" style="max-height:200px;" class="img-fluid border rounded">
                @else
                  <span class="text-muted">No image available</span>
                @endif
              </div>

              <div class="mb-3">
                <label class="form-label fw-bold">Image Name:</label>
                <p>{{ basename($file->image_path) }}</p>
              </div>

              <div class="d-flex gap-2">
                <a href="{{ route('files.edit', $file) }}" class="btn btn-outline-secondary">Edit</a>
                <a href="{{ route('files.index') }}" class="btn btn-outline-primary">Back</a>
              </div>
            </div>
          </div>
        </div>

        <div class="content-backdrop fade"></div>
      </div>
    </div>
  </div>
  <div class="layout-overlay layout-menu-toggle"></div>
</div>
