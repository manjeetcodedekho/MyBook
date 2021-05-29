<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Authors;
use App\Models\Badges;

class Books extends Model
{
    use HasFactory;

    public function author()
    {
        return $this->hasOne(Authors::class,'id', 'author_id');
    }
    public function badge()
    {
        return $this->hasOne(Badges::class, 'id', 'badge_id');
    }
    
    
    
}
