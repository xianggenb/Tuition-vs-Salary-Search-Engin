<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
  public function index(){
  	$this->display();
  }

  public function search(){
  	$can=I('post.');
  	if($can['instnm']){
  		$where['INSTNM']=array('like',"%$can[instnm]%");
  	}
  	if($can['city']){
  		$where['CITY']=$can['city'];
  	}
  	if($can['fee']){
      switch ($can['fee']) {
        case '1':
  		    $where['TUITION']=array('elt',5000);
          break;
        case '2':
          $where['TUITION']=array('between',"5000,10000");
          break;
        case '3':
          $where['TUITION']=array('between',"10000,20000");
          break;
        case '4':
          $where['TUITION']=array('between',"20000,25000");
          break;
        case '5':
          $where['TUITION']=array('between',"25000,30000");
          break;
        case '6':
          $where['TUITION']=array('between',"30000,35000");
          break;
        case '7':
          $where['TUITION']=array('egt',35000);
          break;
      }
  	}
    if($where){
      $data=M('salary')->where($where)->order('UNITID ASC')->select();      
    }
  	// $data=M('salary')->select();
    if(empty($data)){
      $this->assign('nodata',1);      
    }
    $this->assign('data',$data);
  	// dump($data);
    $this->display('Index/search'); 

  }
}