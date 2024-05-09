<?php

namespace Metaversegamescoin\RzCommon\Enums;

enum UpdatedUserEventEnum : string
{
    case PROFILE = 'profile';
    case VERIFYEMAIL = 'verify-email';
    case AVATARIMAGE = 'avatar-image';

}
