<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
		/*
		*1默认模式 pathinfo模式 
		*http://localhost/MyFrontProject/FirstApp/ThinkPHP/index.php/Home/Index/user/id/1.html
		*0普通模式
		*http://localhost/MyFrontProject/FirstApp/ThinkPHP/index.php?m=Home&c=Index&a=user&id=1
		*2重写模式
		*http://localhost/MyFrontProject/FirstApp/ThinkPHP/Home/Index/user/id/1.html
		*3兼容模式
		*http://localhost/MyFrontProject/FirstApp/ThinkPHP/index.php?s=/Home/Index/user/id/1.html
		*/
		//echo C('URL_MODEL'),'<br/>';
		//U('模块名/方法',array('id'=>1),'xxxx html htm shtml',true/false,'localhost')
		//echo U('Index/user',array('id'=>1),'html',true,'localhost');
	//$this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px }</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p></div><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>','utf-8');
		$myname='xujian';
		$this->name=$myname;
		$this->display();
    }
	
	public function login(){
	//	if (IS_POST){
	//		$this->account=$_POST['account'];
	//		$this->psw=$_POST['psw'];
	//		$this->success('登录成功');
	//	}
	}
	
	public function first(){
		//first页面热销产品排行榜
		$content = file_get_contents("http://zj.alphawu.com/datang_data/frontend/web/index.php?r=api/productranking&size=5");
		$data = json_decode($content, true);
		//var_dump($data);
		$this->data_rexiao = $data;
		$this->display();
	}
	public function second(){
		//second页面左上角四个数据
		$content = file_get_contents("http://zj.alphawu.com/datang_data/frontend/web/index.php?r=api/ruralelectronic");
		$data_dianzi = json_decode($content, true);
		//var_dump($data);
		$this->data_dianzi = $data_dianzi;
		
		//second页面村淘点业务量排行（上行，下行）
		$content = file_get_contents("http://zj.alphawu.com/datang_data/frontend/web/index.php?r=api/businessvillage&size=5");
		$data_cuntao = json_decode($content, true);
		$this->data_cuntao = $data_cuntao;
		
		//second页面诸暨市店铺销量排行
		$content = file_get_contents("http://zj.alphawu.com/datang_data/frontend/web/index.php?r=api/zhujiagriculturestroe&size=5");
		$data_dianxiao = json_decode($content, true);
		$this->data_dianxiao = $data_dianxiao;
		
		
		$this->display();
	}
	public function third(){
		//产地及出口国家排行
		$content = file_get_contents("http://zj.alphawu.com/datang_data/frontend/web/index.php?r=api/originexport&size=5");
		$data_chandi = json_decode($content, true);
		$this->data_chandi = $data_chandi;
		
		//出口交易额统计
		$content = file_get_contents("http://zj.alphawu.com/datang_data/frontend/web/index.php?r=api/exporttrade");
		$data_chukou = json_decode($content, true);
		$this->data_chukou = $data_chukou;
		
		
		$this->display();
	}
	
	
	public function user(){
		echo 'id is:'.$_GET['id'].'<br/>';
		echo '这里是INDEX模块的user方法';
	}
}