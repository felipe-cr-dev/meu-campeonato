<?php 

$time1 = $_POST["time1"];
$time2 = $_POST["time2"];

$placar1 = rand(0, 10);
$placar2 = rand(0, 10);

if(isset($time1)){
    echo $time1 . " ". $placar1 . " X ";
}

if(isset($time2)){
    echo $placar2 . " ". $time2 . "<br>";
}

if($placar1 > $placar2){
    echo $time1 . " ganhou!";
} else{
     if($placar1 < $placar2){
        echo $time2 . "ganhou!";
    } else {
        if($placar1 == $placar2){
            echo " Empatou.";
        }
    }
} 

?>

<br><br>
    <a href="index.php">
        <button type="button">Voltar</button>
    </a>