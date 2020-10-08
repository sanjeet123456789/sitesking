

<?php include("includes/header.php");
  
if(isset($_GET['id'])){
  $postId=$_GET['id'];
}else{
  header("Location:index.php");
}
$software_post=new software_list($com,$postId);
$categories_post=$software_post->getitemcategories_id();
$licence_post=$software_post->getlicence();
$tab_index_post=$software_post->gettab_index();
$description_tab_post=$tab_index_post->getdescription();
$technical_tab_post=$tab_index_post->gettechnical();
$change_tab_post=$tab_index_post->getchange();

 ?>
<?php echo $gettab_index->getdescription(); ?>
<?php echo $description_tab_post->getpara3_heading(); ?>
<?php echo $description_tab_post->getpara2_description(); ?>


<?php include("includes/footer.php"); ?>
<!-- end footer-->
</body>
</html>