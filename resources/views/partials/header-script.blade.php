<meta charset="utf-8">
<meta name="description" content="">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="{{ $metaDetails->meta_tag_description ?? 'Ministry of Home Affairs,MHA,NSG,National Security Guard,Armed force,Defence.' }}">
<meta name="keywords" content="{{ $metaDetails->meta_keywords ?? 'History of NSG, National Security Guard' }}">
<meta name="tag" content="{{ $metaDetails->meta_tag ?? 'National Security Guard' }}">
<meta name="baseURL" content="{{ asset('/') }}">
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
<link rel="stylesheet" href="{{ asset('assets-nsg/css/sidebar.css')}}">
<link rel="stylesheet" href="{{ asset('assets-nsg/css/style.css')}}" id="langStyle">
<link rel="stylesheet" type="text/css" id="theme-style" href="">
@stack('post-css')