@extends('master')
@section('title')
Dashboard
@endsection

@section('content')
<section class="section">
    <div class="section-header">
        <div class="row col-12">
            <div class="col-9">
                <h1>Kategori Game</h1>
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
                    <div class="card-header">
                        <h4>Kateogir Game</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <table id="table-2" class="table table-striped">
                                    <thead>
                                        <tr role="row">
                                            <th>No</th>
                                            <th>Kategori Game</th>
                                            <th>Keterangan</th>
                                            <th>Dibuat</th>
                                            <th>Diperbarui</th>
                                        </tr>
                                    </thead>
                                    <tbody id="listMonitor">
                                        @foreach($vargame as $b)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$b->kategorigame}}</td>
                                            <td>{{$b->keterangan}}</td>
                                            <td>{{$b->created_at}}</td>
                                            <td>{{$b->updated_at}}</td>
                                        </tr>
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
    </div>
</section>
@section('scripts')
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    })
    $("#table-2").DataTable();

    var dt = new Date();
    document.getElementById("date").innerHTML = dt.toLocaleDateString('en-UK');

</script>
@endsection
@endsection