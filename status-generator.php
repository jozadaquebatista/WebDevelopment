<?php 
 //chooses a random number 
 $num1 = Rand (0,3) ; 
 $num2 = Rand (0,3) ; 
 $num3 = Rand (0,3) ; 
 $num4 = Rand (0,3) ; 
 
 //starts the random quote switch loop 
 switch ($num1) 
 { 
 case 0: 
 echo "I feel "; 
 break; 
 
 case 1: 
 echo "I am "; 
 break; 
 
 case 2: 
 echo "It makes me "; 
 break; 
 
 case 3: 
 echo "My cat is "; 
 break; 
}
 switch ($num2) 
 { 
 case 0: 
 echo "happy "; 
 break; 
 
 case 1: 
 echo "sad "; 
 break; 
 
 case 2: 
 echo "boggled "; 
 break; 
 
 case 3: 
 echo "chillin "; 
 break; 
}
 switch ($num3) 
 { 
 case 0: 
 echo "to think about "; 
 break; 
 
 case 1: 
 echo "to see "; 
 break; 
 
 case 2: 
 echo "to hear "; 
 break; 
 
 case 3: 
 echo "to describe "; 
 break; 
}
 switch ($num4) 
 { 
 case 0: 
 echo "pencils."; 
 break; 
 
 case 1: 
 echo "nature."; 
 break; 
 
 case 2: 
 echo "taxes."; 
 break; 
 
 case 3: 
 echo "iPads."; 
 break; 
}
 ?> 
