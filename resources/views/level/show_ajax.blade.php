<div id="modal-master" class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Detail Level</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                    aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body">
            <div class="form-group">
                <label for="level_kode">Kode Level</label>
                <input type="text" class="form-control" id="level_kode" value="{{ $level->level_kode }}" readonly>
            </div>
            <div class="form-group">
                <label for="level_nama">Nama Level:</label>
                <input type="text" class="form-control" id="level_nama" value="{{ $level->level_nama }}" readonly>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        </div>
    </div>
</div>
