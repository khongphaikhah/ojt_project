<?php

namespace App\Models;

use App\Enums\UserGenderEnum;
use App\Enums\UserRoleEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatablebleContract;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Model implements AuthenticatablebleContract
{
    use Authenticatable;
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'name',
        'email',
        'password',
        'avatar',
    ];
    public function getRoleNameAttribute() {
        return UserRoleEnum::getKeys($this->role)[0];
    }
    public function getGenderNameAttribute() {
        return ($this->gender == 0) ? 'Nam' : 'Nữ';
    }
}
