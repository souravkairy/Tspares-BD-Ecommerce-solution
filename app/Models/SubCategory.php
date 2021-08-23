<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    protected $table = 'sub_categories';
    protected $primaryKey = 'id';
    public $incrementing = 'true';
    protected $keyType = 'int';
    public $timestamps = false;
}
