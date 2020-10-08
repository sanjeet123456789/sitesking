<?php 
 class Technical{
 	private $com;
 	private $id;
 	private $file_name;
 	private $requirements;
 	private $language_support;
 	private $website_link;
 	private $md5checksum;
 	private $official_website;
 	public function __construct($com,$id){
 		$this->com=$com;
 		$this->id=$id;
 		$query=mysqli_query($this->com,"SELECT * FROM technical_tab WHERE id='$this->id'");
 		$technical_tab=mysqli_fetch_array($query);
 		$this->file_name=$technical_tab['file_name'];
 		$this->requirements=$technical_tab['requirements'];
 		$this->language_support=$technical_tab['language_support'];
 		$this->website_link=$technical_tab['website_link'];
 		$this->md5checksum=$technical_tab['md5checksum'];
 		$this->official_website=$technical_tab['official_website'];
 	}
 	public function getfile_name(){
 		return $this->file_name;
 	}
 	public function getrequirements(){
 		return $this->requirements;
 	}
 	public function getlanguage_support(){
 		return $this->language_support;
 	}
 	public function getwebsite_link(){
 		return $this->website_link;
 	}
 	public function getmd5checksum(){
 		return $this->md5checksum;
 	}
 	public function getofficial_website(){
 		return $this->official_website;
 	}


 }



 ?>