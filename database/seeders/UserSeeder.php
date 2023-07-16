<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'nro_carnet' => 13207116,
            'nombre' => 'xJhoelx',
            'apellido' => 'xQuispex',
            'fecha_nacimiento' => Carbon::parse('1990-01-01'),
            'telefono_principal' => 123456789,
            'telefono_emergencia' => null,
            'email' => 'master@gmail.com',
            'sexo' => 'Masculino',
            'tipo_sangre' => null,
            'peso' => null,
            'direccion' => null,
            'password' => Hash::make('password'),
            'id_tarjeta' => null,
            'id_rol' => 1, // Reemplaza con el ID correspondiente al rol deseado
            'id_periodo' => null,
            'id_membresia' => null,
            'descripcion' => null,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('model_has_roles')->insert([
            'role_id' => 1,
            'model_type' => 'App\Models\User',
            'model_id' => 1,

        ]);



        
    }
}
