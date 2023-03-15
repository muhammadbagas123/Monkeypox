<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Gejala
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\BasisPengetahuan[] $basis_pengetahuans
 * @property-read int|null $basis_pengetahuans_count
 * @method static \Illuminate\Database\Eloquent\Builder|Gejala newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Gejala newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Gejala query()
 * @mixin \Eloquent
 */
class Gejala extends Model
{
    use HasFactory;

    protected $table = 'gejala';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = [
        'id', 'nama'
    ];

    public function basis_pengetahuans()
    {
        return $this->hasMany(BasisPengetahuan::class);
    }
}
