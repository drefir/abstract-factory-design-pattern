<?php

function client(AbstractFactory $abstractFactory){
    $getShape = $abstractFactory->getShape();
    $getRoundedShape = $abstractFactory->getRoundedShape();
    $getShape->draw();
    $getRoundedShape->draw();
}


client(new RectangleFactory());
// Rectangle
// RoundedRectangle
client(new SquareFactory());
// Square
// RoundedSquare
