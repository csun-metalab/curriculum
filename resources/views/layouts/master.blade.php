{{--
  Curriculum Web Service - Backend that delivers CSUN class and course information.
  Copyright (C) 2014-2019 - CSUN META+LAB

  Waldo Web Service is free software: you can redistribute it and/or modify it under the terms
  of the GNU General Public License as published by the Free Software Found
  ation, either version 3 of the License, or (at your option) any later version.

  RetroArch is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY;
  without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR
  PURPOSE.  See the GNU General Public License for more details.

  You should have received a copy of the GNU General Public License along with RetroArch.
  If not, see <http://www.gnu.org/licenses/>.
 --}}
<!DOCTYPE HTML>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
        <meta name="description" content="@yield('description')">
        <title>{{ env('APP_NAME') }} Web Service | @yield('title')</title>
        <link rel="icon" href="//www.csun.edu/sites/default/themes/csun/favicon.ico" type="image/x-icon" />
        <script type="text/javascript" src="{!! url('//use.typekit.net/gfb2mjm.js') !!}"></script>
        <script>try{Typekit.load();}catch(e){}</script>
        <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic" />
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
        <link rel="stylesheet" href="{!! url('css/metaphor.css') !!}" />
        <link rel="stylesheet" href="{!! url('css/tomorrow.css.min') !!}" />
    </head>
    <body>
        <div class="section section--sm">
            <div class="container type--center">
                <h1 class="giga type--thin">Curriculum Web Service</h1>
                <h3 class="h1 type--thin type--gray">Delivering CSUN course information</h3>
            </div>
        </div>
        <div class="main main--metalab" style="min-height: calc(100vh - 130px);">
            <div class="section" id="menu">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3" id="sidebar">
                            @include('layouts.partials.side-nav')
                        </div>
                        <div class="col-md-9" id="page">
                            @yield('content')
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include('layouts.partials.csun-footer')
        <script type="text/javascript" src="{!! url('js/metaphor.js') !!}"></script>
        <script type="text/javascript" src="{!! url('js/run_prettify.js') !!}"></script>
    </body>
</html>
