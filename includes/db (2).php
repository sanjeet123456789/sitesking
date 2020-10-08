<?php 
 
function connect(){
	$con=mysqli_connect('localhost','goosefil_pal','Sitesking@12','goosefil_goosefile');
	if(!$con){
		die('Failed to connect');
	}
	return $con;
}
function show_menu(){
	$connection=connect();
	$menus='';
	$menus .=generate_multilevel_menus($connection,null);
	$menus = str_replace('<ul class="dropdown"></ul>','',$menus);
	return $menus;
}
function generate_multilevel_menus($connection,$parent_id=NULL){
	$menu='';
	$sql='';
	if(is_null($parent_id)){
		$sql="SELECT * FROM menu WHERE parent_id is null order by sort_order";
	}
	else{
		$sql="SELECT * FROM menu WHERE parent_id=$parent_id";
	}
	$result=mysqli_query($connection,$sql);
	while($row = mysqli_fetch_assoc($result)){
		if($row['page']){
			$menu .='<li><a href="'.$row['page'].'">'.$row['title'].'</a>';

		}
		else{
			$menu .='<li><a href="#">'.$row['title'].'</a>';

		}
		$menu .= '<ul class="dropdown">'.generate_multilevel_menus($connection,$row['id']).'</ul>';
		$menu .='</li>';


		
	}
	return $menu;

}
function get_parent_menu_items(){
	$connection =connect();
	$sql="SELECT * FROM menu where parent_id is null";
	$result=mysqli_query($connection,$sql);
	if(mysqli_num_rows($result)){
		$html="<table>";
		$html .='<tr><th col="span">Coontrol parent sortinf order</th></tr>';
			while($row=mysqli_fetch_assoc($result)){

				$html .='<tr>';
				$html .='<td>(Order: '.$row['sort_order'].')'.$row['title'].'</td>';
				$html .='<td>';
				$html .='<input type="hidden" name="id[]" value="'.$row['id'].'">';
				$html .='<input type ="text" name="order[]">';
				$html .='</td>';

				$html .='</tr>';




			}
				
		

		$html .='</table>';

		return $html;
	}

}
function update_sorting_order($ids,$orders){
	$connection=connect();
	foreach($ids as $id ){
		$sql="UPDATE menu SET sort_order=$order WHERE id=$id";
mysqli_query($connection,$sql);
if(!mysqli_affected_rows($connection)){
	return false;
}
	}

	return true;
}



 ?>