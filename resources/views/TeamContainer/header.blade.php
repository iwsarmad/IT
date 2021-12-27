
<!doctype html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-TileColor" content="#0061da">
    <meta name="theme-color" content="#1643a3">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <link rel="icon" href="favicon.ico" type="image/x-icon"/>
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />

    <!-- Title -->
    <title>IT</title>
    <link rel="stylesheet" href="{{url("assets/fonts/fonts/font-awesome.min.css")}}">

    <!-- Sidemenu Css -->
    <link href="{{url("assets/plugins/toggle-sidebar/sidemenu.css")}}" rel="stylesheet" />

    <!-- Dashboard Css -->
    <link href="{{url("assets/css/dashboard.css")}}" rel="stylesheet" />

    <!-- Morris.js Charts Plugin -->
    <link href="{{url("assets/plugins/morris/morris.css")}}" rel="stylesheet" />

    <!-- Custom scroll bar css-->
    <link href="{{url("assets/plugins/scroll-bar/jquery.mCustomScrollbar.css")}}" rel="stylesheet" />
    <link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/droid-arabic-kufi" type="text/css"/>


    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <!---Font icons-->
    <link href="{{url("assets/css/icons.css")}}" rel="stylesheet" />

    <style>
        body {
            font-family: 'DroidArabicKufiRegular';
            font-weight: normal;
            font-style: normal;
        }
        h6,h5,h4,h3,h2,h1 {
            font-family: 'DroidArabicKufiRegular';
            font-weight: normal;
            font-style: normal;
        }
        .tcard {
            background-color: grey;
        }



        legend.scheduler-border {
            width:inherit; /* Or auto */
            padding:0 10px; /* To give a bit of padding on the left and right */
            border-bottom:none;
        }


    </style>
</head>
@yield('SideBar')
@yield('content')
@yield('footer')