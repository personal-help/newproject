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
                    Log-in to access the restrict survey
                </div>
            </h2>

            <form class="ui large form" method="get">
                <div class="ui stacked segment">
                    <div class="field">
                        <div class="ui left icon input">
                            <i class="envelope icon"></i>
                            <input type="text" name="email" placeholder="E-mail address">
                        </div>
                    </div>
                    <button type="submit" class="ui fluid large teal submit button">Access</button>
                </div>
            </form>
    <?php
      include "db.php";
      $email =  $_GET['email'];
      if (isset($email))
      {
          $search_name = mysql_query("SELECT email FROM `login` WHERE (`email`) LIKE '%$email%'");
          if (mysql_num_rows($search_name) != 0)
          {
              while ($row = mysql_fetch_assoc($search_name))
              {
                 if ($row[email] == $email)
                 {  echo "<a href='survey.php'><button type=\"submit\" class=\"ui fluid large teal submit button\"> Login </button> </a>"; }
                 else{ echo "Email not found!";}
              }
          }
      }
      ?>

        </div>
    </div>
</body>
</html>