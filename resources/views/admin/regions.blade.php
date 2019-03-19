@extends("admin.master")
@section("content")

    <!-- Page Header -->
    <div class="page-header row no-gutters py-4">
        <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
            <span class="text-uppercase page-subtitle">Bölgeler</span>
            <h3 class="page-title">Bölgeler</h3>
        </div>
    </div>
    <!-- End Page Header -->
    <!-- Small Stats Blocks -->
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card card-small mb-4">
                <div class="card-header border-bottom">
                    <h6 class="m-0">Bölge Ekle</h6>
                </div>
                <div class="card-body p-0 pb-3">
                    <div class="col-md-12">

                        <form action="{{route("admin.regions.create")}}" method="post">
                            {{csrf_field()}}

                            <div class="form-group">
                                <label>Bölge Adı</label>
                                <input class="form-control" name="name" placeholder="Bölge Adı Giriniz" required>
                            </div>

                            <div class="form-group">
                                <label>Tür</label>
                                <select class="form-control" name="isAirport" required>
                                    <option value="0">Bölge</option>
                                    <option value="1">Havalimanı</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-block btn-success">Bölgeyi Ekle</button>
                            </div>

                        </form>


                    </div>
                </div>
            </div>

        </div>
    </div>







    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card card-small mb-4">
                <div class="card-header border-bottom">
                    <h6 class="m-0">Fiyat Listesi</h6>
                </div>
                <div class="card-body p-0 pb-3">


                    <div class="col-md-12">

                        <table class="table table-hover table-striped">
                            <thead>
                            <tr>
                                <th>Bölge Adı</th>
                                <th>Tür</th>
                                <th>

                                </th>
                                <th>

                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach(\App\Region::all() as $region)
                                <tr>
                                    <form action="{{route("admin.region.edit",$region)}}" method="post">
                                        {{csrf_field()}}
                                        <td>
                                            <input class="form-control" value="{{$region->name}}" name="name" placeholder="Bölge Adı Giriniz" required>
                                        </td>
                                        <td>
                                            <select class="form-control" name="isAirport" required>
                                                <option value="0" @if($region->isAirport == 0) selected @endif>Bölge</option>
                                                <option value="1" @if($region->isAirport == 1) selected @endif>Havalimanı</option>
                                            </select>
                                        </td>
                                        <td>
                                            <button type="submit" class="btn btn-info btn-sm">Düzenle</button>
                                        </td>
                                        <td>
                                            <a href="{{route("admin.regions.delete",$region)}}" class="btn btn-danger btn-sm">Sil</a>
                                        </td>
                                    </form>
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