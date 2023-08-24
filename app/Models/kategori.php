<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
    use HasFactory;


    public function pages()
    {
        return $this->HasMany(page::class,'kategori_id','id')->latest();
    }
}
