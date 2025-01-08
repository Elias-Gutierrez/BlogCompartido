<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    use HasFactory; // Este trait es necesario para usar las factories.

    protected $fillable = [
        'name',
        'slug',
        'category',
        'content',
    ];

    protected $table = 'posts';

    protected function casts() : array {
        return [
            "published_at" => 'datetime',
            'is_active' => 'boolean',
        ];
    }

    protected function name():Attribute{
        return Attribute::make(
            set : function($value){
                return strtolower($value);
            },
            get : function($value){
                return ucfirst($value);
            }
        );
    }
    
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
