@extends('welcome')

@section('content')
    <div class="container">
        <section class="text-center">
            <h3>PEROLEHAN MEDALI</h3>
        </section>
        <hr>
        <section>
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
                        </tr>
                        <tr class="text-center">
                            <th>Emas</th>
                            <th>Perak</th>
                            <th>Perunggu</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </section>
    </div>
@endsection