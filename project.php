<?php 
    class user{
        public $greating;
        public $name;
        public $email;

        public function myText(){
            echo "Muslim Greating".$this->greating."</br>"."My Name Is"
            .$this->name."</br>"."My Email Is".$this->email;
        } 
    }
    $user=new user();
    $user->greating="Assalamualikum";
    $user->name="Muhummad JI Shohag";
    $user->email="mdsohag200077@gmail.com";
    $user->myText();



?>