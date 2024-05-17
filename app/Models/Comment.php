<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Comment as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Comment extends Model
{
  use  HasFactory, Notifiable;

    //moi danh muc co nhieu san pham , duoc lien ket qua category_id, va co khoa chinh cung la category_id
    protected $primaryKey = 'comment_id';
    protected $table = 'table_comment';
    public function customerUser()
    {
        return $this->belongsTo(CustomerUser::class, 'customerUserId', 'id');
    }
    public function product()
    {
        return $this->belongsTo(Product::class, 'productId', 'id');
    }


     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
      'comment_id',
      'description',
      'img',
      'customerUserId',
      'productId',
      'star',
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
