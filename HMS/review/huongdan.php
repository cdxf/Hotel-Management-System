<?php
/**
 *     goi den route tu form template
 *     <form action="{{  asset('/auth/login') }}">  //day la duong dan
 *     <form method="POST" action="{{ action('Auth\AuthController@postLogin') }}"> // cach nay co ve ngon hon
 *        
 */

==========================================
 Tao mot class de voi phuong thuc construct co middleware auth de moi route deu phai co authentication

==========================================
/**
 * 				Với database seeding
 * 				- Muốn seeding cho từng bảng  thì chạy lệnh
 * 				php artisan db:seed --class <nameofseedclass>
 * 				- Nếu chỉ chạy db:seed thì phải gọi tới class <nameofseedclass> trong DatabaseSeeder đã tạo mặc định
 * 				
*/
class DatabaseSeeder extends Seeder

{
    
    public function run()
    {
        Model::unguard();

         $this->call(UserTableSeeder::class); //call class

        Model::reguard();
    }
}

============================================
// truyen bien vao route
 {{ route('bookingroom_rec_get',$r->id) }}
 //cach khac la dung link truc tiep
 <a href="booking/name"> </a>

================================================
/**
 *      lam cho the input khong the chinh sua ma chi xem
 *     <input type="text" name="country" value="Norway" readonly><br>
 */