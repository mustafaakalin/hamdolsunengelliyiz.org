<?php

namespace Database\Seeders;

use App\Models\Vision;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Vision::create([
            'name' => 'Sare Aydın',
            'title' => 'psikiyatr',
            'description' => 'Sare Aydın, 1989 yılında Ankara\'da doğdu. Doğuştan görme engelli olan Aydın, ilk ve orta öğrenimini Ankara\'da tamamladı. Liseyi bitirdikten sonra Hacettepe Üniversitesi Psikoloji Bölümü\'ne girdi. Üniversite yıllarında görme engelli öğrenciler için kurulan bir derneğe üye olan Aydın, dernekte aktif görev aldı. Bu dönemde görme engelli bireylerin yaşadıkları zorluklara dair farkındalığı arttı ve onların sorunlarına çözüm üretmek için kendini adamaya karar verdi.

            Üniversiteden mezun olduktan sonra İstanbul Üniversitesi\'nde klinik psikoloji yüksek lisans programına başladı. Yüksek lisans eğitimi sırasında görme engelli bireylerle psikolojik danışma çalışmaları yürüttü. Bu çalışmalarından elde ettiği deneyimler, onu görme engelli bireylerin ruhsal sağlığına dair daha derinlemesine araştırma yapmaya yöneltti.
            
            2016 yılında yüksek lisans eğitimini tamamlayan Aydın, aynı yıl Hacettepe Üniversitesi Tıp Fakültesi\'nde psikiyatri asistanı olarak çalışmaya başladı. Asistanlığı sırasında görme engelli bireylerle ilgili araştırmalar yapmaya devam etti. Bu araştırmaların sonucunda, görme engelli bireylerin ruhsal sağlığını etkileyen faktörleri inceleyen bir makale yayınladı.
            
            Aydın, 2021 yılında psikiyatri uzmanlığını tamamladı. Şu anda Ankara\'da özel bir klinikte psikiyatri uzmanı olarak çalışıyor. Görme engelli bireylerin psikolojik sorunlarına çözüm üretmek için çalışmalarını sürdüren Aydın, bu alanda Türkiye\'nin ilk görme engelli psikiyatristi olma özelliğini taşıyor.',
            'image' => 'sare-aydin.jpg',
            'twitter' => 'https://twitter.com/sareaydin',
        ]);
    }
}
