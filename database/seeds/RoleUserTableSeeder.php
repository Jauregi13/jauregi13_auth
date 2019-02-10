<?php

use Illuminate\Database\Seeder;

class RoleUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $json = File::get('database/data/role-user-data.json');
      $data = json_decode($json);
      foreach($data as $obj){
        DB::table('role_user')->insert([
          'role_id'=> $obj->role_id,
          'user_id'=>$obj->user_id,
        ]);
      }
    }
}
