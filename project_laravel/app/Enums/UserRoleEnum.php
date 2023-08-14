<?php

namespace App\Enums;

use BenSampo\Enum\Enum;


final class UserRoleEnum extends Enum
{
    public const ADMIN = 0;
    public const STAFF = 1;
    public const CUSTOMER = 2;
}
