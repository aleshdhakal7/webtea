@include('Backend.partial.header')
@include('Backend.partial.aside')
@include('Backend.partial.assests')

<div class="layout-wrapper layout-content-navbar">
  <div class="layout-container">
    <div class="layout-page">
      <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">
          <h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light">Home /</span> Edit File
          </h4>

       

          <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
              <h5 class="mb-0">Edit File</h5>
              <small class="text-muted float-end">Update title or image</small>
            </div>

            <div class="card-body">
              <form action="{{ route('files.update', $file) }}" method="POST" enctype="multipart/form-data">
                @csrf @method('PUT')

                <div class="mb-3">
                  <label for="title" class="form-label">Title</label>
                  <input type="text" name="title" id="title" class="form-control" value="{{ $file->title }}" required />
                </div>

                <div class="mb-3">
                  <label for="image" class="form-label">Replace Image</label>
                  <input type="file" name="image" id="image" class="form-control" />
                  @if($file->image_path && file_exists(public_path('storage/'.$file->image_path)))
                    <small class="d-block mt-2">Current:
                      <img src="{{ asset('storage/'.$file->image_path) }}" style="height:40px;">
                    </small>
                  @endif
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{ route('files.index') }}" class="btn btn-outline-secondary">Cancel</a>
              </form>
            </div>
          </div>
        </div>

        <div class="content-backdrop fade"></div>
      </div>
    </div>
  </div>
  <div class="layout-overlay layout-menu-toggle"></div>
</div>
