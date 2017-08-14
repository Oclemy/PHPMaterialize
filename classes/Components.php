<?php

/**
 * THIS CLASS ENCAPSULATES THE HTML ELEMENTS/COMPONENTS THAT WE USE. EACH FUCNTION RETURNS A COMPONENT.
 * Created by PhpStorm.
 * User: Hp
 * Date: 7/31/2017
 * Time: 5:56 PM
 */
require_once('classes/Constants.php');

class Components
{

    /*
     * SHOW NAVIGATION BAR AND MENU ITEMS
     */
    public static function printNavbar($navbarItems)
    {
        $openNavbar = '<nav class="light-blue lighten-1" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo">' . Constants::SITE_TITLE . '</a>
      <ul class="right hide-on-med-and-down">
     <li><a href="'.Constants::SITE_BASE_URL.'">Home</a></li>
      ';

        $closeNavbar = '</ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>';

        //OPEN NAVIGATIONBAR
        echo $openNavbar;

        //PRINT MENU ITEMS
        if (isset($navbarItems)) {
            foreach ($navbarItems as $navbarItem) {
                echo '<li><a href="'.Constants::SITE_BASE_URL.'/'.$navbarItem.'.php">' . $navbarItem . '</a></li>';
            }
        }

        //CLOSE NAVIGATIONBAR
        echo $closeNavbar;
    }

    public static function printInfoSection($info)
    {
        echo '
         <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br><br>
      <h1 class="header center orange-text">'.$info["header"].'</h1>
      <div class="row center">
        <h5 class="header col s12 light">'.$info["description"].'</h5>
      </div>
      <div class="row center">
        <a href="http://camposha.info/" id="download-button" class="btn-large waves-effect waves-light orange">Get Started</a>
      </div>
      <br><br>

    </div>
  </div>
        ';
    }
}