<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'category', 'type','name','description','img','options','price','discount'
    ];

    protected $appends = ['price_discount','rating','rating_count','options_decode'];

    protected function getPriceDiscountAttribute(){
        return $this->discount?round($this->price*(1-$this->discount/100),2):$this->price;
    }
    protected function getRatingAttribute(){
        return random_int(30,50)/10;
    }
    protected function getRatingCountAttribute(){
        return random_int(5,200);
    }

    protected function getOptionsDecodeAttribute(){
        return json_decode($this->options);
    }

    public static function getCategorys(){
        return self::select('category')->groupBy('category')->get();
    }
}