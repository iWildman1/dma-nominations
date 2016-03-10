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
      <img class="mainlogo" src="images/logo-noglow-2.png" alt="Demon Media Awards 2016 Logo" />
      <p>
      </p>
      <form class="main-form" action="api/nominate/index.php" method="post" id="main-form">
        <h2>Demon Media Award Nominations</h2>
        <hr></hr>
          <input type="text" class="form-control half" placeholder="Nominee Name" name="name">
          <select class="half form-control" placeholder="Category" name="category">
            <option value="The Demon and Demon Online - Best Newcomer">The Demon and Demon Online - Best Newcomer</option>
            <option value="The Demon and Demon Online - Best Male">The Demon and Demon Online - Best Male</option>
            <option value="The Demon and Demon Online - Best Female">The Demon and Demon Online - Best Female</option>
            <option value="The Demon - Best Article">The Demon - Best Article</option>
            <option value="The Demon - Best Section">The Demon - Best Section</option>
            <option value="Demon Online - Best Article">Demon Online - Best Article</option>
            <option value="Demon Online - Best Section">Demon Online - Best Section</option>
            <option value="DemonFM - Best Newcomer">DemonFM - Best Newcomer</option>
            <option value="DemonFM - Best Male">DemonFM - Best Male</option>
            <option value="DemonFM - Best Female">DemonFM - Best Female</option>
            <option value="DemonFM - Best BTS Male">DemonFM - Best BTS Male</option>
            <option value="DemonFM - Best BTS Female">DemonFM - Best BTS Female</option>
            <option value="DemonFM - Best Specialist Show">DemonFM - Best Specialist Show</option>
            <option value="DemonFM - Best Entertainment Show">DemonFM - Best Entertainment Show</option>
            <option value="DemonFM - Best Strand">DemonFM - Best Strand</option>
            <option value="Demon TV - Best Newcomer">Demon TV - Best Newcomer</option>
            <option value="Demon TV - Best On-Screen Male">Demon TV - Best On-Screen Male</option>
            <option value="Demon TV - Best On-Screen Female">Demon TV - Best On-Screen Female</option>
            <option value="Demon TV - Best Off-Screen Male">Demon TV - Best Off-Screen Male</option>
            <option value="Demon TV - Best Off-Screen Female">Demon TV - Best Off-Screen Female</option>
            <option value="Demon TV - Best Show">Demon TV - Best Show</option>
            <option value="Demon TV - Best Individual Video">Demon TV - Best Individual Video</option>
            <option value="Collaborative Project of the Year">Collaborative Project of the Year</option>
          </select>
          <input type="file" class="form-control" name="supporting">
          <input type="file" class="form-control" name="document">
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
