<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $json = File::get('database/data/users-data.json');
      $data = json_decode($json);
      foreach($data as $obj){
        DB::table('users')->insert([
          'name'=> $obj->name,
          'email'=>$obj->email,
          'password'=>Hash::make($obj->password),
          'role_id' => $obj->role_id
        ]);
      }
    }
}
