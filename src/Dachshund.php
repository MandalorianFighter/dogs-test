<?php

namespace DogsTest;

class Dachshund extends Dog
{
    public function __construct()
    {
        parent::__construct("Dachshund", "woof! woof!", true);
    }
}