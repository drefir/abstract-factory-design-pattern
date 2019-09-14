<?php

class SquareFactory extends AbstractFactory
{
    public function getShape()
    {
        return new Square();
    }

    public function getRoundedShape()
    {
        return new RoundedSquare();
    }
}