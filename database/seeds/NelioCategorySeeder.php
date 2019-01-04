<?php



use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class NelioCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('Groups')->insert([
        'name' => str_random(10),
        'email' => str_random(10).'@gmail.com',
        'phone' =>  str_random(6),
        'price' =>  str_random(6),
        'password' => bcrypt('secret'),
    ]);
    }
}
