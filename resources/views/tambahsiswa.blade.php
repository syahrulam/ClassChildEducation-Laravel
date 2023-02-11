@extends('master')
@section('title')
Dashboard
@endsection

@section('content')
<section class="section">
    <div class="section-header">
        <div class="row col-12">
            <div class="col-9">
                <h1>Tambah Data Siswa</h1>
            </div>
            <div class="col-3">
                Tanggal Hari ini: <b class="" id="date"></b>
            </div>
        </div>

    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card">
                            <div class="buttons">
                                <button type="button" class="btn btn-primary" onclick="location.href='{{ url('siswa') }}'">
                                    Kembali
                                </button>
                            </div>
                        </div>
                        <form method="post" action="siswa-prosestambah" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="row form-group">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <a class="text-dark">NIS<a class='red'> *</a></a>
                                        <input class="form-control input-bb" type="text" name="nis" id="nis"
                                            value="{{ old('nis') }}" />
                                        <span style="color:red">
                                            @error('nis')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <a class="text-dark">Nama Siswa<a class='red'> *</a></a>
                                        <input class="form-control input-bb" type="text" name="namasiswa" id="namasiswa"
                                            value="{{ old('namasiswa') }}" />
                                        <span style="color:red">
                                            @error('namasiswa')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <a class="text-dark">Kelas<a class='red'> *</a></a>
                                        <input class="form-control input-bb" type="text" name="kelas" id="kelas"
                                            value="{{ old('kelas') }}" />
                                        <span style="color:red">
                                            @error('kelas')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <a class="text-dark">Kata Sandi<a class='red'> *</a></a>
                                        <input class="form-control input-bb" type="password" name="password" id="password"
                                            value="{{ old('password') }}" />
                                        <span style="color:red">
                                            @error('password')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-actions float-right">
                                        <button type="reset" name="Reset" class="btn btn-danger"
                                            onClick="window.location.reload();"><i class="fa fa-times"></i> Batal</button>
                                        <button type="submit" id="btnSubmit" name="btnSubmit" class="btn btn-primary" title="Save"><i
                                                class="fa fa-check"></i> Simpan</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@section('scripts')
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    })
    var dt = new Date();
    document.getElementById("date").innerHTML = dt.toLocaleDateString('en-UK');

</script>
@endsection
@endsection