<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class coffeeBeanTable extends Model
{
    use HasFactory;
    protected $table = "coffeeBeanTable";
    protected $primaryKey= "id";
    protected $fillable = [ 'Name','Caffeine_Level', 'Cost_lb','Bean_Type', 'Roast','Grind','Country_of_Origin'];
}
