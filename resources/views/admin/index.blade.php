@extends("admin.master")
@section("content")

        <!-- Page Header -->
        <div class="page-header row no-gutters py-4">
            <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">Genel</span>
                <h3 class="page-title">Genel Bilgiler</h3>
            </div>
        </div>
        <!-- End Page Header -->
        <!-- Small Stats Blocks -->
        <div class="row">
            <div class="col-lg col-md-3 col-sm-6 mb-4">
                <div class="stats-small stats-small--1 card card-small">
                    <div class="card-body p-0 d-flex">
                        <div class="d-flex flex-column m-auto">
                            <div class="stats-small__data text-center">
                                <span class="stats-small__label text-uppercase">Bekleyen Rezervasyonlar</span>
                                <h6 class="stats-small__value count my-3">{{\App\Reservation::where("confirm",0)->count()}}</h6>
                            </div>

                        </div>
                        <canvas height="120" class="blog-overview-stats-small-1"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-lg col-md-3 col-sm-6 mb-4">
                <div class="stats-small stats-small--1 card card-small">
                    <div class="card-body p-0 d-flex">
                        <div class="d-flex flex-column m-auto">
                            <div class="stats-small__data text-center">
                                <span class="stats-small__label text-uppercase">Onaylanmış Rezervasyonlar</span>
                                <h6 class="stats-small__value count my-3">{{\App\Reservation::where("confirm",1)->count()}}</h6>
                            </div>

                        </div>
                        <canvas height="120" class="blog-overview-stats-small-2"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-lg col-md-3 col-sm-6 mb-4">
                <div class="stats-small stats-small--1 card card-small">
                    <div class="card-body p-0 d-flex">
                        <div class="d-flex flex-column m-auto">
                            <div class="stats-small__data text-center">
                                <span class="stats-small__label text-uppercase">Siteye Çoğul Giriş Sayısı</span>
                                <h6 class="stats-small__value count my-3">{{\App\Hit::first()->amount}}</h6>
                            </div>

                        </div>
                        <canvas height="120" class="blog-overview-stats-small-3"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-lg col-md-3 col-sm-6 mb-4">
                <div class="stats-small stats-small--1 card card-small">
                    <div class="card-body p-0 d-flex">
                        <div class="d-flex flex-column m-auto">
                            <div class="stats-small__data text-center">
                                <span class="stats-small__label text-uppercase">Siteye Tekil Giriş Sayısı</span>
                                <h6 class="stats-small__value count my-3">{{\App\HitLog::count()}}</h6>
                            </div>

                        </div>
                        <canvas height="120" class="blog-overview-stats-small-4"></canvas>
                    </div>
                </div>
            </div>

            <div class="col-lg col-md-3 col-sm-6 mb-4">
                <div class="stats-small stats-small--1 card card-small">
                    <div class="card-body p-0 d-flex">
                        <div class="d-flex flex-column m-auto">
                            <div class="stats-small__data text-center">
                                <span class="stats-small__label text-uppercase">Siteye Bu gün Giriş Sayısı</span>
                                <h6 class="stats-small__value count my-3">{{\App\HitLog::where("created_at",date("Y-m-d"))->count()}}</h6>
                            </div>

                        </div>
                        <canvas height="120" class="blog-overview-stats-small-4"></canvas>
                    </div>
                </div>
            </div>

        </div>


@endsection