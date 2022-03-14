<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="add" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/diri/store" method="post">
                @csrf
                <div class="modal-body">
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label for="tanggal">Tanggal</label>
                        </div>
                        <div class="col-md-8">
                            <input type="date" name="tanggal" id="tanggal" class="form-control">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label for="jam">jam</label>
                        </div>
                        <div class="col-md-8">
                            <input type="time" name="jam" id="jam" class="form-control">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label for="lokasi">lokasi</label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" name="lokasi" id="lokasi" class="form-control">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <label for="suhu_tubuh">Suhu Tubuh</label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" name="suhu_tubuh" id="suhu_tubuh" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
