
<?php
mysqli_query($con, "SET NAMES UTF8");
		function loop_array($array = array(), $menu_ustid = 0){

			if(!empty($array[$menu_ustid])){

				
				foreach($array[$menu_ustid] as $items){
				echo '<li id="menu-item-1354">';
				echo $items['menu_ad'];
				loop_array($array, $items['menu_id']);
				echo '</li>';
				}
				
			}
		}

		function display_menus() {


			$query = $con->query("SELECT * FROM menuler");
			$array = array();

			if(mysqli_num_rows($query)){

				while($rows = mysqli_fetch_array($query)){

					$array[$rows['menu_ustid']][] = $rows;
				}
				loop_array($array);
			}
		}

?>