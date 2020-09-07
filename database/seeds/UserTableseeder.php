<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       // factory(App\User::class, 2)->create();
        $s1=new User;
        $s1->name="Aye";
        $s1->email="aye@gmail.com";
        $s1->password=Hash::make('123456789');
        $s1->save();

        // $s2=new User;
        // $s2->name="Jay Baas";
        // $s2->email="jaybaas@gmail.com";
        // $s2->password=Hash::make('123456789');
        // $s2->save();
    }
}
