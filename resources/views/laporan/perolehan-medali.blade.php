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
                <div class="row row-cols-2 row-cols-md-4 g-2">
                    <div class="col">
                        <div class="card p-2 text-bg-primary text-center">
                            <h4>USIA DINI :</h2>
                                <h3>{{ $usia_dini }}</h3>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card p-2 text-bg-primary text-center">
                            <h4>PRA REMAJA :</h2>
                                <h3>{{ $pra_remaja }}</h3>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card p-2 text-center text-white text-bg-danger">
                            <h4>REMAJA :</h2>
                                <h3>{{ $remaja }}</h3>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card p-2 text-center text-white text-bg-danger">
                            <h4>DEWASA :</h2>
                                <h3>{{ $dewasa }}</h3>
                        </div>
                    </div>
                </div>
        </section>

        <section>

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
