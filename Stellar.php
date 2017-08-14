<?php

/**
 * Created by PhpStorm.
 * User: Hp
 * Date: 7/31/2017
 * Time: 6:57 PM
 */
require_once('classes/MasterPage.php');

class Stellar extends MasterPage
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
        return 'Stellar';
    }

    public function show()
    {
        Components::printInfoSection(array('header'=>'Stellar News','description'=>'Get the Latest Stellar News here.'));
    }

}

/*
*SHOW PAGE
*/

$s = new Stellar();
$s->show();

