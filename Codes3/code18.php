
<table width="270px" cellspacing="0px" cellpadding="1px" border="2px">
    <?php
    for($row=1;$row<=9;$row++)
    {
        echo "<tr>";
        for($col=0;$col<=8;$col++)
        {
            $total=$row+$col;
            if($total%2==0)
            {
                echo "<td height=30px width=30px bgcolor=#FFFFFF></td>";
            }
            else
            {
                echo "<td height=30px width=30px bgcolor=#000000></td>";
            }
        }
        echo "</tr>";
    }
    ?>
</table>
