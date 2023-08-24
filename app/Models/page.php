<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class page extends Model
{
    use HasFactory;

    public function kategori()
    {
        return $this->HasOne(kategori::class,'id','kategori_id');
    }
    public function file()
    {
        return $this->HasMany(PageFile::class,'page_id','id');
    }
    public function photos()
    {
        return $this->HasMany(PagePhoto::class,'page_id','id');
    }
}
