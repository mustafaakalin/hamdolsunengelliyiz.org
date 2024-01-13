<?php

namespace Database\Seeders;

use App\Models\Hearing;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class HearingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Hearing::create([
            'name' => 'Celil Uzun',
            'title' => 'Hukukçu',
            'description' => 'Celil Uzun, 1992 yılında Diyarbakır\'da dünyaya geldi. Doğuştan işitme ve görme engelli olan Uzun, ailesi ve öğretmenlerinin desteğiyle erken yaşta okuma ve yazma öğrendi. Celil Uzun, İşitme ve Görme Engelli Hukukçu

            İlk, orta ve lise öğrenimini Diyarbakır\'da tamamlayan Uzun, ardından Ankara Üniversitesi Hukuk Fakültesi\'ne girdi. Fakültede zorluklarla karşılaşsa da, azmi ve kararlılığı sayesinde eğitimini başarıyla tamamladı.
            
            2018 yılında mezun olan Uzun, avukatlık stajını tamamladıktan sonra Diyarbakır\'da serbest avukatlık yapmaya başladı. İşitme ve görme engelli olmasına rağmen, mesleğini başarıyla yürüten Uzun, engelli hakları konusunda da çalışmalar yürütüyor.
            
            Uzun, engelli bireylerin toplumda daha fazla yer alması için mücadele ediyor. Bu amaçla, engelli hakları konusunda farkındalık yaratmak için eğitimler veriyor ve seminerlere katılıyor.
            
            Uzun\'un başarı hikayesi, engelli bireylerin hayallerine ulaşmaları için her türlü engele rağmen mücadele etmelerini gösteriyor.
            
            Uzun, başarısını şu sözlerle anlatıyor:
            
                “Engelli olmak bir dezavantaj değil, bir avantajdır. Engellerimizi bir engel olarak değil, bir fırsat olarak görmeliyiz. Herkesin hayallerini gerçekleştirebileceğine inanıyorum. Yeter ki biz isteyelim ve çabalayalım.”',
            'image' => 'celil-uzun.jpg',
            'twitter' => 'https://twitter.com/celiluzun',
        ]);
    }
}
