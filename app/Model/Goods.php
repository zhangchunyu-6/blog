<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Goods extends Model
{
    protected $table="goods";
    public $timestamps=false;
    protected $primaryKey="id";
}
