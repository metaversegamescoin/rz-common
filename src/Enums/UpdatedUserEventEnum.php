<?php

namespace Metaversegamescoin\RzCommon\Enums;

enum UpdatedUserEventEnum : string
{
    case PROFILE = 'profile';
    case VERIFYEMAIL = 'verify-email';
    case AVATARIMAGE = 'avatar-image';
    case UPDATE_STATUS = 'update-status';
    case UPDATE_IS_BANNED = 'update-is-banned';
    case UPDATE_PASSWORD = 'update-password';

}
