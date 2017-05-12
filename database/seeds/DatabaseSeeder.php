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
        // $this->call(UsersTableSeeder::class);
        //factory(App\Message::class, 100)->create(); crear 100 veces
        $users = factory(App\User::class, 50)->create();
        $users->each(function(App\User $user) use ($users) {

            $message = factory(App\Message::class)->times(20)->create([
                'user_id' => $user->id,
                ]);

            $message->each(function (App\Message $message) use ($users){
                factory(App\Response::class,random_int(1, 10))->create([
                    'message_id' => $message->id,
                    'user_id' => $users->random(1)->first()->id,
                    ]);
            });

            $user->follows()->sync(
                $users->random(10)
                );
        });
        
    }
}
