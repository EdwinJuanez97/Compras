<?php
class Compras extends Controllers
{
	public function __construct()
	{
		parent::__construct();
	}


    public function Compras()
	{

		$data['page_tag'] = "Compras";
		$data['page_title'] = "Compras";
		$data['page_name'] = "Compras_";
		$data['page_functions_js'] = "functions_compras.js";
		$this->views->getView($this, "compras", $data);
	}

}
?>