@extends('welcome')

@section('content')
    <div class="container">
        <section class="mt-3">
            <h3 class="text-center">TAMBAH MEDALI</h3>
            <hr>
            <form action="{{ url('/medali') }}" method="post">
                @csrf
                <div class="row row-cols-1 row-cols-md-2">
                    <div class="col">
                        <div class="mb-3">
                            <label for="nama_atlet" class="form-label">Nama Atlet</label>
                            <select class="form-select select2" id="cari_atlet" name="cari_atlet" required>
                                <option value="" selected>---</option>
                                @foreach ($atlets as $item)
                                    <option value="{{ $item->id }}">#{{ $item->id . ' | ' . $item->nama_atlet }}</option>
                                @endforeach
                            </select>
                            <input type="hidden" class="form-control" id="nama_atlet" name="nama_atlet" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="jk" class="form-label">Jenis Kelamin</label>
                            <input type="text" class="form-control" id="jk" name="jk" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="cabang" class="form-label">Cabang</label>
                            <input type="text" class="form-control" id="cabang" name="cabang" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="golongan" class="form-label">Golongan</label>
                            <input type="text" class="form-control" id="golongan" name="golongan" readonly>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label for="kategori" class="form-label">Kategori</label>
                            <input type="text" class="form-control" id="kategori" name="kategori" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="kelas_tanding" class="form-label">Kelas Tanding</label>
                            <input type="text" class="form-control" id="kelas_tanding" name="kelas_tanding" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="medali" class="form-label">Medali</label>
                            <select class="form-select" id="medali" name="medali" required>
                                <option value="" selected>---</option>
                                <option value="1">Emas</option>
                                <option value="2">Perak</option>
                                <option value="3">Perunggu</option>
                            </select>
                        </div>
                    </div>
                </div>
                
                
                <div class="d-flex justify-content-end">
                    <a href="{{ '/medali' }}" class="btn btn-sm btn-danger me-2">Batal</a>
                    <button type="submit" class="btn btn-sm btn-primary">Tambah</button>
                </div>
            </form>
        </section>
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            $('.select2').select2();

            // mengambil data atlet
            $('#cari_atlet').on('change', function() {
                var idAtlet = $(this).val();

                $.ajax({
                    url: "{{ url('/get-data-atlet') }}",
                    method: 'get',
                    data: {
                        idAtlet: idAtlet
                    },
                    success: function(data) {
                        $('#nama_atlet').val(data.dataAtlet.nama_atlet);
                        $('#jk').val(data.dataAtlet.jk);
                        $('#cabang').val(data.dataAtlet.cabang);
                        $('#golongan').val(data.dataAtlet.golongan);
                        $('#kategori').val(data.dataAtlet.kategori);
                        $('#kelas_tanding').val(data.dataAtlet.kelas_tanding);
                    },
                    error: function(xhr, status, error) {
                        console.error('Terjadi kesalahan:', error);
                    }
                });
            });
        });
    </script>
@endsection
