<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
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
      // \App\Models\User::factory(10)->create();
      // dengan factory dan faker
      User::factory(10)->create();
      Post::factory(100)->create();

      // User::create([
      //    'name' => 'ilham gilang',
      //    'email' => 'gepedevelop@gmail.com',
      //    'password' => bcrypt('12345')
      // ]);

      Category::create([
         'name' => 'Web programming',
         'slug' => 'web-programming'
      ]);
      Category::create([
         'name' => 'Web-Design',
         'slug' => 'web-design'
      ]);
      Category::create([
         'name' => 'Personal',
         'slug' => 'personal'
      ]);




      // manual
      //   User::create([
      //      'name' => 'ilham gilang',
      //      'email' => 'gepedevelop@gmail.com',
      //      'password' => bcrypt('12345')
      //   ]);

      //   Category::create([
      //      'name' => 'Web programming',
      //      'slug' => 'web-programming'
      //   ]);
      //   Category::create([
      //      'name' => 'Web-Design',
      //      'slug' => 'web-design'
      //   ]);
      //   Category::create([
      //      'name' => 'Personal',
      //      'slug' => 'personal'
      //   ]);

      //   Post::create([
      //    'title' => 'Judul Pertama',
      //    'slug' => 'Judul-pertama',
      //    'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quidem rerum mollitia tenetur repellat. Voluptatibus quisquam in id vero numquam, soluta dolorem atque doloremque.',
      //    'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quidem rerum mollitia tenetur repellat. Voluptatibus quisquam in id vero numquam, soluta dolorem atque doloremque. Necessitatibus adipisci expedita itaque sed consequatur quidem neque ut iusto quae natus earum vero repudiandae dignissimos aspernatur, nulla quam ratione. Rem natus commodi temporibus eaque eligendi vero? Impedit, temporibus nesciunt laboriosam minima optio aliquam quae neque non sunt doloribus quos cupiditate ex soluta. Natus maxime laudantium sequi quasi error. Voluptatibus dicta asperiores corporis ratione tenetur, error voluptate illo quidem? Dolores repellendus voluptate commodi aspernatur repellat adipisci molestias doloribus quidem, enim magnam voluptatibus. Earum eius vero ad dicta. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro odio saepe perspiciatis nisi officiis. Illum consectetur animi, modi consequuntur magnam ipsum iure odio, natus ea, quod impedit voluptatem eaque velit! Commodi magnam, saepe quaerat non vero ut, sit deserunt ex tenetur rerum amet in enim tempore vel harum. Suscipit eum repudiandae tenetur fugit excepturi sit, est laudantium explicabo, maiores molestiae magnam nostrum facilis quam ipsum labore fuga eligendi cum maxime. Vero eos cupiditate, unde perspiciatis mollitia cum sit quasi vel labore a reprehenderit veniam assumenda doloremque maiores. Id, unde? Ut dignissimos consequuntur eligendi, nulla natus error. Libero, delectus dicta. Dolorum.',
      //    'category_id' => 1,
      //    'user_id' => 1
      //   ]);
      //   Post::create([
      //    'title' => 'Judul ke Dua',
      //    'slug' => 'Judul-ke-dua',
      //    'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quidem rerum mollitia tenetur repellat. Voluptatibus quisquam in id vero numquam, soluta dolorem atque doloremque.',
      //    'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quidem rerum mollitia tenetur repellat. Voluptatibus quisquam in id vero numquam, soluta dolorem atque doloremque. Necessitatibus adipisci expedita itaque sed consequatur quidem neque ut iusto quae natus earum vero repudiandae dignissimos aspernatur, nulla quam ratione. Rem natus commodi temporibus eaque eligendi vero? Impedit, temporibus nesciunt laboriosam minima optio aliquam quae neque non sunt doloribus quos cupiditate ex soluta. Natus maxime laudantium sequi quasi error. Voluptatibus dicta asperiores corporis ratione tenetur, error voluptate illo quidem? Dolores repellendus voluptate commodi aspernatur repellat adipisci molestias doloribus quidem, enim magnam voluptatibus. Earum eius vero ad dicta. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro odio saepe perspiciatis nisi officiis. Illum consectetur animi, modi consequuntur magnam ipsum iure odio, natus ea, quod impedit voluptatem eaque velit! Commodi magnam, saepe quaerat non vero ut, sit deserunt ex tenetur rerum amet in enim tempore vel harum. Suscipit eum repudiandae tenetur fugit excepturi sit, est laudantium explicabo, maiores molestiae magnam nostrum facilis quam ipsum labore fuga eligendi cum maxime. Vero eos cupiditate, unde perspiciatis mollitia cum sit quasi vel labore a reprehenderit veniam assumenda doloremque maiores. Id, unde? Ut dignissimos consequuntur eligendi, nulla natus error. Libero, delectus dicta. Dolorum.',
      //    'category_id' => 1,
      //    'user_id' => 1
      //   ]);
      //   Post::create([
      //    'title' => 'Judul Ke Tiga',
      //    'slug' => 'Judul-Ke-tiga',
      //    'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quidem rerum mollitia tenetur repellat. Voluptatibus quisquam in id vero numquam, soluta dolorem atque doloremque.',
      //    'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quidem rerum mollitia tenetur repellat. Voluptatibus quisquam in id vero numquam, soluta dolorem atque doloremque. Necessitatibus adipisci expedita itaque sed consequatur quidem neque ut iusto quae natus earum vero repudiandae dignissimos aspernatur, nulla quam ratione. Rem natus commodi temporibus eaque eligendi vero? Impedit, temporibus nesciunt laboriosam minima optio aliquam quae neque non sunt doloribus quos cupiditate ex soluta. Natus maxime laudantium sequi quasi error. Voluptatibus dicta asperiores corporis ratione tenetur, error voluptate illo quidem? Dolores repellendus voluptate commodi aspernatur repellat adipisci molestias doloribus quidem, enim magnam voluptatibus. Earum eius vero ad dicta. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro odio saepe perspiciatis nisi officiis. Illum consectetur animi, modi consequuntur magnam ipsum iure odio, natus ea, quod impedit voluptatem eaque velit! Commodi magnam, saepe quaerat non vero ut, sit deserunt ex tenetur rerum amet in enim tempore vel harum. Suscipit eum repudiandae tenetur fugit excepturi sit, est laudantium explicabo, maiores molestiae magnam nostrum facilis quam ipsum labore fuga eligendi cum maxime. Vero eos cupiditate, unde perspiciatis mollitia cum sit quasi vel labore a reprehenderit veniam assumenda doloremque maiores. Id, unde? Ut dignissimos consequuntur eligendi, nulla natus error. Libero, delectus dicta. Dolorum.',
      //    'category_id' => 2,
      //    'user_id' => 1
      //   ]);
   }
}
