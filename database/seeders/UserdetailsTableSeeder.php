<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserdetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('userdetails')->insert([
           'country'=>'België',
            'state'=>'West-Vlaanderen',
            'city'=>'Kortrijk',
            'zipcode'=>'8511',
            'streetaddress'=>'ledeganckstraat 56',
            'phonenumber'=>'0477863504',
            'companyname'=>'lootje develooptje',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
    }
}
