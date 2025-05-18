<?php

namespace Metaversegamescoin\RzCommon\Enums;

enum UpdatedUserEventEnum : string
{
    case PROFILE = 'profile';
    case VERIFY_EMAIL = 'verify-email';
    case AVATAR_IMAGE = 'avatar-image';
    case UPDATE_STATUS = 'update-status';
    case UPDATE_IS_BANNED = 'update-is-banned';
    case UPDATE_PASSWORD = 'update-password';
    case UPDATE_USERNAME = 'update-username';

}
