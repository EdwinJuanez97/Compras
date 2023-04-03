<?php 
	//require_once("Models/TCategoria.php");
	//require_once("Models/TProducto.php");
	class Ventas extends Controllers{
		//use TCategoria, TProducto;
		public function __construct()
		{
			parent::__construct();
			//session_start();
		}

		public function ventas()
		{
			
			$data['page_tag'] = "Ventas";
			$data['page_title'] = "Ventas";
			$data['page_name'] = "ventas";
			$this->views->getView($this,"ventas",$data); 
		}

	}
 ?>