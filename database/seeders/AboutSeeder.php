<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        About::create([
            'user_id' => 1,
            'name' => 'Hamdolsun Engelliyiz',
            'slug' => 'ben',
            'title' => 'Yazılım Mühendisi',
            'description' => 'Ben [isim], engelli olmaktan gurur duyan biriyim. Engelli olmanın bir dezavantaj değil, aksine iyi kullanılırsa harika bir avantaj olabileceğine inanıyorum.

            Ben doğuştan görme engelliyim. Küçük yaşta okumayı ve yazmayı öğrendim ve eğitimini tamamlayarak üniversiteden mezun oldum. Şu anda bir yazılım mühendisi olarak çalışıyorum.

            Engelli olmam, hayatımda birçok zorluğa neden oldu. Ancak, bu zorlukların üstesinden gelmek için çok çalıştım ve başardım. Engellerimi avantaja çevirmeyi öğrendim.

            Engelli olmam, bana hayatı farklı bir şekilde görmeyi öğretti. Başkalarının göremediği şeyleri görebiliyorum. Empati ve anlayış duygum gelişti.

            Engelli olmam, bana güçlü bir irade ve kararlılık kazandırdı. Zorluklara karşı direnmeyi ve hedeflerime ulaşmak için mücadele etmeyi öğrendim.

            Engelli olmam, bana başkalarına yardım etme isteği verdi. Engelli insanlara destek olmak ve onların hayatlarını kolaylaştırmak için çalışıyorum.

            Engelli olmam, beni daha iyi bir insan yaptı. Daha güçlü, daha anlayışlı ve daha yardımsever bir insan oldum.

            Ben engelli olmaktan gurur duyuyorum. Engelli olmam, beni daha iyi bir insan yaptı.',
            'image' => 'images/abouts/me.jpg',
            'twitter' => 'https://twitter.com/ashb_eyhgm',
        ]);
    }
}
