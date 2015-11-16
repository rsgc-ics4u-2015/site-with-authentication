<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Site With Authentication Example – Login Page Handler</title>

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
  
  // Find the user's stored password in the database
  // Compare it to the provided password
  // When it's the same – that is a successful login
  $provided_username = htmlspecialchars($_POST['username']);
  $provided_password = htmlspecialchars($_POST['password']);
  $query = "SELECT password FROM users WHERE username = ('" . $provided_username . "');";
  
  // Get results
  $result = mysqli_query($connection, $query);
  
  // Compare the provided password to the stored password
  if ($result == false) {
      echo "<p>An error occured.</p>";
  } else {
      if (mysqli_num_rows($result) == 0) {
          echo "<p>Error. The user <strong>" . $provided_username . "</strong> was not found.</p>";
      } else {
          // We have a result, now do the comparison of passwords
          $row = mysqli_fetch_assoc($result);
          $stored_password = $row['password'];
          if (password_verify($provided_password, $stored_password) == true) {
              echo "<p>Correct password for <strong>" . $provided_username . "</strong>.</p>";
          } else {
              echo "<p>Incorrect password for user <strong>" . $provided_username . "</strong>.</p>";
          }
      }
  }

  ?>
  
  <a href="login.php">Return to login page</a>

</body>
</html>