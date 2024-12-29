@extends('welcome')

@section('content')
    <div class="container">
        <section class="mt-2">

            <h5 class="text-center">DAFTAR ATLET PEROLEH MEDALI</h5>
            <hr>

            <div class="d-flex justify-content-end my-3">
                <a href="{{ url('/medali/create') }}" class="btn btn-sm btn-primary">Tambah</a>
            </div>

            @if ($duplicates->isNotEmpty())
                <div class="alert alert-danger">
                    <strong>Data Duplicates Ditemukan!</strong>
                    <ul>
                        @foreach ($duplicates as $duplicate)
                            <li>{{ $duplicate->nama_atlet }} / {{ $duplicate->jk }} / {{ $duplicate->cabang }} / {{ $duplicate->golongan }} / {{ $duplicate->kategori }} / {{ $duplicate->kelas_tanding }}</li>
                        @endforeach
                    </ul>
                </div>
            @else
                <div class="alert alert-success">
                    Tidak ada data duplicate.
                </div>
            @endif

            <div class="table-responsive">
                <table class="table table-sm table-striped table-hover table-bordered" id="datatables">
                    <thead>
                        <tr class="align-middle">
                            <th class="text-center" rowspan="2">No.</th>
                            <th class="text-center" rowspan="2">Nama Atlet</th>
                            <th class="text-center" rowspan="2">JK</th>
                            <th class="text-center" rowspan="2">Golongan</th>
                            <th class="text-center" rowspan="2">Kategori</th>
                            <th class="text-center" rowspan="2">KelasTanding</th>
                            <th class="text-center" rowspan="2">Cabang</th>
                            <th class="text-center" colspan="3">Medali</th>
                            <th class="text-center" rowspan="2">Aksi</th>
                        </tr>
                        <tr class="text-center">
                            <th class="text-center text-bg-warning">E</th>
                            <th class="text-center text-bg-secondary">P</th>
                            <th class="text-center" style="background-color: #945d41">P</th>
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
                                <td>{{ $item->golongan }}</td>
                                <td>{{ $item->kategori }}</td>
                                <td>{{ $item->kelas_tanding }}</td>
                                <td>{{ $item->cabang }}</td>
                                <td class="text-center">{{ $item->medali == 1 ? '1' : '' }}</td>
                                <td class="text-center">{{ $item->medali == 2 ? '1' : '' }}</td>
                                <td class="text-center">{{ $item->medali == 3 ? '1' : '' }}</td>
                                <td>
                                    <a href="{{ url('/medali/' . $item->id . '/edit') }}"
                                        class="btn btn-sm btn-warning mb-1">Edit</a>
                                    <form action="{{ url('/medali/' . $item->id) }}" method="post" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger mb-1"
                                            onclick="return confirm('Yakin ingin HAPUS?')">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <div class="alert alert-info my-2">Belum ada data!</div>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </section>
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            $('#datatables').DataTable({
                layout: {
                    top: {
                        buttons: ["excel"],
                    },
                }
            });
        });
    </script>
@endsection
