<?php


namespace App\classes;


abstract class ExampleOne
{
    public $hello = "Anwar";
    protected $helloOne = "Robin";
    private $helloTwo = "Opu";


    public function hellofour ()
    {
        echo 'hello four';
    }


    abstract function helloFive();
}