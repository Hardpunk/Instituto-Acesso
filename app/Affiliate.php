<?php

namespace App;

use Eloquent as Model;

/**
 * Class Affiliate
 * @package App\Models
 * @version February 21, 2021, 11:00 pm -03
 *
 * @property \Illuminate\Database\Eloquent\Collection $payments
 * @property string $name
 * @property string $slug
 * @property integer $times_used
 */
class Affiliate extends Model
{
    public $table = 'affiliates';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    public $fillable = [
        'name',
        'slug',
        'times_used'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'slug' => 'string',
        'times_used' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'slug' => 'required|unique:affiliates,slug',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function payments()
    {
        return $this->hasMany(Payment::class, 'affiliate_id');
    }
}
