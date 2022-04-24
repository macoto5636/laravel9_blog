@section('head')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')">
    <meta property="og:type" content="article" />
    <meta property="og:title" content="@yield('description')" />
    <meta property="og:description" content="@{{$description}}" />
    <meta property="og:site_name" content="サイト名" />
    <meta property="og:url" content="サイトURL" />
    <meta property="og:image" content="サムネイル画像の URL" />
    <meta name="twitter:card" content="summary_large_image" />
@endsection