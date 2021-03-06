<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Channel extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'channels';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'content', 'user_id', 'status'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
    
}
