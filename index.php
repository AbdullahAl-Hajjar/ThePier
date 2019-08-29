<!DOCTYPE html>
<html >


        <?php
include 'header.php';
 ?>



        <?php
include 'menuItem.php';

$wpburger = new menuItem("The Cod Burger", "Freshly caught Cod served up with homefries", 14);
$wpkabobs = new menuItem("Salmon Kebobs", "Tender cuts of Salmon, served with your choice of side", 17);
$itemname = $wpburger->getItemName();
$description = $wpburger->getDescription();
$price = $wpburger->getPrice();
$itemname2 = $wpkabobs->getItemName();
$description2 = $wpkabobs->getDescription();
$price2 = $wpkabobs->getPrice();
date_default_timezone_set('US/Eastern');
?>
            <div id="content" class="clearfix">
                <aside>
                    <h2>
                        <?php
echo date('l'); ?>'s Specials</h2>

                   
                    <img src="images/burger_small.jpg" alt="Burger" title="Burger" >
                    <h3>
                        <?php
echo $itemname; ?>
                    </h3>
                    <p>
                        <?php
echo $description; ?> - $
                        <?php
echo $price; ?>
                    </p>
                    <hr>
                    <img src="images/kebobs.jpg" alt="Kebobs" title="WP Kebobs">
                    <h3>
                        <?php
echo $itemname2; ?>
                    </h3>
                    <p>
                        <?php
echo $description2; ?> - $
                        <?php
echo $price2; ?>
                    </p>
                    
                </aside>
                <div class="main">
                    <h1>Welcome</h1>
                    <img src="images/dining_room.jpg" alt="Dining Room" title="The Pier  Dining Room" class="content_pic" hieght height="500" width="300">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                    <h2>Book a Reservation!</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                </div>

            </div>
    
            <?php
include 'footer.php';

?>
    </div>

</body>

</html>
