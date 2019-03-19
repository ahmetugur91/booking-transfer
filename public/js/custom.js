$("#btnStep1").click(function (e) {

        e.preventDefault();

        let departure_date, pickup1, drop1, return_date, pickup2, drop2, people, oneway, twoway; // return

        departure_date = $("#departure_date").val();
        pickup1 = $("#pickup1").val();
        drop1 = $("#drop1").val();
        people = $("#people").val();
        return_date = $("#return_date").val();
        pickup2 = $("#pickup2").val();
        drop2 = $("#drop2").val();

        oneway = $("#oneway").is(":checked");
        twoway = $("#return").is(":checked");


        if (!departure_date) {
            $('#departure_date').closest("div").css('border', '3px solid green');
            return;
        }

        if (!pickup1) {
            $('#pickup1').closest("div").css('border', '3px solid green');
            return;
        }

        if (!drop1) {
            $('#drop1').closest("div").css('border', '3px solid green');
            return;
        }

        if (!people) {
            $('#people').closest("div").css('border', '3px solid green');
            return;
        }

        if (twoway) {
            if (!pickup2) {
                $('#pickup2').closest("div").css('border', '3px solid green');
                return;
            }

            if (!drop2) {
                $('#drop2').closest("div").css('border', '3px solid green');
                return;
            }

            if (!return_date) {
                $('#return_date').closest("div").css('border', '3px solid green');
                return;
            }
        }


        $("#step1").fadeOut("1000", function () {
            $("#step3").fadeIn("fast", function () {
                //   $("img").fadeIn("fast");
                // $("html, body").animate({scrollTop: $('#step2').offset().top - 70}, 1000);
            });

        });

    }
);

/*
$("area").click(function (e) {
    e.preventDefault();
    let location = "";
    let title = "";
    location = $(this).attr('location');
    title = $(this).attr('alt');

    if (confirm("Did you select " + title + " ?")) {
        $("#step2").fadeOut("1000", function () {
            $("#step3").fadeIn("fast");
        });
    }
});
*/


$("#btnStep3").click(function (e) {
    e.preventDefault();

    let departure_date, pickup1, drop1, return_date, pickup2, drop2, people, oneway, twoway; // return
    let name, email, phone, address, flycode;

    name = $("#name").val();
    email = $("#email").val();
    phone = $("#phone").val();
    address = $("#address").val();
    flycode = $("#flycode").val();

    if (!name) {
        $('#name').css('border', '3px solid green');
        return;
    }

    if (!email) {
        $('#email').css('border', '3px solid green');
        return;
    }

    if (!phone) {
        $('#phone').css('border', '3px solid green');
        return;
    }

    if (!flycode) {
        $('#flycode').css('border', '3px solid green');
        return;
    }

    if (!address) {
        $('#address').css('border', '3px solid green');
        return;
    }




    let data;

    departure_date = $("#departure_date").val();
    pickup1 = $("#pickup1").val();
    drop1 = $("#drop1").val();
    return_date = $("#return_date").val();
    pickup2 = $("#pickup2").val();
    drop2 = $("#drop2").val();
    people = $("#people").val();
    oneway = $("#oneway").is(":checked");
    twoway = $("#return").is(":checked");


    data = {
        departure_date: $("#departure_date").val(),
        pickup1: $("#pickup1").val(),
        drop1: $("#drop1").val(),
        return_date: $("#return_date").val(),
        pickup2: $("#pickup2").val(),
        drop2: $("#drop2").val(),
        people: $("#people").val(),
        oneway: $("#oneway").is(":checked"),
        twoway: $("#return").is(":checked"),
        name: $("#name").val(),
        email: $("#email").val(),
        phone: $("#phone").val(),
        address: $("#address").val(),
        flycode: $("#flycode").val(),
        airline: $("#airline").val(),
    };


    $.post("/mailapi", data, function (result) {

    });


    $("#step3").fadeOut("1000", function () {
        $("#step4").fadeIn("fast", function () {
            $("html, body").animate({scrollTop: $('#step4').offset().top - 70}, 1000);
        });
    });
});






$("#btnBack").click(function (e) {
    e.preventDefault();


    $("#step3").fadeOut("1000", function () {
        $("#step1").fadeIn("fast", function () {
            //   $("img").fadeIn("fast");
            // $("html, body").animate({scrollTop: $('#step2').offset().top - 70}, 1000);
        });

    });

});