@extends('master')
@section('title')
Dashboard
@endsection

@section('content')
<section class="section">
    <div class="section-header">
        <div class="row col-12">
            <div class="col-9">
                <h1>Data Guru</h1>
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
                        @foreach ($users as $p)
                            <form action="/guru/{id}/edit-guru-proses" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <input type="hidden" name="id" value="{{ $p->id }}"> <br />
                                <div class="form-group">
                                    <label for="NIP">NIP</label>
                                    <input type="text" required="required" class="form-control" name="nip"
                                        value="{{ $p->nip }}">
                                </div>
                                <div class="form-group">
                                    <label for="name">Nama Guru</label>
                                    <input type="text" required="required" class="form-control" name="name"
                                        value="{{ $p->name}}">
                                </div>
                                <div class="form-group">
                                    <label for="role">Role</label>
                                    <input type="text" required="required" class="form-control" name="admin_akses"
                                        value="{{ $p->admin_akses}}">
                                </div>
                                <div class="form-group">
                                    <label for="Email">Email</label>
                                    <input type="text" required="required" class="form-control" name="email"
                                        value="{{ $p->email }}">
                                </div>
                                <div class="form-group">
                                    <label for="password">Kata Sandi</label>
                                    <input type="password" required="required" class="form-control" name="password"
                                        value="{{ $p->password }}">
                                </div>
                                <div class="row">
                                    <div class="col-md-12" style="text-align  : right !important;">
                                        <input type="submit" name="Save" id="save" value="Simpan Data" class="btn btn-primary"
                                            title="Simpan Data">
                                    </div>
                                </div>
                        @endforeach
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

    $("#buttonAdd").on('click', function() {
        $("#modalAdd").modal('show');
    })

</script>
@endsection
@endsection