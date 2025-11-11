<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Http\Controllers\PermissionController;
use App\Events\AuthenticationEvent;

class PermissionsListener
{
    public function handle(AuthenticationEvent $event): void
    {
        PermissionController::loadPermissions($event->data);
    }
    public function __construct()
    {
    }
}
