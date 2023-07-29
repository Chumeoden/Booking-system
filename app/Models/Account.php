<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $fillable = ['name', 'email', 'password', 'role'];

    // Các trường (columns) trong bảng "accounts"
    protected $table = 'users';
    protected $primaryKey = 'id';
    public $timestamps = true;

    // Các phương thức, mối quan hệ và các xử lý liên quan đến mô hình Account
}