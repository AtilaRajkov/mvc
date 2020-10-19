<?php

namespace App\Controllers;

/**
 * Post controller
 *
 * PHP version 7.3
 */
class Posts
{

  /**
   * Show the index page
   *
   * @return void
   */
  public function index()
  {
    echo 'Hello from the index action in the Post controller!';
  }

  /**
   * Show the add new page
   *
   * @return void
   */
  public function addNew()
  {
    echo 'Hello from the addNew action in the Posts controller!';
  }

}
