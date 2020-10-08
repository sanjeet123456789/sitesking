<?php 
class change_tab{
	private $com;
	private $id;
	private $para1_heading;
	private $para1_list_number;
	private $para2_heading;
	private $para2_list_number;
	private $para3_heading;
	private $para3_list_number;
	public function __construct($com,$id){
		$this->com=$com;
		$this->id=$id;
		$query=mysqli_query($this->com,"SELECT * FROM change_tab WHERE id='$this->id'");
		$change_tab=mysqli_fetch_array($query);
		$this->para1_heading=$change_tab['para1_heading'];
		$this->para1_list_number=$change_tab['para1_list_number'];
		$this->para2_heading=$change_tab['para2_heading'];
		$this->para2_list_number=$change_tab['para2_list_number'];
		$this->para3_heading=$change_tab['para3_heading'];
		$this->para3_list_number=$change_tab['para3_list_number'];
}
	
	public function getpara1_heading(){
		return $this->para1_heading;
	}
	public function getpara1_list_number(){
		return $this->para1_list_number;
	}
	public function getpara2_heading(){
		return $this->para2_heading;
	}
	public function getpara2_list_number(){
		return $this->para2_list_number;
	}
	public function getpara3_heading(){
		return $this->para3_heading;
	}
	public function getpara3_list_number(){
		return $this->para3_list_number;
	}
}




 ?>