<!DOCTYPE html>
<html>

<?php
include'header.php';
?>

<?php
require_once('./users.php');

if(isset($_POST['submit'])){
        if(isset($_POST['Username']) && isset($_POST['Password']))
        {
                $user = new users; 
                $error = false;
                $errMseg = "";

                if(empty($_POST['Username']))
                {
                $errMseg['Username'] = "* Required ";
                $error = true;
                }
                
                if (empty($_POST['Password']))
                {
                $errMseg['Password'] =  "* Required ";
                $error = true;
                }

                if($error == false)
                {
                        $username=$_POST['Username'];
                        $password=$_POST['Password'];
                        
                        if($user->authenticate($username, $password))
                        {      
                                header('Location:mailing_list.php');    
                        }
                }


        }
}


?>

<div id="content" class="clearfix" >
<form name="login" id="login" method="post">
<table>



<tr>
<td><b>Username: </td>
<td><input type="text"  id="Username" name="Username" placeholder="Enter Username" name="uname" size='30'>
<?php
if(isset($errMseg['Username'])){
                                    echo '<span style="color:red">'.$errMseg['Username'].'</span>';
                                }
                                ?>
</td>
                        </tr>
<tr>
      <td><b>Password: </td>
      <td><input type="password" id="Password" name="Password" placeholder="Enter Password" name="psw"  size='30'>
      <?php
if(isset($errMseg['Password'])){
                                    echo '<span style="color:red">'.$errMseg['Password'].'</span>';
                                }
                                ?>
      </td>
                        </tr>
        
     <tr> <td> <input type="submit" id="submit" name="submit" ></td></tr>
    
        
      </table>   

    </form>
</div>

                         
            <?php
include 'footer.php';

?>
</html>

