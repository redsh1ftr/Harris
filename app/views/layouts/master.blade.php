<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>RG & GR Harris</title>
	<style>



		.layout{
			height: 100%;
			width: 100%;
			background-image: url('http://www.precisemaintenance.com/Harris/public/images/background.png');
			background-repeat: no-repeat;
			background-size: 85%;
			position: absolute;
			left:0px;
			top:0px;
			overflow: scroll;
		}

		.createlink {
			position: relative;
			float:right;
			height:auto;
			width: auto;
			background-color: transparent;
			color:#ffffff;
			font-size: 6px;
		}

		.create {
			color:#f0f0f0;
			font-size: 30px;
		}


			.button {
				background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, transparent), color-stop(1, #dfdfdf));
				background:-moz-linear-gradient(top, transparent 5%, #dfdfdf 100%);
				background:-webkit-linear-gradient(top, transparent 5%, #dfdfdf 100%);
				background:-o-linear-gradient(top, transparent 5%, #dfdfdf 100%);
				background:-ms-linear-gradient(top, transparent 5%, #dfdfdf 100%);
				background:linear-gradient(to bottom, transparent 5%, #dfdfdf 100%);
				filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='transparent', endColorstr='#dfdfdf',GradientType=0);
				background-color:transparent;
				-moz-border-radius:6px;
				-webkit-border-radius:6px;
				border-radius:6px;
				display:inline-block;
				cursor:pointer;
				width: 80%;
				color:#000000;
				font-family:arial;
				font-size:18px;
				font-weight:bold;
				padding:6px 12px;
				text-decoration:none;
				text-shadow:0px 1px 0px #ffffff;
			}
			.button:hover {
				background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #dfdfdf), color-stop(1, transparent));
				background:-moz-linear-gradient(top, #0a4d15 5%, transparent 100%);
				background:-webkit-linear-gradient(top, #0a4d15 5%, transparent 100%);
				background:-o-linear-gradient(top, #0a4d15 5%, transparent 100%);
				background:-ms-linear-gradient(top, #0a4d15 5%, transparent 100%);
				background:linear-gradient(to bottom, #0a4d15 5%, transparent 100%);
				filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#dfdfdf', endColorstr='transparent',GradientType=0);
				background-color:transparent;
			}
			.button:active {
				position:relative;
				top:1px;
			}

		.content {
			position: relative;
			top:20px;
			height:70%;
			width: 70%;
			max-width: 70%;
			left:1%;
		}

		.main-image {
	      width: 380px;
	      margin-bottom: 0.75em;
	    }
	    .thumbnails li {
	      display: inline;
	      margin: 0 10px 0 0;
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
			top: 1px;
			left:1%;
			width: 50%;
			min-width: 20%
			height: auto;
			position: relative;
			text-align: center;
			background-color: transparent;
		}

		.table1 {
			-webkit-column-count:3;
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
			top: 20px;
			left:1%;
			width: 20%;
			height: auto;
			position: relative;
			text-align: center;
			color:#000000;
			background-color: transparent;
		}

		a, a:visited {
			text-decoration:none

		}



	</style>
</head>

<div class="layout">
	<div class="createlink">
		@yield('create')
	</div>

	<div class="topbar">
		<table width="100%">
			<td><a class="button"{{link_to_action('CasketsController@index', 'Caskets')}}
			<td><a class="button"{{link_to_action('VaultsController@index', 'Vaults')}}
			<td><a class="button"{{link_to_action('InfosController@index', 'Info')}}
			<td><a class="button"{{link_to_action('ReflectionsController@index', 'Lifes Reflections')}}
		</table>
	</div>

	<div class="content">
		@yield('content')
	</div>
</div>