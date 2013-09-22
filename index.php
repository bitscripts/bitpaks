<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>BitPaks.com, Discounted Gift Cards for Bitcoins! Up to 25% off!</title> 
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

	<!--link rel="stylesheet/less" href="less/bootstrap.less" type="text/css" /-->
	<!--link rel="stylesheet/less" href="less/responsive.less" type="text/css" /-->
	<!--script src="js/less-1.3.3.min.js"></script-->
	<!--append ‘#!watch’ to the browser URL, then refresh the page. -->
	
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-responsive.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">

  <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
  <![endif]-->

  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="img/apple-touch-icon-57-precomposed.png">
  <link rel="shortcut icon" href="img/favicon.png" type='image/x-icon'>
  
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/scripts.js"></script>
</head>

<body>
<div class="container">
	<div class="row">
		<div class="span12">
			<div class="hero-unit">
				<img src="/img/bitcoin.png" align="right">
				<h1>
					BitPaks.com
				</h1>
				<p>
					Buy discount GIFT CARDS at up to 15% off with BitCoins.  Best Part? NO FEES!	
				</p>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="span4">
			<h2>
				$25 Aber 
			</h2>
			<p>
				BitCoins for a $25 MoneyPak delivered to you in just a few short minutes. Use it to top up; prepaid debit cards that accept money pak, PayPal, and even some banks!<center><img src="img/moneypak.jpg" alt="$25 MoneyPak"></center>
			</p>
			<p>
				<?php
					$file = "/tmp/moneypak25.data";
					$lines = count(file($file));
					if($lines >= 1) {
						echo "<b>"."QTY: "."</b>". $lines;
					} else {
						echo "<b>"."QTY:"."</b>"." Sold Out(BackOrder delivered in 24hrs)";
					}
					
				?>
			</p>
			<p>
				<a class="coinbase-button" data-code="f3c45a077e680310a5d1022f988b925e" data-custom="moneypak25" href="https://coinbase.com/checkouts/f3c45a077e680310a5d1022f988b925e">Pay With Bitcoin</a><script src="https://coinbase.com/assets/button.js" type="text/javascript"></script>
			</p>
		</div>
		<div class="span4">
			<h2>
				$50 MoneyPak
			</h2>
			<p>
				BitCoins for a $50 MoneyPak delivered to you in just a few short minutes. Use it to top up; prepaid debit cards that accept money pak, PayPal, and even some banks!<center><img src="img/moneypak.jpg" alt="$50 MoneyPak"></center>
			</p>
			<p>
				<?php
                                        $file = "/tmp/moneypak50.data";
                                        $lines = count(file($file));
                                        if($lines >= 1) {
                                                echo "<b>"."QTY: "."</b>". $lines;
                                        } else {
                                                echo "<b>"."QTY: "."</b>"."Sold Out(BackOrder delivered in 24hrs)";
                                        }

                                ?>
			</p>
			<p>
				<a class="coinbase-button" data-code="afd378aaaea88288c2b5d15e68cee996" data-custom="moneypak50" href="https://coinbase.com/checkouts/afd378aaaea88288c2b5d15e68cee996">Pay With Bitcoin</a><script src="https://coinbase.com/assets/button.js" type="text/javascript"></script>
			</p>
		</div>
		<div class="span4">
			<h2>
				$100 MoneyPak
			</h2>
			<p>
				BitCoins for a $100 MoneyPak delivered to you in just a few short minutes. Use it to top up; prepaid debit cards that accept money pak, PayPal, and even some banks!<center><img src="img/moneypak.jpg" alt="$100 MoneyPak"></center>
			</p>
			<p>
				<?php
                                        $file = "/tmp/moneypak100.data";
                                        $lines = count(file($file));
                                        if($lines >= 1) {
                                                echo "<b>"."QTY: "."</b>". $lines;
                                        } else {
                                                echo "<b>". "QTY:"."</b>"." Sold Out(BackOrder delivered in 24hrs)";
                                        }

                                ?>
			</p>
			<p>
				<a class="coinbase-button" data-code="842c8451ebf2899cac1f03f1ed59c581" data-custom="moneypak100" href="https://coinbase.com/checkouts/842c8451ebf2899cac1f03f1ed59c581">Pay With Bitcoin</a><script src="https://coinbase.com/assets/button.js" type="text/javascript"></script>
			</p>
		</div>
	</div>
	<div class="row">
		<div class="span6">
			<h2>
				Fast Cash for BitCoins!
			</h2>
				<p>
					Cashout your bitcoins and have your MoneyPak code in as little as a few minutes!  The entire system is automated and you will have your code shortly after payment.  We restock daily!  If we're backordered, you can still purchase! After purchase send an e-mail to <a href="mailto: bitpaks@bitpaks.com">Support</a> with your transaction id and we'll send your code within 24hrs.
			</p>
		</div>
		<div class="span6">
			<h2>
				Need Help?
			</h2>
			<p>
				Contact us at <a href="mailto: bitpaks@bitpaks.com">bitpaks@bitpaks.com</a>, and we'll assist in any way we can.  We will respond to your inquiry within 24hrs.
			</p>	
		</div>
	</div><br><br>
	<div class="row">
		<div class="span12">
			<h4>
				<center>(c) 2013 bitpaks.com <a href="https://www.positivessl.com" style="font-family: arial; font-size: 10px; color: #212121; text-decoration: none;"><img src="https://www.positivessl.com/images-new/PossitiveSSL_tl_trans2.gif" alt="SSL Cerficate" title="SSL Certificate" border="0" align="center"/></a></center> 
			</h4>
		</div>
	</div>
</div>
</body>
<?php include_once("analyticstracking.php") ?>
</html>
