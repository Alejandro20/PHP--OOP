<link href="CSS/PaginaPHP.css" rel="stylesheet" type="text/css">

<?php

ini_set('display_errors','on');

require_once("Elementos/Cabecera.php");
require_once("Elementos/Menu.php");
require_once("Elementos/Contenido.php");
require_once("Elementos/Pie.php");

class Pagina{
	
	private $Cabecera;
	private $Menu;
	private $Conetnido;
	private $Pie;
	public function __construct($texto_cabecera,$texto_pie){
		
		$this->Cabecera = new Cabecera($texto_cabecera);
		$this->Contenido = new Contenido();
		$this->Pie = new Pie($texto_pie);
	}
	
	public function iniciar_contenido($texto)
	{
		$this->Contenido->iniciar_linea($texto);
	}
	
	public function vista()
	{
		
		echo "<div id=Cabecera>"; $this->Cabecera->Cabecera(); echo "</div>";
		echo "<div id=Menu>"; $this->Menu = new Menu(); echo "</div>";
		echo "<div id=Contenido>"; $this->Contenido->Contenido(); echo "</div>";
		echo "<div id=Pie>"; $this->Pie->Pie(); echo "</div>";
		
	}
}
