<?php

/**
 * Create Class Controll.
 */
class Controller {

  /**
   * Method Type Object.
   * @return mixed
   */
  public function index() {
    return require __DIR__ . '/../views/plantilla.php';
  }

  /**
   * Method Type Static
   * @return mixed
   */
  public static function index2() {
    return require __DIR__ . '/../views/plantilla.php';
  }

}
