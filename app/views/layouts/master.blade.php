<!DOCTYPE html>
<html lang="en">
<head>
    <title>Attendance</title>

    @include('partials.meta')

    @include('partials.style')

</head>

<body data-color="grey" class="flat">
<div id="wrapper">
    @include('partials.header')

    @include('partials.nav')

    @include('partials.switcher')

    @include('partials.sidebar')

    <div id="content">
<!--        @include('partials.content_header')-->

<!--        @include('partials.breadcrumb')-->

        @yield('content')
    </div>

    @include('partials.footer')
</div>

@include('partials.script')
</body>
</html>
