<!doctype html>
<html lang="en">
  <head>
    <title>Aplikasi Pembayaran SPP Siswa</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-expand-sm navbar-dark" style="background-color: navy">
        <a class="navbar-brand" href="dashboard">Pembayaran SPP Siswa</a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation"></button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
{{--                   <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li> --}}
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Data Table</a>
                    <div class="dropdown-menu" aria-labelledby="dropdownId">
                    <a class="dropdown-item" href="{{ url('siswa') }}">Table Siswa</a>
                        <a class="dropdown-item" href="{{ url('transaksi') }}">Table Transaksi</a>
                    </div>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <div class="container">
        <h1 class="mt-3">Detail Transaksi</h1>

        <div class="card">
            <div class="card-header">
                dashboard > table transaksi > {{ $transaksi->noid }}
                <form action="{{ $transaksi->noid }}" method="POST" class="d-inline float-right">
                    @method('delete')
                    @csrf
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
            <div class="card-body">

                {{-- ID TRANSAKSI --}}
                <h5 class="card-title">ID Transaksi</h5>
                <p class="card-text">{{ $transaksi->noid }}</p>

                {{-- NAMA SISWA --}}
                <h5 class="card-title">Nama</h5>
                <p class="card-text">{{ $transaksi->siswa->nmsis }}</p>
                
                {{-- JURUSAN --}}
                <h5 class="card-title">Jurusan</h5>
                <p class="card-text">{{ $transaksi->siswa->jurusan }}</p>

                {{-- JENIS KELAMIN --}}
                <h5 class="card-title">Tahun Ajar</h5>
                <p class="card-text">{{ $transaksi->siswa->nhnajar }}</p>
                
                {{-- TAHUN AJAR --}}
                <h5 class="card-title">Jumlah Bulan</h5>
                <p class="card-text">{{ $transaksi->jml_bulan }}</p>

                {{-- WALI SISWA --}}
                <h5 class="card-title">Jumlah Rupiah</h5>
                <p class="card-text">{{ $transaksi->jml_rupiah }}</p>

                {{-- NO TELEPHONE/HANDPHONE --}}
                <h5 class="card-title">Keterangan</h5>
                <p class="card-text">{{ $transaksi->keterangan }}</p>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>