<?php
// you can write to stdout for debugging purposes, e.g.
// print "this is a debug message\n";

function solution($message, $K) {
    // write your code in PHP7.0
    /*/ 0. explode the message on empty space
    1. check character cound for each until k is reached
    2. if the k is at space keep that index else keep   previous indices
    /*/
    $validLength = 0;
    $words = [];
   $messageArray = explode(" ",$message);
        foreach($messageArray as $key => $value) {
            $words[] = strlen($value);
        }
        $temp = [];
        foreach ($words as $word) {
           $validLength = $validLength + $word;
           if ($validLength > $K) {
              
           } else if ($validLength <= $K) {
               $temp[] = $word;     
           }
        }
        $messageSize = 0;
        $resultStr = "";
        $sizeOfArray = sizeof($temp);
         if ($sizeOfArray % 2 == 0) {
             $sum = 0;
             foreach($temp as $wordLen) {
                 $sum += $wordLen;
             }
             $messageSize = $sum - 1;
             $sizeofMessage = $sizeOfArray==2 ? $sizeOfArray: $sizeOfArray - 1;
             echo "Size". $sizeOfArray;
         }else {
             $sum = 0;
             foreach($temp as $wordLen) {
                 $sum += $wordLen;
             }
             $messageSize = $sum - 2;
             $sizeofMessage = $sizeOfArray - 1;
         }
        for ($i = 0 ; $i<$sizeofMessage;$i++) {
            $resultStr .= $messageArray[$i]." ";
        }
        $resultStr = trim($resultStr);
        return $resultStr;
    }

    $message = "to Crop or not to crop";
    $K = 21;
solution($message, $K);