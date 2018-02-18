<?php

/* This defines the base structor of a controller */

abstract class baseController{
	
	protected $registry;
	
	function __construct($registry){
		$this->registry = $registry;	
		$this->registry->template->translator = $this->registry->translationEngine;
	}
	
	/* all controllers MUST implement the index method */
	abstract function index();
		
} 

?>
