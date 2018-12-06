<?php

use Illuminate\Database\Seeder;
use App\Thread;
use App\Entry;

class ThreadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('threads')->truncate();
        DB::table('entries')->truncate();
        
        factory(App\Thread::class, 100)->create();
        factory(App\Entry::class, 10000)->create();
    }
}
