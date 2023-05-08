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
                        <div class="card">
                            <div class="buttons">
                                <button type="button" class="btn btn-primary" onclick="location.href='{{ url('soal-tambah') }}'">
                                    Tambah Soal
                                </button>
                            </div>
                        </div>
                        <div class="table-responsive">
                                <div id="table-2_wrapper"
                                    class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <table class="table table-striped dataTable no-footer" id="table-2"
                                                role="grid" aria-describedby="table-2_info">
                                                <thead>
                                                    <tr role="row">
                                                        <th>No</th>
                                                        <th>Soal</th>
                                                        <th>Kategori Game</th>
                                                        <th>A</th>
                                                        <th>B</th>
                                                        <th>C</th>
                                                        <th>D</th>
                                                        <th>Jawaban</th>
                                                        <th>Bobot Soal</th>
                                                        <th>Gambar Soal</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="listUser">
                                                    @foreach($dtKuis as $dtKuis)
                                                    <tr>
                                                        <td>{{$loop->iteration}}</td>
                                                        <td>{{$dtKuis->soal}}</td>
                                                        <td>{{$dtKuis->katagorigame_id}}</td>
                                                        <td>{{$dtKuis->a}}</td>
                                                        <td>{{$dtKuis->b}}</td>
                                                        <td>{{$dtKuis->c}}</td>
                                                        <td>{{$dtKuis->d}}</td>
                                                        <td>{{$dtKuis->jawaban}}</td>
                                                        <td>{{$dtKuis->bobot_soal}}</td>
                                                        <td>{{$dtKuis->image_name}}</td>  
                                                        <td>
                                                            <a href="/soal/{{ $dtKuis->id }}/edit-soal"
                                                                class="btn btn-outline-warning btn-sm">Edit</a>
                                                            <a href="/soal/{{ $dtKuis->id }}/hapus-soal"
                                                                class="btn btn-outline-danger btn-sm">Hapus</a>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-5">
                                            <div class="col-sm-12 col-md-7">
                                                <div class="dataTables_paginate paging_simple_numbers"
                                                    id="table-2_paginate">
                                                    <ul class="pagination">
                                                        <li class="paginate_button page-item previous disabled"
                                                            id="table-2_previous"><a href="#" aria-controls="table-2"
                                                                data-dt-idx="0" tabindex="0"
                                                                class="page-link">Previous</a>
                                                        </li>
                                                        <li class="paginate_button page-item active"><a href="#"
                                                                aria-controls="table-2" data-dt-idx="1" tabindex="0"
                                                                class="page-link">1</a></li>
                                                        <li class="paginate_button page-item next disabled"
                                                            id="table-2_next">
                                                            <a href="#" aria-controls="table-2" data-dt-idx="2"
                                                                tabindex="0" class="page-link">Next</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                         </div>
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