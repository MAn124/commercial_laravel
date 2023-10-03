<?php

namespace App\Models;

use App\Enums\UserRoleEnum;
use App\Enums\UserStatusEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class user extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'password',
        'avatar',
        'address',
        'phone',
        'role',
        'status'
    ];

    public function getRoleNameAttribute() {
        return UserRoleEnum::getKeys($this->role)[0];
    }
    public function getStatusNameAttribute() {
        return UserStatusEnum::getKeys($this->status)[0];
    }
}
