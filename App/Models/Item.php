<?php


namespace App\Models;

use App\Model;

class Item extends Model
{

    //статическое св-во
    protected static $table = 'items';
    //константа
//    protected const TABLE = 'items';

    public $title;
    public $price;

}