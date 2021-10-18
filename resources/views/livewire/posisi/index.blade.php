<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Data Posisi</h4>
                    <div class="ml-auto card-header-form">
                        <form>
                            <div class="input-group">
                                <input type="text" wire:model="search" name="search" class="form-control"
                                       placeholder="Search">
                                <div class="input-group-btn">
                                    <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="ml-auto card-header-action">
                        <a href="{{route('posisi.create')}}" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah
                            Posisi</a>
                        <a href="{{route('laporan.posisi')}}" class="btn btn-primary"><i class="fa fa-file-export"></i> Laporan
                            Data Posisi</a>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <tbody>
                            <tr>
                                <th>No</th>
                                {{-- <th>Tanggal Pinjam</th> --}}
                                <th>No Sertif/Ajb</th>
                                <th>Lintang Selatan</th>
                                <th>Bujur Timur</th>
                                <th>MDPL</th>
                                <th>Aksi</th>
                            </tr>
                            @if($list_posisi->isEmpty())
                                <tr>
                                    <td colspan="6" class="text-center">Data lahan belum tersedia</td>
                                </tr>
                            @else
                                @foreach($list_posisi as $index => $posisi)
                                    <livewire:posisi.single :posisi="$posisi" :index="$index+1"
                                                            :key="time().$posisi->id"/>
                                @endforeach
                            @endif
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer text-center">

                </div>
            </div>
        </div>
    </div>
</div>