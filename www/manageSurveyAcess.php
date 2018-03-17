<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link rel="icon" href="assets/img/icon.png"/>
    <title></title>
    <link rel="stylesheet" type="text/css" href="assets/css/semantic.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/ittech.css" />
</head>
<body class="login">
    <div class="ui middle aligned center aligned grid">
        <div class="column column-login">
            <h2 class="ui teal image header">
                <img src="assets/img/logo.jpg" class="image">
                <div class="content">
                    Log-in to manage survey
                </div>
            </h2>

            <form class="ui large form" method="get">
                <div class="ui stacked segment">
                    <div class="field">
                        <div class="ui left icon input">
                            <input type="password" name="pass" placeholder="Password">
                        </div>
                    </div>
                    <button class="ui fluid large teal submit button">Check</button>
                </div>
            </form>
            
      <?php
      include "db.php";
      $pass =  $_GET['pass'];
      if (isset($pass))
      {
          $search_name = mysql_query("SELECT pass FROM `pass` WHERE (`pass`) LIKE '%$pass%'");
          if (mysql_num_rows($search_name) != 0)
          {
              while ($row = mysql_fetch_assoc($search_name))
              {
                 if ($row[pass] == $pass)
                 {  echo "<a href='resctictSurveyAcess.php'><button type=\"submit\" class=\"ui fluid large teal submit button\" >Login</button></a>"; }
                 else{ echo "Password entered incorrectly!";}
              }
          }
      }
      ?>

            <div class="ui message">
                New to us? <a href="registerSurvey.php">Sign Up</a>
            </div>
        </div>
    </div>
</body>
</html>