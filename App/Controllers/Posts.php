<?php

namespace App\Controllers;

use \Core\View;

/**
 * Post controller
 *
 * PHP version 7.3
 */
class Posts extends \Core\Controller
{

  /**
   * Show the index page
   *
   * @return void
   */
  public function indexAction()
  {
    //echo 'Hello from the index action in the Post controller!';
    View::renderTemplate('Posts/index.html');
  }

  /**
   * Show the add new page
   *
   * @return void
   */
  public function addNewAction()
  {
    echo 'Hello from the addNew action in the Posts controller!';
  }

  public function editAction()
  {
    echo 'Hello from the edit action in the Posts controller!';
    echo '<p>Route parameters: <pre>' .
      htmlspecialchars(print_r($this->route_params, true)) .
      '</pre></p>';
  }

}
