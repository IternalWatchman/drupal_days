<?php
/**
 * @file
 * Contains \Drupal\hello\HelloController.
 */

namespace Drupal\Lex\Controller;
use Drupal\Core\Controller\ControllerBase;

class LexController extends ControllerBase {
  public function content() {
    return array(
        '#markup' => '' . t('Hello there!') . '',
    );
  }
}