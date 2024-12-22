@extends('welcome')

@section('content')
    <div class="container">
        <section class="mt-2">

            <h5 class="text-center">DAFTAR ATLET</h5>
            <hr>

            <div class="table-responsive">
                <table class="table table-sm table-striped table-hover table-bordered" id="datatables">
                    <thead>
                        <tr class="text-center">
                            <th>No.</th>
                            <th>Nama Atlet</th>
                            <th>JK</th>
                            <th>Golongan</th>
                            <th>Kategori</th>
                            <th>KelasTanding</th>
                            <th>Cabang</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $i = 1;
                        @endphp
                        @forelse ($atlets as $item)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $item->nama_atlet }}</td>
                                <td>{{ $item->jk }}</td>
                                <td>{{ $item->golongan }}</td>
                                <td>{{ $item->kategori }}</td>
                                <td>{{ $item->kelas_tanding }}</td>
                                <td>{{ $item->cabang }}</td>
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
