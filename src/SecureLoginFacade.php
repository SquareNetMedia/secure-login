<?php

namespace Squarenetmedia\SecureLogin;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Squarenetmedia\SecureLogin\Skeleton\SkeletonClass
 */
class SecureLoginFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'secure-login';
    }
}
