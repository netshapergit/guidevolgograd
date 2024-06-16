<?php

class Order extends Model {

	protected $table = TABLE_ORDERS;
    //protected $fillable = array('text', 'file', 'lesson_id', 'user_id');
    protected $guarded = ['is_paid'];
    public $timestamps = ['created_at'];
    const UPDATED_AT = null;

    public function getIsPaidAttribute($value) {
        return boolval($value);
    }

    public function page()
    {
        return $this->belongsTo('Page');
    }

    public function user()
    {
        return $this->belongsTo('User');
    }

}