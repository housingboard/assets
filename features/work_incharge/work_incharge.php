
<html>
<head>




<style>
  table {
    border-collapse: collapse;
    width: 50%;
  }
  th, td {
    border: 2px solid black;
    padding: 8px;
    text-align: left;
  }
  .m_tab
  {
  	width:750px;
  }
  .m_tab_incharge
  {
  	width:180px;
  }
  tr:nth-child(even)
	{
		background-color: #dddddd ;
	}
</style>

</head>

<body>

MGGS Housing Board - School Work Incharge
<table class="m_tab">
<tr>
<th>SN</th>
<th>Charge</th>
<th>Incharge</th>
<th>Helpers</th>
</tr>
<?php

$filename = "data.txt";

$nm_cnt=0;
$handle = fopen($filename, "r");
if ($handle) {
    while (($line = fgets($handle)) !== false) {
        //echo $line . "<br>"; // or process the line as needed
        
        $dat = explode("\t",$line);
        //print_r($dat);
        if($dat[0]== "charge")
        {
        	//print_r($dat);
        	$nm_cnt++;
        	$nm_charge=$dat[1];
        	$nm_incharge=$dat[2];
        	echo("<tr>");
        	echo("<td>$nm_cnt</td>");
        	echo("<td>$nm_charge</td>");
        	echo("<td class=\"m_tab_incharge\" >$nm_incharge</td>");
        	
        	echo("<td class=\"m_tab_incharge\" >");
        	for($im=3;$im<count($dat);$im++)
        	{
        		if($dat[$im]!="")
        		{
        			if($im!=3)
        			echo("<br>");
        			echo($dat[$im]);
        		}
        	}
        	echo("</td>");
        	
        	echo("</tr>");
        }
        
    }
    fclose($handle);
} else {
    //echo "Error opening the file.";
}


?>
</table>


</body>
</html>


