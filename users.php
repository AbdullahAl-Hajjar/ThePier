
<?php
require_once('./subscriberdao/mysqldao.php');
session_start();
   class users extends mysqldao
   {
        
        private $AdminID;
        private $Username;
        private $Password;
        private $Lastlogin;
        private $authenticated = false;
        
        
        function __construct() 
        {
            parent::__construct();
            date_default_timezone_set('US/Eastern');
        }
        
        
        public function authenticate($Username,$Password)
        {

            $user = $this->mysqli->query("SELECT * from adminusers WHERE Username like '$Username'");
            $pass = $this->mysqli->query("SELECT * from adminusers WHERE Password like '$Password'");
            $id = $this->mysqli->query("SELECT AdminID from adminusers WHERE Password like '$Password' and Username like '$Username'");
            $lastdate = $this->mysqli->query("SELECT DATE_FORMAT(Lastlogin, '%m/%d/%Y') FROM adminusers WHERE Password like '$Password' and Username like '$Username'");
            $result = mysqli_fetch_array($user);
            $result2 = mysqli_fetch_array($pass);
            $result3 = mysqli_fetch_row($lastdate);
            $str = join('', $result3);

            
            $_SESSION['AdminID'] = ceil(mysqli_num_rows($id));
            $_SESSION['Lastlogin'] = $str;
        
            $update = $this->mysqli->query("UPDATE adminusers SET Lastlogin=CURRENT_DATE() WHERE Password like '$Password' and Username like '$Username'");
            $this->authenticated = true;
            

            if($result !== null && $result2 !== null)
            {
                return true;

            }
            return false;

        }
        
        public function isAuthenticated(){
            return $this->authenticated;
        }
        

        
        public function getUsername(){
            return $this->Username;
        }

        
        public function getDate(){
        return $this->Lastlogin;
        }
    
    
   }
   
?>
