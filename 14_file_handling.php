<?php

/* ---------- File Handling --------- */

/* 
  File handling is the ability to read and write files on the server.
  PHP has built in functions for reading and writing files.
*/


  echo "<table>";
  for($row=1;$row<=8;$row++)
  {
  	echo "<tr>";
  	for($column=1;$column<=8;$column++)
  	{
  		$total=$row+$column;
  		if($total%2==0)
  		{
  			echo "<td class='black'></td>";
  		}
  		else
  		{
  			echo "<td class='white'></td>";
  		}
  	}
  	echo "</tr>";
  }
echo "</table>";
?>
    
</body>
</html>