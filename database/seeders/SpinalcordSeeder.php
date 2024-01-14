<?php

namespace Database\Seeders;

use App\Models\Spinalcord;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SpinalcordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Spinalcord::create([
            'user_id' => 1,
            'name' => 'Ellie Simmonds',
            'slug' => 'ellie-simmonds',
            'title' => 'paralimpik yüzücü, yazar,motivasyon konuşmacısı',
            'description' => 'Dünyaca ünlü paralimpik yüzücü, yazar ve motivasyon konuşmacısı Ellie Simmonds, omurilik felci ile dünyaya geldi. Omurilik felci, omuriliğin hasar görmesi sonucu hareket ve duyu kaybına neden olan bir durumdur. Simmonds, dört yaşındayken omurilik felci geçirdi ve iki yaşından beri tekerlekli sandalye kullanıyor.

            Simmonds, yüzmeye dokuz yaşında başladı ve kısa sürede olağanüstü bir yetenek sergiledi. İlk uluslararası yarışmasını 13 yaşındayken kazandı ve 2008 Pekin Paralimpik Oyunları\'nda altın madalya kazandı. Simmonds, 2012 Londra Paralimpik Oyunları\'nda üç altın madalya, 2016 Rio Paralimpik Oyunları\'nda dört altın madalya ve 2020 Tokyo Paralimpik Oyunları\'nda iki altın madalya kazandı.

            Simmonds, sadece bir sporcu değil, aynı zamanda bir yazar ve motivasyon konuşmacısıdır. 2012 yılında "Ellie Simmonds: My Story" adlı bir otobiyografi yazdı. Simmonds, engelli bireylerin başarılarını kutlamak için sık sık konuşmalar yapıyor.

            Simmonds\'un hikayesi, engelli bireylerin zorluklara rağmen ne kadar başarılı olabileceğinin bir kanıtıdır. Cesaret, kararlılık ve sıkı çalışma ile her şeyin mümkün olduğunu gösteriyor.

            Simmonds, engelli bireylerin rol modellerinden biridir. Onun hikayesi, diğer engelli bireylerin kendi hayallerinin peşinden gitmeleri için ilham veriyor.',
            'image' => 'images/spinalcords/ellie-simmonds.jpg',
            'twitter' => 'https://twitter.com/elliesimmonds',
        ]);
    }
}
