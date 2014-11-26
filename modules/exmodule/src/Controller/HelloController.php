<?php

/**
 * @file
 * Contains \Drupal\exmodule\Controller\ExampleController.
 */


namespace Drupal\exmodule\Controller; // defino para o php que este é o meu namespace
use Drupal\Core\Controller\ControllerBase; // digo pro php pra usar COntrollerBase deste namespace específico
use Symfony\Component\DependencyInjection\ContainerInterface; //digo pro php usar esta classe, que é o objeto que é usado na função create


class HelloController extends ControllerBase {
  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('module_handler')
    );
  }
  /**
   * {@inheritdoc}
   */
  public function hello() {
    $build = array(
      '#type' => 'markup',
      '#markup' => t('Hello World!!!'),
    );
    return $build;
  }
}
