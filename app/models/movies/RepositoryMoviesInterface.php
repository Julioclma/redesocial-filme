<?php

namespace Aplication\models\movies;

interface RepositoryMoviesInterface
{
    public function create(CreateMovie $movie): bool; 
    
}