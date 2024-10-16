<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    protected $fillable = ['title','description','price','stock','sku','category_id','image','brand','model','operating_system','screen_size','resolution','battery_capacity','ram','storage','camera','color','weight','dimensions'];
    public function category()
    {
        return $this->belongsTo(Category ::class, foreignKey: 'category_id');
    }
}
