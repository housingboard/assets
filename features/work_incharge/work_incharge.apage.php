
<table 
type_0_0=head value_0_0=SN  
type_0_1=head value_0_1=Charge 
type_0_2=head value_0_2=Incharge  wi_0_2=150
type_0_3=head value_0_3=Helpers   wi_0_3=150
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
        	//echo("<tr>");
        	
        	
        	$nm_helpers="";
        	for($im=3;$im<count($dat);$im++)
        	{
        		if($dat[$im]!="" && $dat[$im]!="\n")
        		{
        			if($im!=3)
        				$nm_helpers.=" , \n";
        			$nm_helpers.=$dat[$im];
        		}
        	}
        	
        	echo(" value_${nm_cnt}_0=\"$nm_cnt\" ");
        	
        	echo(" value_${nm_cnt}_1=\"$nm_charge\" ");
        	echo(" value_${nm_cnt}_2=\"$nm_incharge\" ");
        	
        	
        	echo(" value_${nm_cnt}_3=\"$nm_helpers\" \n");
        }
        
    }
    fclose($handle);
} else {
    //echo "Error opening the file.";
}

$nm_cnt++;
echo(" \n hi=$nm_cnt wi=4 ")

?>

>

