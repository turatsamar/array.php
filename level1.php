
<?php
//level1-1
$dmyAry = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15];
$twoAry = [[]];
for($i = 0 , $k = 0 ; $i < 3 ; $i++){  
        for($j = 0 , $k ; $j < 5 ; $j++ , $k++){  
                $twoAry[$i][$j] = $dmyAry[$k];
        }
}
  echo "Level1.1の合計: " .array_sum($dmyAry)."<br>";

//Level1-2
$assocAry1 = ['name' => 'yamada', 'address' => 'osaka...', 'eMail'=>'turat.samar@gmail.com'];
foreach ($assocAry1 as $value){
    echo "<br> $value<br>";
}
//level1-3
$assocAry2 = ['name' => 'yamada' , 'address' => 'osaka...' , 'eMail' => 'yamada@2021.com'];
foreach($assocAry2 as $id => $info)
{
        echo "<br>$id : $info";
}
//level1-4
$assocAry3[] = ['name' => 'yamada' , 'age' => 20 , 'height' => 170 , 'weight' => 50];
$assocAry3[] = ['name' => 'yosida' , 'age' => 21 , 'height' => 165 , 'weight' => 60];


echo "<pre>";
echo print_r($assocAry3);
echo "<pre/>";

foreach($assocAry3 as $id =>$value){
   // echo"<pre>";
    //echo "$value <br>";
    //echo "pre/>";
    foreach($value as $type =>$db){
        echo"$type:$db <br>";

    }

}

//level1.5

$assocAry4['name'] = ['yamada' , 'yosida' , 'suzuki' , 'yamanaka'];

$assocAry4['age'] = [19 , 20 , 21 , 22];
                 
$assocAry4['height'] = [165 , 170 , 175 , 180];
                 
$assocAry4['weight'] = [65 , 50 , 55 , 60];               
//echo "<pre>";
//print_r($assocAry4);
//echo "<pre/>";
foreach($assocAry4 as $id => $value){
    foreach($value as $info=>$in){
              
        echo"$id : $in <br>";
    }

   
}

//Level1.6
$assocAry5 = [['name' => 'yamada' , 'age' => 19,'height' => 165 , 'weight' => 50],
            ['name' => 'yosida' , 'age' => 20,'height' => 170 , 'weight' => 55],
            ['name' => 'suzuki', 'age' => 21,'height' => 175 , 'weight' => 65],
            ['name' => 'yamanaka' , 'age' => 22,'height' => 180 , 'weight' => 70]
            ];

            foreach($assocAry5 as $id=>$value){
                foreach($value as $info=>$index) {
                    echo "$info : $index <br>";
                             

                }
            }


//Level1.7
$assocAry6 = ['name' => ['yamada' , 'yosida' , 'suzuki' , 'yamanaka'],
            'age' => [19 , 20 , 21 , 22],
            'height' => [165 , 170 , 175 , 180],
            'weight' => [50,55,60,65,70]
            ];

             foreach($assocAry6 as $id => $key){
                 foreach($key as $info =>$hr){

                    echo"$id : $hr <br>";
                 }
             }

?>