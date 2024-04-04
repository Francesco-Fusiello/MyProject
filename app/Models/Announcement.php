<?php

namespace App\Models;

use App\Models\category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Announcement extends Model
{
    use HasFactory;
    protected $fillable=['title', 'body', 'price', 'id_category', 'id_user'];


    public function category(){
        return $this->belongsTo(category::class);
    }
}
