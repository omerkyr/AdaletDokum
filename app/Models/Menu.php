<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    public function ust_menu()
    {
        return $this->HasOne(Menu::class,'id','menu_ust_id');
    }
    public function alt_menu()
    {
        return $this->HasMany(Menu::class,'menu_ust_id','id');
    }
    public function selectpage()
    {
        return $this->HasOne(page::class,'id','menu_page_id');
    }
}
