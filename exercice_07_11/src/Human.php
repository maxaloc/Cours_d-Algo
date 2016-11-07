<?php 

namespace Hetic;

class Human
{
    private $weight;

    function __construct($weight)
    {
        $this->setWeight($weight);
    }

    public function getWeight(){

    	return $this->weight;
    }

    public function setWeight(int $weight)
    {
        $this->weight = $weight;

        return $this;
    }
}
