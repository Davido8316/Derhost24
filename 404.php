<?php
header("HTTP/1.0 404 Not Found");
$sitename = "404";


require_once("./includes/header.php");
?>
<br><br><center>
<div class="container"><h1 style="color:white; text-align:center">ERROR 404 NOT FOUND</h1>
<br><br>

<div class="img-holder">
                        <img src="images/404.svg" height="250" alt="">


                        <br><br><br>
                    </div></div>

                    </center>
<?php
require_once("./includes/footer.php");

die();
?>