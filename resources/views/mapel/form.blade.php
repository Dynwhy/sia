<div class="modal fade" id="modalForm" aria-modal="true" style="display: nome; padding_right: 17px;" aria-modal="true" role="dialog"
role="dialog" data_backdrop="static" data_keyboard="false">
    <div class="modal-dialog modal-dialog_centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah Data Mapel</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
             
            <form action="" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="name">Nama</label>
                    <input type="text" class="form-control" name="nama" id="nama">
                </div>
                <h4>Klik!
                <button type="sumbit" class="btn btn-success btn-flat btn-sm">Simpan</button>
                </h4>
            </form>

            </div>
        </div>

    </div>

</div>
