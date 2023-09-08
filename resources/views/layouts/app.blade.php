@extends('templates.layout')

@section('base_styles')
  @vite(['resources/css/app.css'])
  <style>
    .navbar {
      padding: 50px !important;
    }

    .navbar-brand {
      font-family: 'SFUIText';
      font-weight: 700;
      color: #5cfe7f !important;
    }

    .right a {
      position: relative;
      color: #5cfe7f !important;
    }

  </style>
  @section('styles') @show
@endsection

@section('base_content')
  @include('layouts.navigation_header')
  <div id="app">
    @yield('content')
  </div>
@endsection

@section('base_scripts')
  @vite(['resources/js/app.js'])
  @section('scripts') @show
@endsection