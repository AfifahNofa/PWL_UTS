@extends('layout.template')
@section('content')
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> cee1742d63cf5cc45a1e26ee198ed7f405420aed
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
<<<<<<< HEAD
                        <h1>Jurusan</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
=======
                        <h1>Jurusan Polinema</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
>>>>>>> cee1742d63cf5cc45a1e26ee198ed7f405420aed
                            <li class="breadcrumb-item active">Jurusan</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
<<<<<<< HEAD
=======
=======
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Jurusan Polinema</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Jurusan Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
>>>>>>> 05b9d9346b7f38edea315cb8e7a171a31b2f0507
>>>>>>> cee1742d63cf5cc45a1e26ee198ed7f405420aed

        <!-- Main content -->
        <section class="content">

            <!-- Main content -->
            <section class="content">

                <!-- Default box -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">kelas : TI-2A</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        <a href="{{ url('jurusan/create') }}" class="btn btn-sm btn-success my-2">Tambah Data</a>
                        <!-- SidebarSearch Form -->
                        <div class="form-inline">
                            <form action="/jurusan" method="GET" class="input-group">
                                <input class="form-control form-control-sidebar" type="search" name="search"
                                    placeholder="Search" aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-sidebar" type="submit">
                                        <i class="fas fa-search fa-fw"></i>
                                    </button>
                                </div>
                            </form>
                        </div>
                        <br>
                        <!-- Table -->
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kode</th>
                                    <th>Nama</th>
                                    <th>Ketua Jurusan</th>
                                    <th>Jumlah Prodi</th>
                                    <th>Akreditasi</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($jrs->count() > 0)
                                    @foreach ($jrs as $index => $r)
                                        <tr>
                                            <td>{{ $index + $jrs->firstItem() }}</td>
                                            <td>{{ $r->kode }}</td>
                                            <td>{{ $r->nama }}</td>
                                            <td>{{ $r->ketua_jurusan }}</td>
                                            <td>{{ $r->jml_prodi }}</td>
                                            <td>{{ $r->akreditasi }}</td>
                                            <td>
                                                <!-- Bikin tombol edit dan delete -->
                                                <a href="{{ url('/jurusan/' . $r->id . '/edit') }}"
                                                    class="btn btn-sm btn-warning">edit</a>
                                                <form method="POST" action="{{ url('/jurusan/' . $r->id) }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger"
                                                        onclick="confirmDelete()">hapus</button>
                                                </form>

                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="6" class="text-center">Data tidak ada</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table><br>
                        {{ $jrs->links() }}
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        Kelompok 8
                    </div>
                    <!-- /.card-footer-->
                </div>
                <!-- /.card -->

            </section>
            <!-- /.content -->
    </div>
@endsection
@push('custom_js')
    {{-- <script>
  alert('Halaman Home')
</script> --}}

    <script>
        function confirmDelete() {
            if (confirm('Apakah Anda yakin? Data akan dihapus. Apakah Anda ingin melanjutkan?')) {
                document.getElementById('form').submit();
            } else {
                event.preventDefault()
            }
        }
    </script>
@endpush
