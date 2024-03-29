<!doctype html>
<html lang=""{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{ (Session::get('layout')=='rtl' ? 'rtl' : 'ltr') }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="@yield('description')"/>
    <title>BIBLIO-ESG | @yield('title')</title>
    
    {{-- <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600;700&display=swap" rel="stylesheet"> --}}
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset( 'assets/css/plugin' . Helper::rlt_ext() . '.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style' . Helper::rlt_ext() . '.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/variables.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}"> --}}

    <link rel="stylesheet" href="{{ asset('css/app' . Helper::rlt_ext() . '.min.css') }}">
    
    

    
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}"> --}}
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/style-ab.css') }}"> --}}

    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/img/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/release.css') }}">
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/4.0.269/pdf_viewer.min.css"> --}}
    <script defer src="{{ asset('assets/js/jsdelivr.js') }}"></script>
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}

    @livewireStyles
    @stack('scripts')
</head>
