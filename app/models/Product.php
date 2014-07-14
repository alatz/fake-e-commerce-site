<?php

class Product extends Eloquent
{
    protected $fillable = ['name', 'description', 'price', 'image'];

    public static $rules = [
        'name' => 'required|min:2',
        'description' => 'required|min:20',
        'price' => 'required|numeric',
        'image' => 'required|min:5'
    ];
}
