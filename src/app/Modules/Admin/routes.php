<?php

Route::group(array('module'=>'Admin','namespace' => 'App\Modules\Admin\Controllers'), function() {

  Route::get('admin/dashboard',function(){
      return view("Admin::dashboard");
  });

});
