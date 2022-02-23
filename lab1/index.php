<?PHP 
 $rows=5; 
 $colums=3; 
 echo '<html><body>'; 
 echo '<table border="2">'; 
 for ($i=1;$i<=$rows;$i++) 
 { echo '<tr>'; 
 for ($j=1;$j<=$colums;$j++) 
 { if ((($i+$j)%2)==0){$c="green";} else {$c="red";} 
 echo '<td bgcolor='.$c.'><font color="yellow">'.$i,$j.'</font></td>'; 
 }  
 echo '</tr>'; 
 }  
echo '</table>'; 
echo '<p>';
include("info.php");
//echo  PHPinfo ();
echo '</p>';
echo '<table>';
echo '<tr bgcolor = "#F08080"><td>LightCoral<td>#F08080<td>240, 128, 128</tr>';
echo '<tr bgcolor = "#FF8C00"><td>DarkOrange<td>#FF8C00<td>255, 140, 0</tr>';
echo '<tr bgcolor = "#20B2AA"><td>LightSeaGreen<td>#20B2AA<td>32, 178, 170</tr>';
echo '<tr bgcolor = "#4169E1"><td>RoyalBlue<td>#4169E1<td>65, 105, 225</tr>';
echo '</table><br>';
echo '<table><tr>';
for ($i =1;$i<10;$i++){
    echo '<tr>';
    for($j = 1;$j<10;$j++)
    {
        echo '<td>';
        echo $j.'*'.$i.'='.$i*$j.'&nbsp&nbsp';
        //echo '1';
        echo'</td>';
    }
    echo '</tr>';
}
echo '</tr></table><br>';
echo phpinfo();
echo '</body>
</html>'; ?>