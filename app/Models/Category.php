<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $connection ='category';

    protected $table = 'category';

    protected $primaryKey = 'cate_id';

    public function products(){
        return $this->hasMany('app\Models\Product');
    }
    protected $fillable = [
        'cate_name', 'cate_des'
    ];
}
