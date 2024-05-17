<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Category as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Category extends Model
{
    use HasFactory;

    //moi danh muc co nhieu san pham , duoc lien ket qua category_id, va co khoa chinh cung la category_id
    protected $primaryKey = 'category_id';
    protected $table = 'table_category';
    public function product()
    {
        return $this->hasMany(Product::class,'category_id','category_id');
    }
  
     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
      'category_id',
      'category_name',
      'category_description',
      
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
