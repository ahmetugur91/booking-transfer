@extends("admin.master")
@section("content")

    <!-- Page Header -->
    <div class="page-header row no-gutters py-4">
        <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
            <span class="text-uppercase page-subtitle">İletişim</span>
            <h3 class="page-title">İletişim</h3>
        </div>
    </div>
    <!-- End Page Header -->
    <!-- Small Stats Blocks -->
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header border-bottom">
                    <h6 class="m-0">İletişim</h6>
                </div>
                <div class="card-body">

                    <form action="{{route("admin.contact.update")}}" method="post">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label>Email</label>
                            <input class="form-control" name="email" value="{{\App\Contact::first()->email}}">
                        </div>

                        <div class="form-group">
                            <label>Telefon</label>
                            <input class="form-control" name="phone" value="{{\App\Contact::first()->phone}}">
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-block btn-success">Düzenle</button>
                        </div>
                    </form>

                </div>
            </div>


        </div>
    </div>



@endsection


