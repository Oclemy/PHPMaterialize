<?php

/**
 * Created by PhpStorm.
 * User: Hp
 * Date: 7/31/2017
 * Time: 6:57 PM
 */
require_once('classes/MasterPage.php');

class Galactic extends MasterPage
{

    /*
   CONSTRUCTOR
   */
    public function __construct()
    {
        parent::__construct($this->__toString());
    }
    /*
   PAGE TAG
   */
    public function __toString()
    {
        return 'Galactic';
    }

    public function show()
    {
        Components::printInfoSection(array('header'=>'Galatic News','description'=>'Get the Latest Galactic News here.'));
    }

}

/*
*SHOW PAGE
*/

$g = new Galactic();
$g->show();

