<?php

namespace Corals\Modules\Utility\Models\Rating;

use Corals\Foundation\Models\BaseModel;
use Corals\User\Models\User;

class Rating extends BaseModel
{
    /**
     * @var string
     */
    protected $table = 'utility_ratings';
    /**
     *  Model configuration.
     * @var string
     */
    public $config = 'utility.models.rating';
    /**
     * @var array
     */
    protected $guarded = ['id', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphTo
     */
    public function reviewrateable()
    {
        return $this->morphTo();
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }
}
