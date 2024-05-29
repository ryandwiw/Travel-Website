
<div class="modal fade" id="editModal{{$gallery->id}}" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="editModalLabel">Edit Gambar</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{ route('gallery.update', $gallery->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                

                @if ($gallery->image_path)
                    <img src="{{ asset($gallery->image_path) }}" alt="Current Image" style="max-width: 300px;">
                @endif
                
                <div class="mt-3 mb-3">
                    <label for="image">Pilih Gambar Baru:</label>
                    <input type="file" name="image" id="image" accept="image/*" required>
                </div>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                  </div>
            </form>
        </div>

      </div>
    </div>
  </div>