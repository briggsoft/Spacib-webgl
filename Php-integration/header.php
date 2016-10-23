<div id="header">
<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package surreal reporter
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">


<style>
			body {
				background-color: rgb(0,0,0);
				margin: 0px;
				overflow: hidden;
  
			}

			#info {
				position: absolute;
				top: 0px; width: 100%;
				color: #000000;
				padding: 5px;
				font-family:Monospace;
				font-size:13px;
				font-weight: bold;
				text-align:center;
			}
                        #search {
				position: fixed;
				top: 10px;
				width: 98%;
				text-align: right;
			}
                        #search input {
				color: #ffffff;
				background-color: transparent;
				border: 1px solid #0080ff;
				padding: 15px;
				font-size: 15px;
				text-transform: uppercase;
				-webkit-border-radius: 0px; /* workaround for ios safari */
			}

			#search button {
				color: #0080ff;
				background-color: #000000;
				border: 1px solid #0080ff;
				padding: 15px;
				font-size: 15px;
				text-transform: uppercase;
				cursor: pointer;
			}

			a {
				color: #000000;
			}
			html {
                  overflow: hidden;
}
		</style>


<div id="search"><input id="query" type="text" value=""><button id="button">search</button></div>
<div id="footer"></div>

<div id="container"></div>
<script src="http://surrealreporter.com/wp-content/themes/Spacespib/three.min.js"> </style>


</html>
</div>