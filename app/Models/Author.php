<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    protected $table = 'author';

    protected $primaryKey = 'author_id';

    public function products(){
        return $this->hasMany('App\Models\Product');
    }
    protected $fillable = [
        'author_name', 'description', 'author_origin'
    ];
    public $timestamps = false;
}
