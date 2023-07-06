<?php

namespace Aplication\models\movies;

class CreateMovie
{

    private string $title;
    private string $description;
    private string $image;
    private string $userId;

 public function __construct(string $title, string $description, string $image, string $userId)
 {
    $this->title = $title;
    $this->description = $description;
    $this->image = $image;
    $this->userId = $userId;
 }

 public function title() : string
 {
    return $this->title;
 }
 public function description() : string
 {
    return $this->description;
 }
 public function image() : string
 {
    return $this->image;
 }
 public function userId() : string
 {
    return $this->userId;
 }
    
}