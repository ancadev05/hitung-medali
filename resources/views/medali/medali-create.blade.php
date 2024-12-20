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
                            <input type="text" class="form-control" id="nama_atlet" name="nama_atlet" required>
                        </div>
                        <div class="mb-3">
                            <label for="jk" class="form-label">Jenis Kelamin</label>
                            <select class="form-select" id="jk" name="jk" required>
                                <option value="" selected>---</option>
                                <option value="L">Laki-Laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="cabang" class="form-label">Cabang</label>
                            <input type="text" class="form-control" id="cabang" name="cabang" required>
                        </div>
                        <div class="mb-3">
                            <label for="golongan" class="form-label">Golongan</label>
                            <select class="form-select" id="golongan" name="golongan" required>
                                <option value="" selected>---</option>
                                <option value="Usia Dini">Usia Dini</option>
                                <option value="Pra Remaja">Pra Remaja</option>
                                <option value="Remaja">Remaja</option>
                                <option value="Dewasa">Dewasa</option>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label for="kategori" class="form-label">Kategori</label>
                            <select class="form-select" id="kategori" name="kategori" required>
                                <option value="" selected>---</option>
                                <option value="Tanding">Tanding</option>
                                <option value="Seni">Seni</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="kelas_tanding" class="form-label">Kelas Tanding</label>
                            <input type="text" class="form-control" id="kelas_tanding" name="kelas_tanding" required>
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
