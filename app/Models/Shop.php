<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'slug',
        'logo',
        'banner',
        'phone',
        'user_id',
        'tag_line',
        'address',
        'email',
    ];
    public function getRouteKeyName()
    {
        return 'slug';
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function products()
    {
        return $this->hasMany(Product::class);
    }
    public function getShopStatusAttribute()
    {
        return [
            0 => 'In Review',
            1 => 'Active',
            2 => 'Banned',
        ][$this->status];
    }
}
