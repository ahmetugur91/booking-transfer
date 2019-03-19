<!doctype html>
<html class="no-js h-100" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Admin</title>
    <meta name="description" content="A high-quality &amp; free Bootstrap admin dashboard template pack that comes with lots of templates and components.">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" id="main-stylesheet" data-version="1.0.0" href="/styles/shards-dashboards.1.0.0.min.css">
    <link rel="stylesheet" href="/styles/extras.1.0.0.min.css">
    <script async defer src="https://buttons.github.io/buttons.js"></script>

</head>
<body class="h-100">


<div class="container-fluid">
    <div class="row">
        <!-- Main Sidebar -->
        <aside class="main-sidebar col-12 col-md-3 col-lg-2 px-0">
            <div class="main-navbar">
                <nav class="navbar align-items-stretch navbar-light bg-white flex-md-nowrap border-bottom p-0">
                    <a class="navbar-brand w-100 mr-0" href="#" style="line-height: 25px;">
                        <div class="d-table m-auto">
                            <img id="main-logo" class="d-inline-block align-top mr-1" style="max-width: 25px;" src="/images/shards-dashboards-logo.svg" alt="Shards Dashboard">
                            <span class="d-none d-md-inline ml-1">Admin</span>
                        </div>
                    </a>
                    <a class="toggle-sidebar d-sm-inline d-md-none d-lg-none">
                        <i class="material-icons">&#xE5C4;</i>
                    </a>
                </nav>
            </div>

            <div class="nav-wrapper">
                <ul class="nav flex-column">

                    <li class="nav-item">
                        <a class="nav-link " href="{{route("admin.index")}}">
                            <i class="material-icons">vertical_split</i>
                            <span>Genel</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " href="{{route("admin.bekleyen")}}">
                            <i class="material-icons">vertical_split</i>
                            <span>Bekleyenler</span>
                        </a>
                    </li>




                    <li class="nav-item">
                        <a class="nav-link " href="{{route("admin.onaylanan")}}">
                            <i class="material-icons">vertical_split</i>
                            <span>Onaylananlar</span>
                        </a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link " href="{{route("admin.regions")}}">
                            <i class="material-icons">vertical_split</i>
                            <span>Bölgeler</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " href="{{route("admin.pricing")}}">
                            <i class="material-icons">vertical_split</i>
                            <span>Fiyatlar</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " href="{{route("admin.aboutus")}}">
                            <i class="material-icons">vertical_split</i>
                            <span>Hakkımızda Sayfası</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " href="{{route("admin.contact")}}">
                            <i class="material-icons">vertical_split</i>
                            <span>İletişim Bilgileri</span>
                        </a>
                    </li>



                </ul>
            </div>
        </aside>
        <!-- End Main Sidebar -->
        <main class="main-content col-lg-10 col-md-9 col-sm-12 p-0 offset-lg-2 offset-md-3">
            <div class="main-navbar sticky-top bg-white">
                <!-- Main Navbar -->
                <nav class="navbar align-items-stretch navbar-light flex-md-nowrap p-0">
                    <form action="#" class="main-navbar__search w-100 d-none d-md-flex d-lg-flex">
                        <div class="input-group input-group-seamless ml-3">
                            <div class="input-group-prepend">
                                <div class="input-group-text">

                                </div>
                            </div>

                        </div>
                    </form>
                    <ul class="navbar-nav border-left flex-row ">

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-nowrap px-3" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                <img class="user-avatar rounded-circle mr-2" style="width: 45px;height: 45px" src="http://cyprustransfer.org/logo/ibo-logo-deneme2.png" alt="User Avatar">
                                <span class="d-none d-md-inline-block">{{Auth::user()->name}}</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-small">


                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-danger" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                    <i class="material-icons text-dan   ger">&#xE879;</i> Çıkış Yap </a>
                            </div>
                        </li>
                    </ul>
                    <nav class="nav">
                        <a href="#" class="nav-link nav-link-icon toggle-sidebar d-md-inline d-lg-none text-center border-left" data-toggle="collapse" data-target=".header-navbar" aria-expanded="false"
                           aria-controls="header-navbar">
                            <i class="material-icons">&#xE5D2;</i>
                        </a>
                    </nav>
                </nav>
            </div>
            <!-- / .main-navbar -->
            <div class="main-content-container container-fluid px-4">

                @if(session("message"))
                    <div class="row" style="margin-top: 20px">
                        <div class="col-md-12">
                            <div class="alert alert-{{session("type")}}">{{session("message")}}</div>
                        </div>
                    </div>
                @endif

                @yield("content")
            </div>

        </main>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
<script src="https://unpkg.com/shards-ui@latest/dist/js/shards.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Sharrre/2.0.1/jquery.sharrre.min.js"></script>
<script src="/scripts/extras.1.0.0.min.js"></script>
<script src="/scripts/shards-dashboards.1.0.0.min.js"></script>
<script src="/scripts/app/app-blog-overview.1.0.0.js"></script>
<script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=0ph0rfiiht9i1805rswgmmq3834533wxfxhyigctnx64fu0w"></script>
@yield("js")

</body>
</html>