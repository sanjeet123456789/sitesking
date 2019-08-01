<?php 
class Licence{
	private $com;
	private $id;
	public function __construct($com,$id){
		$this->com=$com;
		$this->id=$id;
	}
	public function getId(){
		return $this->id;
	}
	public function getName(){
		$query=mysqli_query($this->com,"SELECT name FROM licence WHERE id='$this->id'");
		$licence=mysqli_fetch_array($query);
		return $licence['name'];
		
	}
}










 ?>