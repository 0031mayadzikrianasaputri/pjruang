<?php
namespace App\Controllers;
use CodeIgniter\Config\Services;
use App\Models\Databasemodel;
class Root extends BaseController{
	function __construct(){
		$this->mod = new Databasemodel();
		$this->db = db_connect();
	}

	public function index(){
		if(session()->get('admin')){
			return view('landing1');
		}else if(session()->get('sekdin')){
			return view('landing2');
		}else if(session()->get('peminjam')){
			return view('landing3');
		}else{
			return view('landing');
		}
	}

	public function proseslogin(){
		$get = $this->request->getPost();
		if($get['username'] == 'admin'){
			session()->set('admin','1');
		}else if($get['username'] == 'sekdin'){
			session()->set('sekdin','1');
		}else if($get['username'] == 'peminjam'){
			session()->set('peminjam','1');
		}
		return redirect()->to(base_url(''));
	}

	public function proseslogout(){
		session_unset();
		session()->destroy();
		return redirect()->to(base_url(''));
	}
}
?>