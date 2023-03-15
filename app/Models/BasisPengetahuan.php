<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\BasisPengetahuan
 *
 * @property-read \App\Models\Gejala|null $gejala
 * @property-read \App\Models\Penyakit|null $penyakit
 * @method static \Illuminate\Database\Eloquent\Builder|BasisPengetahuan newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BasisPengetahuan newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BasisPengetahuan query()
 * @mixin \Eloquent
 */
class BasisPengetahuan extends Model
{
    use HasFactory;

    protected $table = 'basis_pengetahuan';

    protected $fillable = ['gejala_id', 'penyakit_id', 'cf'];

    public function gejala()
    {
        return $this->belongsTo(Gejala::class, 'gejala_id');
    }

    public function penyakit()
    {
        return $this->belongsTo(Penyakit::class, 'penyakit_id');
    }
}
