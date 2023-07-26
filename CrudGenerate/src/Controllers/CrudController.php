<?php

namespace Asad\CrudGenerate\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CrudController extends Controller
{
    protected function generateController($name)
    {
        $controllerPath = app_path('Http/Controllers/' . $name . 'Controller.php');
        // $template = file_get_contents(__DIR__.'/../../resources/stubs/controller.stub');
        // $template = str_replace('{{modelName}}', $name, $template);
        file_put_contents($controllerPath, 'test');
        return "CRUD generation completed for $name";
    }

    protected function generateModel($name)
    {
        $modelPath = app_path($name . '.php');
        // Use a stub file or template to generate the model code
        // You can use Laravel's File facade to write the content to the file
    }

    protected function generateValidations($name)
    {
        $validationPath = app_path('Http/Requests/' . $name . 'Request.php');
        // Use a stub file or template to generate the validation code
        // You can use Laravel's File facade to write the content to the file
    }

    protected function generateMigration($name)
    {
        $migrationPath = database_path('database/migrations/' . date('Y_m_d_His') . '_create_' . $name . '_table.php');
        // Use a stub file or template to generate the migration code
        // You can use Laravel's File facade to write the content to the file
    }
}
