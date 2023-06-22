<?php
class Game{
    const BR = '<br />';
    var $name;
    var $price;
    var $photo;
    var $dir='pics/';


     public function print_game(){
        //echo $this-> name.self::BR;
        //echo $this->price.self::BR;
       // echo $this->photo.self::BR;

       echo "<div style='float':left:margin-right:40px;'>";
       echo "<font size='5px'> {$this->name}</font>".self::BR;
       echo "<img src='{$this->dir}{$this->photo}'>".self::BR;
       echo '$' .$this->price;
       echo "</div>";

    }

    public function set_game($name,$price,$photo){
        $this->name = $name;
        $this->price = $price;
        $this->photo = $photo;


    }

}


$game1=new Game;
$game1->name="FIFA";
$game1->price=500;
$game1->photo='fifa.jpg';

$game1->print_game();

$game2=new Game;
$game2->name="ASSASSIN'S CREED";
$game2->price=400;
$game2->photo='assasins.jpg';

$game2->print_game();

$game3=new Game;
$game3->name="NBA";
$game3->price=700;
$game3->photo='nba.jpg';

$game3->print_game();

$game4=new Game;
$game4->name="GHOST";
$game4->price=700;
$game4->photo='ghost.jpg';

$game4->print_game();


$game5=new Game;
$game5->set_game("FORTNITE",650,'fortnite.jpg');
$game5->print_game();

$game6=new Game;
$game6->set_game("GTA",650,'gta.jpg');
$game6->print_game();
