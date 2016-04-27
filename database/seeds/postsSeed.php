<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class postsSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = array([
            'title' => 'My first Post',
            'Body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. In sit, deserunt at nemo quaerat commodi consectetur maxime facere omnis quis vitae qui, tenetur officia quisquam eum alias placeat architecto temporibus. Ducimus tenetur autem asperiores voluptatem distinctio quod, architecto recusandae sunt nesciunt explicabo. Harum, quod! Voluptatibus velit fugiat ex sed totam dicta dolore cupiditate ut sunt voluptas non assumenda rerum aut incidunt minima ab aliquid, expedita vero, molestias, placeat debitis earum repellendus. Sequi, facere, distinctio. Delectus fuga quibusdam vitae deleniti mollitia debitis officia ipsam ad iusto facere aliquam doloribus dolor molestiae consectetur sed ratione, cumque dolorum sunt tempora. At praesentium velit asperiores rerum voluptate ipsa dolor culpa officiis magnam, maiores accusamus, ad unde harum officia error, facere delectus aperiam corrupti qui iure quidem. Repellendus reiciendis voluptatem excepturi atque nam unde iusto doloremque, laborum labore dolorem veniam quaerat, vero sed repudiandae ab eos. Laborum porro aperiam repellendus expedita maiores commodi assumenda facere?',
            'published_at' => Carbon::now(),
            'user_id' => 1,
        ],
        [
            'title' => 'My second Post',
            'Body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. In sit, deserunt at nemo quaerat commodi consectetur maxime facere omnis quis vitae qui, tenetur officia quisquam eum alias placeat architecto temporibus. Ducimus tenetur autem asperiores voluptatem distinctio quod, architecto recusandae sunt nesciunt explicabo. Harum, quod! Voluptatibus velit fugiat ex sed totam dicta dolore cupiditate ut sunt voluptas non assumenda rerum aut incidunt minima ab aliquid, expedita vero, molestias, placeat debitis earum repellendus. Sequi, facere, distinctio. Delectus fuga quibusdam vitae deleniti mollitia debitis officia ipsam ad iusto facere aliquam doloribus dolor molestiae consectetur sed ratione, cumque dolorum sunt tempora. At praesentium velit asperiores rerum voluptate ipsa dolor culpa officiis magnam, maiores accusamus, ad unde harum officia error, facere delectus aperiam corrupti qui iure quidem. Repellendus reiciendis voluptatem excepturi atque nam unde iusto doloremque, laborum labore dolorem veniam quaerat, vero sed repudiandae ab eos. Laborum porro aperiam repellendus expedita maiores commodi assumenda facere?',
            'published_at' => Carbon::now(),
            'user_id' => 1,
        ],
        [
            'title' => 'My third Post',
            'Body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. In sit, deserunt at nemo quaerat commodi consectetur maxime facere omnis quis vitae qui, tenetur officia quisquam eum alias placeat architecto temporibus. Ducimus tenetur autem asperiores voluptatem distinctio quod, architecto recusandae sunt nesciunt explicabo. Harum, quod! Voluptatibus velit fugiat ex sed totam dicta dolore cupiditate ut sunt voluptas non assumenda rerum aut incidunt minima ab aliquid, expedita vero, molestias, placeat debitis earum repellendus. Sequi, facere, distinctio. Delectus fuga quibusdam vitae deleniti mollitia debitis officia ipsam ad iusto facere aliquam doloribus dolor molestiae consectetur sed ratione, cumque dolorum sunt tempora. At praesentium velit asperiores rerum voluptate ipsa dolor culpa officiis magnam, maiores accusamus, ad unde harum officia error, facere delectus aperiam corrupti qui iure quidem. Repellendus reiciendis voluptatem excepturi atque nam unde iusto doloremque, laborum labore dolorem veniam quaerat, vero sed repudiandae ab eos. Laborum porro aperiam repellendus expedita maiores commodi assumenda facere?',
            'published_at' => Carbon::now(),
            'user_id' => 1,
        ]);
        DB::table('posts')->insert($posts);
    }
}
