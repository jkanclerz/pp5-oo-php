<?php

namespace Jkan\Component\Company;

class Worker
{
  private $name;

  public function __construct($name)
  {
    $this->name = $name;
  }

  public function work()
  {
    echo sprintf(
      'Hi, i am %s, i work very hard ....',
      $this->name
    );
  }
}
