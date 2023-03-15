<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Diagnosa
 *
 * @property-read \App\Models\Penyakit|null $Penyakit
 * @method static \Illuminate\Database\Eloquent\Builder|Diagnosa newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Diagnosa newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Diagnosa query()
 * @mixin \Eloquent
 */
class Diagnosa extends Model
{
    use HasFactory;

    protected $table = "diagnosa";
    protected $fillable = ['nama_penderita', 'gender', 'usia', 'prov', 'penyakit_id', 'presentase'];

    public function Penyakit(){
        return $this->belongsTo(Penyakit::class, 'penyakit_id');
    } 
}
