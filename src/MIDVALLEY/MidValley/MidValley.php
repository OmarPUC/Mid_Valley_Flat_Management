<?php
/**
 * Created by PhpStorm.
 * User: OmarSharif
 * Date: 2/20/2018
 * Time: 10:15 PM
 */

namespace App\MidValley;

use App\Utility\Utility;
use PDO;
use App\Model\Database;
use App\Message\Message;

class MidValley extends Database
{
    public $id;
    public $no;
    public $date;
    public $flat;
    public $owner;
    public $contact;
    public $from;
    public $previous;
    public $to;
    public $current;
    public $consumed;
    public $ebi;
    public $ebc;
    public $fuel;
    public $smc;
    public $oex;
    public $repair;
    public $imam;
    public $hall;
    public $other;
    public $payment;
    public $tka;
    public $confirm;

    public function setData($rcv)
    {
        if (array_key_exists("id", $rcv)) {
            $this->id = $rcv['id'];
        }
        if (array_key_exists("no", $rcv)) {
            $this->no = $rcv['no'];
        }
        if (array_key_exists("date", $rcv)) {
            if (!empty($rcv['date'])) {
                date_default_timezone_set('Asia/Dhaka');
                $strMid = strtotime($rcv['date']);
                $this->date = date('Y-m-d', $strMid);
            } else {
                $strMid = "";
            }
        }
        if (array_key_exists("flat", $rcv)) {
            $this->flat = $rcv['flat'];
        }
        if (array_key_exists("owner", $rcv)) {
            $this->owner = $rcv['owner'];
        }
        if (array_key_exists("contact", $rcv)) {
            $this->contact = $rcv['contact'];
        }
        if (array_key_exists("monthf", $rcv)) {
            $this->from = $rcv['monthf'];
        }
        if (array_key_exists("previous", $rcv)) {
            $this->previous = $rcv['previous'];
        }
        if (array_key_exists("montht", $rcv)) {
            $this->to = $rcv['montht'];
        }
        if (array_key_exists("current", $rcv)) {
            $this->current = $rcv['current'];
        }
        if (array_key_exists("consumed", $rcv)) {
            $this->consumed = $rcv['consumed'];
        }
        if (array_key_exists("ebi", $rcv)) {
            $this->ebi = $rcv['ebi'];
        }
        if (array_key_exists("ebc", $rcv)) {
            $this->ebc = $rcv['ebc'];
        }
        if (array_key_exists("fuel", $rcv)) {
            $this->fuel = $rcv['fuel'];
        }
        if (array_key_exists("smc", $rcv)) {
            $this->smc = $rcv['smc'];
        }
        if (array_key_exists("oex", $rcv)) {
            $this->oex = $rcv['oex'];
        }
        if (array_key_exists("repair", $rcv)) {
            $this->repair = $rcv['repair'];
        }
        if (array_key_exists("imam", $rcv)) {
            $this->imam = $rcv['imam'];
        }
        if (array_key_exists("hall", $rcv)) {
            $this->hall = $rcv['hall'];
        }
        if (array_key_exists("other", $rcv)) {
            $this->other = $rcv['other'];
        }
        if (array_key_exists("payment", $rcv)) {
            $this->payment = $rcv['payment'];
        }
        if (array_key_exists("tka", $rcv)) {
            $this->tka = $rcv['tka'];
        }
        if (array_key_exists("confirm", $rcv)) {
            $this->confirm = $rcv['confirm'];
        }
    }//End of setData()


    public function store(){
        $no         = $this->no;
        $date       = $this->date;
        $flat       = $this->flat;
        $owner      = $this->owner;
        $contact    = $this->contact;
        $from       = $this->from;
        $previous   = $this->previous;
        $to         = $this->to;
        $current    = $this->current;
        $consumed   = $this->consumed;
        $ebi        = $this->ebi;
        $ebc        = $this->ebc;
        $fuel       = $this->fuel;
        $smc        = $this->smc;
        $oex        = $this->oex;
        $repair     = $this->repair;
        $imam       = $this->imam;
        $hall       = $this->hall;
        $other      = $this->other;
        $payment    = $this->payment;
        $tka        = $this->tka;
        $confirm  = $this->confirm;

        $dataArray  = array($no, $date, $flat, $owner, $contact, $from, $previous, $to, $current, $consumed, $ebi, $ebc, $fuel, $smc, $oex, $repair, $imam, $hall, $other, $payment, $tka, $confirm);
        $sqlQuery   ="INSERT INTO `mid_info` (`serial_num`, `date`, `flat_num`, `owner`, `contact`, `from_m`, `previous`, `to_m`, `current`, `consumed`, `ebi`, `ebc`, `fuel`, `security`, `operating`, `repair`, `imam`, `rent`, `other`, `payment`, `tka`, `pay_confirm`) VALUES ( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";

        $sth        = $this->db->prepare($sqlQuery);
        $result     = $sth->execute($dataArray);

        if($result){
            Message::message("Success! Data has been inserted Successfully!");
        }
        else{
            Message::message("Error! Data has not been inserted.");
        }
    }//End of store()


    public function index(){
        $sqlQuery = "SELECT * FROM `mid_info`";
        $STH = $this->db->query($sqlQuery);
        $STH->setFetchMode(PDO::FETCH_OBJ);
        $allData = $STH->fetchAll();
//        Utility::dd($allData);
        return $allData;
    }//End of index()


    public function view(){
        $sqlQuery = "Select * from `mid_info` where id=".$this->id;
        $STH =$this->db->query($sqlQuery);
        $STH->setFetchMode(PDO::FETCH_OBJ);
        $singleData =$STH->fetch();
        return $singleData;
    }//End of view()


    public function update(){
        $sqlQuery = "UPDATE `mid_info` SET `serial_num`=?, `date`=?, `flat_num`=?, `owner`=?, `contact`=?, `from_m`=?, `previous`=?, `to_m`=?, `current`=?, `consumed`=?, `ebi`=?, `ebc`=?, `fuel`=?, `security`=?, `operating`=?, `repair`=?, `imam`=?, `rent`=?, `other`=?, `payment`=?, `tka`=?, `pay_confirm`=? WHERE `id` = $this->id;";
        //    Utility::dd($sqlQuery);
        $dataArray = array($this->no, $this->date, $this->flat, $this->owner, $this->contact, $this->from, $this->previous, $this->to, $this->current, $this->consumed, $this->ebi, $this->ebc, $this->fuel, $this->smc, $this->oex, $this->repair, $this->imam, $this->hall, $this->other, $this->payment, $this->tka, $this->confirm);
        $STH = $this->db->prepare($sqlQuery);
        $result = $STH->execute($dataArray);
        if($result){
            Message::message("Success! Data has been updated successfully.");
        }
        else {
            Message::message("Failure! Update is not possible due to an error.");
        }
    }// end of update()


    public function search($requestArray){
        $sql = "";
        if( isset($requestArray['byDate']) && isset($requestArray['byFlat']) && isset($requestArray['byFlat']) )  $sql = "SELECT * FROM `mid_info` WHERE `is_trashed` ='No' AND (`date` LIKE '%".$requestArray['search']."%' OR `flat_num` LIKE '%".$requestArray['search']."%' OR `pay_confirm` LIKE '%".$requestArray['search']."%')";
        if(isset($requestArray['byDate']) && !isset($requestArray['byFlat']) && !isset($requestArray['byPay']) ) $sql = "SELECT * FROM `mid_info` WHERE `is_trashed` ='No' AND `date` LIKE '%".$requestArray['search']."%'";
        if(!isset($requestArray['byDate']) && isset($requestArray['byFlat']) && !isset($requestArray['byPay']) )  $sql = "SELECT * FROM `mid_info` WHERE `is_trashed` ='No' AND `flat_num` LIKE '%".$requestArray['search']."%'";
        if(!isset($requestArray['byDate']) && !isset($requestArray['byFlat']) && isset($requestArray['byPay']) )  $sql = "SELECT * FROM `mid_info` WHERE `is_trashed` ='No' AND `pay_confirm` LIKE '%".$requestArray['search']."%'";

        $STH  = $this->db->query($sql);
        $STH->setFetchMode(PDO::FETCH_OBJ);
        $someData = $STH->fetchAll();
        return $someData;

    }
    public function getAllKeywords()
    {
        $_allKeywords = array();
        $WordsArr = array();
        $allData = $this->index();
        foreach ($allData as $oneData) {
            $_allKeywords[] = trim($oneData->date);
        }

        foreach ($allData as $oneData) {
            $eachString= strip_tags($oneData->date);
            $eachString=trim( $eachString);
            $eachString= preg_replace( "/\r|\n/", " ", $eachString);
            $eachString= str_replace("&nbsp;","",  $eachString);
            $WordsArr = explode(" ", $eachString);

            foreach ($WordsArr as $eachWord){
                $_allKeywords[] = trim($eachWord);
            }
        }
        // for each search field block end

        // for each search field block start
        $allData = $this->index();
        foreach ($allData as $oneData) {
            $_allKeywords[] = trim($oneData->flat_num);
        }
        $allData = $this->index();

        foreach ($allData as $oneData) {
            $eachString= strip_tags($oneData->flat_num);
            $eachString=trim( $eachString);
            $eachString= preg_replace( "/\r|\n/", " ", $eachString);
            $eachString= str_replace("&nbsp;","",  $eachString);
            $WordsArr = explode(" ", $eachString);

            foreach ($WordsArr as $eachWord){
                $_allKeywords[] = trim($eachWord);
            }
        }
        // for each search field block end
        return array_unique($_allKeywords);
    }// get all keywords


    public function indexPaginator($page=1,$itemsPerPage=3){

        $start = (($page-1) * $itemsPerPage);
        if($start<0) $start = 0;
        $sql = "SELECT * from `mid_info`  WHERE is_trashed = 'No' LIMIT $start,$itemsPerPage";

        $STH = $this->db->query($sql);
        $STH->setFetchMode(PDO::FETCH_OBJ);
        $arrSomeData  = $STH->fetchAll();
        return $arrSomeData;
    }

}