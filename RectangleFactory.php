<?php

class RectangleFactory extends AbstractFactory
{
    public function getShape()
    {
        return new Rectangle();
    }

    public function getRoundedShape()
    {
       return new RoundedRectangle();
    }
}