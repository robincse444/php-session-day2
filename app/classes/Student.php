<?php


namespace App\classes;

use App\classes\User;
use App\classes\InterfaceClass;
use App\classes\Example;
use App\classes\ExampleOne;
use App\classes\ExampleTwo;


class Student extends ExampleOne implements InterfaceClass, Example

{

    use ExampleTwo;

    protected $country = 'Bangladesh';

    public function __construct()
    {
        $this->name = 'Basis';
        $this->city = 'Kawran Bazar';
    }

    public function mamage()
    {
        //echo "School Name is $this->name & city is $this->city";
        echo $this->showon();
    }

    public function one()
    {
        echo 'Hi';
    }

    public function two()
    {
        echo 'Hello';
    }
    public function three()
    {
        echo 'Hello';
    }
    public function helloFive()
    {
        echo 'five';
    }
}