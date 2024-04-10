<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="{{ asset('assets-nsg/images/favicon.png')}}" type="image/png" />
<title>@section('title')
        {{ config('app.name') }}
    @show
</title>
<link href="{{ asset('assets-nsg/css/bootstrap.min.css')}}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('assets-nsg/css/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{ asset('assets-nsg/css/aos.css')}}" />
<link rel="stylesheet" href="{{ asset('assets-nsg/css/dataTables.dataTables.css')}}" />
<link rel="stylesheet" href="{{ asset('assets-nsg/css/font-awesome.min.css')}}">
<link rel="stylesheet" href="{{ asset('assets-nsg/css/style.css')}}">
@stack('post-css')