<?php
/*
 * This file is part of the Microweber framework.
 *
 * (c) Microweber CMS LTD
 *
 * For full license information see
 * https://github.com/microweber/microweber/blob/master/LICENSE
 *
 */

namespace MicroweberPackages\Repository\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider;

use MicroweberPackages\Content\Events\ContentWasCreated;
use MicroweberPackages\Content\Events\ContentWasUpdated;

class RepositoryEventServiceProvider extends EventServiceProvider
{
    protected $listen = [
        ContentWasCreated::class => [
        //    AddContentDataProductListener::class
        ],
        ContentWasUpdated::class => [
        //    EditContentDataProductListener::class
        ]
    ];
}
