<?php

namespace App\Models; 

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemType extends Model
{
    use HasFactory;
    protected $table = 'item_types';
    protected $fillable = ["name", "description"];

    public function Item()
    {
        return $this->hasMany(Item::class, "item_type_id", "id");
    }
}
