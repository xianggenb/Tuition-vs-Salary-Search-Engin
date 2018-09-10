<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tuition vs Salary</title>
	<style type="text/css">
		html, body, div, span, object, iframe,
		h1, h2, h3, h4, h5, h6, p, blockquote, pre,
		abbr, address, cite, code,
		del, dfn, em, img, ins, kbd, q, samp,
		small, strong, sub, sup, var,
		b, i,
		dl, dt, dd, ol, ul, li,
		fieldset, form, label, legend,
		table, caption, tbody, tfoot, thead, tr, th, td {
			margin:0;
			padding:0;
			border:0;
			outline:0;
			font-size:100%;
			vertical-align:baseline;
			background:transparent;
		}
		
		body {
			margin:0;
			padding:0;
			font:12px/15px "Helvetica Neue",Arial, Helvetica, sans-serif;
			color: #555;
			background-color: #fefefe;
		}
		
		a {color:#666;}
		
		#content {width:90%; max-width:1400px; margin:6% auto 0;}

		
		table {
			overflow:hidden;
			border:1px solid #d3d3d3;
			background:#fefefe;
			width:90%;
			margin:5% auto 0;
			-moz-border-radius:5px; /* FF1+ */
			-webkit-border-radius:5px; /* Saf3-4 */
			border-radius:5px;
			-moz-box-shadow: 0 0 4px rgba(0, 0, 0, 0.2);
			-webkit-box-shadow: 0 0 4px rgba(0, 0, 0, 0.2);
		}
		
		th, td {padding:18px 28px 18px; text-align:center; }
		
		th {padding-top:22px; text-shadow: 1px 1px 1px #fff; background:#e8eaeb;}
		
		td {border-top:1px solid #e0e0e0; border-right:1px solid #e0e0e0;}
		
		tr.odd-row td {background:#f6f6f6;}
		
		td.first, th.first {text-align:left}
		
		td.last {border-right:none;}

		
		td {
			background: -moz-linear-gradient(100% 25% 90deg, #fefefe, #f9f9f9);
			background: -webkit-gradient(linear, 0% 0%, 0% 25%, from(#f9f9f9), to(#fefefe));
		}
		
		tr.odd-row td {
			background: -moz-linear-gradient(100% 25% 90deg, #f6f6f6, #f1f1f1);
			background: -webkit-gradient(linear, 0% 0%, 0% 25%, from(#f1f1f1), to(#f6f6f6));
		}
		
		th {
			background: -moz-linear-gradient(100% 20% 90deg, #e8eaeb, #ededed);
			background: -webkit-gradient(linear, 0% 0%, 0% 20%, from(#ededed), to(#e8eaeb));
		}

		tr:first-child th.first {
			-moz-border-radius-topleft:5px;
			-webkit-border-top-left-radius:5px; /* Saf3-4 */
		}
		
		tr:first-child th.last {
			-moz-border-radius-topright:5px;
			-webkit-border-top-right-radius:5px; /* Saf3-4 */
		}
		
		tr:last-child td.first {
			-moz-border-radius-bottomleft:5px;
			-webkit-border-bottom-left-radius:5px; /* Saf3-4 */
		}
		
		tr:last-child td.last {
			-moz-border-radius-bottomright:5px;
			-webkit-border-bottom-right-radius:5px; /* Saf3-4 */
		}
	
		h2{
			width: 100%;
			text-align: center;
			margin: 50px 0;
			font-size: 22px;
		}

		.tol{
			position: absolute;
			left:110px;
			top: 100px;
		}
		.tor{
			position: absolute;
			right: 200px;
			top: 100px;
		}
		.bol{
			position: absolute;
			left:150px;
			top: 200px;
		}
	
		.bor{
			position: absolute;
			right:400px;
			top: 200px;
		}	

		.search{
			position: relative;
			margin: 0 auto;
			width: 1000px;
			height: 300px;
			/*border: 1px solid #000;*/
		}


	</style>
</head>
<body>
<div id="content">	
	<h2>Tuition vs Salary--Does your college worth?</h2>
	<form action="<?php echo U(search);?>" method="post">
	<div class="search">
		<div class="tol">
			<!-- Search by institution -->
			Institutation name　<input type="text"  name='instnm'>
		</div>
		
		<div class="tor">
			<!-- Search by City -->
			City name,
			first letter
			capitalized　<input type="text" name='city'>
		</div>

		<div class="bol">
				<!-- Search by Tuition fee -->
			<span>Tuition fee</span>　 
			<select name="fee" id="">		
				<option value=""></option>
				<option value="1"><=5000</option>
				<option value="2">5000-10000</option>
				<option value="3">10000-20000</option>
				<option value="4">20000-25000</option>
				<option value="5">25000-30000</option>
				<option value="6">30000-35000</option>
				<option value="7">>=35000</option>
			</select>
		</div>

		<div class="bor">
			<input type="submit" value="submit">
		</div>
	</div>
	</form>
</div>
</body>
</html>