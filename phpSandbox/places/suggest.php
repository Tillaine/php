<?php
$places = [
    "Platform", 
    "Denver", 
    "Oakland",
    "Palm Springs", 
    "Belmar", 
    "Reston", 
    "Bavaria", 
    "Agusta", 
    "Eureka", 
    "Arcata", 
];



    //get query sting 
    $q = $_REQUEST['q'];

    $suggestion = "";

    if($q !== ''){
        $q = strtolower($q);
        $len = strlen($q);

        foreach($places as $place){
            if(stristr($q, substr($place, 0, $len))){
                if($suggestion === ''){
                    $suggestion = $place;
                } else {
                    $suggestion .= ", $place";
                }
            }
        }
    }
    echo $suggestion === "" ? "No Suggestion" : $suggestion;
?>

