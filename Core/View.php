<?php

namespace Core;

/**
 * View
 *
 * PHP version 7.3
 */
class View
{

  /**
   * Render a view file
   *
   * @param string $view The file view
   * @param $args
   *
   * @return void
   */
  public static function render($view, $args = [])
  {
    extract($args, EXTR_SKIP);

    $file = "../App/Views/$view"; // relative to Core directory

    if (is_readable($file)) {
      require $file;
    } else {
      echo "$file not found";
    }
  }

  /**
   * Render a view template using Twig
   *
   * @param string $template The template file
   * @param array $args Associative array of data to display in the view (optional)
   * @throws \Twig\Error\LoaderError
   * @throws \Twig\Error\RuntimeError
   * @throws \Twig\Error\SyntaxError
   *
   * @return void
   */
  public static function renderTemplate($template, $args = [])
  {
    static $twig = null;

    if ($twig === null) {
//      $loader = new \Twig_Loader_Filesystem('../App/Views');
//      $twig = new \Twig_Environment($loader);
      $loader = new \Twig\Loader\FilesystemLoader('../App/Views');
      $twig = new \Twig\Environment($loader);
    }

    echo $twig->render($template, $args);
  }
}