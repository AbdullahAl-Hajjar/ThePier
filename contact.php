<!DOCTYPE html>
<html>
        <?php
include 'header.php'; 
require_once('./subscriberdao/subscribersdao.php');
?>

<?php


try{
 
 $error = false;
 $errMseg = "";

 if(isset($_POST['customerName'])||isset($_POST['phoneNumber'])||
    isset($_POST['emailAddress'])||isset($_POST['referral']))
        {
        
        if($_POST['customerName']=="")
        {
            $errMseg['customerName'] = "* Required ";
            $error = true;
        }
        
        if (empty($_POST['phoneNumber']))
        {
            $errMseg ['phoneNumber'] =  "* Required ";
            $error = true;
        }
       
        if ($_POST['emailAddress']=="")
        {
            $errMseg ['emailAddress'] = "* Required ";
            $error = true;
        } 

        if (empty($_POST["referral"])) 
        {
            $errMseg ['referral'] = "* Required";
            $error = true;
        }    
               
        if($error == false)
        {  
             
	    $sub = new subscribersdao;
	    $email = $_POST['emailAddress'];
	     
	    $hash = password_hash($email, PASSWORD_DEFAULT);
	    
	    $sub->setSubscriber($_POST['customerName'],$_POST['phoneNumber'],$hash,$_POST['referral']);
	    
	   
            echo '<h3>'.'<span style="color:green">'.'Thank You For Subscribing!'.'</span>'.'</h3>';
        }
    }
}catch(Exception $e){
	            echo '<h3>Error on page.</h3>';
		                echo '<h2>' . $e->getMessage() . '</h2>';            
		            }
?>


            <div id="content" class="clearfix">
                <aside>
                        <h2>Mailing Address</h2>
                        <h3>255 BoardWalk North<br />
                            Cole Harbour, NS B2V1B6</h3>
                        <h2>Phone Number</h2>
                        <h3>(902)777-7777</h3>
                        <h2>Email Address</h2>
                        <h3>info@thepier.com</h3>
                </aside>
                <div class="main">
                    <h1>Sign up for our newsletter</h1>
                    <p>Please fill out the following form to be kept up to date with news, specials, and promotions from The Pier</p>
                    <form name="frmNewsletter" id="frmNewsletter" method="post" action="contact.php" enctype="multipart/form-data" >
                        <table>
                            <tr>
                                <td>Name:</td>
                                <td><input type="text" name="customerName" id="customerName" placeholder="first name" size='40'>
                                <?php
                                if(isset($errMseg['customerName'])){
                                    echo '<span style=\'color:red\'>'.$errMseg['customerName'].'</span>';
                                }
                                ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Phone Number:</td>
                                <td><input type="text" name="phoneNumber" id="phoneNumber" placeholder="000-000-0000" size='40'>
                                <?php 
                                if(isset($errMseg['phoneNumber'])){
                                    echo '<span style=\'color:red\'>'.$errMseg['phoneNumber'].'</span>';
                                }
                                ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Email Address:</td>
                                <td><input type="text" name="emailAddress" id="emailAddress" placeholder="example@gmail.com" size='40'>
                                <?php
                                if(isset($errMseg['emailAddress'])){
                                    echo '<span style=\'color:red\'>'.$errMseg['emailAddress'].'</span>';
                                }
                                ?>
                                </td>
                            </tr>
                            <tr>
                                <td>How did you hear<br /> about us?</td>
                                <td>
                                    Newspaper<input type="radio" name="referral" id="referralNewspaper" value="newspaper">
                                    Radio<input type="radio" name='referral' id='referralRadio' value='radio'>
                                    TV<input type='radio' name='referral' id='referralTV' value='TV'>
                                    Other<input type='radio' name='referral' id='referralOther' value='other'>
                                    <?php
                                if(isset($errMseg['referral'])){
                        echo '<span style=\'color:red\'>' . $errMseg['referral'] . '</span>';
                      }
            ?>
                                </td>
                            </tr>
                          
                            <tr>
                            <tr>
                                <td colspan='2'><input type='submit' name='btnSubmit' id='btnSubmit' value='Sign up!'>&nbsp;&nbsp;<input type='reset' name="btnReset" id="btnReset" value="Reset Form"></td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>

            <?php
include 'footer.php';

?>

</html>
