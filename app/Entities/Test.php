<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Test.
 *
 * @package namespace App\Entities;
 */
class Test extends Model implements Transformable
{
    use TransformableTrait;

    protected $table = 'visual_iel';

}
