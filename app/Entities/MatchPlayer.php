<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class MatchPlayer.
 *
 * @package namespace App\Entities;
 */
class MatchPlayer extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'match_id',
        'player_id'
    ];

    public function player()
    {
        return $this->belongsTo(Player::class);
    }
}
