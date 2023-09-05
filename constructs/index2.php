<?php

class CoffeeMaker
{
    public function brew()
    {
        var_dump('Brewing the coffee');
    }
}

class SpecialtyCoffeeMaker extends CoffeeMaker
{
    public function brewLatte()
    {
        var_dump('Brwing a latte');
    }
}

(new SpecialtyCoffeeMaker())->brewLatte();