@extends('layouts.master')

@section('create')
  <div class="create">{{link_to_action('CasketsController@create', '+')}}</div><br>
@stop


@section('content')



    <link rel="stylesheet" type="text/css" href="//localhost/Harris/jQ/Ela/css/default.css" />
    <link rel="stylesheet" type="text/css" href="//localhost/Harris/jQ/Ela/css/component.css" />
    <script src="//localhost/Harris/jQ/Ela/js/modernizr.custom.js"></script>
  </head>
  <body>
    <div class="container">
          <div class="main">
        <div id="cbp-contentslider" class="cbp-contentslider">
          <ul>
            @foreach($caskets as $casket)
            <li id="{{$casket->id}}">
              <h3><a href="//localhost/Harris/public/caskets/{{$casket->id}}">{{$casket->name}}</a></h3>
              <div>
                <div class="cbp-content">
                  <p><img src="//localhost/Harris/public/images/{{$casket->image_1}}"></p>
                  <p>{{$casket->price}}</p>
                </div>
              </div>
            </li>
           @endforeach
          </ul>
          <nav>
            @foreach($caskets as $casket)
            <a href="#{{$casket->id}}"><span><img src="//localhost/Harris/public/images/{{$casket->image_1}}" height="50px" width="50px"></span></a>
             @endforeach
          </nav>
        </div>
      </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="//localhost/Harris/jQ/Ela/js/jquery.cbpContentSlider.min.js"></script>
    <script>
      $(function() {
        /*
        - how to call the plugin:
        $( selector ).cbpContentSlider( [options] );
        - options:
        {
          // default transition speed (ms)
          speed : 500,
          // default transition easing
          easing : 'ease-in-out',
          // current item's index
          current : 0
        }
        - destroy:
        $( selector ).cbpContentSlider( 'destroy' );
        */

        $( '#cbp-contentslider' ).cbpContentSlider();
      });
    </script>
  </body>
</html>






@stop

