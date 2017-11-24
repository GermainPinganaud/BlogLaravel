<?php
require_once 'vendor/fzaninotto/faker/src/autoload.php';

use Illuminate\Database\Seeder;

// use the factory to create a Faker\Generator instance
$faker = Faker\Factory::create();

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Schema::disableForeignKeyConstraints();
      DB::table('users')->truncate();
      Schema::enableForeignKeyConstraints();

      // On créé l'admin ici
      DB::table('users')->insert([
        'firstname' => 'admin',
        'lastname' => 'admin',
        'name' => 'admin',
        'email' => 'admin@gmail.com',
        'password' => bcrypt('0000'),
        'status' => 1,
        ]);
        // on génère les autres avec la factory
      factory(App\User::class, 999)->create();
      $this->command->info('Users seeding completed!');
    }
}
