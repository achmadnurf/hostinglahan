<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Data Lahan</h4>
                    <div class="card-header-form">
                        <form>
                            <div class="input-group">
                                <input type="text" wire:model="search" class="form-control"
                                       placeholder="Search" aria-label="search">
                                <div class="input-group-btn">
                                    <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="ml-auto card-header-action">
                        <a href="{{route('lahan.create')}}" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah
                            Lahan</a>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <tbody>
                            <tr>
                                <th>NO</th>
                                <th>NAMA PEMILIK</th>
                                <th>LOKASI</th>
                                <th>DOKUMEN</th>
                                <th>LUAS LAHAN</th>
                                <th>JENIS TANAH</th>
                                <th>NO. SPPT (NOP)</th>
                                <th>KETERANGAN</th>
                                <th>AKSI</th>
                            </tr>
                            @if($list_lahan->isEmpty())
                                <tr>
                                    <td colspan="6" class="text-center">Data lahan belum tersedia</td>
                                </tr>
                                @else
                                @foreach($list_lahan as $index => $lahan)
                                    <livewire:lahan.single :lahan="$lahan" :index="$index+1" :key="time()
                                    .$lahan->id"/>
                                @endforeach
                                @endif
                            </tbody>
                        </table>
                        <div class="card-body p-0">
                            <br>
                            {{ $list_lahan->links() }} 
                    </br>
                        Data Per Halaman : {{ $list_lahan->perPage() }}
                    <br>
                        Jumlah Data : {{ $list_lahan->total() }}
                     <br/>
    </div>    
                </div>
                </div>
                <div class="card-footer text-center">

                </div>
            </div>
        </div>
    </div>
</div>