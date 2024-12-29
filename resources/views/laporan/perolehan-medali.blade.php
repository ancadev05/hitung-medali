@extends('welcome')

@section('content')
    <div class="container">
        <section class="text-center mt-2">
            <h5 class="m-0 p-0">PEROLEHAN MEDALI</h5>
            <h5 class="m-0 p-0">KONTINGEN TAPAK SUCI GOWA</h5>
            <h5 class="m-0 p-0">KEJUARAAN PENCAK SILAT MAKASSAR CHAMPIONSHIP III</h5>
        </section>
        <hr>

        <section class="mb-4 card p-3">
            <h4>Total Medali:</h4>
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

        <section class="mb-4 card p-3">
            <h4>Perolehan Medali Berdasarkan Golongan:</h4>
            <div class="row row-cols-1 row-cols-md-4 g-2">
                <div class="col">
                    <div class="card p-2 text-bg-primary text-center">
                        <h4>USIA DINI : {{ $usia_dini }}</h2>
                            <hr>
                            <div class="d-flex justify-content-center">
                                <span class="btn btn-sm btn-outline-light">Em : {{ $usia_dini_1 }}</span>
                                <span class="mx-2 btn btn-sm btn-outline-light">Pr : {{ $usia_dini_2 }}</span>
                                <span class="btn btn-sm btn-outline-light">Pg : {{ $usia_dini_3 }}</span>
                            </div>
                            <hr>
                            <div class="d-flex justify-content-center">
                                <div>
                                    <h5>PA</h5>
                                    <div class="btn-group">
                                        <span class="btn btn-sm btn-outline-light">Em: {{ $usia_dini_l_1 }}</span>
                                        <span class="btn btn-sm btn-outline-light">Pr: {{ $usia_dini_l_2 }}</span>
                                        <span class="btn btn-sm btn-outline-light">Pg: {{ $usia_dini_l_3 }}</span>
                                    </div>
                                </div>
                                <span>|</span>
                                <div>
                                    <h5>PI</h5>
                                    <div class="btn-group">
                                        <span class="btn btn-sm btn-outline-light">Em: {{ $usia_dini_p_1 }}</span>
                                        <span class="btn btn-sm btn-outline-light">Pr: {{ $usia_dini_p_2 }}</span>
                                        <span class="btn btn-sm btn-outline-light">Pg: {{ $usia_dini_p_3 }}</span>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card p-2 text-bg-primary text-center">
                        <h4>PRA REMAJA : {{ $pra_remaja }}</h2>
                            <hr>
                            <div class="d-flex justify-content-center">
                                <span class="btn btn-sm btn-outline-light">Em : {{ $pra_remaja_1 }}</span>
                                <span class="mx-2 btn btn-sm btn-outline-light">Pr : {{ $pra_remaja_2 }}</span>
                                <span class="btn btn-sm btn-outline-light">Pg : {{ $pra_remaja_3 }}</span>
                            </div>
                            <hr>
                            <div class="d-flex justify-content-center">
                                <div>
                                    <h5>PA</h5>
                                    <div class="btn-group">
                                        <span class="btn btn-sm btn-outline-light">Em: {{ $pra_remaja_l_1 }}</span>
                                        <span class="btn btn-sm btn-outline-light">Pr: {{ $pra_remaja_l_2 }}</span>
                                        <span class="btn btn-sm btn-outline-light">Pg: {{ $pra_remaja_l_3 }}</span>
                                    </div>
                                </div>
                                <span> | </span>
                                <div>
                                    <h5>PI</h5>
                                    <div class="btn-group">
                                        <span class="btn btn-sm btn-outline-light">Em: {{ $pra_remaja_p_1 }}</span>
                                        <span class="btn btn-sm btn-outline-light">Pr: {{ $pra_remaja_p_2 }}</span>
                                        <span class="btn btn-sm btn-outline-light">Pg: {{ $pra_remaja_p_3 }}</span>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card p-2 text-center text-white text-bg-danger">
                        <h4>REMAJA : {{ $remaja }}</h2>
                            <hr>
                            <div class="d-flex justify-content-center">
                                <span class="btn btn-sm btn-outline-light">Em : {{ $remaja_1 }}</span>
                                <span class="mx-2 btn btn-sm btn-outline-light">Pr : {{ $remaja_2 }}</span>
                                <span class="btn btn-sm btn-outline-light">Pg : {{ $remaja_3 }}</span>
                            </div>
                            <hr>
                            <div class="d-flex justify-content-center">
                                <div>
                                    <h5>PA</h5>
                                    <div class="btn-group">
                                        <span class="btn btn-sm btn-outline-light">Em: {{ $remaja_l_1 }}</span>
                                        <span class="btn btn-sm btn-outline-light">Pr: {{ $remaja_l_2 }}</span>
                                        <span class="btn btn-sm btn-outline-light">Pg: {{ $remaja_l_3 }}</span>
                                    </div>
                                </div>
                                <span>|</span>
                                <div>
                                    <h5>PI</h5>
                                    <div class="btn-group">
                                        <span class="btn btn-sm btn-outline-light">Em: {{ $remaja_p_1 }}</span>
                                        <span class="btn btn-sm btn-outline-light">Pr: {{ $remaja_p_2 }}</span>
                                        <span class="btn btn-sm btn-outline-light">Pg: {{ $remaja_p_3 }}</span>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card p-2 text-center text-white text-bg-danger">
                        <h4>DEWASA : {{ $dewasa }}</h2>
                            <hr>
                            <div class="d-flex justify-content-center">
                                <span class="btn btn-sm btn-outline-light">Em : {{ $dewasa_1 }}</span>
                                <span class="mx-2 btn btn-sm btn-outline-light">Pr : {{ $dewasa_2 }}</span>
                                <span class="btn btn-sm btn-outline-light">Pg : {{ $dewasa_3 }}</span>
                            </div>
                            <hr>
                            <div class="d-flex justify-content-center">
                                <div>
                                    <h5>PA</h5>
                                    <div class="btn-group">
                                        <span class="btn btn-sm btn-outline-light">Em: {{ $dewasa_l_1 }}</span>
                                        <span class="btn btn-sm btn-outline-light">Pr: {{ $dewasa_l_2 }}</span>
                                        <span class="btn btn-sm btn-outline-light">Pg: {{ $dewasa_l_3 }}</span>
                                    </div>
                                </div>
                                <span>|</span>
                                <div>
                                    <h5>PI</h5>
                                    <div class="btn-group">
                                        <span class="btn btn-sm btn-outline-light">Em: {{ $dewasa_p_1 }}</span>
                                        <span class="btn btn-sm btn-outline-light">Pr: {{ $dewasa_p_2 }}</span>
                                        <span class="btn btn-sm btn-outline-light">Pg: {{ $dewasa_p_3 }}</span>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- <section class="mb-4 card p-3">
            <h4>Perolehan Setiap Cabang</h4>
            <table class="table table-sm">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Cabang</th>
                        <th>Medali</th>
                    </tr>
                    <tr></tr>
                </thead>
            </table>
        </section> --}}
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
