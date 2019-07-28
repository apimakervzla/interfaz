<?php

use App\Module;
use Illuminate\Database\Seeder;

class ModuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {        

        $module = new Module();
        $module->module_description = 'Aportes';
        $module->correlative_module = 1;
        $module->request = '';
        $module->icon_module = 'ni ni-collection text-green';
        $module->save();

        $module = new Module();
        $module->module_description = 'Catálogo';
        $module->correlative_module = 2;
        $module->request = '';
        $module->icon_module = 'ni ni-books text-red';
        $module->save();

        $module = new Module();
        $module->module_description = 'Preguntas';
        $module->correlative_module = 3;
        $module->request = '';
        $module->icon_module = 'ni ni-air-baloon text-yellow';
        $module->save();

        $module = new Module();
        $module->module_description = 'Configuraciones';
        $module->correlative_module = 4;
        $module->request = '';
        $module->icon_module = 'ni ni-settings-gear-65 text-info';
        $module->save();
    }
}
