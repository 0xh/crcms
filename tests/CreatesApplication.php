<?php

namespace CrCms\Tests;

use Illuminate\Support\Facades\Hash;
use Illuminate\Contracts\Console\Kernel;

trait CreatesApplication
{
    /**
     * Creates the application.
     *
     * @return \Illuminate\Foundation\Application
     */
    public function createApplication()
    {
        $app = require __DIR__.'/../vendor/crcms/framework/src/Bootstrap/app.php';

        $app->make(Kernel::class)->bootstrap();

        Hash::driver('bcrypt')->setRounds(4);

        return $app;
    }
}
