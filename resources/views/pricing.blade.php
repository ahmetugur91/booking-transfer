@extends("master")
@section("title",trans("site.pricing"))
@section("content")

    <?php

    $open = simplexml_load_file('http://www.tcmb.gov.tr/kurlar/today.xml');

    //print_r($open);

    // dolar
    $usd_alis = $open->Currency[0]->BanknoteBuying;
    $usd_satis = $open->Currency[0]->BanknoteSelling;

    // euro
    $euro_alis = $open->Currency[11]->BanknoteBuying;
    $euro_satis = $open->Currency[11]->BanknoteSelling;

    // stg
    $stg_alis = $open->Currency[4]->BanknoteBuying;
    $stg_satis = $open->Currency[4]->BanknoteSelling;

    // echo 'USD: '.$usd_alis.'<br />EURO: '.$euro_alis.'<br />STG: '.$stg_alis;

    ?>


    <!-- Page info -->
    <header class="site-title color">
        <div class="wrap">
            <div class="container">
                <h1>{{trans("site.pricing")}}</h1>
                <nav role="navigation" class="breadcrumbs">
                    <ul>
                        <li><a href="/">{{trans("site.homepage")}}</a></li>
                        <li>{{trans("site.pricing")}}</li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <style>


        table tr td {
            font-size: 12px;
            font-family: 'Open Sans', sans-serif;
        }
    </style>

    <div class="wrap">
        <div class="row">
            <div class="col-md-12">

                <div class="card">

                    <div class="card-body">
                        <?php
                        $list = ["ERCAN", "LARNAKA", "BAF ( PAPHOS )"];

                        ?>
                        @foreach($list as $item)

                            @foreach(\App\Pricing::where("from",$item)->orderBy("from","asc")->orderBy("to","asc")->groupBy("from")->get() as $bolge)

                                <table class="hover" style="font-size: 14px;font-family: 'Open Sans', sans-serif;">
                                    <tbody>
                                    <tr>
                                        <th> {{$bolge->from}} <!--{{trans("site.from")}}--> </th>
                                        <th>{{trans("site.to")}}</th>
                                        <th colspan="4">
                                            <centerhomecon>
                                                <img style="width: 50px;display: block"
                                                     src="http://kibristransfer.pro/images/tables/vito.png">
                                                <span style="display: block">Vito (1-7 Pax)</span>
                                                {{trans("site.price")}}
                                            </centerhomecon>
                                        </th>
                                        <th colspan="4" style="color:white">
                                            <center>
                                                <img style="width: 50px;display: block"
                                                     src="http://kibristransfer.pro/images/tables/minibus.png">
                                                <span style="display: block">Sprinter (1-17 Pax)</span>
                                                {{trans("site.price")}}
                                            </center>
                                        </th>
                                    </tr>

                                    @foreach(\App\Pricing::where("from",$bolge->from)->orderBy("to","asc")->get() as $pricing)
                                        <tr>
                                            <td>{!! $pricing->from !!}</td>
                                            <td>{!! $pricing->to !!}</td>
                                            <td>
                                                {{$pricing->price1}}
                                                <?php
                                                preg_match('#(\d*).*#', $pricing->price1, $r);
                                                $fiyat = $r[1];
                                                ?>
                                            </td>
                                            <td>{{$fiyat * $stg_alis}} TL</td>
                                            <td>{{($fiyat * $stg_alis) / $usd_alis}}
                                                USD
                                            </td>
                                            <td>{{($fiyat * $stg_alis) / $euro_alis}}
                                                EUR
                                            </td>
                                            <td>
                                                {{$pricing->price2}}
                                                <?php
                                                preg_match('#(\d*).*#', $pricing->price2, $r);
                                                $fiyat = $r[1];
                                                ?>
                                            </td>
                                            <td>{{$fiyat * $stg_alis}} TL</td>
                                            <td>{{($fiyat * $stg_alis) / $usd_alis}}
                                                USD
                                            </td>
                                            <td>{{($fiyat * $stg_alis) / $euro_alis}}
                                                EUR
                                            </td>

                                        </tr>
                                    @endforeach


                                    </tbody>
                                </table>
                            @endforeach
                        @endforeach

                    </div>
                </div>


            </div>
        </div>
    </div>


@endsection