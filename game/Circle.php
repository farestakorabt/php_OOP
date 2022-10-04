<?php

class Circle implements Formulas
{
    public function calculateSurfaceArea($a, ?int $b)
    {
        return 3.14 * ($a^2);
    }

    public function calculateCircumference($a)
    {

    }
}
