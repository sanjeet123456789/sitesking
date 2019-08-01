<?php 

class software_categories{
	private $com;
	private $id;
	private $title;
	private $parent_id;
	private $page_id;
	private $sort_order;
	
	private $page_parent;


	public function __construct($com,$id){
		$this->com=$com;
		$this->id=$id;
		$query=mysqli_query($this->com,"SELECT * FROM software_categories WHERE id='$this->id'");
		$categories=mysqli_fetch_array($query);
		
		
		$this->title=$categories['title'];
		$this->parent_id=$categories['parent_id'];
		$this->page_id=$categories['page_id'];
		$this->sort_order=$categories['sort_order'];
	}
	
	public function gettitle(){
		return $this->title;
	}
	public function getparent_id(){
		return $this->parent_id;
	}
	public function getpage_id(){
		return $this->page_id;
	}
	public function getsort_order(){
		return $this->sort_order;
	}
	public function getparent_file_location(){
		$query_parent=mysqli_query($this->com,"SELECT * FROM software_categories WHERE id=$this->parent_id");
		$categories_parent=mysqli_fetch_array($query_parent);
		$this->page_parent_id=$categories_parent['page_id'];
		return $this->page_parent_id;

	}
	public function getparent_file_title(){
		$query_parent_title=mysqli_query($this->com,"SELECT * FROM software_categories WHERE id=$this->parent_id");
		$categories_parent_title=mysqli_fetch_array($query_parent_title);
		$this->page_parent_title=$categories_parent_title['title'];
		return $this->page_parent_title;
		

	}
	


}




 ?>