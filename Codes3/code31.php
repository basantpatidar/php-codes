<html>
<head>
    <style>
        td,tr,table{border : 1px solid black; width : 20%; height: 20%;
            vertical-align: bottom; }
        tr{border-color: beige}
    </style>
</head>
<table style = "border-color: aqua">
    <?php
    for($row = 1;$row <=10;$row ++){
        print"<tr >";
        for($col =1; $col <= 10; $col ++) {
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