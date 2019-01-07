<?php

use Illuminate\Database\Seeder;

class LoginSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->truncate();
        DB::table('admins')->insert([
            'name' => 'Demo',
            'email' => 'admin@admin.com',
            'password' => bcrypt('123456'),
            'logo_text' => 'K-Teq Solutions',
            'company_name' => 'K-Teq Solutions',
            'address' => 'salem',
            'mobile' => '1234567890',
            'bill_prefix' => 'ABC',
            'bill_start_number' => '10',
            'bank_account' => 'Indian Bank',
            'gst' => '33AAPFK2581H1Z6',
            'pan' => '33AAPFK2581H1Z6',
        ]);
    }
}
