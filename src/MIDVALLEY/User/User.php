<?php
namespace App\User;
use App\Message\Message;
use App\Utility\Utility;
use App\Model\Database as DB;
use PDO;


class User extends DB{
    public $table="users";
    public $id="";
    public $name="";
    public $flat="";
    public $email="";
    public $password="";
    public $phone="";
    public $address="";
    public $email_token="";

    public function __construct(){
        parent::__construct();
    }

    public function setData($data=array()){
        if(array_key_exists('id',$data)){
            $this->id=$data['id'];
        }
        if(array_key_exists('name',$data)){
            $this->name=$data['name'];
        }
        if(array_key_exists('flat',$data)){
            $this->flat=$data['flat'];
        }
        if(array_key_exists('email',$data)){
            $this->email=$data['email'];
        }
        if(array_key_exists('password',$data)){
            $this->password=md5($data['password']);
        }
        if(array_key_exists('phone',$data)){
            $this->phone=$data['phone'];
        }
        if(array_key_exists('address',$data)){
            $this->address=$data['address'];
        }
        if(array_key_exists('email_token',$data)){
            $this->email_token=$data['email_token'];
        }
        return $this;
    }

    public function store() {
        $dataArray= array(':name'=>$this->name, ':flat'=>$this->flat,':email'=>$this->email,':password'=>$this->password,':phone'=>$this->phone,':address'=>$this->address,':email_token'=>$this->email_token);

        $query="INSERT INTO users (`name`, `flat`, `email`, `password`, `phone`, `address`,`email_verified`)
VALUES (:name, :flat, :email, :password, :phone, :address, :email_token)";

        $STH=$this->db->prepare($query);

//        Utility::dd($STH);
        $result = $STH->execute($dataArray);

        if ($result) {
            Message::message("
                <div class=\"alert alert-success\">
                            <strong>Success!</strong> Data has been stored successfully, Please check your email and active your account.
                </div>");
            return Utility::redirect($_SERVER['HTTP_REFERER']);
        } else {
            Message::message("
                <div class=\"alert alert-danger\">
                            <strong>Failed!</strong> Data has not been stored!!!
                </div>");
            return Utility::redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function change_password(){
        $query="UPDATE `mid_valley`.`users` SET `password`=:password  WHERE `users`.`email` =:email";
        $STH=$this->db->prepare($query);
        $result = $STH->execute(array(':password'=>$this->password,':email'=>$this->email));

        if($result){
            Message::message("
             <div class=\"alert alert-info\">
             <strong>Success!</strong> Password has been updated  successfully.
              </div>");
        }
        else {
            echo "Error";
        }

    }

    public function view(){
        $query=" SELECT * FROM users WHERE email = '$this->email' ";
        // Utility::dd($query);
        $STH =$this->db->query($query);
        $STH->setFetchMode(PDO::FETCH_OBJ);
        return $STH->fetch();

    }// end of view()


    public function validTokenUpdate(){
        $query="UPDATE `mid_valley`.`users` SET  `email_verified`='".'Yes'."' WHERE `users`.`email` ='$this->email'";
        $result=$this->db->prepare($query);
        $result->execute();

        if($result){
            Message::message("
             <div class=\"alert alert-success\">
             <strong>Success!</strong> Email verification has been successful. Please login now!
              </div>");
        }
        else {
            echo "Error";
        }
        return Utility::redirect('../../../../views/MIDVALLEY/user/Profile/signup.php');


    }

    public function update(){

        $query="UPDATE `mid_valley`.`users` SET `first_name`=:firstName, `last_name` =:lastName, `flat` =:flat,  `email` =:email, `phone` = :phone, `address` = :address  WHERE `users`.`email` = :email";

        $result=$this->db->prepare($query);

        $result->execute(array(':firstName'=>$this->firstName,':lastName'=>$this->lastName, ':flat'=>$this->flat,':email'=>$this->email,':phone'=>$this->phone,':address'=>$this->address,':email_token'=>$this->email_token));

        if($result){
            Message::message("
             <div class=\"alert alert-info\">
             <strong>Success!</strong> Data has been updated  successfully.
              </div>");
        }
        else {
            echo "Error";
        }
        return Utility::redirect($_SERVER['HTTP_REFERER']);
    }

}

