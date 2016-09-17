<?php
//     $txtLogin = isset($_POST['"txtLogin"']) ? htmlspecialchars($_POST['"txtLogin"']) : "";
// echo '<td><input class="text" type="text" id="txtLogin" name="txtLogin" value="'. $txtLogin .'"></td>';
    // require_once('class_lib.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style type="text/css">
                body{
                    color:{{color}};
                }
            .jumbotron{
                width:50%;
                height:50%;
                text-align:center;
                border-radius:10px;
                margin-top:5%;

                
            }
            
        </style>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
</head>
    <body>
        <center>
        <div ng-app='myApp' class='jumbotron'>
                <p>Oi </p>
            <form class='form form-control' name='form' method='GET'>
                <input type="text" id='uN' placeholder='Username' name="uN"/>
                <input type="text" id='pW' placeholder='Password' name="pW"/>
                <input type="text" ng-model='color' name="Those"/>
            </form>
            </div>
            </center>
        <!--<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>-->
    </body>
</html>