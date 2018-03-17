<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link rel="icon" href="assets/img/icon.png"/>
    <title>ITTECH Surveys</title>
    <link rel="stylesheet" type="text/css" href="assets/css/semantic.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/ittech.css" />
</head>
<body>
    <div class="ui borderless main menu">
        <div class="ui container">
            <div href="#" class="header item"><img class="logo" src="assets/img/logo.jpg"></div>
            <a href="#" class="item">Institutional</a>
            <a href="#" class="item">About</a>
        </div>
    </div>

    <div class="ui grid">
        <div class="banner wide column sixteen">
            <p></p>
        </div>
    </div>

    <div class="ui grid container">
        <div class="sixteen wide column">
            <h1 class="ui header">Open surveys <a class="ui button primary new-survey" href="manageSurveyAcess.php"><i class="add square icon"></i> New survey</a></h1>
        </div>
    </div>

    <div class="ui grid container">
        <!-- Survey -->
        <div class="four wide column">
            <div class="ui card">
                <div class="image">
                    <img src="assets/img/one.gif">
                </div>
                <div class="content">
                    <a href="registerSurvey.php" class="header">
                    
        <?
        include "echo.php";
        while ($row = mysql_fetch_assoc($result))
             echo "$row[Identification]";
                        include "move.php";
        ?>  
                        
                    </a>
                    <div class="meta">
                        <span class="date">
                            <strong>
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
                            </strong>
                    </div>
                </div>
                <div class="extra content">
                    <i class="check icon"></i>
        <?
        include "echo.php";
        while ($row = mysql_fetch_assoc($result))
             echo "$row[id]", " Completed surveys";
        ?>
                </div>
            </div>
        </div>
        <!-- /Survey -->

        <!-- Survey -->
        <div class="four wide column">
            <div class="ui card">
                <div class="image">
                    <img src="assets/img/two.jpg">
                </div>
                <div class="content">
                    <a href="survey.php" class="header">Public structure</a>
                    <div class="meta">
                        <span class="date">
                            
                            <strong>
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
                            </strong>
                            
                        </span>
                    </div>
                </div>
                <div class="extra content">
                    <i class="check icon"></i>
        <?
        include "echo.php";
        while ($row = mysql_fetch_assoc($result))
             echo "$row[id]", " Completed surveys";
        ?>
                </div>
            </div>
        </div>
        <!-- /Survey -->

        <!-- Survey -->
        <div class="four wide column">
            <div class="ui card">
                <div class="image">
                    <img src="assets/img/three.png">
                </div>
                <div class="content">
                    <a href="survey.php" class="header">Who is better?</a>
                    <div class="meta">
                        <span class="date">
                        
                            <strong>
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
                            </strong>
                            
                        </span>
                    </div>
                </div>
                <div class="extra content">
                    <i class="check icon"></i>
        <?
        include "echo.php";
        while ($row = mysql_fetch_assoc($result))
             echo "$row[id]", " Completed surveys";
        ?>
                </div>
            </div>
        </div>
        <!-- /Survey -->

        <!-- Survey -->
        <div class="four wide column">
            <div class="ui card">
                <div class="image">
                    <img src="assets/img/four.jpg">
                </div>
                <div class="content">
                    <a href="survey.php" class="header">Relation</a>
                    <div class="meta">
                        <span class="date">
                        
                            <strong>
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
                            </strong>
                            
                        </span>
                    </div>
                </div>
                <div class="extra content">
                    <i class="check icon"></i>
        <?
        include "echo.php";
        while ($row = mysql_fetch_assoc($result))
             echo "$row[id]", " Completed surveys";
        ?>
                </div>
            </div>
        </div>
        <!-- /Survey -->
    </div>

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