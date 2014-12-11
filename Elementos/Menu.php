<link href="CSS/PaginaPHP.css" rel="stylesheet" type="text/css">

<?php

	class Menu{
	
		private $link;
		public function Menu(){	


		echo "<ul id='menu' class='menu'>"; 
		echo $this->link;
		$menu[] = array('Inicio' => array('PHP', 'HTML', 'CSS'));
		$menu[] = array('Nosotros' => array('La empresa'));
		$menu[] = array('Servicios' => array('Pags Web PHP', 'Pags Web HTML'));
		$menu[] = array('Contacto' => array('Redes sociales', 'Donde Estamos', 'Email', 'Telefono'));
		
		foreach ($menu as $menu_key => $menu_item){
			foreach ($menu_item as $menu_name => $sub_menu){
				echo "<li><a href='#'>".$menu_name."</a>";
				if(isset($sub_menu)){
					echo "<ul>";
					foreach($sub_menu as $items){
						echo"<li><a href='#'>".$items."</a></li>";
					}
					echo "</ul>";
				}
				echo "</li>";
			}		
		}
		echo "</ul>";
		
	}
}
?>
