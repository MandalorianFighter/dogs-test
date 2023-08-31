<?php

namespace DogsTest;

class RubberDachshund extends Dog
{
    public function __construct()
    {
        parent::__construct("Rubber Dachshund", "Squeak! Squeak!", false);
    }
}