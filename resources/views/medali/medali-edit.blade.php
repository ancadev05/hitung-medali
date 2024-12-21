@extends('welcome')

@section('content')
    <div class="container">
        <section class="mt-3">
            <h3 class="text-center">EDIT MEDALI</h3>
            <hr>
            <form action="{{ url('/medali/' . $medali->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="row row-cols-1 row-cols-md-2">
                    <div class="col">
                        <div class="mb-3">
                            <label for="nama_atlet" class="form-label">Nama Atlet</label>
                            <input type="text" class="form-control" id="nama_atlet" name="nama_atlet" value="{{ $medali->nama_atlet }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="jk" class="form-label">Jenis Kelamin</label>
                            <select class="form-select" id="jk" name="jk" required>
                                <option value="L" {{ $medali->jk == 'L' ? 'selected' : '' }}>Laki-Laki</option>
                                <option value="P" {{ $medali->jk == 'P' ? 'selected' : '' }}>Perempuan</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="cabang" class="form-label">Cabang</label>
                            <input type="text" class="form-control" id="cabang" name="cabang" value="{{ $medali->cabang }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="golongan" class="form-label">Golongan</label>
                            <select class="form-select" id="golongan" name="golongan" required>
                                <option value="Usia Dini" {{ $medali->golongan == 'Usia Dini' ? 'selected' : '' }}>Usia Dini</option>
                                <option value="Pra Remaja" {{ $medali->golongan == 'Pra Remaja' ? 'selected' : '' }}>Pra Remaja</option>
                                <option value="Remaja" {{ $medali->golongan == 'Remaja' ? 'selected' : '' }}>Remaja</option>
                                <option value="Dewasa" {{ $medali->golongan == 'Dewasa' ? 'selected' : '' }}>Dewasa</option>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label for="kategori" class="form-label">Kategori</label>
                            <select class="form-select" id="kategori" name="kategori" required>
                                <option value="Tanding" {{ $medali->kategori == 'tanding' ? 'selected' : '' }}>Tanding</option>
                                <option value="Seni" {{ $medali->kategori == 'seni' ? 'selected' : '' }}>Seni</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="kelas_tanding" class="form-label">Kelas Tanding</label>
                            <input type="text" class="form-control" id="kelas_tanding" name="kelas_tanding" value="{{ $medali->kelas_tanding }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="medali" class="form-label">Medali</label>
                            <select class="form-select" id="medali" name="medali" required>
                                <option value="1" {{ $medali->medali == 1 ? 'selected' : '' }}>Emas</option>
                                <option value="2" {{ $medali->medali == 2 ? 'selected' : '' }}>Perak</option>
                                <option value="3" {{ $medali->medali == 3 ? 'selected' : '' }}>Perunggu</option>
                            </select>
                        </div>
                    </div>
                </div>
                
                
                <div class="d-flex justify-content-end">
                    <a href="{{ '/medali' }}" class="btn btn-sm btn-danger me-2">Batal</a>
                    <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
                </div>
            </form>
        </section>
    </div>
@endsection
