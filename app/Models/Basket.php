<?php

namespace App;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Basket extends Model {
    /**
     * Связь «многие ко многим» таблицы `baskets` с таблицей `products`
     */
    use HasFactory;
    protected $table = 'baskets';
    // protected $fillable = ['name', 'body', 'image'];

    protected $fillable = ['id','created_at','updated_at'];
    public function products() {
        return $this->belongsToMany(Product::class)->withPivot('quantity');
    }
}
