<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<?php

    function demoGrid() {
        // Iterate out the possible span combinations
        print "<h1>Demo of possible Grid Combinations</h1>";

        /*
         * \\Where $i is 12/number of required columns
         * <div class='row'>
         *      print "<div class='span$i'>span$i</div>";
         * </div>
         *
         */

        $colors = array(
            'red',
            'redorange',
            'darkorange',
            'orange',
            'yellow',
            '#ccff66',
            'green',
            'blue',
            'blueviolet',
            'indigo',
            'violet',
            'black'
            );

        $color =0;

        for($i=12;$i>0;$i--)
        {
            print "<div class='row-fluid'>";
            if(12%$i==0)
            {

                for($count=1;$count<=12/$i;$count++)
                {
                    print "<div class='span$i' style='background-color:".$colors[$i].";color:white;'>span$i</div>";
                }
            }
            else
            {
                $filler=12-$i;
                print "<div class='span$filler' style='background-color:".$colors[$i].";color:white;'>span$filler</div>";
                print "<div class='span$i' style='background-color:".$colors[$i].";color:white;'>span$i</div>";
            }
            print "</div>";
        }

    }
?>


<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="demo.css">
        <title></title>
    </head>
    <body>
        <div class='container-fluid' style='text-align:center;'>
            <?php
                demoGrid();
            ?>
        </div>
    </body>
</html>
