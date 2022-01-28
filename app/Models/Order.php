<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'address_id',
        'number_id',
        'schedule_id',
        'notes',
        'status',
        'required_date',
        'completion_date',
        'amount',
        'payment_method',
    ];
    public function getOrderStatusAttribute()
    {
        return [
            '0' => 'In Review',
            '1' => 'Confirmed',
            '2' => 'Delivered',
            '3' => 'Cancelled',
        ][$this->status] ?? "In Review";
    }
    public function getStatusColorAttribute()
    {
        return [
            0 => 'text-green-800 bg-green-100',
            1 => 'text-green-800 bg-green-200',
            2 => 'text-green-800 bg-green-400',
            3 => 'bg-red-600 text-white',
        ][$this->status];
    }
    public function getOrderDateAttribute()
    {
        return $this->created_at?->format('M d Y \,\a\t g:i A');
    }
    public function getPaymentAttribute()
    {
        return [
            '0' => 'Cash On Delivery',
            '1' => 'Card Payment',
        ][$this->payment_method] ?? "Cash on Delivery";
    }
    public function products()
    {
        return $this->hasMany(OrderProducts::class, 'order_id', 'id');
    }
}
