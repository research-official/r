
<html lang="en">
<head>
<title>Profile | Research</title>
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link rel="icon" href="./images/icon.png" type="image/gif" sizes="16x16" >
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
<link href="./css/style.css" rel="stylesheet">
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
crossorigin="anonymous" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
crossorigin="anonymous">

<script src="https://apis.google.com/js/platform.js?onload=init" async defer></script>
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <meta name="google-signin-client_id" content="362870749756-p6prp3o8a169qvoqm5b2r3lg6d3ir6jl.apps.googleusercontent.com">
    <meta name="google-site-verification" content="vRwuB6QjwqB8SpQMPFHTWcQvlSent-Szs_lRQpdSf4c"/>
</head>
<body>

 <!-------------------navigation----------------------->

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="profile.html"><img src="./images/icon.png" id="Img" height="50px" width="50px"> | PROFILE</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        
        <a class="nav-link" href="login.php?page=test">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      
    </ul>
   
  </div>
</nav>
<!------------------pre loader-------------------->

<div class="loader_bg"><div class="loader"></div></div>

<div align="center" id="body">
<img src="./images/avatar.png" height="100px" width="100px">


</div>
<div>
<?php$p=$_GET['page'];
$page="$p".".php";
include($page);
?>
</div>

<script src="./js/login.js" type="text/javascript"></script>

</body>

</html>