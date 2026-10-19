<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class berita extends Model
{
 private static $data_berita = [
[
    "judul" => "Berita mahasiswa TI"
    "slug" => "Berita-Mahasiswa-TI"
    "penulis" => ""Mirza
    "konten" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta illum animi possimus quia laboriosam nisi minima ullam rem impedit sunt dolore ipsum, atque, 
    consequatur consectetur ducimus molestias molestiae enim amet, minus cumque iusto! Temporibus illum tempora debitis! Veniam fuga consequatur voluptas unde exercitationem doloribus
     suscipit molestiae deleniti! Placeat commodi voluptatem, tempora hic repellendus repudiandae a quas nihil nemo sint tempore, officia libero nam. Unde eligendi iusto officiis possimus, laudantium minus possimus
      sequi quasi consequatur libero dolores dignissimos esse molestias ad quae vitae incidunt et quisquam aspernatur. Nulla, alias iure. Maxime nostrum, vitae mollitia minus omnis, eos provident asperiores doloribus voluptatibus at, 
      blanditiis facere! Obcaecati, error explicabo. Odio, perferendis consequuntur. Quidem, doloremque quo eveniet ratione omnis fuga porro inventore sunt facilis et in nam, at quisquam asperiores aliquid sit minus accusantium aperiam iure, repudiandae. 
      Expedita officiis recusandae voluptas cum modi doloribus totam molestias, laborum velit corrupti?"
],
"judul" => "Dosen TI",
        "slug" => "dosen-ti",
        "penulis" => "Leeh S.kom",
        "konten" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem provident incidunt assumenda atque nisi animi eius iusto et odio dicta, necessitatibus consequatur? Consequatur a amet dolor quod necessitatibus. Autem veritatis voluptatum, reiciendis veniam perferendis voluptas dignissimos praesentium et sequi nam, quo, perspiciatis dolores voluptates a quibusdam repellendus possimus facere ratione nisi quas iusto. Aliquid maxime asperiores magnam quo porro maiores sunt corrupti laborum quasi tempore architecto atque, voluptatum recusandae, officiis accusantium, velit quod. A ullam cum, laudantium maxime perferendis nulla fuga sed ab quos voluptate unde ut ipsam corporis atque iure voluptatem exercitationem ipsa quasi mollitia numquam quas! Nobis, dolorem"
 ];

 public static function ambildata()
 {
    return self::$data_berita;
 }
}
 