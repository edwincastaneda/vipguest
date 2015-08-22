<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>VIPGUEST - DEMO</title>

        <link href='http://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" href="../libs/common/css/normalize.css">
        <link rel="stylesheet" href="../libs/themes/demo/style.css">
        <script src="../libs/common/js/jquery-2.1.4.min.js"></script>
        <script>
            $(function () {
                $("#sidebar").hover(
                        function () {
                            $(".menu-title").stop(true, true).show('2000');
                            $("#logo").hide().html('VIPGUEST.COM').stop(true, true).fadeIn('2000');
                        }, function () {
                    $(".menu-title").stop(true, true).hide('2000');
                    $("#logo").hide().html('VG').stop(true, true).fadeIn('2000');
                }
                );
            });


        </script>

    </head>

    <body>