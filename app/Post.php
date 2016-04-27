<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	/**
	 * Declaire what table to use
	 * @var string
	 */
    protected $table = 'posts';

    /**
     * Expected attributes
     * @var array
     */
    protected $fillable = [
    	'title',
    	'body',
    	'published_at',
    ];

    /**
     * [$dates description]
     * @var array
     */
    protected $dates = ['published_at'];

    /**
     * Show posts in the future on 0:00
     * @param $date
     *
     */
     
    public function setPublishedAtAttribute ($date)
    {
        $this->attributes['published_at'] = Carbon::createFromFormat('Y-m-d', $date);
    }


    /**
     * A Post is owned by a user
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
