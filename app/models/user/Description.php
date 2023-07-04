<?php

namespace Aplication\models\user;

class Description
{
    private string $image;
    private string $bio;

    public function __construct(string $image, string $bio)
    {
        $this->image = $image;
        $this->bio = $bio;
    }
    public function image(): string
    {
        return $this->image;
    }
    public function bio(): string
    {
        return $this->bio;
    }
}
