<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">

<html>

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <title>tinh dien tich HCN</title>

    <style type="text/css">

        body {  

            background-color: #d24dff;

        }

        table{

            background: #ffd94d;

            border: 0 solid yellow;

        }

        thead{

            background: #fff14d;    

        }

        td {

            color: blue;

        }

        h3{

            font-family: verdana;

            text-align: center;

            /* text-anchor: middle; */

            color: #ff8100;

            font-size: medium;

        }

    </style>

</head>



<body>



<?php 



if(isset($_POST['chieudai']))  



    $chieudai=trim($_POST['chieudai']); 



else $chieudai=0;



if(isset($_POST['chieurong'])) 



    $chieurong=trim($_POST['chieurong']); 



else $chieurong=0;



if(isset($_POST['tinh']))



        if (is_numeric($chieudai) && is_numeric($chieurong))  



            $dientich=$chieudai * $chieurong;



        else {



                echo "<font color='red'>Vui lòng nhập vào số! </font>"; 



                $dientich="";



            }



else $dientich=0;



?>