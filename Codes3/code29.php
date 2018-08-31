<html>
<head>
    <style>
        td,tr,table{border : 1px solid black; border-collapse : collapse; vertical-align: bottom;}
        table{width: 20%}
        tr{width: 10%}
        td{width: 10%}
    </style>
</head>
<table >
   <?php
   for($row = 1;$row <=7;$row ++){
    print"<tr>";
    for($col =1; $col <= 7; $col ++) {
        print"<td>";
        $total = $row*$col;
        print$total;
       print" </td>";
        }
    print"</tr>";
    }
   ?>
</table>
</html>