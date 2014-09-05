<!DOCTYPE html>
<html lang="en">
<head>

@include('includes.head')

</head>
<body data-color="grey" class="flat">
<div id="wrapper">
    <div id="header">
        @include('includes.header')
    </div>

    <div>
        @include('includes.navigator')
    </div>



    <div id="switcher">
        @include('includes.switcher')
    </div>

    <div id="sidebar">

    @include('includes.sidebar')

    </div>


    <div id="content">
        <div id="content-header" class="mini">
            @yield('main')
        </div>
    </div>

    <footer class="row">
        <div id="footer" class="col-xs-12">
            @include('includes.footer')
    </footer>


    </body>
    </html>
