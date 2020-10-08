<?php 
class software_list{
	private $com;
	private $id;
	private $postId;
	private $tab_index;
	
	private $thumbnail_link;
	private $name;
	private $version;
	private $company_name;
	private $licence;
	private $download_link;
	private $short_description;
	private $size;
	private $users_rating;
	private $views;
	private $total_download;
	private $ads_pic;
	private $ads_link;
	private $release_date;
	private $current_date_in;
	private $pro_link;
	private $software_list;
	private $platform;
	private $download_link_32bits;
	private $size_32_bits;

	
	private $ItemCategories_ID;

	public function __construct($com,$postId){
		$this->com=$com;
		$this->id=$postId;
		$query=mysqli_query($this->com,"SELECT * FROM software_list where id='$this->id'");
		if (!$query) {
    printf("Error: %s\n", mysqli_error($com));
    exit();
}
		$software_list=mysqli_fetch_array($query);
		$this->tab_index=$software_list['tab_index'];
		
		$this->thumbnail_link=$software_list['thumbnail_link'];
		$this->name=$software_list['name'];
		$this->version=$software_list['version'];
		$this->company_name=$software_list['company_name'];
		$this->licence=$software_list['licence'];
		$this->download_link=$software_list['download_link'];
		$this->short_description=$software_list['short_description'];
		$this->size=$software_list['size'];
		$this->users_rating=$software_list['users_rating'];
		$this->views=$software_list['views'];
		$this->total_download=$software_list['total_download'];
		$this->ads_pic=$software_list['ads_pic'];
		$this->ads_link=$software_list['ads_link'];
		$this->release_date=$software_list['release_date'];
		$this->current_date_in=$software_list['current_date_in'];
		$this->pro_link=$software_list['pro_link'];
		$this->platform=$software_list['platform'];
		$this->ItemCategories_ID=$software_list['ItemCategories_ID'];
		$this->download_link_32bits=$software_list['download_link_32bits'];
		$this->size_32_bits=$software_list['size_32_bits'];

	}
	public function getId(){
		return $this->id;
	}
	public function gettab_index(){
		return new tab_index($this->com,$this->tab_index);
	}
	
	public function getthumbnail_link(){
		return $this->thumbnail_link;
	}
	public function getname(){
		return $this->name;
	}
	public function getversion(){
		return $this->version;
	}
	public function getcompany_name(){
		return $this->company_name;
	}
	public function getlicence(){
		return new licence($this->com,$this->licence);
	}
	public function getdownload_link(){
		return $this->download_link;
	}
	public function getshort_description(){
		return $this->short_description;
	}
	public function getsize(){
		return $this->size;
	}
	public function getusers_rating(){
		return $this->users_rating;
	}
	public function getviews(){
		return $this->views;
	}
	public function gettotal_download(){
		return $this->total_download;
	}
	public function getads_pic(){
		return $this->ads_pic;
	}
	public function getads_link(){
		return $this->ads_link;
	}
	public function getrelease_date(){
		return $this->release_date;
	}
	public function getcurrent_date(){
		return $this->current_date_in;
	}
	public function getpro_link(){
		return $this->pro_link;
	}
	
	public function getitemcategories_id(){
		return new software_categories($this->com,$this->ItemCategories_ID);
	}
	public function getplatform(){
		return $this->platform;
	}
	public function getdownload_link_32bits(){
		return $this->download_link_32bits;
	}
	public function getsize_32_bits(){
		return $this->size_32_bits;
	}
}






 ?>