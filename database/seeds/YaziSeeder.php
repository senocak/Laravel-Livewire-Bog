<?php

use App\Yazi;
use Illuminate\Database\Seeder;

class YaziSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get("database/veriler/yazis.json");
        $data = json_decode($json);
        foreach ($data as $obj) {
            Yazi::create(array(
                'id' => $obj->id,
                'baslik' => $obj->baslik,
                'url' => $obj->url,
                'kategori_id' => $obj->kategori_id,
                'etiketler' => $obj->etiketler,
                'aktif' => $obj->aktif,
                'icerik' => $obj->icerik,
                'sira' => $obj->sira
            ));
        }
    }
}
