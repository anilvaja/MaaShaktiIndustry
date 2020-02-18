<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'companies';

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
    protected $fillable = ['title', 'content', 'gst_no', 'address', 'email', 'contact_no', 'alt_contact_no', 'company_code', 'terms_and_condition', 'user_id', 'status'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
    
}
