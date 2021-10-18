<div class="section-body">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h4>Tambah Lahan</h4>
                </div>
                <div class="card-body">
                    <div class="form-group row">
                        <label for="nama" class="col-sm-3 col-form-label">Nama Pemilik</label>
                        <div class="col-sm-9">
                            <input wire:model.lazy="nama" type="text" class="form-control " id="nama"
                                   placeholder="Nama Pemilik">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lokasi" class="col-sm-3 col-form-label">Lokasi Lahan</label>
                        <div class="col-sm-9">
                            <textarea wire:model.lazy="lokasi" class="form-control" id="lokasi"
                                      placeholder="Desa, Kecamatan, Kabupaten" rows="3000"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="dokumen" class="col-sm-3 col-form-label">Dokumen</label>
                        <div class="col-sm-9">
                            <input wire:model.lazy="dokumen" type="text" class="form-control " id="dokumen"
                                   placeholder="Dokumen">
                        </div>
                    </div>
                    <div class="form-group row">
                                    <label for="sppt" class="col-sm-3 col-form-label">No. SPPT (NOP)</label>
                                     <div class="col-sm-9">
                                    <input wire:model.lazy="sppt" type="text" class="form-control " id="sppt"
                                   placeholder="No. SPPT (NOP)">
                                     </div>
                                </div>
                    <div class="form-group row">
                        <label for="luas" class="col-sm-3 col-form-label">Luas Lahan</label>
                        <div class="col-sm-9">
                            <input wire:model.lazy="luas" type="text" class="form-control " id="luas"
                                   placeholder="Luas Lahan">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jenis_tanah" class="col-sm-3 col-form-label">Jenis Tanah</label>
                        <div class="col-sm-9">
                        <select wire:model.lazy="jenis_tanah" class="form-control" id="jenis_tanah"
                                      placeholder="Jenis Tanah">
                                      <option value=" " ></option>
                                      <option value="-">-</option>
                                      <option value="Darat">Darat</option>
                                      <option value="Tanah Kosong">Tanah Kosong</option>
                                    </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="keterangan" class="col-sm-3 col-form-label">Keterangan</label>
                        <div class="col-sm-9">
                            <input wire:model.lazy="keterangan" type="text" class="form-control " id="keterangan"
                                   placeholder="Keterangan">
                        </div>
                    </div>
                </div>
                <div wire:click="simpan" class="card-footer text-right">
                    <button class="btn btn-primary">Simpan Data Lahan</button>
                </div>
            </div>
        </div>
    </div>
</div>
