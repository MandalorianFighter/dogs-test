<?php

namespace DogsTest;

class ShibaInu extends Dog
{
    public function __construct()
    {
        parent::__construct("Shiba Inu", "woof! woof!", true);
    }
}