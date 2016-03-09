<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Demon Media Awards</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="styles/app.css" media="screen" charset="utf-8">
    <link rel="stylesheet" type="text/css" href="swal/sweetalert.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="central">
      <img class="mainlogo" src="images/logo.png" alt="Demon Media Awards 2016 Logo" />
      <p>
      </p>
      <form class="main-form" action="api/nominate/index.php" method="post" id="main-form">
        <h2>Demon Media Award Nominations</h2>
        <hr></hr>
          <input type="text" class="form-control half" placeholder="Nominee Name" name="name">
          <select class="half form-control" placeholder="Category" name="category">
            <option value="option">option</option>
          </select>
          <input type="file" class="form-control" name="supporting">
          <textarea class="form-control" name="additional" rows="4" cols="40" placeholder="Additional Info..."></textarea>
          <button type="submit" class="form-button" name="button"> Submit Nomination</button>
      </form>
    </div>

    <script src="swal/sweetalert.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		<script src="js/init.js"></script>
  </body>
</html>
