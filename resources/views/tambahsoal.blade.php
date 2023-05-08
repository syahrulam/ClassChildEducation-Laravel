@extends('master')
@section('title')
Dashboard
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <div class="row col-12">
                <div class="col-9">
                    <h1>Tambah Soal</h1>
                </div>
                <div class="col-3">
                    Tanggal Hari ini: <b class="" id="date"></b>
                </div>
            </div>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h4>Data Soal</h4>
                        </div>
                        <div class="card-body">

                            <form action="{{ url('soal-prosestambah') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="mb-3">
                                    <label for="">Soal</label>
                                    <input type="text" name="soal" required class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="">Kategori</label>
                                    <input type="text" name="kategorigame_id" required class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="">A</label>
                                    <input type="text" name="a" required class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="">B</label>
                                    <input type="text" name="b" required class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="">C</label>
                                    <input type="text" name="c" required class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="">D</label>
                                    <input type="text" name="d" required class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="">Jawaban</label>
                                    <input type="text" name="jawaban" required class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="">Bobot Soal</label>
                                    <input type="text" name="bobot_soal" required class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="">Upload Image</label>
                                    <input type="file" name="image" required class="course form-control">
                                </div>
                                <div class="mb-3">
                                    <button type="submit" class="btn btn-primary">Tambah</button>
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