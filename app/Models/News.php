<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'content',
        'location',
    ];

    public static function getNewsByLocation($location = null, $limit = 4)
    {
        return News::when($location, function ($query) use ($location){
            $query->where('location', $location);
        })
        ->limit($limit)
        ->get();
    }
}
