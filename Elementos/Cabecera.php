<link href="CSS/PaginaPHP.css" rel="stylesheet" type="text/css">

<?php

class Cabecera{

	private $texto;
	
	public function __construct($titulo){
	
		$this ->texto=$titulo;	
	}
	
	public function Cabecera(){
?>


<h1><?php echo $this ->texto;?></h1>
<?php
	}

}