<?php

$score = 0;

//question 1
    
    echo "Questions 1: What day is Christmas on?<br>";
    $answer = $_POST['q1'];  
    if ($answer == "25") {          
        $score = $score + 1;      
    }
    echo "Your Answer: ".$answer."<br>";
    echo "Correct Answer: 25<br><br>"; 

//question 2

    echo "Questions 2: Which reindeer had the red nose?<br>";
    $answer = $_POST['q2'];  
    if ($answer == "Rudolph") {          
        $score = $score + 1;      
    }
    echo "Your Answer: ".$answer."<br>";
    echo "Correct Answer: Rudolph<br><br>"; 


//question 3

    echo "Questions 3: What is Santa Clauses favorite food?<br>";
    $answer = $_POST['q3'];  
    if ($answer == "Cookies") {          
        $score = $score + 1;      
    }
    echo "Your Answer: ".$answer."<br>";
    echo "Correct Answer: Cookies<br><br>"; 


//question 4

    echo "Questions 4: How many times does Santa check his Naughty and Nice List?<br>";
    $answer = $_POST['q4'];  
    if ($answer == "2") {          
        $score = $score + 1;      
    }
    echo "Your Answer: ".$answer."<br>";
    echo "Correct Answer: 2<br><br>"; 


//question 5

    echo "Questions 5: How does Santa get into your home?<br>";
    $answer = $_POST['q5'];  
    if ($answer == "chimney") {          
        $score = $score + 1;   
    }
    echo "Your Answer: ".$answer."<br>";
    echo "Correct Answer: chimney<br><br>";  

    echo "You got " .$score."/5 correct!<br>";

if ($score == "1"){
    echo "You got a %20";
}
else if($score == "2"){
    echo "You got a %40";
}
else if($score == "3"){
    echo"You got a %60";
}
else if ($score == "4"){
    echo "You got a %80";
}
else{
    echo "You got %100!";
}

?>
