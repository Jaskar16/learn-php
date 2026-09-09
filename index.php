<?php

class Cat{
    use MakesSound;
}

class Dog{
    use HasSmell, MakesSound;
}

trait HasSmell{
    public $smell;
    public function sniff(){
        return 'smells like '.$this->smell;
    }
}

trait MakesSound{
    public $sound;
    public function makeSound(){
        return $this->sound;
    }
}