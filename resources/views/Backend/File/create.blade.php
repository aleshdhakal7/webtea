@include('Backend.partial.header')
@include('Backend.partial.aside')
@include('Backend.partial.assests')

<div class="layout-wrapper layout-content-navbar">
  <div class="layout-container">
    <div class="layout-page">
      <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">
          <h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light">Home /</span> Add File
          </h4>



          <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
              <h5 class="mb-0">Add New File</h5>
              <small class="text-muted float-end">Upload image and title</small>
            </div>

            <div class="card-body">
              <form action="{{ route('files.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                  <label class="form-label" for="title">Title</label>
                  <input type="text" name="title" id="title" class="form-control" value="{{ old('title') }}" required />
                </div>

                <div class="mb-3">
                  <label class="form-label" for="image">Image</label>
                  <input type="file" name="image" id="image" class="form-control" required />
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
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
