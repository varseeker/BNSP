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
        <a class="navbar-brand" href="home">Pembayaran SPP Siswa</a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation"></button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="home">Home <span class="sr-only">(current)</span></a>
                </li>
{{--                   <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li> --}}
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Data Table</a>
                    <div class="dropdown-menu" aria-labelledby="dropdownId">
                        <a class="dropdown-item" href="siswa">Table Siswa</a>
                        <a class="dropdown-item" href="transaksi">Table Transaksi</a>
                    </div>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0" action="/search-transaksi" method="get">
                <input class="form-control mr-sm-2" type="text" name="cari" placeholder="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <div class="container">
        <div class="card mt-4">
            <div class="card-header">
                Home > Table Transaksi <a class="btn btn-primary inline float-right" href="transaksi/add" role="button">Tambah</a>
            </div>
            <div class="card-body">
                <h5 class="card-title">Table Transaksi </h5>
                <p class="card-text">
            
        <table class="table table-striped table-inverse">
            
            <thead class="thead-inverse">
                <tr>
                    <th>No</th>
                    <th>ID Transaksi</th>
                    <th>Nama</th>
                    <th>Jurusan</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($transaksi as $key => $transaksis)
                    <tr>
                        <td scope="row">{{ $transaksi->firstItem() + $key }}</td>
                        <td>{{ $transaksis->noid }}</td>
                        <td>{{ $transaksis->siswa->nmsis }}</td>
                        <td>{{ $transaksis->siswa->jurusan }}</td>
                        <td>
                            <a href="transaksi/show/{{ $transaksis->noid }}" class="badge badge-primary">Show</a>
                            <a href="transaksi/edit/{{ $transaksis->noid }}" class="badge badge-warning">Edit</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot class="tfoot-inverse">
                    <tr>
                        <th>No</th>
                        <th>ID Transaksi</th>
                        <th>Nama</th>
                        <th>Jurusan</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
            </table>
        </p>
        {{ $transaksi->links() }}
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