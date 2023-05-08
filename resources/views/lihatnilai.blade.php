@extends('master')
@section('title')
Dashboard
@endsection

@section('content')
<section class="section">
    <div class="section-header">
        <div class="row col-12">
            <div class="col-9">
                <h1>Nilai </h1>
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
                        <div class="row">
                            <div class="col-sm-12">
                                <table id="table-2" class="table table-striped">
                                    <thead>
                                        <tr role="row">
                                            <th>No</th>
                                            <th>NIS Siswa</th>
                                            <th>Nama Siswa</th>
                                            <th>Kategori Game</th>
                                            <th>Nilai</th>
                                            <th>Dibuat</th>
                                        </tr>
                                    </thead>
                                    <tbody id="listMonitor">
                                        @foreach($siswa as $siswa)
                                        @foreach($siswa->game as $game)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$siswa->nis}}</td>
                                            <td>{{$siswa->namasiswa}}</td>
                                            <td>{{$game->kategorigame}}</td>
                                            <td>{{$game->pivot->nilai}}</td>
                                            <td>{{$siswa->created_at}}</td>
                                        </tr>
                                        @endforeach
                                        @endforeach
                                    </tbody>
                                </table>
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

    $("#buttonAdd").on('click', function() {
        $("#modalAdd").modal('show');
    })

</script>
@endsection
@endsection