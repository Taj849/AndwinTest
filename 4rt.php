<?php
 function non_repeat($word) {
  $chr = null;
  for ($i = 0; $i <= strlen($word); $i++) {
  	if(substr($word, $i, 1)){
  		if (substr_count($word, substr($word, $i, 1)) == 1) {
        return substr($word, $i, 1);
     }
 }else{
 	return "_";
 }
  }
}

function missing_number($a)
{
$new_arr = range($a[0],max($a)); 
return array_diff($new_arr, $a);

}

function minimul($a)
{
	$value=0;
	$num=0;
	$k=0;
	$data=0;
	$min=0;
	$main =array();
	$item=array();
	for($i=0;$i<count($a);$i++){
		for ($j=$i; $j <count($a) ; $j++) { 
			if($a[$i]==$a[$j]){
				$data2=$j;
                        $data=$j-$value;
                        $value=$data2;
                        if($i<$j){
                        $main[$k]= $data;
                        $item[$k]=$a[$i];
                        $k++;
                    break;

	}
		}
	}
	

}

			$min=$main[0];
        for($i=0;$i<count($main);$i++){  
        if($main[0]==1){
        	$num = $item[$i];
        }
       if ($min > $main[$i]){
        $num = $item[$i];
        $min=$main[$i];
       } 
           
        }echo "Sortest Value = ".$num."<br>";}

        //end of function
minimul(array(1,2,3,6,7,3,8,2,1));
echo count(missing_number(array(1,2,3,6,7,8)))."<br>";
echo count(missing_number(array(10,11,12,14,15,16,17)))."<br>";
echo count(missing_number(array(10,11,12,14,15,16,17,13)))."<br>";

echo non_repeat("Green")."<br>";
echo non_repeat("abcdea")."<br>";
echo non_repeat("abab")."<br>";
echo non_repeat("cabab")."<br>";
?>