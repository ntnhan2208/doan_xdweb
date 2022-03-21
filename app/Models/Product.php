<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Filterable;

class Product extends Model
{
    use HasFactory,Filterable;
    public function category(){
        return  $this->belongsTo(Category::class);
    }
    protected $fillable=['name','image','detail','cost','category_id'];

    public function filterName($query, $value)
    {
        return $query->where('name', 'LIKE', '%' . $value . '%');
    }
}
