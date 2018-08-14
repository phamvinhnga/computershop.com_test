<?php

namespace Corals\User\database\seeds;


use Carbon\Carbon;
use Illuminate\Database\Seeder;

class UsersSettingsDatabaseSeeder extends Seeder
{

    public function run()
    {
        \DB::table('settings')->insert([
            [
                'code' => 'confirm_user_registration_email',
                'type' => 'BOOLEAN',
                'category' => 'User',
                'label' => 'Confirm email on registration?',
                'value' => 'false',
                'editable' => 1,
                'hidden' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ]);
    }

}