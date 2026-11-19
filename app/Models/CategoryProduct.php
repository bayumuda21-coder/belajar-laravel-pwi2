<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoryProduct extends Model
{
    protected $table = 'category_product'; // sesuaikan jika nama tabel di migration berbeda
    protected $primaryKey = 'id_category'; // sesuaikan dengan primary key di migration
    protected $guarded = ['id_category'];
}