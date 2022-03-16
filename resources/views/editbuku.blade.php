<div class="modal fade" id="exampleModal{{ $buku->id }}" tabindex="-1" aria-labelledby="exampleModal2Label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Buku</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ url("listbuku", $buku->id) }}" method="POST">
                    @csrf
                    @method("PUT")
                    <div class="mb-3">
                        <label for="judul">Judul Buku</label>
                        <input type="text" name="judul" class="form-control" value="{{ $buku->judul }}">
                    </div>
                    <div class="mb-3">
                        <label for="judul">Author</label>
                        <input type="text" name="author" class="form-control" value="{{ $buku->author }}">
                    </div>
                    <div class="mb-3">
                        <label for="judul">Sinopsis</label>
                        <textarea class="form-control" name="sinopsis" rows="3">{{ $buku->sinopsis }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="judul">Penerbit</label>
                        <input type="text" name="penerbit" class="form-control" value="{{ $buku->penerbit }}">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </form>
            </div>
            </div>
        </div>
    </div>
</div>