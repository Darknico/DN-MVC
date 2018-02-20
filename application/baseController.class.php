<?php

/* This defines the base structor of a controller */

abstract class baseController
{

    protected $registry;

	/* all controllers MUST implement the index method */
	abstract public function index();
	
    public function __construct($registry)
    {
        $this->registry = $registry;
        $this->registry->template->translator = $this->registry->translationEngine;
    }

    public function renderView()
    {
        $this->registry->template->showCurrentView($this->registry->router);
    }

	public function dbResultCount($query)
    {
        if ($this->registry->db->connect()) {
            if ($this->registry->db->prepare($query)) {
                if ($this->registry->db->query()) {
                    $nRows = $this->registry->db->numrows();
                    $this->registry->db->free();
                    $this->registry->db->disconnect();
                }
            }
        }
        return $nRows;
	}
	
    public function dbResultArray($query, $resultType='array')
    {
        if ($this->registry->db->connect()) {
            if ($this->registry->db->prepare($query)) {
                if ($this->registry->db->query()) {
                    while ($row = $this->registry->db->fetch($resultType)) {
                        $rows[] = $row;
                    }
                    $this->registry->db->free();
                    $this->registry->db->disconnect();
                }
            }
        }
        return $rows;
    }

	public function dbResultObject($query)
    {
        if ($this->registry->db->connect()) {
            if ($this->registry->db->prepare($query)) {
                if ($this->registry->db->query()) {
                    while ($row = $this->registry->db->fetch('object')) {
                        $rows[] = $row;
                    }
                    $this->registry->db->free();
                    $this->registry->db->disconnect();
                }
            }
        }
        return $rows;
	}
	


}
