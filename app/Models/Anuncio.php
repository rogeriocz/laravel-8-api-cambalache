<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Type;

class Anuncio extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'type_id', 'description', 'price'];

    protected $appends = ['type_name'];

    protected $casts = array(
        "price" => "float"
    );

    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    public function getTypeNameAttribute()
    {
        return $this->type()->value('name');
    }
}
