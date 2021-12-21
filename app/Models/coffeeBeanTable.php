<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class coffeeBeanTable extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'Name','Caffeine Level', 'Cost/lb','Bean Type', 'Roast','Grind','Country of Origin'];
}
