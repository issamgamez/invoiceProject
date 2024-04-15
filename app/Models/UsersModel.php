<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsersModel extends Model
{
    use HasFactory;
    protected $fillable = [
        
        'cin',
        'nom',
        'prenom',
        'email',
        'prix'
    ];
    protected $table = 'user';
    public function products()
{
    return $this->hasMany(ProductModel::class,'user_id');
}
}
