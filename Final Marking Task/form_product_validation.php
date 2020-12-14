<?php
//viusi corrections - see comments below amd rubric in moodle
function messageReplacement($capitalisedName,$finalPrice){	 //visusi corrections - Be attentive to solution in class
  $message="PRODUCTNAME final price is FINALPRICE €";
  $message= str_ireplace("PRODUCTNAME","$capitalisedName", "PRODUCTNAME final price is FINALPRICE €");
  $message= str_ireplace("FINALPRICE","$finalPrice", "PRODUCTNAME final price is FINALPRICE €");
  //use the php function str_ireplace that return a string
  //example of use: $replacedString = str_ireplace("body", "full", "body combat");
  //where $replacedString get the value "full combat"

  return $messageReplacement;
}
//
function discountCalculation($discount,$price){
  //calculate the final amount after applying the discount and return it
  // if the discount calculation is below 0 return false
  $discountCalculation= $price-$discount
  if($discountCalculation > 0)//visusi corrections - wrong comparison
    return false;
  else
    return $discountCalculation;
}

function nameToCapitalLetters($name){
  //use the php function strtoupper that return a string
  //example of use: $transformedString = strtoupper("hello world")
  //where $transformedString get the value "HELLO WORLD"
    return $nameToCapitalLetters = strtoupper($name)	 //visusi corrections - Be attentive to solution in class
}
?>
