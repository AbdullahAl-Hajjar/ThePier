<?php 
include 'mysqldao.php';

class subscribersdao extends mysqldao
 {

    function __construct() 
    {
        parent::__construct();
    }

public function getSubscribers()
{
    

 $text = $this->mysqli->query("SELECT * from mailingList");


 while($row = $text->fetch_assoc())
 {
     echo '<tr>';
     echo '<td>' . $row['customerName']   . '</td>';
     echo '<td>' . $row['emailAddress']   . '</td>';
     echo '<td>' . $row['phoneNumber' ]   . '</td>';
     echo '<td>' . $row['referrer'] . '</td>';
     echo '</br>';
 }
}

    
public function setSubscriber($name,$phone,$email,$referral)
{
	if(!$this->mysqli->connect_errno)
	{
		$this->mysqli->query( "INSERT INTO mailingList (customerName,emailAddress,phoneNumber,referrer) VALUES( '$name', '$email', '$phone', '$referral')");
	
	
		
	}


}

}

?>
