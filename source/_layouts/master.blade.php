<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="referrer" content="always">
    <link rel="canonical" href="{{ $page->getUrl() }}">
    <meta name="description" content="{{ $page->description }}">
    <title>{{ $page->title }}</title>
    {{--
    <link rel="stylesheet" href="{{ trim($page->getUrl(),'/') }}{{ mix('css/main.css', 'assets/build') }}">
    --}}
    <style>
        {{ inline(mix('css/main.css', 'assets/build')) }}
    </style>
</head>
<body>
@yield('body')
</body>
</html>
