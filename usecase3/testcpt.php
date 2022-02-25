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
}


$datas = [
$a = new countingIT (1),
$b = new countingIT (1),
$c = new countingIT (1),
$d = new countingIT (1),
$e = new countingIT (1),

];
$f =  0;
foreach($datas as $dataaas){
    // $dataaas->getIT();
    $f = $f + $dataaas->getIT() ;
};

echo $f;