<?php

	class errorController extends baseController{
		
		public function index(){
			$this->renderView();
		}

		public function error404(){
			$this->renderView();
		}
	}

?>
