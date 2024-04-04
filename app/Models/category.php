<?php

namespace App\Models;

use App\Models\Announcement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class category extends Model
{
    use HasFactory;
    protected $fillable=['title', 'body'];

    public function announcements(){
        return $this->hasMany(Announcement::class);
    }
}
