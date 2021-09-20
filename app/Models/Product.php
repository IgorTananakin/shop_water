<?php



namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'product';
    // protected $fillable = ['name', 'body', 'image'];

    protected $fillable = ['name_product', 'title', 'img',
    'price','created_at','updated_at','text','cat_id'];
    public function category()
    {
        return $this->belongsTo('App\Models\Category', 'cat_id');
    }
    public function baskets() {
        return $this->belongsToMany(Basket::class)->withPivot('quantity');
    }
}
