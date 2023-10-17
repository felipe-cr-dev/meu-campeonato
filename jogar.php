<?php 

$time1 = $_POST["time1"];
$time2 = $_POST["time2"];

$gols1 = rand(0, 10);
$gols2 = rand(0 ,10);

if(isset($time1)){
    echo $time1 . " ". $gols1 . " X ";
}

if(isset($time2)){
    echo $goals2 . " ". $time2 . "<br>";
}

if($goals1 > $goals2){
    echo $time1 . " ganhou!";
} else{
     if($goals1 < $goals2){
        echo $time2 . "ganhou!";
    } else {
        if($goals1 == $goals2){
            echo " Empatou.";
        }
    }
} 

?>

<br><br>
    <a href="index.php">
        <button type="button">Voltar</button>
    </a>