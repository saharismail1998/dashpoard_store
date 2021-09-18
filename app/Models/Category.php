<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    // ادا هربط بشكل صريح 
    protected $connection= 'mysql';
    protected $table ='catogries';
    protected $primaryKey='id';
    protected $keyType='int';

    protected $fillable=[
        'name','slug','parent_id','description','img_path','status'
    ];
}
