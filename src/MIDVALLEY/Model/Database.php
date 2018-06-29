<?php
/**
 * Created by PhpStorm.
 * User: OmarSharif
 * Date: 2/20/2018
 * Time: 10:09 PM
 */

namespace App\Model;

use PDO,PDOException;

class Database
{
    public $db;

    public $username = "root";
    public $password = "";

    public function __construct()
    {
        try {
            $this->db = new PDO("mysql:host=localhost;dbname=mid_valley", "root", "");
        }

        catch (PDOException $error){

            echo $error->getMessage();

        }
      //  Utility::dd($this->db);

    }
}