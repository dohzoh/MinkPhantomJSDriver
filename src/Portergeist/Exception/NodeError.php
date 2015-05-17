<?php

namespace Behat\PhantomJSExtension\Portergeist\Exception;

/**
 * Class NodeError
 * @package Behat\PhantomJSExtension\Portergeist\Exception
 */
class NodeError extends ClientError {
  protected $node;

  /**
   * @param mixed $node
   * @param mixed $response
   */
  public function __construct($node, $response) {
    $this->node = $node;
    parent::__construct($response);
  }
}
