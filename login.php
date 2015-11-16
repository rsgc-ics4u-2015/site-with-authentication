<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Site With Authentication Example – Login Page</title>

  <link rel="stylesheet" href="css/styles.css?v=1.0">

  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  
  <!-- A properly secured site would serve this page over HTTPS (secure HTTP). Why is that? -->
  
</head>

<body>
  <script src="js/scripts.js"></script>

  <h1>Log in</h1>
  
  <p>Log in to your account:</p>
  
  <form action="loginHandler.php" method="post">
    Username:<br/>
    <input type="text" name="username" value=""><br/>
    Password:<br/>
    <input type="password" name="password" value=""><br/>
    <input type="submit" value="Submit">
  </form>
  
</body>
</html>