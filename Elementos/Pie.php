<link href="CSS/PaginaPHP.css" rel="stylesheet" type="text/css">

<?php

	class Pie{
		
		private $texto;
		public function __construct($cadena){
			
			$this->texto = $cadena;
		}
	
	public function Pie(){
?>



		<?php echo $this->texto;?>
		<?php
	}
}