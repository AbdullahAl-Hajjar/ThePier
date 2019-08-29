<!DOCTYPE html>
<html>

<?php

include 'header.php';
require_once ('./subscriberdao/subscribersdao.php');
require_once ('users.php');




if(isset($_SESSION['AdminID']))
{

echo '<div>'.'Session AdminID = ', $_SESSION['AdminID'].'</div>';
echo 'Last Login Date = ', $_SESSION['Lastlogin'];           

unset($_SESSION['AdminID']);



echo '<table width="100%" height="100%" border="1" margin-top: 0; >';
echo '<tr>';
echo  '<th><b>Subscribers</b></th>';
echo '<th><b>Email Adresses</b></th>';
echo  '<th><b>Phone number</b></th>';
echo  '<th><b>Referral</b></th>';
echo '</tr>';
echo '<tbody>';


$sub = new subscribersdao;
$subscribers=$sub->getSubscribers();

}



?>
</table>
<body>
            
            <?php
include 'footer.php';

?>
        </div>

</body>
</html>