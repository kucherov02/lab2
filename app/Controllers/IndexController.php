<?php
class IndexController
{
   public function __construct($db)
   {
    $this->conn = $db->getConnect();
   }

   public function index()
   {
       include_once 'app/Models/UserModel.php';

       // отримання користувачів
       $users = (new User())::all($this->conn);

       include_once 'views/home.php';
   }

   public function logout() {
    
    $_SESSION['auth'] === false;
    header('Location: views/home.php'); 
    }
}
