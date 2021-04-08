<?php
/**
     * Controller untuk menghubungkan model siswa/i dengan segala aktifitas website.
     * @author Muhammad Ibadurrahman Al-ahsan  
     * @filesource M_Transaksi.php
     * @version Laravel 7.0
     */
namespace App\Http\Controllers;

use App\M_Transaksi;
use App\M_Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class C_Transaksi extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transaksi = M_Transaksi::paginate(5);

        return view('transaksi.index', compact('transaksi'));
    }

    /**  
     * Function Membuat Pencarian untuk siswa berdasarkan Nama.
     * Display single data.
     * 
    */
    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;
 
    		// mengambil data dari table transaksi sesuai pencarian data
		$transaksi = DB::table('transaksi')
		->where('nis','like',"%".$cari."%")
		->paginate();
 
    		// mengirim data transaksi ke view index
		return view('transaksi.single',['transaksi' => $transaksi]);
 
	}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $transaksi = M_Siswa::all();

        return view('transaksi.add', compact('transaksi'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        M_Transaksi::create($request->all());

        return redirect('/transaksi')->with('status', 'Tambah data transaksi berhasil !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function show($transaksi)
    {   
        $transaksi = M_Transaksi::findOrFail($transaksi);

        return view('transaksi.show', compact('transaksi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function edit($transaksi)
    {
        $transaksi = M_Transaksi::findOrFail($transaksi);

        return view('transaksi.edit', compact('transaksi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,M_Transaksi $transaksi)
    {
        M_Transaksi::where('noid', $transaksi->noid )
        ->update([
            'tglkwi' => $request->tglkwi,
            'jml_bulan' => $request->jml_bulan,
            'jml_rupiah' => $request->jml_rupiah,
            'nis' => $request->nis,
            'keterangan' => $request->keterangan
        ]);

        return redirect('/transaksi')->with('status', 'Update data siswa berhasil !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function destroy(M_Transaksi $transaksi)
    {
        M_Transaksi::destroy($transaksi->noid);

        return redirect('/transaksi');
    }
}
