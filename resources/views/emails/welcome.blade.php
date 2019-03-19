


<html>
<head>


</head>
<body>


<div id="main" style="width: 100%;">

    <div id="top" style="width: 100%">
        <div id="div1" style="float:left;width: 33%;min-height: 100px;">
            <center>
                <img style="max-width: 100%;max-height: 100px" src="http://cyprustransfer.org/logo/ibo-logo-deneme2.png">
            </center>
        </div>
        <div id="div2" style="float:left;width: 33%;min-height: 100px;text-align: center;padding-top: 20px;">
            <div><h4 style="margin: 0;padding: 0">CYPRUS TRANSFER</h4></div>
            <div><h4 style="margin: 0;padding: 0">BOOKING</h4></div>
            <div><h6 style="margin: 0;padding: 0">-VOUCHER-</h6></div>
        </div>
        <div id="div3" style="float:left;width: 33%;min-height: 100px;text-align: center;">
            <div><span style="margin: 0;padding: 0;color:red"><b>E-MAIL</b></span></div>
            <div><span style="margin: 0;padding: 0"><b>info@cyprustransfer.org</b></span></div>
            <div><span style="margin: 0;padding: 0;color:red"><b>PHONE</b></span></div>
            <div><span style="margin: 0;padding: 0"><b>+905488209787</b></span></div>
        </div>
        <div style="clear: both"></div>
    </div>

    <div style="width: 100%;height: 1px;background:black;margin-top:10px;margin-bottom: 10px"></div>


    <div id="middle" style="width: 100%;">
        <center>
            <table style="width: 80%">
                <tr>
                    <td>Name: {{$name}}</td>
                    <td>Email: {{$email}}</td>
                </tr>

                <tr>
                    <td>Phone: {{$phone}}</td>
                    <td></td>
                </tr>

                <tr>
                    <td style="width: 50%">From: {{$pickup1}}</td>
                    <td style="width: 50%">To: {{$drop1}}</td>
                </tr>

                <tr>
                    <td>Departure Date: {{$departure_date}}</td>
                    <td></td>
                </tr>

                <tr>
                    <td>Return Date: {{$return_date}}</td>
                    <td></td>
                </tr>

                <tr>
                    <td style="width: 50%">Passangers: {{$people}}</td>
                    <td style="width: 50%">Flight No: {{$flycode}}</td>
                </tr>

                <tr>
                    <td>Return: @if($pickup2) YES @endif</td>
                    <td></td>
                </tr>

                <tr>
                    <td>One Way: @if(!$pickup2) YES @endif</td>
                    <td></td>
                </tr>

                <tr>
                    <td>Address: {{$address}}</td>
                    <td></td>
                </tr>


            </table>
        </center>
    </div>

    <div style="width: 100%;height: 1px;background:black;margin-top:10px;margin-bottom: 10px"></div>

    <div id="middle2" style="width: 100%;">
        <center>
            <table style="width: 80%" cellpadding="15">
                <thead>
                <tr>
                    <th>Transfer Details:</th>
                    <th style="border-bottom: 1px solid black">AIRLINES</th>
                    <th style="border-bottom: 1px solid black">TRANSMISSION</th>
                    <th style="border-bottom: 1px solid black">NUMBER OF PASSGENGER</th>
                    <th style="border-bottom: 1px solid black">DEPARTURE AIRPORT</th>
                    <th style="border-bottom: 1px solid black">ARRIVAL AIRPORT</th>
                    <th style="border-bottom: 1px solid black">DEPARTURE TIME&DATE</th>
                    <th style="border-bottom: 1px solid black">ARRIVAL TIME&DATE</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>ONE WAY:</td>
                    <td>{{$airline}}</td>
                    <td>NO</td>
                    <td>{{$people}}</td>
                    <td>{{$pickup1}}</td>
                    <td></td>
                    <td></td>
                    <td>{{$departure_date}}</td>
                </tr>
                <tr>
                    <td>RETURN:</td>
                    <td>{{$airline}}</td>
                    <td>NO</td>
                    <td>{{$people}}</td>
                    <td></td>
                    <td>{{$pickup2}}</td>
                    <td>{{$return_date}}</td>
                    <td></td>
                </tr>
                </tbody>


            </table>
        </center>
    </div>

    <div style="width: 100%;height: 1px;background:black;margin-top:10px;margin-bottom: 10px"></div>

    <div id="footer" style="width: 100%;">
        <center>
            <div style="width: 80%;text-align: left">
                <div>
                    <u>Other Details:</u>
                </div>
                <div>
                    <ul>
                        <li>You can pay the price to your transfer driver.</li>
                        <li>If there is any problem situation, you can call +905488209798</li>
                        <li>When you land the airport our crew will welcome with your name at the outside of airport</li>
                        <li>If you want to change or cancel your reservation, you have to inform us until one hour left to your flight land</li>
                        <li>Contactor on behalf of the service: This voucher, arranged on our behalf, read the service</li>
                    </ul>
                </div>
            </div>
        </center>
    </div>

</div>


</body>
</html>