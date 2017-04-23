<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        $this->call(UsersTableSeeder::class);
        $this->command->info('The Users table has been seeded!');

        $this->call(ContactsTableSeeder::class);
        $this->command->info('The Contacts table has been seeded!');
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
