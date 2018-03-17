<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link rel="icon" href="assets/img/icon.png"/>
    <title>Register Survey - ITTECH Surveys</title>
    <link rel="stylesheet" type="text/css" href="assets/css/semantic.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/ittech.css" />
</head>
<body>
   
   <form class="ui form" action="resctictSurveyAcess.php" method="post">
       
   
   
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
           
                <h4 class="ui dividing header">About Survey</h4>
                <div class="three fields">
                    <div class="field">
                        <label>Identification</label>
        
                        <input name="Identification" type="text" placeholder="Identification"/>
                    </div>
                    <div class="field">
                        <label>Password</label>
                        <input name="Password" type="text" placeholder="Password">
                    </div>
                    <div class="field">
                        <label>Survey Title</label>
                        <input name="STitle" tye="text" placeholder="Survey Title">
                    </div>
                </div>
                <div class="field">
                    <label>Survey Description</label>
                    <textarea name="SDescription" placeholder="Survey Description" rows="2"></textarea>
                </div>
                <div class="field">
                    <label>Type of Survey</label>
                    <select>
                        <option>Select</option>
                        <option>Public Survey</option>
                        <option>Restrict Survey</option>
                    </select>
                </div>

                <div class="ui cards">
                    <div class="card card-employees">
                        <div class="content">
                            <div class="header">Employees Access</div>
                            <div class="two fields">
                                <div class="field">
                                    <label>Filter by Name</label>
                                    <input name="FName" type="text" placeholder="Filter by Name">
                                </div>

                                <div class="field">
                                    <label>Filter by Company</label>
                                    <input name="FCompany" type="text" placeholder="Filter by Company">
                                </div>
                            </div>

                            <div class="description">
                                <h4 class="ui dividing header">Employees</h4>
                                <div class="ui very relaxed horizontal list">
                                    <div class="item">
                                        <div class="content">
                                            <div class="ui checkbox">
                                                <input name="Employees" type="checkbox">
                                                <label>John Doe</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="content">
                                            <div class="ui checkbox">
                                                <input type="checkbox">
                                                <label>Nill Direg</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="content">
                                            <div class="ui checkbox">
                                                <input type="checkbox">
                                                <label>Tom Redl</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="field">
                    <label>Attached File</label>
                    <input name="file" type="file" />
                </div>
                <h4 class="ui dividing header">Period of Survey</h4>
                <div class="two fields">
                    <div class="field">
                        <label>Start Date</label>
                        <input name="StartDate" type="text" placeholder="Start Date">
                    </div>
                    <div class="field">
                        <label>End Date</label>
                        <input name="EndDate" type="text" placeholder="End Date">
                    </div>
                </div>
                <h4 class="ui dividing header">Questions <span><button class="ui button new-question"><i class="add square icon"></i> New question</button></span></h4>
                <div class="three fields">
                    <div class="field">
                        <label>Question</label>
                        <input name="Question" type="text" placeholder="Question">
                    </div>
                    <div class="field">
                        <label>Type of Answer</label>
                        <select>
                            <option>Select</option>
                            <option>Text</option>
                            <option>Number</option>
                            <option>Option</option>
                        </select>
                    </div>
                    <div class="field">
                        <label>Options List</label>
                        <input name="OptionList" type="text" placeholder="Options List"/>
                    </div>
                    <div class="field">
                        <button class="ui red button remove-question"><i class="remove icon"></i> Remove</button>
                    </div>
                </div>

                <button class="ui button"><a href="index.php">Back</a></button>
                <button type="submit" class="ui button primary">Submit</button>
 
        </div>
    </div>

<?
include "input.php";
?>
      </form>

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