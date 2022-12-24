<?php
namespace App\Http\Controllers;
class HomeController extends Controller {

function index(){
  $data['title'] = 'HomePage';
  return view('home.index',$data);
}




  // End Class
}
?>