<!DOCTYPE html>
<html lang="en">

	<head>
		
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">

	    <script type="text/javascript">
	    	
	    </script>

	    <style type="text/css">

	    	body {
	    		margin-top: 50px;
	    		margin-bottom: 150px;
	    	}

	    </style>

	</head>

	<body style="font-family: 'Comfortaa';">

		<div class="container-fluid">

			<h1 style="border-left: 5px solid #C91F37; padding-left: 5px; margin-bottom: 30px; margin-left: 66px;">Domain <span style="font-size: 20px">example.com</span></h1>

			<div class="row">

				<div class="col-lg-8" style="margin-left: 50px;">
					<div style="padding: 30px 50px; box-shadow: 0 4px 10px 0 rgba(0,0,0,0.2), 0 4px 20px 0 rgba(0,0,0,0.19)">

						<div>
							<h4><b>Domain Authentication</b></h4>
							<p>Let’s add these two TXT records in your DNS settings to send emails with Pepipost.</p>
						</div>

						<div class="row" style="background-color: #F2F2F2; padding: 10px;font-size: 14px;">
							
							<div class="col-lg-2" style="padding: 5px">
								<b>Setting name</b>
							</div>
							<div class="col-lg-1" style="padding: 5px">
								<b>Type</b>
							</div>
							<div class="col-lg-3" style="padding: 5px">
								<b>Host name</b>
							</div>
							<div class="col-lg-3" style="padding: 5px">
								<b>Enter this value</b>
							</div>
							<div class="col-lg-3" style="padding: 5px">
								<b>Current value</b>
							</div>
						</div>

						<div class="row" style="background-color: #ffffff;height: 100px; padding: 10px; font-size: 12px; letter-spacing: 0.3px;">
							
							<div class="col-lg-2" style="padding: 10px">
								SPF
							</div>
							<div class="col-lg-1" style="padding: 10px">
								TXT
							</div>
							<div class="col-lg-3" style="padding: 10px">
								domain.com
							</div>
							<div class="col-lg-3" style="word-wrap: break-word; padding: 10px">
								v=spf1 include:745651.ppspf.net-all
							</div>
							<div class="col-lg-3" style="padding: 10px">
								Not found
							</div>
						</div>

						<div class="row" style="background-color: #F2F2F2;height: 200px; padding: 10px; font-size: 12px; letter-spacing: 0.3px;">
							
							<div class="col-lg-2" style="padding: 10px;">
								DKIM
							</div>
							<div class="col-lg-1" style="padding: 10px;">
								TXT
							</div>
							<div class="col-lg-3" style="word-wrap: break-word;height: 100%;vertical-align: middle;padding: 10px;">
								pepipost._domainkey.domain.com
							</div>
							<div class="col-lg-3" style="word-wrap: break-word;padding: 10px;">
								<div>k=rsa; p=CFGHfgHJCFVghjkcvBNFGhjcfghJKFGhjcvBNJVCbfgHJfghHgugHUIGghuigfHIJvghjigHghjGHghGHvghGHJGhvgHGhiGHJghh/Qp6nIyi5oioyZh+1jDXoCPFa4nLGRNj3Nz785N7b76aTtHmy2wTgR2LFS/Yw5/FghVBfGHFGfghJFghuFGHghjGFHgHJghghGYHghjkVHJghjfg</div>
							</div>
							<div class="col-lg-3" style="padding: 10px;">
								Not found
							</div>
						</div>
					</div>

					<div style="padding: 30px 50px;margin: 50px 0px; box-shadow: 0 4px 10px 0 rgba(0,0,0,0.2), 0 4px 20px 0 rgba(0,0,0,0.19)">

						<div>
							<h4><b>Custom Envelope/ Return Path (Optional)</b></h4>
							<p>We highly recommend this. Custom envelope will be used for tracking links and opens in all your emails. Add CNAME record on your sub-domain.</p>
						</div>

						<div class="row" style="background-color: #FEDBD2; padding: 16px;font-size: 14px;border-radius: 5px;margin-bottom: 20px;">
							<p style="margin-bottom: 0px;">Note: You can set custom envelope only after SPF &amp; DKIM authentication.</p>
						</div>

						<div class="row" style="background-color: #F2F2F2; padding: 10px;font-size: 14px;text-align: center">
							
							<div class="col-lg-1" style="padding: 5px">
								<b>Type</b>
							</div>
							<div class="col-lg-4" style="padding: 5px">
								<b>Host name</b>
							</div>
							<div class="col-lg-4" style="padding: 5px">
								<b>Enter this value</b>
							</div>
							<div class="col-lg-3" style="padding: 5px">
								<b>Current value</b>
							</div>
						</div>

						<div class="row" style="background-color: #ffffff;height: 100px; padding: 10px; font-size: 12px; letter-spacing: 0.3px;  text-align: center">
							
							<div class="col-lg-1" style="padding: 5px">
								CNAME
							</div>
							<div class="col-lg-4" style="padding: 5px;">
								<div class="input-group">
									<input type="text" class="form-control" value="delivery" aria-describedby="basic-addon2" style="font-size: 12px;">
									<span class="input-group-addon" id="basic-addon2" style="font-size: 12px;">domain.com</span>
								</div>
							</div>
							<div class="col-lg-4" style="padding: 5px">
								Ink.pepipost.net
							</div>
							<div class="col-lg-3" style="padding: 5px">
								Not found
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-3" style="margin-right: 50px;">
					<div style="padding: 30px 50px; box-shadow: 0 4px 10px 0 rgba(0,0,0,0.2), 0 4px 20px 0 rgba(0,0,0,0.19)">

						<div style="text-align: center">
							<h4><b>Get Started</b></h4>
						</div>

						<hr>

						<ul style="padding: 0px">
							<ol type="1">
								<strike>
									<li style="color: #BEBEBE"><b>Activate your account</b><br>to confirm this is really you.</li><br>
									<li style="color: #BEBEBE"><b>Add your sending domaint</b><br>so we’ll whitelabel this domain to send emails.</li><br>
								</strike>
									<li><b>Authenticate your sending domain</b><br>to enable Pepipost to send your emails.</li><br>
									<li><b>Send your first mail</b><br>Yay! You're all set to send. Test now</li><br>
							</ol>
						</ul>

					</div>
				</div>

			</div>
			
			<center>
				<form method="post" action="sending.php">
					<button type="submit" class="btn btn-primary" style="background-color: #C91F37;width: 30%;height: 50px; font-size: 18px;letter-spacing: 0.5px;">Next</button>
				</form>
			</center>

		</div>
		
	</body>

</html>