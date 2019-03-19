@extends("master")
@section("title",trans("site.about_us"))
@section("content")


    <!-- Page info -->
    <header class="site-title color">
        <div class="wrap">
            <div class="container">
                <h1>{{trans("site.about_us")}}</h1>
                <nav role="navigation" class="breadcrumbs">
                    <ul>
                        <li><a href="/">{{trans("site.homepage")}}</a></li>
                        <li>{{trans("site.about_us")}}</li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>



    <div class="wrap">
        <div class="row">
            <div class="col-md-12">

                <div class="card">
                    <div class="card-header">{{trans("site.about_us")}}</div>
                    <div class="card-body">
                        @if(App::getLocale() == "tr")
                            {!!  \App\AboutUs::first()->text_tr !!}
                        @endif

                            @if(App::getLocale() == "en")
                                {!!  \App\AboutUs::first()->text_en !!}
                            @endif

                    </div>
                </div>


            </div>
        </div>
    </div>


@endsection