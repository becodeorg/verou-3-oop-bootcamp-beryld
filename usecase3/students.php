<?php

 class Student 
 {
     public string $name;
     public float $grade;
     public int $group;
     

     public function __construct($name, $grade, $group =1)
     {
        $this-> name =$name;
        $this->grade = $grade;
        $this->group = $group;
        if(str_ends_with($this->name, 'ium')){
            
            $this->group = 2;
        }
       
        
     }
     public function getClass1()
     {
         if($this->group ==1){
             echo "<pre> name :  $this->name  grade :  $this->grade  group : $this->group </pre> <br> ";
            }  
            elseif($this->group ==2){
                echo "<pre> name :  $this->name  grade :  $this->grade  group : $this->group </pre> <br> ";
               } 
     }
    
     public function getAverageGrade()
     {
        if ($this->group === 1){
            $group1point = $this->grade;
            return $group1point;
        }
       

        //  $cpt = null ;
        //  $averageGroup1 = 0;
        //  echo "even before $abc";
        //  if($this->group ==1){
        //      echo "$abc before";
        //      $abc = $abc + 1;
        //      echo " $abc temp";
        //      $averageGroup1 += $this->grade ;
        //      echo" the cpt :  $abc <br>";
        //     //  echo "$this->grade";
        //      echo $averageGroup1; 
        //     //TODO: Here it's not incrementing but echoing at every indexes 
        //     //TODO: I guess I have to push everything in a new array and then calculate from there ... Pouah ! 
        //     // return $abc;
        //  }
        

     }
     public function getAverageGRade2()
     {
        if ($this->group === 2){
            $group2point = $this->grade;
            return $group2point;
        }
     }
 }




// if class_exits && score >20 then change class to 1 (classexists or class=1 ?)

// Name, grade class 
$students = [
$student1 = new Student ('Hydrogen', 1.008),
$student2 = new Student ('Helium', 4.0026),
$student3 = new Student ('Lithium', 6.94),
$student4 = new Student ('Beryllium', 9.0122),
$student5 = new Student ('Boron', 10.81),
$student6 = new Student ('Carbon', 12.011),
$student7 = new Student ('Nitrogen', 14.007),
$student8 = new Student ('Oxygen', 15.999),
$student9 = new Student ('Fluorine', 18.998),
$student10 = new Student ('Neon', 19.180),
$student11 = new Student ('Sodium', 22.990),
$student12 = new Student ('Magnesium',24.305),
$student13 = new Student('Aluminium', 26.982),
$student14 = new Student ('Silicon', 28.085),
$student15 = new Student ('Phosphorus',30.974),
$student16 = new Student('Sulphur', 32.06),
$student17 = new Student('Chlorine', 35.45),
$student98 = new Student('Californium',25.1), // that's not a typo thats the 98th element
$student19 = new Student ('Potassium', 39.098),
$student20 = new Student ('Calcium',40.078),
];
$group1average =0 ;
$group2average = 0 ;
foreach($students as $stud ){
    
    $group1average = $group1average + $stud->getAverageGrade();
    echo "<pre>";
echo "group1 : " .$group1average;
    echo "</pre>";
    //MAY WANT TO CALL IN TWO DIFFERENT FUNCTIONS ! 
    $group2average = $group2average + $stud->getAverageGrade2();
    echo "<pre>";
echo " group2 : " . $group2average;
    echo "</pre>";
    $stud->getClass1();
    
};
echo "groupe 1 average grade = " . $group1average / 10;
echo "<br>";
echo "groupe 2 average grade = " .$group2average / 10;

// $students->getAverageGrade();