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

      $max_id="SELECT max(id)  as max_id_group FROM community"; 
      foreach ($con->query($max_id) as $rows){
         $user=$rows['max_id_group']+1;
         echo $user;
     }
     
     //$filename=basename($_FILES["file"]["name"]);
     
     $tmp=$_FILES["file"]["tmp_name"];
      $extension = explode("/", $_FILES["file"]["type"]);
      $names=$user.".".$extension[1];
     
    move_uploaded_file($tmp, "../../assets/images/upload_community_pic/" . $user.".".$extension[1]);



$cat=$_POST['cat'];
$subcat=$_POST['subcat'];
$subcat3=$_POST['subcat3'];
$name=$_POST['Field4'];
$link=$_POST['Field5'];
$followers=$_POST['Field6'];
 // $group_message=$_POST['Field6'];

// echo " cat=$cat <br> subcat=$subcat <br> subcat3= $subcat3 ,$name,$link";
    if($cat==1){
    $sql_update_query="INSERT INTO `community` (`id`, `parent_id`, `name`, `link`, `pic_link`, `follower`, `current_date_`, `filter`) VALUES ('$user', '$subcat3', '$name', '$link', 'assets/images/upload_community_pic/$names', '$followers', CURRENT_TIMESTAMP, NULL);";
     $query = mysqli_query($con, $sql_update_query);


}else{
       $sql_update_query="INSERT INTO `community` (`id`, `parent_id`, `name`, `link`, `pic_link`, `follower`, `current_date_`, `filter`) VALUES ('$user', '$subcat', '$name', '$link', 'assets/images/upload_community_pic/$names', '$followers', CURRENT_TIMESTAMP, NULL);";
        $query = mysqli_query($con, $sql_update_query);


}






     }



echo "Submitted Sucessfully";


    
 ?>

