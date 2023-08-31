<?php

namespace DogsTest;

class PlushLabrador extends Dog
{
    public function __construct()
    {
        parent::__construct("Plush Labrador", "No sound", false);
    }
}