<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Province
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Province newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Province newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Province query()
 * @mixin \Eloquent
 */
class Province extends Model
{
    protected $table = 'provinces';
    protected $fillable = ['prov_name', 'locationid', 'status'];
}
