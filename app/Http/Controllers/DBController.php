<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class DBController extends Controller
{
    /**
     * 查询
     */
    public function select()
    {
    	// $mvs = DB::select('select * from goods_1 limit 10');
    	// dd($mvs);
    	// 查询所有数据
    	// $sy = DB::table('user')->get();
    	// $sy = DB::table('user')->first();
    	// $sy = DB::table('user')->value('username');
    	// $sy = DB::table('user')->pluck('username');
    	// dd($sy);

    }

    // public function insert()
    // {
    //     DB::table('user')->insert(
    //     ['email' => 'john@example.com', 'votes' => 0]);

    // }

    // public function ()
    // {
    // 	DB::transaction(){
    // 	$res1 = DB::update('update user set account = account - 100 where id = 1');
    // 	$res2 = DB::update('update user set account = account + 100 where id = 6 ');
    // 	if($res1 && $res2){
    // 		DB::commit();
    // 	}else{
    // 		DB::rollback();
    // 	}

    // 	}
    // }

    // public function trans()
    // {
    // 	// DB::transaction(function(){
    // 	// 	$res1 = DB::update('update user set account = account - 100 where id = 1');
    // 	// 	$res2 = DB::update('update user set account = account - 100 where id = 2');

    // 	// 	if($res1 && $res2){
    // 	// 		DB::commit();
    // 	// 	}else{
    // 	// 		DB::rollback();
    // 	// 	}
    // 	// });
    	
    // 	try{
    // 		$res2 = DB::update('update user sets account = account + 100 where id = 6');
    // 	}catch(Exception $e){
    // 		echo $e -> getMessage();
    // 	}
    // }

    public function delete(){
    	DB::table('user')->where('uid', '=', 2)->delete();
    }

    public function sz(){
    	// $res = DB::table('user')->select('username', 'email as user_email')->get();
    	// $res = DB::table('user')->where('username', 'like', 'T%');
    	// $res = DB::table('user')->whereBetween('uid', [1, 100])->get();
    	
    	// dd($res);
    }

    public function px(){
    	$res = orderBy('id','desc');
    }
}