<?php

use Illuminate\Database\Seeder;

class OrderChannelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('order_channels')
        ->insert(['title' => 'Forcast',
            'content' => 'Newly Added Entry is forcast entry',
            'user_id' => '1',
            'status' => '1']);

            DB::table('order_channels')
        ->insert([
                'title' => 'Processing',
                'content' => 'Processing is status when we started work not modification can be done after Processing is started',
                'user_id' => '1',
                'status' => '1']);
                DB::table('order_channels')
        ->insert([
                    'title' => 'Complted',
                    'content' => 'Order Complete',
                    'user_id' => '1',
                    'status' => '1']
            );
    }
}
