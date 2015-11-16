<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Site With Authentication Example – Registration Page Handler</title>

  <link rel="stylesheet" href="css/styles.css?v=1.0">

  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  
  <!-- A properly secured site would serve this page over HTTPS (secure HTTP). Why is that? -->
  
</head>

<body>
  <script src="js/scripts.js"></script>
  <h1>Register – Result</h1>
  
  <?php
  // set database connection parameters
  $host = "127.0.0.1";
  $user = "rgordonatrsgc";
  $pass = "";
  $db = "authenticated_example";
  $port = 3306;
  
  // establish the connection
  // (note username and password here is the *database* username and password, not for a user of this website)
  $connection = mysqli_connect($host, $user, $pass, $db, $port) or die(mysql_error());
  
  // Insert the new user into the database
  // This is naive logic – should be doing a check first to see whether the user already exists
  // password_hash() function used to mask the password selected
  //                          PASSWORD_DEFAULT uses bcrypt method for hashing
  //                          See: http://php.net/manual/en/function.password-hash.php
  $provided_username = htmlspecialchars($_POST['username']);
  $provided_password = htmlspecialchars($_POST['password']);
  $hashed_password = password_hash($provided_password, PASSWORD_DEFAULT);
  $query = "INSERT INTO users (username, password) VALUES ('" . $provided_username . "', '" . $hashed_password . "');";
  
  // Check to see if query succeeded
  if (mysqli_query($connection, $query)) {
      echo "<p>Success! The user <strong>" . $provided_username . "</strong> was created.</p>";
  } else {
      echo "<p>Error. The user <strong>" . $provided_username . "</strong> could not be created.</p>";
  }
  
  ?>
  
  <a href="login.php">Go to login page</a>

</body>
</html>