<!doctype html>
<html lang="en">
  <head>
    <title>Aplikasi Pembayaran SPP Transaksi</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-expand-sm navbar-dark" style="background-color: navy">
        <a class="navbar-brand" href="dashboard">Pembayaran SPP Transaksi</a>
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
        <h1 class="mt-3">Edit Transaksi</h1>

        <div class="card">
            <div class="card-header">
                dashboard > table transaksi > {{ $transaksi->noid }}
            </div>
            <form action="{{ $transaksi->noid }}" method="post">
                @csrf
                @method('PATCH')

            <div class="card-body">

                {{-- ID TRANSAKSI --}}
                <h5 class="card-title">ID Transaksi</h5>
                <div class="form-group">
                <input disabled type="text" class="form-control" name="noid" id="noid" aria-describedby="helpId" placeholder="{{ $transaksi->noid }}">
                  <small id="helpId" class="form-text text-muted">ID Transaksi</small>
                </div>

                {{-- NIS SISWA --}}
                <h5 class="card-title">NIS</h5>
                <div class="form-group">
                <input type="text" class="form-control" name="nis" id="nis" aria-describedby="helpId" placeholder="NIS Transaksi" value="{{ $transaksi->nis }}">
                    <small id="helpId" class="form-text text-muted">NIS Transaksi</small>
                </div>

                {{-- JUMLAH BULAN --}}
                <h5 class="card-title">Jumlah Bulan</h5>
                <div class="form-group">
                <input type="text" class="form-control" name="jml_bulan" id="jml_bulan" aria-describedby="helpId" placeholder="Jumlah Bulan Transaksi" value="{{ $transaksi->jml_bulan }}">
                    <small id="helpId" class="form-text text-muted">Jumlah Bulan Transaksi</small>
                </div>

                {{-- JUMLAH RUPIAH ATAU TOTAL BAYAR --}}
                <h5 class="card-title">Jumlah Rupiah / Total Bayar</h5>
                <div class="form-group">
                <input type="text" class="form-control" name="jml_rupiah" id="jml_rupiah" aria-describedby="helpId" placeholder="Jumlah Rupiah Transaksi" value="{{ $transaksi->jml_rupiah}}">
                    <small id="helpId" class="form-text text-muted">Jumlah Rupiah / Total Bayar Transaksi</small>
                </div>
                
                {{-- Tanggal Transaksi --}}
                <h5 class="card-title">Tanggal Transaksi</h5>
                <div class="form-group">
                <input type="text" class="form-control" name="tglkwi" id="tglkwi" aria-describedby="helpId" placeholder="Tanggal Transaksi Transaksi" value="{{ $transaksi->tglkwi }}">
                    <small id="helpId" class="form-text text-muted">Tanggal Melakukan Transaksi</small>
                </div>

                {{-- KETERANGAN TRANSAKSI --}}
                <h5 class="card-title">Keterangan Transaksi</h5>
                <div class="form-group">
                <input type="text" class="form-control" name="keterangan" id="keterangan" aria-describedby="helpId" placeholder="Wali Transaksi" value="{{ $transaksi->keterangan }}">
                    <small id="helpId" class="form-text text-muted">Keterangan Transaksi</small>
                </div>

                <button type="submit" class="btn btn-primary mt-3">Submit</button>
               
            </div>
        </form>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>