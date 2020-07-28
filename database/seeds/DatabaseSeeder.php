<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
    }
}
$ php artisan migrate:fresh --seed
Dropped all tables successfully.
Migration table created successfully.
Migrating: 2014_10_12_000000_create_users_table
Migrated:  2014_10_12_000000_create_users_table
Migrating: 2014_10_12_100000_create_password_resets_table
Migrated:  2014_10_12_100000_create_password_resets_table
Migrating: 2017_11_03_023418_create_links_table
Migrated:  2017_11_03_023418_create_links_table
Seeding: LinksTableSeeder

$ php artisan tinker
>>> \App\Link::first();
=> App\Link {#3060
     id: 1,
     title: "Rerum doloremque",
     url: "http://russel.info/suscipit-et-iste-debitis-beatae-repudiandae-eveniet.html",
     description: "Dolorem voluptas voluptatum voluptatem consequuntur amet dolore odit. Asperiores ullam alias vel soluta ut in. Facere quia et sit laudantium culpa ea possimus.",
     created_at: "2020-04-05 00:44:33",
     updated_at: "2020-04-05 00:44:33",
   }
>>>