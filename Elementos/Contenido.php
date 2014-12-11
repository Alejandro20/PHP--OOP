<link href="CSS/PaginaPHP.css" rel="stylesheet" type="text/css">

<?php

class contenido{
	
	private $lineas = array();
	
	public function iniciar_linea($li){
		
		$this->lineas[] = $li;
	}
	
	public function Contenido(){
		
		for ($i=0;$i<sizeof($this->lineas);$i++){
?>

			
<p id="text_der_img_php"><?php echo $this->lineas[$i];?></p>
			<?php
		}
	}
}