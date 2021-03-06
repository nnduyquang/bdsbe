<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'id','name','path','description','content','p_position','p_utility','p_design','p_ground','code' ,'image','sub_image','isActive','seo_title','seo_description','seo_keywords','price','sale','final_price','user_id','category_product_id','created_at','updated_at'
    ];
//    protected $hidden = ['id'];
    public function users()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
    public function categoryproduct()
    {
        return $this->belongsTo('App\CategoryItem', 'category_product_id');
    }
    public function location()
    {
        return $this->belongsTo('App\Location', 'location_id');
    }
    public function unit()
    {
        return $this->belongsTo('App\Unit', 'unit_id');
    }
}
