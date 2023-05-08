@extends('master')
@section('title')
Dashboard
@endsection

@section('content')
<section class="section">
    <div class="section-header">
        <div class="row col-12">
            <div class="col-9">
                <h1>Tambah Data Guru</h1>
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
                                <button type="button" class="btn btn-primary" onclick="location.href='{{ url('guru') }}'">
                                    Kembali
                                </button>
                            </div>
                        </div>
                        <form method="post" action="guru-prosestambah" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="row form-group">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <a class="text-dark">NIP<a class='red'> *</a></a>
                                        <input class="form-control input-bb" type="text" name="nip" id="nip"
                                            value="{{ old('nip') }}" />
                                        <span style="color:red">
                                            @error('nip')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <a class="text-dark">Nama Guru<a class='red'> *</a></a>
                                        <input class="form-control input-bb" type="text" name="name" id="name"
                                            value="{{ old('name') }}" />
                                        <span style="color:red">
                                            @error('name')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <a class="text-dark">Email<a class='red'> *</a></a>
                                        <input class="form-control input-bb" type="text" name="email" id="email"
                                            value="{{ old('email') }}" />
                                        <span style="color:red">
                                            @error('email')
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
                                <div class="form-group col-6">
                                    <label>Pilih Roles</label>
                                    <div class="input-group">
                                        <select class="form-control select choose" name="admin_akses" id="admin_akses">
                                            <option value="">-- Hak Akses --</option>
                                            <option value="0">Guru</option>
                                            <option value="1">Administrator</option>
                                        </select>
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