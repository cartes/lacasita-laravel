<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\LatLng
 *
 * @property-read \App\Models\Post|null $post
 * @method static \Illuminate\Database\Eloquent\Builder|LatLng newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LatLng newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LatLng query()
 * @mixin \Eloquent
 */
class LatLng extends Model
{
    use HasFactory;

    public function post()
    {
        return $this->belongsTo(Post::class);
    }

}
