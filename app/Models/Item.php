<?php

namespace App\Models;

use App\Models\ItemType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Item extends Model
{
    use HasFactory;

    protected $table = 'items';
    protected $fillable = ["code", "item_type_id", "name", "qty", "price"];

    public function type()
    {
        return $this->belongsTo(ItemType::class);
    }
}
