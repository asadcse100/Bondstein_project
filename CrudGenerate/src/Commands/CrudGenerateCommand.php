<?php

namespace Asad\CrudGenerate\Commands;

use Illuminate\Console\Command;

class CrudGenerateCommand extends Command
{
    protected $signature = 'crud:generate {name}';

    protected $description = 'Generate a complete CRUD operation';

    public function handle()
    {
        $name = $this->argument('name');
        // Implement your logic here to generate the CRUD files
        $this->info("CRUD generated for $name.");
    }
}
