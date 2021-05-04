<?php
if(isset($_Post['submit'])) {
    $First_Name = $_Post['First_Name'];
    $Middle_Name =$_Post['Middle_Name'];
    $Surname = $_Post['Surname'];
    $Username = $_Post['Username'];
    $Gender = $_Post['Gender'];
    $DOB = $_Post['DOB'];
    $Email_Address = $_Post['Email_Address'];
    $Password = $_Post['Password'];
    $Retype_Password = $_Post['Retype_password'];
    
    echo $First_Name . $Middle_Name . $Surname . $Username . $Gender . $DOB . $Email_Address . $Password . $Retype_Password;
}
?>