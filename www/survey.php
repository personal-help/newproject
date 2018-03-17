<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link rel="icon" href="assets/img/icon.png"/>
    <title>Survey Title - ITTECH Surveys</title>
    <link rel="stylesheet" type="text/css" href="assets/css/semantic.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/ittech.css" />
</head>
<body>
    <div class="ui borderless main menu">
        <div class="ui container">
            <div href="#" class="header item">
                <img class="logo" src="assets/img/logo.jpg">
            </div>
            <a href="#" class="item">Institutional</a>
            <a href="#" class="item">About</a>
        </div>
    </div>

   <div class="ui grid container">
        <div class="sixteen wide column">
            <form class="ui form">
                <div class="ui grid container">
                    <div class="four wide column">
                        <img class="ui medium image" src="assets/img/one.gif">
                    </div>
                    <div class="six wide column">
                        <h4 class="ui dividing header">Survey title</h4>
                        <p> 
    <?
    include "echo.php";
        while ($row = mysql_fetch_assoc($result))
             echo "$row[STitle]";
    ?> 
                       </p>
                        <h4 class="ui dividing header">Survey Description</h4>
                        <p>
    <?
    include "echo.php";
        while ($row = mysql_fetch_assoc($result))
             echo "$row[SDescription]";
    ?>
                        </p>
                        <h4 class="ui dividing header">Type of Survey</h4>
                        <p>
   
                        </p>
                    </div>
                    <div class="six wide column">
                        <h4 class="ui dividing header">Employees</h4>
                        <ul class="ui list">
                            <li>Nevil  </li>
                            <li>Tom Redl</li>
                            <li>Harry Nevis</li>
                        </ul>
                        <h4 class="ui dividing header">Period of Survey</h4>
                        <p><strong>
    <?
    include "echo.php";
        while ($row = mysql_fetch_assoc($result))
             echo "$row[StartDate]";
    ?>     
                        </strong> to <strong>
    <?
    include "echo.php";
        while ($row = mysql_fetch_assoc($result))
             echo "$row[EndDate]";
    ?> 
                        </strong></p>
                    </div>

                    <div class="sixteen wide column">
                        <h4 class="ui dividing header">Questions</h4>
                        <div class="field">
                            <label>
    <?
    include "echo.php";
        while ($row = mysql_fetch_assoc($result))
             echo "$row[Question]";
    ?> 
                            </label>
                            <input type="text" placeholder="Your answer">
                        </div>
                        
                        <div class="field">
                            <label>
    <?
    include "echo.php";
        while ($row = mysql_fetch_assoc($result))
             echo "$row[Question]";
    ?>                            
                            </label>
                            <input type="text" placeholder="Your answer">
                        </div>
                        <div class="field">
                            <label>What's better?</label>
                            <select>
                                <option>Select</option>
                                <option>Money</option>
                                <option>Time</option>
                                <option>Love</option>
                            </select>
                        </div>

                        <button class="ui button"><a href="index.php">Cancel</a></button>
                        <button class="ui button primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div><br><br><br><br><br>  

    <!-- Footer -->
    <div class="ui inverted vertical footer segment">
        <div class="ui center aligned container">
            <div class="ui horizontal inverted small divided link list">
                <a class="item" href="#">Site Map</a>
                <a class="item" href="#">Contact Us</a>
                <a class="item" href="#">Terms and Conditions</a>
                <a class="item" href="#">Privacy Policy</a>
            </div>
        </div>
    </div>
    <!-- /Footer -->
</body>
</html>