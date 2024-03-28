<!DOCTYPE html>
<html lang="fa-IR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{url('/')}}/assets/images/MT-fav.png" type="image/png">
    @yield("title")


    <link rel="stylesheet" href="{{url('/')}}/assets/css/bootstrap.rtl.min.css">
    <link rel="stylesheet" href="{{url('/')}}/assets/css/page.min.css">
</head>
@include("thepublic.layout.otherheader")
@include("thepublic.layout.header-menu")
@yield('main')
@include("thepublic.layout.footer")

