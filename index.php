<?php
/**
 * Created by PhpStorm.
 * User: Hp
 * Date: 7/31/2017
 * Time: 5:54 PM
 */
require_once('classes/MasterPage.php');


class Home extends MasterPage
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
        return 'Home';
    }

    public function show()
    {
        Components::printInfoSection(array('header'=>'Cosmic News','description'=>'Get the Latest Cosmic News daily.'));
    }

}

/*
*SHOW HOMEPAGE
*/

$home = new Home();
$home->show();

