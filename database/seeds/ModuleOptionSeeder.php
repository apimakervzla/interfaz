<?php

use App\ModuleOption;
use Illuminate\Database\Seeder;

class ModuleOptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $module_option = new ModuleOption();
        $module_option->role_user_id = 1;
        $module_option->module_id = 1;
        $module_option->correlative_module_option = 1;
        $module_option->module_option_description = 'Ver Aporte';
        $module_option->request = '';
        $module_option->route = 'index.aportes';   
        $module_option->icon_module_option = 'ni ni-book-bookmark';
        $module_option->save();

        $module_option = new ModuleOption();
        $module_option->role_user_id = 1;
        $module_option->module_id = 2;
        $module_option->correlative_module_option = 1;
        $module_option->module_option_description = 'Ver Catálogo';
        $module_option->request = '';
        $module_option->route = 'index.catalogo';    
        $module_option->icon_module_option = 'fa fa-fw fa-search-plus';    
        $module_option->save();

        $module_option = new ModuleOption();
        $module_option->role_user_id = 1;
        $module_option->module_id = 3;
        $module_option->correlative_module_option = 1;
        $module_option->module_option_description = 'Ver Preguntas';
        $module_option->request = '';
        $module_option->route = 'index.preguntas';  
        $module_option->icon_module_option = 'fa fa-fw fa-users';      
        $module_option->save();

        $module_option = new ModuleOption();
        $module_option->role_user_id = 1;
        $module_option->module_id = 4;
        $module_option->correlative_module_option = 1;
        $module_option->module_option_description = 'Ver Usuarios';
        $module_option->request = '';
        $module_option->route = 'index.usuarios';  
        $module_option->icon_module_option = 'fa fa-fw fa-bed';      
        $module_option->save();

        $module_option = new ModuleOption();
        $module_option->role_user_id = 1;
        $module_option->module_id = 4;
        $module_option->correlative_module_option = 2;
        $module_option->module_option_description = 'Ver Clasificaciones y Estadisticas';
        $module_option->request = '';
        $module_option->route = 'index.reportes';  
        $module_option->icon_module_option = 'fa fa-fw fa-bed';      
        $module_option->save();
    }
}
