<?php

class countingIT {
    public int $grade ;


    public function __construct(int $grade)
    {
        $this->grade = $grade;
    }

    public function getIT()
    {
        if ($this->grade ==1)
        {
            echo "heyyyy";
            $gradient = $this->grade; 
            return $gradient;
            
        }
       
    }
    public function getIT2()
    {
        if ($this->grade == 2)
        {
            echo "nono";
            $loulou = $this->grade;
            return $loulou;
        }
    }
}


$datas = [
$a = new countingIT (1),
$b = new countingIT (2),
$c = new countingIT (1),
$d = new countingIT (1),
$e = new countingIT (1),

];
$f =  0;
$f2 = 0;
foreach($datas as $dataaas){
    // $dataaas->getIT();
    $f = $f + $dataaas->getIT() ;
    $f2 = $f2 + $dataaas->getIT2();
};

echo $f;
echo "</br>";
echo $f2;