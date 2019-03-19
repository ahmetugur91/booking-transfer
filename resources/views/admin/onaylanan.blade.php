@extends("admin.master")
@section("content")

    <!-- Page Header -->
    <div class="page-header row no-gutters py-4">
        <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
            <span class="text-uppercase page-subtitle">Rezervasyonlar</span>
            <h3 class="page-title">Onaylanan Rezervasyonlar</h3>
        </div>
    </div>
    <!-- End Page Header -->
    <!-- Small Stats Blocks -->
    <div class="row">
        <div class="col">
            <div class="card card-small mb-4">
                <div class="card-header border-bottom">
                    <h6 class="m-0">Rezervasyonlar</h6>
                </div>
                <div class="card-body p-0 pb-3 text-center">
                    <div class="table-responsive">
                    <table class="table mb-0 table-hover table-striped">
                        <thead class="bg-light">
                        <tr>
                            <th scope="col" class="border-0">#</th>
                            <th scope="col" class="border-0">İniş Tarihi</th>
                            <th scope="col" class="border-0">Alınış</th>
                            <th scope="col" class="border-0">Gidiş</th>
                            <th scope="col" class="border-0">Kişi</th>
                            <th scope="col" class="border-0">İsim</th>
                            <th scope="col" class="border-0">Geri Dönüş Tarihi</th>
                            <th scope="col" class="border-0">Alınış</th>
                            <th scope="col" class="border-0">Gidiş</th>
                            <th scope="col" class="border-0"></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach(\App\Reservation::where("confirm",1)->orderBy("id","desc")->get() as $res)
                            <tr>
                                <td>{{$res->id}}</td>
                                <td>{{$res->departure_date}}</td>
                                <td>{{$res->pickup1}}</td>
                                <td>{{$res->drop1}}</td>
                                <td>{{$res->people}}</td>
                                <td>{{$res->name}}</td>
                                <td>{{$res->return_date}}</td>
                                <td>{{$res->pickup2}}</td>
                                <td>{{$res->drop2}}</td>
                                <td>
                                    <a href="{{route("admin.reservation",$res)}}" class="btn btn-sm btn-primary">İncele</a>
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection