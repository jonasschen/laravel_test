<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Match.
 *
 * @package namespace App\Entities;
 */
class Match extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'opposing_team',
        'started_at',
        'finished_at'
    ];

    public function matchPlayers(){
        return $this->hasMany(MatchPlayer::class);
    }

}
