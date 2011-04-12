<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>A Collage Tool</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<base href="." />

	<style type="text/css">
		* {
			padding: 0;
			margin: 0;
			outline: 0;
			border: 0;
		}
		body {
			background-color: #444;
			font-family: Georgia, serif;
			font-size: 100%;
		}
		#canvas {
			width: 1024px;
			height: 768px;
			position: relative;
			margin: 1em auto;
			border: 1px solid #eee;
			background: white url('bg.png') no-repeat center center;
		}
		#message {
			position: absolute;
			bottom: 3em;
			left: 3em;
			border: 1px solid #bbb;
			padding: 1em;
			padding-left: 0;
			background-color: white;
		}
		ul {
			margin-left: 1em;
			list-style-position: inside;
		}
		li {
			line-height: 150%;
		}
		span.mono {
			font-family: Courier New, Consolas, monospace;
		}
<?php
ini_set('display_errors', 'Off');

$size = Array('w' => 64, 'h' => 64);

if ($s = explode("x", $_GET['s'], 2)) {
	$size['w'] = $s[0] < 2 ? $size['w'] : $s[0];
	$size['h'] = $s[1] < 2 ? $size['h'] : $s[1];
}
?>
		div.block {
			width: <?php echo $size['w']; ?>px;
			height: <?php echo $size['h']; ?>px;
			line-height: <?php echo $size['h']; ?>px;
			color: white;
			background-color: #777;
			position: absolute;
			text-align: center;
			opacity: .8;
			filter: alpha(opacity=80);
		}
	</style>

	<script type="text/javascript">
		window.amount = <?php echo ($_GET['n'] < 1 ? 10 : $_GET['n']) . "\n"; ?>
	</script>
	<script type="text/javascript" src="jquery-1.5.2.min.js"></script>
	<script type="text/javascript" src="jquery-ui-1.8.11.custom.min.js"></script>
	<script type="text/javascript" src="main.js"></script>
</head>
<body>
	<div id="canvas">
		<div id="message">
			<ul>
			<li>arguments can be set by appending to URL</li>
				<li><ul>
				<li><span class="mono">n</span>: the amount of blocks</li>
				<li><span class="mono">s</span>: size in <span class="mono">WIDTHxHEIGHT</span></li>
				<li>e.g: <span class="mono">http://adios.tw/tools/collage/?n=30&amp;s=32x32</span></li>
				</ul></li>
				<li>press <span class="mono">ENTER</span> to output coordinations via <span class="mono">console.log()</span></li>
			</ul>
		</div>
	</div>
</body>
</html>
