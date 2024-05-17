<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Seller extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    //moi san pham thuoc ve 1 danh muc , duoc lien ket qua category_id , va khoa chinh cung la 'category_id'
   
    protected $table = 'tbl_sellers';
    protected $primaryKey = 'id';
    public function product()
    {
        return $this->hasMany(Product::class,'id','id');
    }

   
     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $fillable = [
        'id',
        'name',
        'username',
        'email',
        'password',
        'phone',
        'img',
        'sex',
        'DOB',
        'address',
        'feedback',
        'history_transaction',
        'name_company',
        'type_bussiness',
        
      
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
