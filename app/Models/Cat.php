<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cat extends Model
{
    use HasFactory;

    protected $table = 'cat';

    protected $fillable = ['name', 'race', 'color', 'age'];

    public static function getAllCats()
    {
        return self::all();
    }

    public static function createNewCat($data): Cat
    {
        return self::create($data);
    }
}
