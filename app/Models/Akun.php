<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Akun
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Akun newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Akun newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Akun query()
 * @method static \Illuminate\Database\Eloquent\Builder|Akun whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Akun whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Akun whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Akun whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Akun whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Akun wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Akun whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Akun whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Akun extends Model
{
    use HasFactory;
    protected $table = 'users';
    protected $fillable = ['name', 'username', 'email', 'password'];
}
