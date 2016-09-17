<?php
//     $txtLogin = isset($_POST['"txtLogin"']) ? htmlspecialchars($_POST['"txtLogin"']) : "";
// echo '<td><input class="text" type="text" id="txtLogin" name="txtLogin" value="'. $txtLogin .'"></td>';






?>
<!DOCTYPE html>
<html>
    <head>
        <style type="text/css">
            .jumbotron{
                width:50%;
                height:50%;
                text-align:center;
                border-radius:10px;
                margin-top:5%;
            }
        </style>
    </head>
    <body>
        <center>
        <div class='jumbotron'>
            <form name='form' method='GET'>
                <input type="text" id='uN' placeholder='Username' name="uN"/>
                <input type="text" id='pW' placeholder='Password' name="pW"/>
                <input type="submit" id='Submit'  value="Submit"/>
            </form>
            </div>
            </center>
    </body>
</html>