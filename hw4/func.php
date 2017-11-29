<?php
    function displayHouse($house){
        $sort = rand(0,3);
        switch($sort){
        case 0: $house= "gryffindor";
            break;
        case 1: $house="hufflepuff";
            break;
        case 2: $house="ravenclaw";
            break;
        case 3: $house="slytherin";
            break;
        }
        echo "<img src='img/$house.jpg' alt='$house' title='". ucfirst($house) ."' width='500'>";
        echo "<h2>Welcome to $house!</h2>";
    }
    function displayMembers(){
        $sort = rand(0,3);
        $classmates = array("Harry Potter ", "Hermione Granger ", "Ron Weasley ", "Voldemort ");
        print_r(array_unique($classmates));
    }
    function play(){
        ${"house" . $i } = rand(0,3);
        displayHouse(${"house". $i}, $i);
        echo "Your housemates are $classmates";
        for($i=0; $i<4; $i++){
            displayMembers(${"classmates". $i}, $i);
        }
    }
?>