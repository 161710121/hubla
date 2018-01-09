<?php

use Illuminate\Database\Seeder;

class x extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $a = [
        	'kode_barang'=>'11111',
        	'nama_barang'=>'asd',
        	'harga'=>'5000',
        ];
        DB::table('xes')->insert($a);
    }
}
