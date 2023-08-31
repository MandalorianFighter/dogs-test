<?php

namespace Tests;

use DogsTest\ShibaInu;
use DogsTest\Pug;
use DogsTest\Dachshund;
use DogsTest\PlushLabrador;
use DogsTest\RubberDachshund;

use PHPUnit\Framework\TestCase;

class DogTest extends TestCase
{
  public function testShibaInuSound()
  {
      $shibainu = new ShibaInu();
      $this->assertEquals('woof! woof!', $shibainu->makeSound());
  }

  public function testShibaInuHunt()
  {
      $shibainu = new ShibaInu();
      $this->assertEquals("I am hunting!", $shibainu->hunt());
  }

  public function testPugSound()
  {
      $pug = new Pug();
      $this->assertEquals('woof! woof!', $pug->makeSound());
  }

  public function testPugHunt()
  {
      $pug = new Pug();
      $this->assertEquals("I'm too lazy to hunt.", $pug->hunt());
  }

  public function testDachshundSound()
  {
      $dachshund = new Dachshund();
      $this->assertEquals('woof! woof!', $dachshund->makeSound());
  }

  public function testDachshundHunt()
  {
      $dachshund = new Dachshund();
      $this->assertEquals("I am hunting!", $dachshund->hunt());
  }

  public function testPlushLabradorSound()
  {
      $plushLabrador = new PlushLabrador();
      $this->assertEquals('No sound', $plushLabrador->makeSound());
  }

  public function testPlushLabradorHunt()
  {
      $plushLabrador = new PlushLabrador();
      $this->assertEquals("I can't hunt.", $plushLabrador->hunt());
  }

  public function testRubberDachshundSound()
  {
      $rubberDachshund = new RubberDachshund();
      $this->assertEquals('Squeak! Squeak!', $rubberDachshund->makeSound());
  }

  public function testRubberDachshundHunt()
  {
      $rubberDachshund = new RubberDachshund();
      $this->assertEquals("I can't hunt.", $rubberDachshund->hunt());
  }

}