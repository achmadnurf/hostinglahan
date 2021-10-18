<?php

namespace App\Http\Livewire\Lahan;

use App\Models\Lahan;
use Livewire\Component;

class Create extends Component
{
    public $nama;
    public $lokasi;
    public $dokumen;
    public $luas;
    public $sppt;
    public $jenis_tanah;
    public $keterangan;
    // public $sertifikat;
    // public $ajb;
    // public $lokasi;
    // public $kwitansi;
    // public $luas;
    // public $status;
    // public $tgl_jb;
    // public $jualdari;
    // public $jenis_tanah;
    // public $jenis_tanam;
    // public $pemilik_tanam;
    // public $petani;
    // public $diatas;
    // public $kemiringan;

    protected $rules = [
        'nama'           => 'required',
        'lokasi'         => 'required',
        'dokumen'        => 'required',
        'luas'           => 'required',
        'sppt'           => 'required',
        'jenis_tanah'    => 'required',
        'keterangan'     => 'required'
        // 'sertifikat' => 'required',
        // 'ajb' => 'required',
        // 'lokasi' => 'required',
        // 'kwitansi' => 'required',
        // 'luas' => 'required',
        // 'status' => 'required',
        // 'tgl_jb' => 'required',
        // 'jualdari' => 'required',
        // 'jenis_tanah' => 'required',
        // 'jenis_tanam' => 'required',
        // 'pemilik_tanam' => 'required',
        // 'petani' => 'required',
        // 'diatas' => 'required',
        // 'kemiringan' => 'required'
        
    ];

    public function simpan(){
        $data = $this->validate();
        try{
            Lahan::create($data);
            $this->dispatchBrowserEvent('show-message', [
                'type' => 'success',
                'message' => "Data lahan berhasil dibuat"
            ]);
            $this->reset();
        }catch (\Exception $exception){
            \Log::error($exception->getMessage());
        }
    }
    public function render()
    {
        return view('livewire.lahan.create');
    }
}
