<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'label',
        'description',
        'prix'
    ];
    protected $table = 'products';

    public function user()
    {
        return $this->belongsTo(UsersModel::class, 'user_id');
    }
}
