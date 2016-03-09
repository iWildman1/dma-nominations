<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Demon Media Awards</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="/styles/app.css" media="screen" charset="utf-8">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
			<form id="main-form" class="form-center" action="/api/nominate/" method="post" enctype="multipart/form-data">
				<div class="row">
					<div class="col-md-6">
						<div class="input-group">
						  <input id="firstNum" type="text" class="form-control form-inline" placeholder="" name="first">
						</div>
					</div>
					<div class="col-md-6">
						<div class="input-group">
						  <input id="secondNum" type="text" class="form-control form-inline" placeholder="" name="second">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
					  <div class="input-group">
					    <div class="input-group">
					      <button type="submit" class="btn btn-default" name="button">Go!</button>
					    </div>
					  </div>
					</div>
				</div>
			</form>
		</div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		<script src="/js/init.js"></script>
  </body>
</html>
