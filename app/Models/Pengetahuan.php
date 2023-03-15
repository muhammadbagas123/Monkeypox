<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Pengetahuan
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Diagnosa[] $Diagnosas
 * @property-read int|null $diagnosas_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\BasisPengetahuan[] $basis_pengetahuans
 * @property-read int|null $basis_pengetahuans_count
 * @method static \Illuminate\Database\Eloquent\Builder|Pengetahuan newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Pengetahuan newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Pengetahuan query()
 * @mixin \Eloquent
 */
class Pengetahuan extends Model
{
    use HasFactory;

    protected $table = 'pengetahuan';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = ['id', 'nama', 'slug', 'deskripsi', 'solusi', 'gambar'];

    public function basis_pengetahuans()
    {
        return $this->hasMany(BasisPengetahuan::class);
    }

    public function Diagnosas()
    {
        return $this->hasMany(Diagnosa::class);        
    }
}
