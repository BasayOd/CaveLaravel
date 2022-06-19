<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lot extends Model
{
    use HasFactory;
    protected $table = 'lots';
    protected $guarded = false;

    public function user()
    {

        return $this->belongsTo(User::class,);

    }
    public function category()
    {

        return $this->belongsTo(Category::class);

    }
}
