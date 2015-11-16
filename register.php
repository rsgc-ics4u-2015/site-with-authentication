<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Site With Authentication Example</title>

  <link rel="stylesheet" href="css/styles.css?v=1.0">

  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  
  <!-- A properly secured site would serve this page over HTTPS (secure HTTP). Why is that? -->
  
</head>

<body>
  <script src="js/scripts.js"></script>

  <h1>Register</h1>
  
  <p>Create an account:</p>
  
  <form action="registerHandler.php" method="post">
    Select a username:<br/>
    <input type="text" name="username" value=""><br/>
    Select a password:<br/>
    <input type="password" name="password" value=""><br/>
    <input type="submit" value="Submit">
  </form>
  
</body>
</html>