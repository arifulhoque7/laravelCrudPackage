<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Str;

class GenerateCRUD extends Command
{
   
    protected $signature = 'crud:generate {controller}';

    protected $description = 'Generate CRUD operations based on a controller name';

    public function handle()
    {
        $controllerName = $this->argument('controller');

        // Generate Controller
        Artisan::call('make:controller ' . $controllerName);

        // Generate Model
        Artisan::call('make:model ' . str_replace('Controller', '', $controllerName));

        // Generate Migration
        Artisan::call('make:migration create_' . Str::plural(strtolower(str_replace('Controller', '', $controllerName))) . '_table');

        // Generate Request
        Artisan::call('make:request ' . str_replace('Controller', '', $controllerName) . 'Request');

        $this->info('CRUD operations generated successfully.');
    }
}
