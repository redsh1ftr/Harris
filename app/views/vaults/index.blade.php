@extends('layouts.master')

@section('create')
  <div style="font-size:30px">{{link_to_action('VaultsController@create', '+')}}</div><br>
@stop


@section('content')



    <link rel="stylesheet" type="text/css" href="http://www.precisemaintenance.com/Harris/jQ/Ela/css/default.css" />
    <link rel="stylesheet" type="text/css" href="http://www.precisemaintenance.com/Harris/jQ/Ela/css/component.css" />
    <script src="http://www.precisemaintenance.com/Harris/jQ/Ela/js/modernizr.custom.js"></script>
  </head>
  <body>
    <div class="container">
          <div class="main">
        <div id="cbp-contentslider" class="cbp-contentslider">
          <ul>
            @foreach($vaults as $vault)
            <li id="{{$vault->id}}">
              <h3>{{$vault->name}}</h3>
              <div>
                <div class="cbp-content">
                  <p><img src="http://www.precisemaintenance.com/Harris/public/images/{{$vault->image_1}}"></p>
                  <p>{{$vault->price}}</p>
                </div>
              </div>
            </li>
           @endforeach
          </ul>
          <nav>
            @foreach($vaults as $vault)
            <a href="#{{$vault->id}}"><span><img src="http://www.precisemaintenance.com/Harris/public/images/{{$vault->image_1}}" height="50px" width="50px"></span></a>
             @endforeach
          </nav>
        </div>
      </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="http://www.precisemaintenance.com/Harris/jQ/Ela/js/jquery.cbpContentSlider.min.js"></script>
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

