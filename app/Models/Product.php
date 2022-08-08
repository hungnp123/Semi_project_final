<?php

namespace app\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'product';

    protected $primaryKey = 'product_id';

    public function category(){
        return $this->belongsTo('app\Models\Category','cate_id');
    }
    protected $fillable = [
        'product_name', 'product_img','product_price', 'product_year','description','product_author','product_cate'
    ];
}
