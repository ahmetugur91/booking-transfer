@extends("admin.master")
@section("content")

    <!-- Page Header -->
    <div class="page-header row no-gutters py-4">
        <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
            <span class="text-uppercase page-subtitle">Hakkımızda</span>
            <h3 class="page-title">Hakkımızda Sayfası</h3>
        </div>
    </div>
    <!-- End Page Header -->
    <!-- Small Stats Blocks -->
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header border-bottom">
                    <h6 class="m-0">Türkçe Hakkımızda Sayfası</h6>
                </div>
                <div class="card-body">

                    <form action="{{route("admin.aboutus.update")}}" method="post">
                        {{csrf_field()}}
                        <div class="form-group">
                            <textarea class="form-control" name="text_tr">{{\App\AboutUs::first()->text_tr}}</textarea>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-block btn-success">Düzenle</button>
                        </div>
                    </form>

                </div>
            </div>


        </div>
    </div>



    <div class="row " style="margin-top:10px">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header border-bottom">
                    <h6 class="m-0">İngilizce Hakkımızda Sayfası</h6>
                </div>
                <div class="card-body">

                    <form action="{{route("admin.aboutus.update")}}" method="post">
                        {{csrf_field()}}
                        <div class="form-group">
                            <textarea class="form-control" name="text_en">{{\App\AboutUs::first()->text_en}}</textarea>
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

@section("js")
    <script>
        tinymce.init({
            selector: 'textarea',
            height: 500,
            theme: 'modern',
            plugins: 'print preview fullpage powerpaste searchreplace autolink directionality advcode visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists textcolor wordcount tinymcespellchecker a11ychecker imagetools mediaembed  linkchecker contextmenu colorpicker textpattern help',
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
