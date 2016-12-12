<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
		<link rel="stylesheet" href="css/mysecond.css" />
		
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<script type="text/javascript" src="js/jquery-3.1.1.min.js" ></script>
		<script type="text/javascript" src="js/bootstrap.min.js" ></script>
		<script type="text/javascript" src="js/echarts.js" ></script>
		<script type="text/javascript" src="js/china.js" ></script>
		
		<script type="text/javascript">
			$(function(){
				var refreshIndexPage1=function(){
					windows.location.href='http://localhost/ceshi/first.php';
				}
			});
			
			//十秒钟刷新一下页面
			setInterval(refreshIndexPage1,1000);
		</script>
		
	</head>
	<body style="font-family:'微软雅黑';font-size:25px;color:#ffffff;word-wrap:break-word;behavior:url('csshover.htc');" >
	<div id="alldiv" style="background:#19283f"></div> 
	
	<div class="container-fluid">
       	<div class="row">
		
			<div class="col-md-12" style="height:60px">
				<div style="width:100%; text-align:center; color:white;"><h1>诸暨市电子商务交易数据分析</h1></div>
				<div style="width:100%; text-align:center; color:white;margin-top:20px"><div id="CurrentTime"></div></div>
			</div>
	
			<div class="col-md-4">
				<div class="col-md-12" style="height:340px;border-right:#ffffff dashed 1px;border-left:#ffffff dashed 1px;border-top:#ffffff dashed 1px;border-bottom:#ffffff dashed 1px">
					<table class="table">
							<thead>
								<tr style="height:80px">
									<th>
									诸暨市农村电子商务发展状况
									</th>
									<th>
										10个
									</th>
								</tr>
								<tr style="height:80px">
									<th>
									涉电商企业：
									</th>
									<th>
										20个
									</th>
								</tr>
								<tr style="height:80px">
									<th>
									淘宝付款：
									</th>
									<th>
										12个
									</th>
								</tr>
								<tr style="height:80px">
									<th>
									自建品牌数：
									</th>
									<th>
										2个
									</th>
								</tr>
							</thead>
					</table>
				</div>
				<div class="col-md-12" style="height:340px;border-right:#ffffff dashed 1px;border-left:#ffffff dashed 1px;border-top:#ffffff dashed 1px;border-bottom:#ffffff dashed 1px">
					<div id="cuntao"class="col-md-12" ></div>
				</div>
				<div class="col-md-12" style="height:340px;border-right:#ffffff dashed 1px;border-left:#ffffff dashed 1px;border-top:#ffffff dashed 1px;border-bottom:#ffffff dashed 1px">
					<div id="wangxiao"class="col-md-12"></div>
				</div>
			</div>
			
			<div class="col-md-4" >
				<div class="col-md-12" style="margin-top:80px">

	       			<div id="main" class="col-md-12" style="margin-top:80px"></div>
				</div>
			</div>
			
			<div class="col-md-4">
				<div class="col-md-12" style="height:340px;border-right:#ffffff dashed 1px;border-left:#ffffff dashed 1px;border-top:#ffffff dashed 1px;border-bottom:#ffffff dashed 1px">
					<div class="col-md-12"  ><h4>村淘点业务量排行（上行、下行）</h4></div>
					<table class="table">
							<thead>
								<tr>
									<th>
									排名
									</th>
									<th>
										站点名
									</th>
									<th>
									上行量
									</th>
									<th>
									下行量
									</th>
									<th>
										站点名
									</th>
								</tr>
							</thead>
							<tbody>	
							<?php for ($i=1;$i<=4;$i++):?>							
							<tr>
								<td>
									No.<?php echo $i; ?>
								</td>
								<td>
									3号
								</td>
								<td>
									450万
								</td>
								<td>
									420万
								</td>
								<td>
									1号
								</td>
							</tr>
							<?php endfor; ?>
						</tbody>
					</table>
				</div>
				<div class="col-md-12" style="height:340px;border-right:#ffffff dashed 1px;border-left:#ffffff dashed 1px;border-top:#ffffff dashed 1px;border-bottom:#ffffff dashed 1px">
					<div id="nongxiao" class="col-md-12"></div>
				</div>
				<div class="col-md-12" style="height:340px;border-right:#ffffff dashed 1px;border-left:#ffffff dashed 1px;border-top:#ffffff dashed 1px;border-bottom:#ffffff dashed 1px">
					<div class="col-md-12" ><h2>诸暨市店铺销量排行</h2></div>
					<table class="table">
							<thead>
								<tr style="font-size:20px">
									<th>
									排名
									</th>
									<th>
										公司名称
									</th>
									<th>
									单量（万单）
									</th>
									<th>
									所属乡镇
									</th>
									<th>
										站点名
									</th>
								</tr>
							</thead>
							<tbody>	
							<?php for ($i=1;$i<=4;$i++):?>							
							<tr>
								<td>
									No.<?php echo $i; ?>
								</td>
								<td>
									万达
								</td>
								<td>
									45
								</td>
								<td>
									诸暨市
								</td>
								<td>
									3号
								</td>
							</tr>
							<?php endfor; ?>
						</tbody>
					</table>
				</div>
			</div>

		</div>
	</div>
	
	
	<script type="text/javascript">
        function changetime(){
            var ary = Array("星期日","星期一","星期二","星期三","星期四","星期五","星期六");
            var Timehtml = document.getElementById('CurrentTime');
            var date = new Date();
            Timehtml.innerHTML = ''+date.toLocaleString()+'   '+ary[date.getDay()];
        }
        window.onload = function(){
            changetime();
            setInterval(changetime,1000);   
        }
    </script>
	
	    <script type="text/javascript">  
        $.get('js/zhuji.json', function (zJjson) {  
        echarts.registerMap('诸暨', zJjson);  
        var myChart_main = echarts.init(document.getElementById('main'));  
          
        option = {  
            title: {  
                text: '村淘站点数量:   300个',  
                x:'center'  
            },  
            dataRange:{  
                min:0,  
                max:500,  
                text:['高','低'],  
                realtime:true,  
                calculable:true,  
                color:['orangered','yellow','green']  
            },  
            series:[   
                {  
                    name:'犯罪数量',  
                    type:'map',  
                    map:'诸暨',  
                    mapLocation:{  
                        y:60  
                    },  
                    itemSytle:{  
                        emphasis:{label:{show:false}}  
                    },  
                    data:[  
//                      {name:'西夏区',value:Math.round(Math.random()*500)},  
//                      {name:'贺兰县',value:Math.round(Math.random()*500)},  
//                      {name:'金凤区',value:Math.round(Math.random()*500)},  
//                      {name:'永宁县',value:Math.round(Math.random()*500)},  
//                      {name:'灵武市',value:Math.round(Math.random()*500)},  
//                      {name:'兴庆区',value:Math.round(Math.random()*500)}  
                    ]  
                }  
            ],  
              
        };  
        myChart_main.setOption(option);  
});  
    </script>  
	
		<script type="text/javascript">
        // 基于准备好的dom，初始化echarts实例
        var myChart_cuntao = echarts.init(document.getElementById('cuntao'));
        
        option = {
    title : {
        text: '村淘站点分类统计',
        x:'center'
    },
    tooltip : {
        trigger: 'item',
        formatter: "{a} <br/>{b} : {c} ({d}%)"
    },
    legend: {
        x : 'center',
        y : 'bottom',
        data:['rose1','rose2','rose3','rose4','rose5','rose6','rose7','rose8']
    },
    calculable : true,
    series : [
        {
            name:'面积模式',
            type:'pie',
            radius : [30, 110],
            center : ['50%', '50%'],
            roseType : 'area',
            data:[
                {value:10, name:'rose1'},
                {value:5, name:'rose2'},
                {value:15, name:'rose3'},
                {value:25, name:'rose4'},
                {value:20, name:'rose5'},
                {value:35, name:'rose6'},
                {value:30, name:'rose7'},
                {value:40, name:'rose8'}
            ]
        }
    ]
};

myChart_cuntao .setOption(option);
        </script>
	
	    <script type="text/javascript">
        // 基于准备好的dom，初始化echarts实例
        var myChart_wangxiao = echarts.init(document.getElementById('wangxiao'));
        option = {
    title: {
        text: '网上销售额统计（近一年）',
        left: 'center'
    },
    tooltip: {
        trigger: 'item',
        formatter: '{a} <br/>{b} : {c}'
    },
    legend: {
        left: 'left',
        data: ['2的指数', '3的指数']
    },
    xAxis: {
        type: 'category',
        name: 'x',
        splitLine: {show: false},
        data: ['一', '二', '三', '四', '五', '六', '七', '八', '九'],
		axisLabel: {
                     show: true,
                     textStyle: {
                     color: '#fff'
                }
		}
    },
    grid: {
        left: '3%',
        right: '4%',
        bottom: '3%',
        containLabel: true
    },
    yAxis: {
        type: 'log',
        name: 'y',
		axisLabel: {
                     show: true,
                     textStyle: {
                     color: '#fff'
                }
		}
    },
    series: [
        {
            name: '3的指数',
            type: 'line',
            data: [56, 23, 33, 81, 50]
        },
    ]
};

        myChart_wangxiao .setOption(option);
        </script>
        
	<script type="text/javascript">
        // 基于准备好的dom，初始化echarts实例
        var myChart_nongxiao = echarts.init(document.getElementById('nongxiao'));

option = {
    title: {
        text: '农产品销售排行',
		textStyle: {
					fontSize: 18,
					fontWeight: 'bolder',
					color: '#ffffff'          // 主标题文字颜色
				}
    },
    tooltip: {
        trigger: 'axis',
        axisPointer: {
            type: 'shadow'
        }
    },
    legend: {
        data: ['2011年', '2012年']
    },
    grid: {
        left: '3%',
        right: '4%',
        bottom: '3%',
        containLabel: true
    },
    xAxis: {
        type: 'value',
        boundaryGap: [0, 0.01],
		axisLabel: {
                     show: true,
                     textStyle: {
                     color: '#fff'
                }
		}
    },
    yAxis: {
        type: 'category',
        data: ['巴西','印尼','美国','印度','中国'],
		axisLabel: {
                     show: true,
                     textStyle: {
                     color: '#fff'
                }
		}
    },
    series: [
        {
            name: '2011年',
            type: 'bar',
            data: [18203, 23489, 29034, 104970, 131744]
        },
    ]
};

        myChart_nongxiao.setOption(option);  
        </script>
	
	</body>
	
</html>