<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fruit extends Model
{
    use HasFactory;
    protected $fillable = ['fruitName','price','dateOfImport'];
}