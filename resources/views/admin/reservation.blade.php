@extends("admin.master")
@section("content")

    <!-- Page Header -->
    <div class="page-header row no-gutters py-4">
        <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
            <span class="text-uppercase page-subtitle">Rezervasyon</span>
            <h3 class="page-title">Rezervasyon Detayları</h3>
        </div>
    </div>
    <!-- End Page Header -->
    <!-- Small Stats Blocks -->
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card card-small mb-4">
                <div class="card-header border-bottom">
                    <h6 class="m-0">{{$res->name}}</h6>
                </div>
                <div class="card-body p-0 pb-3">



                        <div class="col-md-12">

                            <div class="form-group">
                                <label>İniş Tarihi: </label>
                                <td>{{$res->departure_date}}</td>
                            </div>

                            <div class="form-group">
                                <label>Alınış: </label>
                                <td>{{$res->pickup1}}</td>
                            </div>

                            <div class="form-group">
                                <label>Gidiş: </label>
                                <td>{{$res->drop1}}</td>
                            </div>


                            <div class="form-group">
                                <label>Kişi: </label>
                                <td>{{$res->people}}</td>
                            </div>


                            <div class="form-group">
                                <label>İsim: </label>
                                <td>{{$res->name}}</td>
                            </div>


                            <div class="form-group">
                                <label>Email: </label>
                                <td>{{$res->email}}</td>
                            </div>


                            <div class="form-group">
                                <label>Telefon: </label>
                                <td>{{$res->phone}}</td>
                            </div>


                            <div class="form-group">
                                <label>Airline: </label>
                                <td>{{$res->airline}}</td>
                            </div>

                            <div class="form-group">
                                <label>Uçuş Kodu: </label>
                                <td>{{$res->flycode}}</td>
                            </div>


                            <div class="form-group">
                                <label>Adres: </label>
                                <td>{{$res->address}}</td>
                            </div>


                            <div class="form-group">
                                <label>Geri Dönüş Tarihi: </label>
                                <td>{{$res->return_date}}</td>
                            </div>




                            <div class="form-group">
                                <label>Alınış: </label>
                                <td>{{$res->pickup2}}</td>
                            </div>

                            <div class="text-center">

                            <div class="form-group">
                                <a href="{{route("admin.setConfirm",$res)}}" class="btn btn-success btn-block" type="submit">Onaylandı Olarak İşaretle</a>
                            </div>

                            <div class="form-group">
                                <a href="{{route("admin.delete",$res)}}" onclick="return confirm('Silmek istiyormusunuz?')" class="btn btn-danger btn-block" type="submit">Bu Rezervasyonu Sil</a>
                            </div>

                            <div class="form-group">
                                <a href="{{route("admin.sendMail",$res)}}" class="btn btn-warning btn-block" type="submit">Bilgilendirme Maili Gönder</a>
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


@endsection