<?php

use Illuminate\Database\Seeder;
use App\Proovedor;
use Illuminate\Support\Facades\DB;

class proovedorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
      /*  DB::table('proovedors')->insert([
          'nombre' => 'blah blah',
          'codigo' => 2123,
          'email' => 'alex@gmail.com'
          ]);


          Proovedor::create([
          'nombre' => 'Juan',
          'codigo' => 2133,
          'email' => 'alexpumas@gmail.com'
        ]);*/

          factory(App\Proovedor::class, 30)->create();
    }
}
