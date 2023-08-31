<?php

namespace DogsTest;

class Pug extends Dog
{
    public function __construct()
    {
        parent::__construct("Pug", "woof! woof!", false);
    }
}
