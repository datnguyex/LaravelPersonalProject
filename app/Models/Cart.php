<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Cart as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Cart extends Model
{
    use HasFactory;

    public function CustomerUser()
    {
        return $this->hasMany(CustomerUser::class, 'id', 'CustomerUser_id');
    }
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }
    //moi danh muc co nhieu san pham , duoc lien ket qua category_id, va co khoa chinh cung la category_id
    protected $primaryKey = 'id';
    protected $table = 'table_cart';
 
     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
      'id',
      'product_id',
      'CustomerUser_id',
      'quantity',
    ];
     /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];
      /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
