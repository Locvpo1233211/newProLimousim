<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class categories extends Model
{
    const INACTIVED = 0;
    const ACTIVED = 1;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'categories';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id','name','slug', 'description'];

     /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false; // Vì bạn đã sử dụng `created_at` như một cột riêng biệt


    // scope
    // =========================================================================
    public function products()
    {
        return $this->hasMany(post::class);
    }
}
