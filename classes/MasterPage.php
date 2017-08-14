<?php

/**
 * MASTER PAGE CLASS. THIS CLASS SHALL GET APPLIED TO ANY PAGE AS LONG AS IT INHERITS FROM THIS CLASS
 * Created by Oclemy.
 * User: Hp
 * Date: 7/31/2017
 * Time: 5:56 PM
 */
require_once ('classes/Components.php');
require_once ('classes/Constants.php');

/**
 * Class MasterPage
 */
class MasterPage
{


    /**
     * MasterPage constructor.
     */
    public function __construct($pageTitle)
    {
        $this->printHeader($pageTitle);
    }

    public function __destruct()
    {
        $this->printFooter();
    }
    private function printHeader($title)
    {
        if (!isset($title)) {
            $title = '';
        }

        $site_header = '
       <!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>'.Constants::SITE_TITLE.'</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
        ';


        echo $site_header;

        //PRINT MENU
        Components::printNavbar(array(
            "Planetary",
            "Stellar",
            "Galactic"));
    }

    /*
    1.FOOTER HTML TAGS
    */
    private function printFooter()
    {
        $site_footer = '
       <footer class="page-footer orange">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Company Bio</h5>
          <p class="grey-text text-lighten-4">Galactic News brings the latest planetary, stellar and galactic news.</p>


        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Reach Us</h5>
          <ul>
            <li><a class="white-text" href="#!">About Us</a></li>
            <li><a class="white-text" href="#!">Contat Us</a></li>
            <li><a class="white-text" href="#!">News</a></li>
            <li><a class="white-text" href="#!">Terms</a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Connect</h5>
          <ul>
            <li><a class="white-text" href="#!">Facebook</a></li>
            <li><a class="white-text" href="#!">Twitter</a></li>
            <li><a class="white-text" href="#!">Linkedn</a></li>
            <li><a class="white-text" href="#!">Google Plus</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      Made by <a class="orange-text text-lighten-3" href="http://camposha.info">Camposha</a>
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  </body>
</html>
        ';

        echo $site_footer;
    }

}