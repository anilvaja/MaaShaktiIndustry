<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'orders';

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
    protected $fillable = ['order_type', 'company_id', 'weight', 'quantity', 'expected_delivery_date', 'work_order_no', 'purchase_order_date', 'purchase_order_number', 'price', 'user_id', 'status'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
    
}
