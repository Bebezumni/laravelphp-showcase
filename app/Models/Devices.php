<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Devices extends Model
{
    use HasFactory;

    //protected $fillable = ['title', 'brandname','modelname','description','chars','picture',];

    public function scopeFilter($query, array $filters){
        if($filters['search'] ?? false) {
            $query
            ->where('title', 'like', '$' . request('search') .'%')
            ->orWhere('description', 'like', '$' . request('search') .'%');
        }
    }
}

