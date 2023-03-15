<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Pesan
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Pesan newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Pesan newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Pesan query()
 * @mixin \Eloquent
 */
class Pesan extends Model
{
    use HasFactory;

    protected $table = 'pesan';
    protected $fillable = ['nama', 'email', 'subjek', 'pesan'];
}
