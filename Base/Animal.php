<?php

abstract class Animal
{
    public function __construct(
        private $nome
    ){}

    abstract public function fazerBarulho();
}