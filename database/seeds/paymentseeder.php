<?php

use Illuminate\Database\Seeder;

class paymentseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $objs = array(

            
            ['id'=>'1', 'name'=>'KBZ Pay'],
            ['id'=>'2', 'name'=>'VISA'],
            ['id'=>'3', 'name'=>'Credit Card'],
            ['id'=>'4', 'name'=>'Cash Down']
           

        );

        DB::table('payment')->insert($objs);
    }
}
