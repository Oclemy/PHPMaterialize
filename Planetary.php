<?php

/**
 * Created by PhpStorm.
 * User: Hp
 * Date: 7/31/2017
 * Time: 6:57 PM
 */
require_once('classes/MasterPage.php');

class Planetary extends MasterPage
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
        return 'Planetary';
    }

    public function show()
    {
        Components::printInfoSection(array('header'=>'Planetary News','description'=>'Get the Latest Planetary News here.'));
    }

}

/*
*SHOW PAGE
*/

$p = new Planetary();
$p->show();

