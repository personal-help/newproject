<?
include "db.php";
    if (isset($_POST["Identification"]))
    {
    $sql = mysql_query("INSERT INTO `survay`(Identification, Password, STitle, SDescription, TSurvey, FName, FCompany, Employees, StartDate, EndDate, Question, TypeAnswer, OptionsList)VALUES (                                                                           '".$_POST['Identification']."',
                                            '".$_POST['Password']."',
                                            '".$_POST['STitle']."',
                                            '".$_POST['SDescription']."',
                                            '".$_POST['TSurvey']."',
                                            '".$_POST['FName']."',
                                            '".$_POST['FCompany']."',
                                            '".$_POST['Employees']."',
                                            '".$_POST['StartDate']."',
                                            '".$_POST['EndDate']."',
                                            '".$_POST['Question']."',
                                            '".$_POST['TypeAnswer']."',
                                            '".$_POST['OptionsList']."')");
        if ($sql)   {    echo "<p>YES.</p>";}
        else        {echo "<p>NO.</p>";}
    }
?>