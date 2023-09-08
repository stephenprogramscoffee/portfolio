<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Stephen's Portfolio @hasSection ('title') | @section('title') @show @endif </title>

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

        @font-face {
          font-family: 'Cerebri';
          src: url({{ URL::to('/fonts/Cerebri-Sans-Regular.ttf') }});
        }

        @font-face {
          font-family: 'SFUIText';
          src: url({{ URL::to('/fonts/SFUIText-Regular.ttf') }});
        }
        
        @font-face {
          font-family: 'SFUIText';
          src: url({{ URL::to('/fonts/SFUIText-Medium.ttf') }});
          font-weight: 500;
        }

        @font-face {
          font-family: 'SFUIText';
          src: url({{ URL::to('/fonts/SFUIText-Semibold.ttf') }});
          font-weight: 600;
        }

        @font-face {
          font-family: 'SFUIText';
          src: url({{ URL::to('/fonts/SFUIText-Bold.ttf') }});
          font-weight: 700;
        }
    </style>

    @section('base_styles') @show
  </head> 
  <body>
    @section('base_content') @show
    @section('base_scripts') @show
  </body>
</html>