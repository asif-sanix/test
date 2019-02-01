<?php

namespace App\Model\Admin;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    use Sluggable;
    protected $fillable = ['created_at','updated_at'];

    public function inventories(){
      return $this->hasMany(ProductInventory::class);
    }

    public function inventory(){
      return $this->hasOne(ProductInventory::class,'product_id','id');
    }

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
}
