<?php
require_once('connection.php');
    
    class User{
        public $Name;
        public $Username;
        public $Email;

        public function AddFriend($Name, $Username, $Email){
            $this->name = $Name;
            echo "{$this->name} Added a friend";
        }
        public function PostaStatus($Name, $Username, $Email){
            $this->name = $Name;
            echo "<br>";
            echo "{$this->name} Posted a Status";
        }

    $sql = "";
    }

    $myname = new User();
    $myname->AddFriend('Onin', 'Jhon Nino', 'jhonbustamante@gamil.com');
    $myname->PostaStatus('Onin', 'Jhon Nino', 'jhonbustamante@gamil.com'); 
?>