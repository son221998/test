<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class feature extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'discription',
    ];
    
    public function artical()
    {
        return $this->hasMany(Artical::class);
    }

}
