@extends('master')
@section('title')
Dashboard
@endsection

@section('content')
<section class="section">
    <div class="section-header">
        <div class="row col-12">
            <div class="col-9">
                <h1>Data Soal</h1>
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
                        @foreach ($datakuis as $p)
                            <form action="/soal/{id}/edit-soal-proses" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <input type="hidden" name="id" value="{{ $p->id }}"> <br />
                                <div class="form-group">
                                    <label for="soal">Soal</label>
                                    <input type="text" required="required" class="form-control" name="soal"
                                        value="{{ $p->soal }}">
                                </div>
                                <div class="form-group">
                                    <label for="kategorigame_id">Kategori Game</label>
                                    <input type="text" required="required" class="form-control" name="kategorigame_id"
                                        value="{{ $p->kategorigame_id}}">
                                </div>
                                <div class="form-group">
                                    <label for="a">A</label>
                                    <input type="text" required="required" class="form-control" name="a"
                                        value="{{ $p->a }}">
                                </div>
                                <div class="form-group">
                                    <label for="b">B</label>
                                    <input type="text" required="required" class="form-control" name="b"
                                        value="{{ $p->b }}">
                                </div>
                                <div class="form-group">
                                    <label for="c">C</label>
                                    <input type="text" required="required" class="form-control" name="c"
                                        value="{{ $p->c }}">
                                </div>
                                <div class="form-group">
                                    <label for="d">D</label>
                                    <input type="text" required="required" class="form-control" name="d"
                                        value="{{ $p->d }}">
                                </div>
                                <div class="form-group">
                                    <label for="jawaban">Jawaban</label>
                                    <input type="text" required="required" class="form-control" name="jawaban"
                                        value="{{ $p->jawaban }}">
                                </div>
                                <div class="form-group">
                                    <label for="bobot_soal">Bobot Soal</label>
                                    <input type="text" required="required" class="form-control" name="bobot_soal"
                                        value="{{ $p->bobot_soal }}">
                                </div>
                                <div class="form-group">
                                    <label for="image">Gambar Soal</label>
                                    <input type="file" required="required" class="form-control" name="image"
                                        value="{{ $p->image_name }}">
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