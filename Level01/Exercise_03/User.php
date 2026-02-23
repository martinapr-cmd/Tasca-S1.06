<?php

class User
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function __toString()
    {
        return "User: " . $this->name;
    }

    public function __call($method, $arguments)
    {
        echo "Method '$method' does not exist. Arguments: ";
        print_r($arguments);
    }
}
