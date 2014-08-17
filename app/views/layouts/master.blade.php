<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>RG & GR Harris</title>
	<style>

		.layout{
			height: 100%;
			width: 100%;
			background-image: url('//localhost/Harris/public/images/background.png');
			background-repeat: no-repeat;
			background-size: 85%;
			position: absolute;
			left:0px;
			top:0px;
		}

		

		.topbar {
			-webkit-border-top-left-radius:16px;
			-moz-border-radius-topleft:16px;
			border-top-left-radius:16px;
			-webkit-border-top-right-radius:16px;
			-moz-border-radius-topright:16px;
			border-top-right-radius:16px;
			-webkit-border-bottom-right-radius:16px;
			-moz-border-radius-bottomright:16px;
			border-bottom-right-radius:16px;
			-webkit-border-bottom-left-radius:16px;
			-moz-border-radius-bottomleft:16px;
			border-bottom-left-radius:16px;
			top: 15px;
			left:1%;
			width: 250px;
			min-width: 20%
			height: auto;
			position: absolute;
			float:right;
			text-align: center;
			color:#000000;
			background-color: #ffffff;
		}

		.sidebar {
			-webkit-border-top-left-radius:16px;
			-moz-border-radius-topleft:16px;
			border-top-left-radius:16px;
			-webkit-border-top-right-radius:16px;
			-moz-border-radius-topright:16px;
			border-top-right-radius:16px;
			-webkit-border-bottom-right-radius:16px;
			-moz-border-radius-bottomright:16px;
			border-bottom-right-radius:16px;
			-webkit-border-bottom-left-radius:16px;
			-moz-border-radius-bottomleft:16px;
			border-bottom-left-radius:16px;
			top: 80px;
			left:1%;
			width: 20%;
			height: auto;
			position: relative;
			text-align: center;
			color:#000000;
			background-color: transparent;
		}





	</style>
</head>

<div class="layout">

	<div class="topbar">
		<table width="100%">
			<td>{{link_to_action('CasketsController@index', 'Caskets')}}
			<td>{{link_to_action('VaultsController@index', 'Vaults')}}
			<td>{{link_to_action('InfosController@index', 'Info')}}
			<td>{{link_to_action('ReflectionsController@index', 'Lifes Reflections')}}
		</table>
	</div>
@yield('content')
</div>