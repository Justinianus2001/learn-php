<?php 
try {
    include_once "./animal.php";
    include_once "./bird.php";
    include_once "./Parasites.php";
    include_once "./human.php";

    $bird = new Bird();
    $bird2 = new Bird();

    $para = new Parasites();
    $para2 = new Parasites();
    echo "<br>--------Parasites----------<br>";

    echo $para->getGenderRoot()."<br>";
    echo $para2->getGenderRoot()."<br>";

    $para_child = $para->born($para2);
    $para_child->getGenderRoot();
    echo "<br>-------self-----------<br>";
    $para_child = $para->born($para);
    $para_child->getGenderRoot();

    
    echo "<br>--------Bird----------<br>";
    echo $bird->getGenderRoot()."<br>";
    echo $bird2->getGenderRoot()."<br>";
    $bird_child = $bird->born($bird2);
    $bird_child->getGenderRoot();
    echo "<br>------------------<br>";
    

} catch (\Throwable $th) {
    //throw $th;
    echo "</br>-------------";
    echo "</br>Line: ".$th->getLine();
    echo "</br>Line: ".$th->getMessage();
}

?>