<?php

namespace Database\Seeders;

use App\Models\Artical;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Artical::updateOrCreate(['id' => 1],[
            'title' =>'We Help To Push Your Business To The Top Level',
            'description' =>'Tempor rebum no at dolore lorem clita rebum rebum ipsum rebum stet dolor sed justo kasd. Ut dolor sed magna dolor sea diam. Sit diam sit justo amet ipsum vero ipsum clita lorem',
            'image' => 'images/hero.png',
        ]);

        Artical::updateOrCreate(['id' => 2],[
            'title' =>'Award Wining Consultancy Agency For Your Business',
            'description' =>'Tempor erat elitr rebum at clita. Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit. Sanctus clita duo justo et tempor eirmod',
            'image' => 'images/about.png',
        ]);

        Artical::updateOrCreate(['id' => 3],[
            'title' =>'Why People Choose Us? We Are Trusted & Award Wining Agency',
            'description' =>'Clita nonumy sanctus nonumy et clita tempor, et sea amet ut et sadipscing rebum amet takimata amet, sed accusam eos eos dolores dolore et. Et ea ea dolor rebum invidunt clita eos. Sea accusam stet stet ipsum, sit ipsum et ipsum kasd',
        ]);
    }
}
