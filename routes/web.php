<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('dashboard');

Route::get('/','IndexController@trangchu')->name('/');
Route::get('/gioi-thieu','IndexController@about')->name('gioi-thieu');

Route::get('/dich-vu','DichvuController@service')->name('dich-vu');
Route::get('/dich-vu/laptrinh','DichvuController@servicelaptrinh')->name('dich-vu/laptrinh');
Route::get('/dich-vu/laptrinh/batdau','DichvuController@servicelaptrinhbatdau')->name('dich-vu/laptrinh/batdau');
Route::get('/dich-vu/{id}','DichvuController@servicethietkewebsite')->name('dich-vu/{id}');
Route::get('/dichvu','DichvuController@dichvu')->name('dichvu');
Route::get('chi-tiet-san-pham/{id}','DichvuController@chitietdichvu')->name('chi-tiet-san-pham');

Route::get('/du-an','DuanController@project')->name('du-an');
//Route::get('/du-an/chi-tiet-du-an/{id}','DuanController@projectdetail')->name('du-an/chi-tiet-du-an');

Route::get('/giai-phap','GiaiphapController@giaiphap')->name('giai-phap');
Route::get('/chi-tiet-giai-phap/{id}','GiaiphapController@giaiphapdetail')->name('chi-tiet-giai-phap');

Route::get('/tin-tuc','TintucController@news')->name('tin-tuc');
Route::get('/chi-tiet-tin-tuc/{id}','TintucController@newsdetail')->name('chi-tiet-tin-tuc');

Route::get('/tag/{id}','TintucController@tag')->name('tag');

Route::get('/tuyen-dung','TuyendungController@tuyendung')->name('tuyen-dung');
Route::get('/tuyen-dung-design','TuyendungController@getdesign')->name('tuyen-dung-design');
Route::post('/tuyen-dung-design','TuyendungController@postdesign')->name('tuyen-dung-design');
Route::get('/tuyen-dung-engineering','TuyendungController@getengineering')->name('tuyen-dung-engineering');
Route::post('/tuyen-dung-engineering','TuyendungController@postengineering')->name('tuyen-dung-engineering');

Route::get('/tuyen-dung-sale-marketing','TuyendungController@getsalemark')->name('tuyen-dung-sale-marketing');
Route::post('/tuyen-dung-sale-marketing','TuyendungController@postsalemark')->name('tuyen-dung-sale-marketing');

Route::get('/tuyen-dung-seo','TuyendungController@getseo')->name('tuyen-dung-seo');
Route::post('/tuyen-dung-seo','TuyendungController@postseo')->name('tuyen-dung-seo');

Route::get('/lien-he','LienheController@getlienhe')->name('lien-he');
Route::post('/lien-he','LienheController@postlienhe')->name('lien-he');

Route::post('/y-tuong','LienheController@postytuong')->name('y-tuong');

Route::post('/nhan-tin','LienheController@postnhantin')->name('nhan-tin');

Route::get('/get-post-chart-data', 'ChartDataController@getDaylyPostData');

Route::get('/xem-tat-ca','IndexController@getxemtatca')->name('xem-tat-ca');

Route::get('sitemap.xml', ['as' => 'sitemap.xml' , 'uses' => 'SiteMapController@index'] );

//Route::get('/sitemap','SiteMapController@index')->name('sitemap');

Route::get('change-language/{language}', 'changeLanguageController@changeLanguage')->name('change-language');

Route::middleware(['auth'])->group(function() {
	Route::prefix('admin')->group(function () {
		Route::get('canhan/{id}',[
			'as' =>'admin/canhan/{id}',
			'uses' =>'Admin\UserAdminController@getcanhan'
		]);
		Route::post('canhan/{id}',[
			'as' =>'admin/canhan/{id}',
			'uses' =>'Admin\UserAdminController@postcanhan'
		]);

		Route::get('tatcabaiviet',[
			'as' =>'admin/tatcabaiviet',
			'uses' =>'Admin\WriteController@gettatcabaiviet',
            'middleware' =>'checkacl:view-baiviet'
		]);

		Route::get('menu_baiviet',[
			'as' =>'admin/menu_baiviet',
			'uses' =>'Admin\WriteController@getmenu_baiviet',
            'middleware' =>'checkacl:add-menu'
		]);
		Route::post('menu_baiviet',[
			'as' =>'admin/menu_baiviet',
			'uses' =>'Admin\WriteController@postmenu_baiviet',
            'middleware' =>'checkacl:add-menu'
		]);
		Route::get('edit_menu_baiviet/{id}',[
			'as' =>'admin/edit_menu_baiviet/{id}',
			'uses' =>'Admin\WriteController@geteditmenu_baiviet'
		]);
		Route::post('edit_menu_baiviet/{id}',[
			'as' =>'admin/edit_menu_baiviet/{id}',
			'uses' =>'Admin\WriteController@posteditmenu_baiviet'
		]);
		Route::get('del_menu_baiviet/{id}',[
			'as' =>'admin/del_menu_baiviet/{id}',
			'uses' =>'Admin\WriteController@postdeletemenu_baiviet'
		]);

		Route::get('baiviet',[
			'as' =>'admin/baiviet',
			'uses' =>'Admin\WriteController@getbaiviet',
            'middleware' =>'checkacl:add-baiviet'
		]);
		Route::post('baiviet',[
			'as' =>'admin/baiviet',
			'uses' =>'Admin\WriteController@postbaiviet',
            'middleware' =>'checkacl:add-baiviet'
		]);
		Route::get('edit_baiviet/{id}',[
			'as' =>'admin/edit_baiviet',
			'uses' =>'Admin\WriteController@geteditbaiviet'
		]);
		Route::post('edit_baiviet/{id}',[
			'as' =>'admin/edit_baiviet',
			'uses' =>'Admin\WriteController@posteditbaiviet'
		]);
		Route::get('dele_baiviet/{id}',[
			'as' =>'admin/dele_baiviet',
			'uses' =>'Admin\WriteController@getdelebaiviet'
		]);

		Route::get('tag',[
			'as' =>'admin/tag',
			'uses' =>'Admin\WriteController@gettag'
		]);
		Route::post('tag',[
			'as' =>'admin/tag',
			'uses' =>'Admin\WriteController@posttag'
		]);
		Route::get('edit_tag/{id}',[
			'as' =>'admin/edit_tag/{id}',
			'uses' =>'Admin\WriteController@getedittag'
		]);
		Route::post('edit_tag/{id}',[
			'as' =>'admin/edit_tag/{id}',
			'uses' =>'Admin\WriteController@postedittag'
		]);
		Route::get('del_tag/{id}',[
			'as' =>'admin/del_tag/{id}',
			'uses' =>'Admin\WriteController@getdeltag'
		]);


		Route::get('menu_cha',[
			'as' =>'admin/menu_cha',
			'uses' =>'Admin\WriteController@getmenu_cha',
            'middleware' =>'checkacl:add-menu'
		]);
		Route::post('menu_cha',[
			'as' =>'admin/menu_cha',
			'uses' =>'Admin\WriteController@postmenu_cha',
            'middleware' =>'checkacl:add-menu'
		]);
		Route::get('edit_menu_cha/{id}',[
			'as' =>'admin/edit_menu_cha/{id}',
			'uses' =>'Admin\WriteController@geteditmenu_cha'
		]);
		Route::post('edit_menu_cha/{id}',[
			'as' =>'admin/edit_menu_cha/{id}',
			'uses' =>'Admin\WriteController@posteditmenu_cha'
		]);
		Route::get('del_menu_cha/{id}',[
			'as' =>'admin/del_menu_cha/{id}',
			'uses' =>'Admin\WriteController@postdeletemenu_cha'
		]);

		Route::get('menu_con',[
			'as' =>'admin/menu_con',
			'uses' =>'Admin\WriteController@getmenu_con'
		]);
		Route::post('menu_con',[
			'as' =>'admin/menu_con',
			'uses' =>'Admin\WriteController@postmenu_con'
		]);
		Route::get('edit_menu_con/{id}',[
			'as' =>'admin/edit_menu_con/{id}',
			'uses' =>'Admin\WriteController@geteditmenu_con'
		]);
		Route::post('edit_menu_con/{id}',[
			'as' =>'admin/edit_menu_con/{id}',
			'uses' =>'Admin\WriteController@posteditmenu_con'
		]);
		Route::get('del_menu_con/{id}',[
			'as' =>'admin/del_menu_con/{id}',
			'uses' =>'Admin\WriteController@postdeletemenu_con'
		]);

		
		Route::get('kho_sanpham',[
			'as' =>'admin/kho_sanpham',
			'uses' =>'Admin\WriteController@getkho_sanpham'
		]);
		Route::get('up_sanpham',[
			'as' =>'admin/up_sanpham',
			'uses' =>'Admin\WriteController@getup_sanpham'
		]);
		Route::post('up_sanpham',[
			'as' =>'admin/up_sanpham',
			'uses' =>'Admin\WriteController@postup_sanpham'
		]);
		Route::get('edit_up_sanpham/{id}',[
			'as' =>'admin/edit_up_sanpham',
			'uses' =>'Admin\WriteController@geteditup_sanpham'
		]);
		Route::post('edit_up_sanpham/{id}',[
			'as' =>'admin/edit_up_sanpham',
			'uses' =>'Admin\WriteController@posteditup_sanpham'
		]);
		Route::get('dele_up_sanpham/{id}',[
			'as' =>'admin/dele_up_sanpham',
			'uses' =>'Admin\WriteController@getdeleup_sanpham'
		]);


		Route::get('insert_doitac',[
			'as' =>'admin/insert_doitac',
			'uses' =>'Admin\DoitacController@getinsertdoitac',
            'middleware' =>'checkacl:add-dt'
		]);
		Route::post('insert_doitac',[
			'as' =>'admin/insert_doitac',
			'uses' =>'Admin\DoitacController@postinsertdoitac',
            'middleware' =>'checkacl:add-dt'
		]);
		Route::get('table_doitac',[
			'as' =>'admin/table_doitac',
			'uses' =>'Admin\DoitacController@gettabledoitac',
            'middleware' =>'checkacl:list-dt'
		]);
		Route::get('edit_doitac/{id}',[
			'as' =>'admin/edit_doitac/{id}',
			'uses' =>'Admin\DoitacController@geteditdoitac'
		]);
		Route::post('edit_doitac/{id}',[
			'as' =>'admin/edit_doitac/{id}',
			'uses' =>'Admin\DoitacController@posteditdoitac'
		]);
		Route::get('del_doitac/{id}',[
			'as' =>'admin/del_doitac/{id}',
			'uses' =>'Admin\DoitacController@getdeledoitac'
		]);
		Route::get('danhgia_dt',[
			'as'=>'admin/danhgia_dt',
			'uses'=>'Admin\DoitacController@getdanhgia_dt',
            'middleware' =>'checkacl:add-danhgiadt'
		]);
		Route::post('danhgia_dt',[
			'as'=>'admin/danhgia_dt',
			'uses'=>'Admin\DoitacController@postdanhgia_dt',
            'middleware' =>'checkacl:add-danhgiadt'
		]);
		Route::get('deldanhgia_dt/{id}',[
			'as'=>'admin/deldanhgia_dt/{id}',
			'uses'=>'Admin\DoitacController@getdeletedanhgia_dt'
		]);

		Route::get('insert_baogia',[
			'as' =>'admin/insert_baogia',
			'uses' =>'Admin\BaogiaController@getinsertbaogia',
            'middleware' =>'checkacl:baogia'
		]);
		Route::post('insert_baogia',[
			'as' =>'admin/insert_baogia',
			'uses' =>'Admin\BaogiaController@postinsertbaogia',
            'middleware' =>'checkacl:baogia'
		]);
		Route::get('table_baogia',[
			'as' =>'admin/table_baogia',
			'uses' =>'Admin\BaogiaController@gettablebaogia',
            'middleware' =>'checkacl:list-baogia'
		]);
		Route::get('edit_baogia/{id}',[
			'as' =>'admin/edit_baogia/{id}',
			'uses' =>'Admin\BaogiaController@geteditbaogia'
		]);
		Route::post('edit_baogia/{id}',[
			'as' =>'admin/edit_baogia/{id}',
			'uses' =>'Admin\BaogiaController@posteditbaogia'
		]);
		Route::get('del_baogia/{id}',[
			'as' =>'admin/del_baogia/{id}',
			'uses' =>'Admin\BaogiaController@getdelebaogia'
		]);

		Route::get('nhan_email',[
			'as' =>'admin/nhan_email',
			'uses' =>'Admin\AdminController@getnhanemail',
            'middleware' =>'checkacl:view-email'
		]);
		Route::get('chitiet_emial/{id}',[
			'as' =>'admin/chitiet_emial/{id}',
			'uses' =>'Admin\AdminController@getchitietemail'
		]);
		Route::get('relay_chitiet_email/{id}',[
			'as' =>'admin/relay_chitiet_email/{id}',
			'uses' =>'Admin\AdminController@getrelaychitietemail'
		]);
		Route::post('relay_chitiet_email/{id}',[
			'as' =>'admin/relay_chitiet_email/{id}',
			'uses' =>'Admin\AdminController@postrelaychitietemail'
		]);
		Route::get('dele_email/{id}',[
			'as' =>'admin/dele_email/{id}',
			'uses' =>'Admin\AdminController@getdele_email'
		]);
		Route::get('new_email',[
			'as' =>'admin/new_email',
			'uses' =>'Admin\AdminController@getnew_email'
		]);
		Route::post('new_email',[
			'as' =>'admin/new_email',
			'uses' =>'Admin\AdminController@postnew_email'
		]);
		Route::get('datl_email',[
			'as' =>'admin/datl_email',
			'uses' =>'Admin\AdminController@getdatl_email'
		]);
		Route::get('delete_email',[
			'as' =>'admin/delete_email',
			'uses' =>'Admin\AdminController@getdelete_email'
		]);

		Route::get('danhsachdanhgiakhachhang',[
			'as' =>'admin/danhsachdanhgiakhachhang',
			'uses' =>'Admin\DoitacController@getdanhsachdanhgiakhachhang',
            'middleware' =>'checkacl:view-danhgiauser'
		]);
		Route::post('danhsachdanhgiakhachhang',[
			'as' =>'admin/danhsachdanhgiakhachhang',
			'uses' =>'Admin\DoitacController@postdanhsachdanhgiakhachhang'
		]);
		Route::get('del_danhsachdanhgiakhachhang/{id}',[
			'as' =>'admin/del_danhsachdanhgiakhachhang/{id}',
			'uses' =>'Admin\DoitacController@getdeletedanhsachdanhgiakhachhang'
		]);


		Route::get('loiich',[
			'as' =>'admin/loiich',
			'uses' =>'Admin\AdminController@getloiich',
            'middleware' =>'checkacl:add-loiich'
		]);
		Route::post('loiich',[
			'as' =>'admin/loiich',
			'uses' =>'Admin\AdminController@postloiich',
            'middleware' =>'checkacl:add-loiich'
		]);
		Route::get('del_loiich/{id}',[
			'as' =>'admin/del_loiich/{id}',
			'uses' =>'Admin\AdminController@getdeleteloiich'
		]);

		Route::get('tuyendung',[
			'as' =>'admin/tuyendung',
			'uses' =>'Admin\TuyendungController@gettuyendung',
            'middleware' =>'checkacl:view-tuyendung'
		]);
		Route::get('view_chitiet/{id}',[
			'as' =>'admin/view_chitiet/{id}',
			'uses' =>'Admin\TuyendungController@getviewchitiet',
            'middleware' =>'checkacl:view-tuyendung'
		]);

		Route::get('nhatky',[
			'as' =>'admin/nhatky',
			'uses' =>'Admin\AdminController@getnhatky'
		]);
		Route::get('content',[
			'as' =>'admin/content',
			'uses' =>'Admin\AdminController@getcontent'
		]);
		Route::post('content',[
			'as' =>'admin/content',
			'uses' =>'Admin\AdminController@postcontent'
		]);
		Route::get('edit-content/{id}',[
			'as' =>'admin/edit-content',
			'uses' =>'Admin\AdminController@geteditcontent'
		]);
		Route::post('edit-content/{id}',[
			'as' =>'admin/edit-content',
			'uses' =>'Admin\AdminController@posteditcontent'
		]);
		Route::get('delete-content/{id}',[
			'as' =>'admin/delete-content',
			'uses' =>'Admin\AdminController@getdeletecontent'
		]);
	});
 	Route::group(['prefix' => 'user'], function () {
            
            Route::get('/listuser',[
            'as' => 'admin/user/listuser',
            'uses' => 'Admin\UserAdminController@getListInfo',
            'middleware' =>'checkacl:list-user'
            ]);
            Route::get('/add',[
            'as' =>'admin/user/add',
            'uses' =>'Admin\UserAdminController@getadduser',
            'middleware' =>'checkacl:add-user'
            ]);
             Route::post('/add',[
            'as' =>'admin/user/add',
            'uses' =>'Admin\UserAdminController@postadduser',
            'middleware' =>'checkacl:add-user'
            ]);
            Route::get('edituser/{id}',[
            'as' =>'admin/user/edituser',  
            'uses' =>'Admin\UserAdminController@geteditinfo',
            'middleware' =>'checkacl:edit-user'
            ]);
            Route::post('edituser/{id}',[
            'as' =>'admin/user/edituser', 
            'uses' =>'Admin\UserAdminController@posteditinfo',
            'middleware' =>'checkacl:edit-user'
            ]);
            Route::get('deleteuser/{id}',[
             'as' =>'admin/user/deleteuser', 
            'uses' =>'Admin\UserAdminController@getdeleteinfo',
            'middleware' =>'checkacl:delete-user'
            ]);

            Route::get('/listrole',[
            'as' => 'admin/user/listrole',
            'uses' => 'Admin\RoleController@getlistrole',
            'middleware' =>'checkacl:list-role'
            ]);
            Route::get('/addrole',[
            'as' => 'admin/user/addrole',
            'uses' => 'Admin\RoleController@getaddrole',
            'middleware' =>'checkacl:add-role'
            ]);
            Route::post('/addrole',[
            'as' => 'admin/user/addrole',
            'uses' => 'Admin\RoleController@postaddrole',
            'middleware' =>'checkacl:add-role'
            ]);
            Route::get('/editrole/{id}',[
            'as' => 'admin/user/editrole',
            'uses' => 'Admin\RoleController@geteditrole',
            'middleware' =>'checkacl:edit-role'
            ]);
            Route::post('/editrole/{id}',[
            'as' => 'admin/user/editrole',
            'uses' => 'Admin\RoleController@posteditrole',
            'middleware' =>'checkacl:edit-role'
            ]);
            Route::get('/deleterole/{id}',[
            'as' => 'admin/user/deleterole',
            'uses' => 'Admin\RoleController@getdeleterole',
            'middleware' =>'checkacl:delete-role'
            ]);

            Route::get('/addpremission',[
            'as' => 'admin/user/addpremission',
            'uses' => 'Admin\RoleController@getaddpremission',
            'middleware' =>'checkacl:add-vaitro'
            ]);
            Route::post('/addpremission',[
            'as' => 'admin/user/addpremission',
            'uses' => 'Admin\RoleController@postaddpremission',
            'middleware' =>'checkacl:add-vaitro'
            ]);

        }); 
});
