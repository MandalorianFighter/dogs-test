<?php

namespace DogsTest;

class Dog
{
    protected $name;
    protected $sound;
    protected $canHunt;

    public function __construct($name, $sound, $canHunt)
    {
        $this->name = $name;
        $this->sound = $sound;
        $this->canHunt = $canHunt;
    }

    public function makeSound()
    {
        return $this->sound;
    }

    public function hunt()
    {
        if ($this->canHunt) {
            return "I am hunting!";
        } else {
            if ($this->name === "Pug") return "I'm too lazy to hunt.";
            return "I can't hunt.";
        }
    }
}