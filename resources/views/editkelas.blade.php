@extends('master')
@section('title')
Dashboard
@endsection

@section('content')
<section class="section">
    <div class="section-header">
        <div class="row col-12">
            <div class="col-9">
                <h1>Data kelas</h1>
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
                        @foreach ($kelas as $p)
                            <form action="/kelas/{id}/edit-kelas-proses" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <input type="hidden" name="id" value="{{ $p->id }}"> <br />
                                <div class="form-group">
                                    <label for="namakelas">Nama kelas</label>
                                    <input type="text" required="required" class="form-control" name="namakelas"
                                        value="{{ $p->namakelas}}">
                                </div>
                                <div class="form-group">
                                    <label for="users_id">Nama Wali</label>
                                    <input type="text" required="required" class="form-control" name="users_id"
                                        value="{{ $p->users_id }}">
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