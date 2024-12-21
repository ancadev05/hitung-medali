@extends('welcome')

@section('content')
    <div class="container">
        <section class="text-center mt-2">
            <h5 class="m-0 p-0">PEROLEHAN MEDALI</h5>
            <h5 class="m-0 p-0">KONTINGEN TAPAK SUCI GOWA</h5>
            <h5 class="m-0 p-0">KEJUARAAN PENCAK SILAT MAKASSAR CHAMPIONSHIP III</h5>
        </section>
        <hr>

        <section class="mb-3">
            <div class="card text-bg-success p-2 text-center mb-2">
                <h4>Total Medali</h4>
                <h3>{{ $medalis->count() }}</h3>
            </div>
            <div class="row row-cols-2 row-cols-md-3 g-3">
                <div class="col">
                    <div class="card p-2 text-bg-warning text-center">
                        <h4>Emas :</h2>
                        <h3>{{ $emas }}</h3>
                    </div>
                </div>
                <div class="col">
                    <div class="card p-2 text-bg-secondary text-center">
                        <h4>Perak :</h2>
                        <h3>{{ $perak }}</h3>
                    </div>
                </div>
                <div class="col">
                    <div class="card p-2 text-center text-white" style="background-color: #945d41">
                        <h4>Perunggu :</h2>
                        <h3>{{ $perunggu }}</h3>
                    </div>
                </div>
            </div>
        </section>
        <hr>
        <section>

            <div class="d-flex justify-content-end">
                <a href="{{ url('/create') }}" class="btn btn-sm btn-primary">Tambah</a>
            </div>

            <div class="table-responsive">
                <table class="table table-sm">
                    <thead>
                        <tr class="text-center">
                            <th rowspan="2">No.</th>
                            <th rowspan="2">Nama Atlet</th>
                            <th rowspan="2">JK</th>
                            <th rowspan="2">Kategori</th>
                            <th rowspan="2">KelasTanding</th>
                            <th rowspan="2">Cabang</th>
                            <th colspan="3">Medali</th>
                            <th rowspan="2">Aksi</th>
                        </tr>
                        <tr class="text-center">
                            <th>Emas</th>
                            <th>Perak</th>
                            <th>Perunggu</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $i = 1;
                        @endphp
                        @forelse ($medalis as $item)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $item->nama_atlet }}</td>
                                <td>{{ $item->jk }}</td>
                                <td>{{ $item->kategori }}</td>
                                <td>{{ $item->kelas_tanding }}</td>
                                <td>{{ $item->cabang }}</td>
                                <td class="text-center">{{ $item->medali === 1 ? 'Emas' : '' }}</td>
                                <td class="text-center">{{ $item->medali === 2 ? 'Perak' : '' }}</td>
                                <td class="text-center">{{ $item->medali === 3 ? 'Perunggu' : '' }}</td>
                                <td>
                                    <button class="btn btn-sm btn-warning">Edit</button>
                                    <form action="{{ url('/' . $item->id) }}" method="post" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin HAPUS?')">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <div class="alert alert-info">Belum ada data!</div>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </section>
    </div>
@endsection
