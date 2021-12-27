<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


    //  php artisan db:seed --class=RoleSeeder
        Role::create(['name'=>'Admin','ar_name'=>'مدير النظام']);
        Role::create(['name'=>'penalty','ar_name'=>'غرامات']);
        Role::create(['name'=>'User','ar_name'=>'مستخدم']);
        Role::create(['name'=>'ReadOnly','ar_name'=>'قراءة فقط']);
        Role::create(['name'=>'Finance','ar_name'=>'مالية']);
        Role::create(['name'=>'DeliveryRequest','ar_name'=>'اوامر تسليم']);
        Role::create(['name'=>'Container','ar_name'=>'الحاويات']);
        Role::create(['name'=>'ShowContainer','ar_name'=>'عرض الحاويات']);


    }
}
