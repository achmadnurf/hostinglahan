<?php

namespace App\Http\Controllers;

use App\Models\Posisi;
use Illuminate\Http\Request;

class LaporanKontroller extends Controller
{
    public function kridit(){
        $list_posisi = Posisi::all();
        return view('laporan.posisi', compact('list_posisi'));
    }

    public function jurnalBendahara(Request $request){
        $list_posisi = Posisi::query();
        if($request->has(['start_date', 'end_date'])){
            $list_posisi->whereDate("tanggal_pinjam", ">=", $request->start_date)->whereDate("tanggal_pinjam", "<=",
                $request->end_date);
        }
        $list_posisi = $list_posisi->get();
        return view('laporan.jurnal-bendahara', compact('list_posisi'));
    }

}
