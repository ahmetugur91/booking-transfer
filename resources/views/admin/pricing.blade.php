@extends("admin.master")
@section("content")

    <!-- Page Header -->
    <div class="page-header row no-gutters py-4">
        <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
            <span class="text-uppercase page-subtitle">Fiyatlar</span>
            <h3 class="page-title">Bölgeler Arası Fiyatlar</h3>
        </div>
    </div>
    <!-- End Page Header -->
    <!-- Small Stats Blocks -->
    <div class="row">
        <div class="col-md-12">
            <div class="card card-small mb-4">
                <div class="card-header border-bottom">
                    <h6 class="m-0">Fiyatlar</h6>
                </div>
                <div class="card-body p-0 pb-3">


                    <div class="col-md-12">

                        <form action="{{route("admin.pricing.create")}}" method="post">
                            {{csrf_field()}}

                            <div class="form-group">
                                <label>Nerden</label>
                                <textarea name="from" class="form-control" placeholder="Nereden" required></textarea>
                            </div>

                            <div class="form-group">
                                <label>Nereye</label>
                                <textarea name="to" class="form-control" placeholder="Nereye" required></textarea>
                            </div>

                            <div class="form-group">
                                <label>Vito Fiyat</label>
                                <input name="price1" class="form-control" placeholder="Örneğin: $10" required>
                            </div>

                            <div class="form-group">
                                <label>Sprinter Fiyat</label>
                                <input name="price2" class="form-control" placeholder="Örneğin: $10" required>
                            </div>


                            <div class="form-group">
                                <button type="submit" class="btn btn-success btn-block">Ekle</button>
                            </div>

                        </form>


                    </div>


                </div>
            </div>

            <div class="card card-small mb-4">
                <div class="card-header border-bottom">
                    <h6 class="m-0">Fiyat Listesi</h6>
                </div>
                <div class="card-body p-0 pb-3">


                    <div class="col-md-12">

                        <table class="table table-hover table-striped">
                            <thead>
                            <tr>
                                <th>Nerden</th>
                                <th>Nereye</th>
                                <th>Vito Fiyat</th>
                                <th>Sprinter Fiyat</th>
                                <th>

                                </th>
                                <th>

                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach(\App\Pricing::orderBy("from","asc")->orderBy("to","asc")->get() as $pricing)
                                <tr>
                                    <form action="{{route("admin.pricing.edit",$pricing)}}" method="post">
                                        {{csrf_field()}}
                                        <td>
                                            <textarea name="from" class="form-control" required>{{$pricing->from}}</textarea>
                                        </td>
                                        <td>
                                            <textarea name="to" class="form-control" required>{{$pricing->to}}</textarea>
                                        </td>
                                        <td>
                                            <input name="price1" value="{{$pricing->price1}}" class="form-control" required>
                                        </td>

                                        <td>
                                            <input name="price2" value="{{$pricing->price2}}" class="form-control" required>
                                        </td>

                                        <td>
                                            <button type="submit" class="btn btn-info btn-sm">Düzenle</button>
                                        </td>
                                        <td>
                                            <a href="{{route("admin.pricing.delete",$pricing)}}" class="btn btn-danger btn-sm">Sil</a>
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

@section("js")

    <script>
        tinymce.init({
            selector: 'textarea',
            entity_encoding: "raw",
            apply_source_formatting: false,                //added option
            verify_html: false,                            //added option
            height: 10,
            forced_root_block: "",
            theme: 'modern',
            toolbar1: 'formatselect | bold italic strikethrough forecolor backcolor | link | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent  | removeformat',
            image_advtab: true,
            templates: [
                {title: 'Test template 1', content: 'Test 1'},
                {title: 'Test template 2', content: 'Test 2'}
            ],
            content_css: [
                '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
                '//www.tinymce.com/css/codepen.min.css'
            ]
        });
    </script>

@endsection