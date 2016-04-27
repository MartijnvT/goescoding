<!doctype html>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    
    <!-- If you delete this meta tag I will drop a Nucleair stike on your head -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Martijn Goes Coding</title>

    <!-- Style sheets -->
    <link rel="stylesheet" href="{{ URL::asset('assets/css/foundation.css') }}">
    
    <!-- Use app.css to overide foundation.css if necessary -->
    <link rel="stylesheet" href="{{ URL::asset('assets/css/app.css') }}">
    <script src="{{ URL::asset('assets/js/vendor/jquery.js') }}"></script>
    <script src="{{ URL::asset('assets/ckeditor/ckeditor.js') }}"></script>
    <script src="{{ URL::asset('assets/js/confirm.js') }}"></script>
</head>
  <body>

  <div class="top-bar">
    <div class="top-bar-left">
      <strong>Martijn Goes Coding Admin Page</strong>  
    </div>
    <div class="top-bar-right">
        <ul class="dropdown menu" data-dropdown-menu>
@if (Auth::guest())
        <li><a href="{{ url('/login') }}">Login</a></li>
@endif
@if (Auth::user())
        <li>
            <a href="#">{{ Auth::user()->name }}</a>
            <ul class="menu">
                <li><a href="{{ url('/logout') }}">Logout</a></li>
            </ul>
        </li>
@endif
      </ul>
    </div>
  </div>

  <div class="row">
  <div class="small-12 medium-12 large-10 columns">
    <div class="primary callout">

@include('layouts.flash')

<!-- Content of the page -->
@yield('content')        
    
    </div>
  </div>
@if (Auth::user())
  <div class="large-2 columns">
    <div class="primary callout">
      
      <h3>Menu</h3>

      <ul class="menu vertical">
        <li><a href="{{ url('/admin') }}">Dashboard</a></li>
        <li><a href="{{ url('/admin/post') }}">Post overview</a></li>
        <li><a href="{{ url('/admin/post/create') }}">Create a post</a></li>
      </ul>
    </div>
  </div>
@endif
</div>

    <script src="{{ URL::asset('assets/js/vendor/what-input.js') }}"></script>
    <script src="{{ URL::asset('assets/js/vendor/foundation.js') }}"></script>
    <script src="{{ URL::asset('assets/js/app.js') }}"></script>

    <script type="text/javascript">
        $('.callout.success').delay(3000).slideUp(300);
    </script>

  </body>
</html>