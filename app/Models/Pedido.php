<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Gloudemans\Shoppingcart\Facades\Cart;
use MeDelivery\Models\Product;


class Pedido extends Model
{
    protected $table='pedidos';
    protected $primaryKey='id';
    protected $fillable=['status','total','user_id'];

    public function orderFields()
    {
        return $this->belongsToMany(Product::class)->withPivot('qty','total');
    }

    public static function createOrder()
    {
        $user=Auth::user();
        $order=$user->orders()->create(['total'=>Cart::total(),'status'=>'pendente']);
        $cartItems=Cart::content();

        foreach($cartItems as $value)
        {
            $order->orderFields()->attach($value->id,
                ['qty'=>$value->qty, 
                'tax'=>Cart::tax(),
                'total'=>$value->qty*$value->price
                ]);
        }
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }

    


}
