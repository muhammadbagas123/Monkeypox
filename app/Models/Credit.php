<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Credit
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Diagnosa[] $Diagnosas
 * @property-read int|null $diagnosas_count
 * @property-read \Illuminate\Database\Eloquent\Collection|Credit[] $credits
 * @property-read int|null $credits_count
 * @method static \Illuminate\Database\Eloquent\Builder|Credit newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Credit newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Credit query()
 * @mixin \Eloquent
 */
class Credit extends Model
{
    use HasFactory;

    protected $table = 'credit';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = ['id', 'nama', 'slug', 'deskripsi', 'solusi', 'gambar'];

    public function credits()
    {
        return $this->hasMany(Credit::class);
    }

    public function Diagnosas()
    {
        return $this->hasMany(Diagnosa::class);        
    }
}
