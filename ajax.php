<?php

//Including Database configuration file.

include "db.php";

//Getting value of "search" variable from "script.js".

if (isset($_POST['search'])) {

//Search box value assigning to $Name variable.

   $Name = $_POST['search'];

//Search query.

   $Query = "SELECT Name FROM search2 WHERE Name LIKE '%$Name%' LIMIT 5";

//Query execution

   $ExecQuery = MySQLi_query($con, $Query);

//Creating unordered list to display result.

   echo '

<ul>

   ';

   //Fetching result from database.

   while ($Result = MySQLi_fetch_array($ExecQuery)) {

       ?>

   <!-- Creating unordered list items.

        Calling javascript function named as "fill" found in "script.js" file.

        By passing fetched result as parameter. -->

   

 

       <?php echo '<li>2.<a class="web_link" target="_blank" href="https://www.reddit.com/r/heavymind" ><img   src="http://localhost/wordpress0012/reddit_pics.png"  class="web_icon">'.$Result['Name'].'</a></li>';?>
            

   <!-- Below php code is just for closing parenthesis. Don't be confused. -->

   <?php

}}


?>

</ul>