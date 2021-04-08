<?php
/**
     * Controller untuk menghubungkan model siswa/i dengan segala aktifitas website.
     * @author Muhammad Ibadurrahman Al-ahsan  
     * @filesource M_Siswa.php
     * @version Laravel 7.0
     */
namespace App\Http\Controllers;

use App\M_Siswa;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;

class C_Siswa extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $siswa = M_Siswa::paginate(5);
        
        return view('siswa.index', compact('siswa'));
        $search = M_Siswa::search()->get();
    }

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;
 
    		// mengambil data dari table siswa sesuai pencarian data
		$siswa = DB::table('siswa')
        ->where('nmsis','like',"%".$cari."%")
        ->OrWhere('nis','like',"%".$cari."%")
		->paginate();
        
        
    		// mengirim data siswa ke view index
		return view('siswa.index',['siswa' => $siswa]);
 
	}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('siswa.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        M_Siswa::create($request->all());

        return redirect('/siswa')->with('status', 'Tambah data siswa berhasil !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $siswa
     * @return \Illuminate\Http\Response
     */
    public function show($siswa)
    {   
        $siswa = M_Siswa::findOrFail($siswa);

        return view('siswa.show', compact('siswa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $siswa
     * @return \Illuminate\Http\Response
     */
    public function edit($siswa)
    {
        $siswa = M_Siswa::findOrFail($siswa);

        return view('siswa.edit', compact('siswa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $siswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,M_Siswa $siswa)
    {
        M_Siswa::where('nis', $siswa->nis )
        ->update([
            'nmsis' => $request->nmsis,
            'nhnajar' => $request->nhnajar,
            'jurusan' => $request->jurusan,
            'jksis' => $request->jksis,
            'wali' => $request->wali,
            'tlpwl' => $request->tlpwl
        ]);

        return redirect('/siswa')->with('status', 'Update data siswa berhasil !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $siswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(M_Siswa $siswa)
    {
        M_Siswa::destroy($siswa->nis);

        return redirect('/siswa');
    }
}
