<?php
class users{
    public $host = "localhost";
    public $username = "root";
    public $pass = "";
    public $db_name = "ONLINE-EXAM";
    public $data;
    public $conn;
    public $cat;
    public $qus;

    public function _construct()
    {
        $this->conn =new mysqli($this->host,$this->username,$this->pass,$this->db_name);
        if($this->conn->connect_errno)
        {
            die("database connection failed".$this->conn->connect_errno);
        }
    }
    public function user($data)
    {
        $this->conn->query($data);
        return true;
    }

    public function login($email,$pass)
    {
        echo $email;
        $query =$this->conn->query("selec email,pass from login where email ='$email' and pass = '$pass' " );
        $usery->fetch_array(MySQLI_ASSOC);
        if($query-> num_rows>0)
        {
            return true;
        }
        else
        {
            return false;
        }
    
    }
    public function qus_show($qus)
    {
        $query = $this->conn->query("select * from questions ");
        while ($row= $query-> fetch_array(MYSQLI_ASSOC))
        {
            $this->qus[] = $row;
        }
        return $this-> qus;

    }

    public function url($url)
    {
        header("location".$url);
    }

    
}


?>