<?php

/* This is the main controller for the site index */

class indexController extends baseController
{
    /* Implement index controller */
    public function index()
    {
        /* Set all template vars, this will be used in the view */
        $this->registry->template->welcome = $this->registry->translationEngine->GetTranslate('dn_testTag');

        /* This instruction allows the view to execute modules */
        $this->registry->template->modules = $this->registry->modules;

        /* Show the current view */
        $this->renderView();
    }

    /* Implement test controller */
    public function test()
    {
        $this->registry->template->name = $this->registry->translationEngine->GetTranslate('dn_testTag');
        
        /* Show the current view */
        $this->renderView();
    }

    /* Implement test2 controller */
    public function test2()
    {
        $this->registry->template->name = 'test2';
        /* Show the current view */
        $this->registry->template->showView('index/test');
    }

    /* Implement test controller */
    public function testDB()
    {
        $query = "SELECT * FROM test";
        $this->registry->template->dbArray = $this->dbResultArray($query);
        $this->registry->template->dbObject = $this->dbResultObject($query);
        $this->registry->template->dbRowCount = $this->dbResultCount($query);


        /* Show the current view */
        $this->renderView();
    }
}
