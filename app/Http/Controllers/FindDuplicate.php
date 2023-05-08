<?php

namespace App\Http\Controllers;

class FindDuplicate extends Controller
{
   public function findDuplicate(){
       $testingData = array(2, 3, 1, 2, 3);
       $duplicates = $this->duplicateValues($testingData);

       echo "Duplicates: ";
       foreach ($duplicates as $d) {
           echo "$d ";
       }

   }

   private function duplicateValues($arr)
    {
        $n = count($arr);
        $result = array();

        for ($i = 0; $i < $n; $i++) {
            $index = abs($arr[$i]);

            if ($arr[$index] >= 0) {
                $arr[$index] = -$arr[$index];
            } else {
                $result[] = $index;
            }
        }

        return $result;
    }

}
