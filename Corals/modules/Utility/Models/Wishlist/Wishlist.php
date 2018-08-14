<?php

namespace Corals\Modules\Utility\Models\Wishlist;

use Corals\Foundation\Models\BaseModel;
use Corals\User\Models\User;

class Wishlist extends BaseModel
{
    /**
     * @var string
     */
    protected $table = 'utility_wishlists';
    /**
     *  Model configuration.
     * @var string
     */
    public $config = 'utility.models.wishlist';

    /**
     * @var array
     */
    protected $guarded = ['id', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphTo
     */
    public function wishlistable()
    {
        return $this->morphTo();
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function scopeOfUser($query, $user_id)
    {
        return $query->where('user_id', $user_id);
    }
}
