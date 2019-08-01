<?Php
/////// Update your database login details here /////
$dbhost_name = "localhost"; // Your host name 
$database = "siteskin_sitesking";       // Your database name
// $database = "plus2net";
$username = "siteskin_pal";            // Your login userid 
$password = "Sanjeet@12345";            // Your password 
//////// End of database details of your server //////

//////// Do not Edit below /////////
try {
  $con = mysqli_connect("$dbhost_name", "$username", "$password", "$database");
// $dbo = new PDO('mysql:host='.$dbhost_name.';dbname='.$database, $username, $password);
} catch (PDOException $e) {
print "Error!: " . $e->getMessage() . "<br/>";
die();
}
?> 
   <?php
    if ($_POST['saveForm'] )
     {
     // $user=$_POST['c'];

      $max_id="SELECT max(id)  as max_id_group FROM community_group"; 
      foreach ($con->query($max_id) as $rows){
         $user=$rows['max_id_group']+1;
     }
     
     //$filename=basename($_FILES["file"]["name"]);
     
     $tmp=$_FILES["file"]["tmp_name"];
      $extension = explode("/", $_FILES["file"]["type"]);
      $name=$user.".".$extension[1];
     
    move_uploaded_file($tmp, "../../assets/images/uploads/" . $user.".".$extension[1]);



$cat=$_POST['cat'];
$subcat=$_POST['subcat'];
$subcat3=$_POST['subcat3'];
$group_name=$_POST['Field4'];
$group_link=$_POST['Field5'];
 // $group_message=$_POST['Field6'];

// echo " cat=$cat <br> subcat=$subcat <br> subcat3= $subcat3 ,$group_name,$group_link,$group_message";


 $sql_update_query="INSERT INTO `community_group` (`id`, `country`, `category`, `source_platform`, `group_name`, `group_link`, `current_date_`, `logo_link`, `filter`, `message`) VALUES ('$user', '$subcat', '$subcat3', '$cat', '$group_name', '$group_link', CURRENT_TIMESTAMP, 'assets/images/uploads/$name', '', null);";

$query = mysqli_query($con, $sql_update_query);



     }


echo "Submitted sucessfully";



    
 ?>

