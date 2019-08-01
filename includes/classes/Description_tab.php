<?php 
class Description_tab{
	private $com;
	private $id;
	
	private $pic_link;
	private $video_link;
	private $para1_heading;
	private $para1_description;
	private $para2_heading;
	private $para2_description;
	private $para3_heading;
	private $para3_description;
	private $para4_heading;
	private $para4_description;
public function __construct($com,$id){
	$this->com=$com;
	$this->id=$id;
	$query=mysqli_query($this->com,"SELECT * FROM description_tab WHERE id='$this->id'");
	$description=mysqli_fetch_array($query);
	
	$this->pic_link=$description['pic_link'];
	$this->video_link=$description['video_link'];
	$this->para1_heading=$description['para1_heading'];
	$this->para1_description=$description['para1_description'];
	$this->para2_heading=$description['para2_heading'];
	$this->para2_description=$description['para2_description'];
	$this->para3_heading=$description['para3_heading'];
	$this->para3_description=$description['para3_description'];
	$this->para4_heading=$description['para4_heading'];
	$this->para4_description=$description['para4_description'];


}

public function getpic_link(){
	return $this->pic_link;
}
public function getvideo_link(){
	return $this->video_link;
}
public function getpara1_heading(){
	return $this->para1_heading;
}
public function getpara1_description(){
	return $this->para1_description;
}
public function getpara2_heading(){
	return $this->para2_heading;

}
public function getpara2_description(){
	return $this->para2_description;
}
public function getpara3_heading(){
	return $this->para3_heading;
}
public function getpara3_description(){
	return $this->para3_description;
}
public function getpara4_heading(){
	return $this->para3_heading;
}
public function getpara4_description(){
	return $this->para4_description;
}




}



 ?>