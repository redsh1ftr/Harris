@extends('layouts.master')

@section('create')
	<div class="create">{{link_to_action('ReflectionsController@create', '+')}}</div><br>
@stop

@section('content')





		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js" type="text/javascript"></script>
		<link rel="stylesheet" href="http://www.precisemaintenance.com/Harris/jQ/gallery/css/prettyPhoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8" />
		<script src="http://www.precisemaintenance.com/Harris/jQ/gallery/js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
		
		<style type="text/css" media="screen">
			* { margin: 0; padding: 0; }
			
			body {
				background: #ffffff;
				font: 62.5%/1.2 Arial, Verdana, Sans-Serif;
				padding: 0 20px;
			}
			
			h1 { font-family: Georgia; font-style: italic; margin-bottom: 10px; }
			
			h2 {
				font-family: Georgia;
				font-style: italic;
				margin: 25px 0 5px 0;
			}
			
			p { font-size: 1.2em; }
			
			ul li { display: inline; }
			
			.wide {
				border-bottom: 1px #000 solid;
				width: 4000px;
			}
			
			.fleft { float: left; margin: 0 20px 0 0; }
			
			.cboth { clear: both; }
			
			#main {
				background: #fff;
				margin: 0 auto;
				padding: 30px;
				width: 1000px;
			}
		</style>

<body>
		<div id="main">
			<h1>Life's Reflections</h1>
		
			<ul class="gallery clearfix">
				
					@foreach($reflections as $reflect)
				<li><a href="http://www.precisemaintenance.com/Harris/public/images/{{$reflect->image_1}}" rel="prettyPhoto[gallery1]" title="{{$reflect->name}}">
					<img src="http://www.precisemaintenance.com/Harris/public/images/{{$reflect->image_1}}" height="800%" width="30%" alt="{{$reflect->name}}" class="custom"></a>
				</li>
					@endforeach
			</div>
					

			</ul>


	
			<script type="text/javascript" charset="utf-8">
			$(document).ready(function(){
				$("area[rel^='prettyPhoto']").prettyPhoto();
				
				$(".gallery:first a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'normal',theme:'light_square',slideshow:3000, autoplay_slideshow: false});
				$(".gallery:gt(0) a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'fast',slideshow:10000000, hideflash: true});
		
				$("#custom_content a[rel^='prettyPhoto']:first").prettyPhoto({
					custom_markup: '<div id="map_canvas" style="width:260px; height:265px"></div>',
					changepicturecallback: function(){ initialize(); }
				});

				$("#custom_content a[rel^='prettyPhoto']:last").prettyPhoto({
					custom_markup: '<div id="bsap_1259344" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6"></div><div id="bsap_1237859" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6" style="height:260px"></div><div id="bsap_1251710" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6"></div>',
					changepicturecallback: function(){ _bsap.exec(); }
				});
			});
			</script>


@stop

