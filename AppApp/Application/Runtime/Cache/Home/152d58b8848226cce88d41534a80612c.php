<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
		<link rel="stylesheet" href="/Probably/AppApp/Public/css/mythird.css" />
		
		<link rel="stylesheet" href="/Probably/AppApp/Public/css/bootstrap.min.css" />
		<script type="text/javascript" src="/Probably/AppApp/Public/js/jquery-3.1.1.min.js" ></script>
		<script type="text/javascript" src="/Probably/AppApp/Public/js/bootstrap.min.js" ></script>
		<script type="text/javascript" src="/Probably/AppApp/Public/js/echarts.js" ></script>
    <script type="text/javascript" src="/Probably/AppApp/Public/js/world.js" ></script>
	

	
</head>

<body style="font-family:'微软雅黑';font-size:25px;color:#ffffff;word-wrap:break-word;behavior:url('csshover.htc');">
       <div id="alldiv" style="background:#19283f"></div> 
	   
	   <div class="container-fluid">
       	<div class="row">
			<div class="col-md-12" style="height:60px">
				<div style="width:100%; text-align:center; color:white;"><h1>诸暨市跨境电商交易情况</h1></div>
				<div style="width:100%; text-align:center; color:white;margin-top:20px;  font-size:15px"><div id="CurrentTime"></div></div>
			</div>


			<div class="col-md-8">
				<div class="col-md-12">
					<div id="ditu" ></div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="col-md-12" style="border-right:#ffffff dashed 1px;border-left:#ffffff dashed 1px;border-top:#ffffff dashed 1px;border-bottom:#ffffff dashed 1px">
					<div id="kuaxiao" class="col-md-12"></div>
				</div>
				<div class="col-md-12" style="border-right:#ffffff dashed 1px;border-left:#ffffff dashed 1px;border-top:#ffffff dashed 1px;border-bottom:#ffffff dashed 1px">
					<div id="xiaoqu" class="col-md-12"></div>
				</div>
			</div>
			<div class="col-md-12">
				<div class="col-md-4" style="border-right:#ffffff dashed 1px;border-left:#ffffff dashed 1px;border-top:#ffffff dashed 1px;border-bottom:#ffffff dashed 1px">
					<div class="col-md-12"><h4>产地及出口国家排行</h4></div>
					<table class="table" style="font-size:18px;">
							<thead>
								<tr>
									<th>
									排名
									</th>
									<th>
										出口国家
									</th>
									<th>
									产出地
									</th>
								</tr>
							</thead>
							<tbody>		
						<?php if($data_chandi[0]['id'] == ''): ?><tr><td>暂无数据</td></tr>
                        <?php else: ?>
                        <?php if(is_array($data_chandi)): foreach($data_chandi as $key=>$v): ?><tr class="mybg">
                                <td>No.<?php echo ($v["ranking"]); ?></td>
                                <td><?php echo ($v["topleace"]); ?></td>
                                <td><?php echo ($v["frompleace"]); ?></td>
                            </tr><?php endforeach; endif; endif; ?>
						</tbody>
					</table>
				</div>
				<div class="col-md-4" style="border-right:#ffffff dashed 1px;border-left:#ffffff dashed 1px;border-top:#ffffff dashed 1px;border-bottom:#ffffff dashed 1px">
					<div id="kuajiao"></div>
				</div>
				<div class="col-md-4" style="border-right:#ffffff dashed 1px;border-left:#ffffff dashed 1px;border-top:#ffffff dashed 1px;border-bottom:#ffffff dashed 1px">
				<div  style="align:center;font-size:20px;height:65px;"><strong>出口交易额统计</strong></div>
					<table class="table">
							<thead style="font-size:28px">
								<tr >
									<td>
									<img src="/Probably/AppApp/Public/img/fir_pic.png" width="30px" height="37px">
									</td>
									<td>
									今日出口额
									</td>
									<td>
										<?php echo ($data_chukou[0]['export_today']); ?>
									</td>
									<td>
										万元
									</td>
								</tr>
								<tr>
									<td>
									<img src="/Probably/AppApp/Public/img/sed_pic.png" width="30px" height="37px">
									</td>
									<td>
									当月出口额
									</td>
									<td>
										<?php echo ($data_chukou[0]['export_month']); ?>
									</td>
									<td>
										万元
									</td>
								</tr>
								<tr>
									<td>
									<img src="/Probably/AppApp/Public/img/thi_pic.png" width="30px" height="37px">
									</td>
									<td>
									当年出口额
									</td>
									<td>
										<?php echo ($data_chukou[0]['export_year']); ?>
									</td>
									<td>
										万元
									</td>
								</tr>
								<tr>
									<td>
									<img src="/Probably/AppApp/Public/img/fou_pic.png" width="30px" height="37px">
									</td>
									<td>
									累计出口额
									</td>
									<td>
										<?php echo ($data_chukou[0]['export_cumulative']); ?>
									</td>
									<td>
										万元
									</td>
								</tr>
							</thead>
					</table>
				</div>
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
        // 基于准备好的dom，初始化echarts实例
        var myChart_kuajiao = echarts.init(document.getElementById('kuajiao'));

option = {
    title: {
        text: '跨境交易额统计（近一年）',
        left: 'left',
		textStyle: {
					fontSize: 18,
					fontWeight: 'bolder',
					color: '#ffffff'          // 主标题文字颜色
				}
    },
    tooltip: {
        trigger: 'item',
        formatter: '{a} <br/>{b} : {c}'
    },
    legend: {
        left: 'right',
        data: ['2的指数', '3的指数'],
		textStyle : {
            color: '#ffffff'
        }
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
            data: [1, 3, 9, 27, 81, 247, 741, 2223, 6669]
        }
    ]
};
var inc_time=[];    //类别数组（实际用来盛放X轴坐标值）
var turnover=[];
		 $.ajax({
         type : "GET",  
         async : true,            //异步请求（同步请求将会锁住浏览器，用户其他操作必须等待请求完成才可以执行）
         url : "http://zj.alphawu.com/datang_data/frontend/web/index.php?r=api/crossbordertransactions&size=20",    //请求发送到
         data : {},
         dataType : "json",        //返回数据形式为json
         success : function(result) {
             //请求成功时执行该函数内容，result即为服务器返回的json对象
             if (result) {
                    for(var i=result.length-1;i>=0;i--){
						inc_time.push(result[i].year + "-" + result[i].month);
						turnover.push(result[i].turnover);
                    }
					
                    myChart_kuajiao.hideLoading();    //隐藏加载动画
                    myChart_kuajiao.setOption({
    title: {
        text: '跨境交易额统计（近一年）',
        left: 'left',
		textStyle: {
					fontSize: 18,
					fontWeight: 'bolder',
					color: '#ffffff'          // 主标题文字颜色
				}
    },
    tooltip: {
        trigger: 'item',
        formatter: '{a} <br/>{b} : {c}'
    },
    legend: {
        left: 'right',
        data: ['2的指数', '3的指数'],
		textStyle : {
            color: '#ffffff'
        }
    },
    xAxis: {
        type: 'category',
        name: 'x',
        splitLine: {show: false},
        data: inc_time,
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
            data: turnover
        }
    ]
});
                    
             }
         
        },
         error : function(errorMsg) {
             //请求失败时执行该函数
         alert("图表请求数据失败!");
         myChart_kuajiao.hideLoading();
         }
    })
    </script>
	   
<script type="text/javascript">
        // 基于准备好的dom，初始化echarts实例
        var myChart_xiaoqu = echarts.init(document.getElementById('xiaoqu'));
option = {
  title:{
    text:'海外销售渠道统计',
    x:'center'  ,
	textStyle: {
					fontSize: 18,
					fontWeight: 'bolder',
					color: '#ffffff'          // 主标题文字颜色
				}
  },
    color: ['#3398DB'],
    tooltip : {
        trigger: 'axis',
        axisPointer : {            // 坐标轴指示器，坐标轴触发有效
            type : 'shadow'        // 默认为直线，可选为：'line' | 'shadow'
        }
    },
    grid: {
        left: '3%',
        right: '4%',
        bottom: '3%',
        containLabel: true
    },
    xAxis : [
        {
            type : 'category',
            data : ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],axisLabel: {
                     show: true,
                     textStyle: {
                     color: '#fff'
                }
		},
            axisTick: {
                alignWithLabel: true
            }
        }
    ],
    yAxis : [
        {
            type : 'value',
			axisLabel: {
                     show: true,
                     textStyle: {
                     color: '#fff'
                }
		}
        }
    ],
    series : [
        {
            name:'直接访问',
            type:'bar',
            barWidth: '60%',
            data:[10, 52, 200, 334, 390, 330, 220]
        }
    ]
};

var platform=[];    //类别数组（实际用来盛放X轴坐标值）
var number=[];
		 $.ajax({
         type : "GET",  
         async : true,            //异步请求（同步请求将会锁住浏览器，用户其他操作必须等待请求完成才可以执行）
         url : "http://zj.alphawu.com/datang_data/frontend/web/index.php?r=api/overseassales&size=20",    //请求发送到
         data : {},
         dataType : "json",        //返回数据形式为json
         success : function(result) {
             //请求成功时执行该函数内容，result即为服务器返回的json对象
             if (result) {
                    for(var i=0;i<result.length;i++){
						platform.push(result[i].platform);
						number.push(result[i].number);
                    }
					
                    myChart_xiaoqu.hideLoading();    //隐藏加载动画
                    myChart_xiaoqu.setOption({
  title:{
    text:'海外销售渠道统计',
    x:'center'  ,
	textStyle: {
					fontSize: 18,
					fontWeight: 'bolder',
					color: '#ffffff'          // 主标题文字颜色
				}
  },
    color: ['#3398DB'],
    tooltip : {
        trigger: 'axis',
        axisPointer : {            // 坐标轴指示器，坐标轴触发有效
            type : 'shadow'        // 默认为直线，可选为：'line' | 'shadow'
        }
    },
    grid: {
        left: '3%',
        right: '4%',
        bottom: '3%',
        containLabel: true
    },
    xAxis : [
        {
            type : 'category',
            data : platform,
			itemStyle: {
                normal: {
                    color: function(params) {
                        // build a color map as your need.
                        var colorList = [
                          '#C1232B','#B5C334','#FCCE10','#E87C25','#27727B',
                           '#FE8463','#9BCA63','#FAD860','#F3A43B','#60C0DD',
                           '#D7504B','#C6E579','#F4E001','#F0805A','#26C0C0'
                        ];
                        return colorList[params.dataIndex]
                    }
                }
            },
			axisLabel: {
                     show: true,
                     textStyle: {
                     color: '#fff'
                }
		},
            axisTick: {
                alignWithLabel: true
            }
        }
    ],
    yAxis : [
        {
            type : 'value',
			axisLabel: {
                     show: true,
                     textStyle: {
                     color: '#fff'
                }
		}
        }
    ],
    series : [
        {
            name:'直接访问',
            type:'bar',
            barWidth: '60%',
            data:number,
			itemStyle: {
                normal: {
                    color: function(params) {
                        // build a color map as your need.
                        var colorList = [
                          '#C1232B','#B5C334','#FCCE10','#E87C25','#27727B',
                           '#FE8463','#9BCA63','#FAD860','#F3A43B','#60C0DD',
                           '#D7504B','#C6E579','#F4E001','#F0805A','#26C0C0'
                        ];
                        return colorList[params.dataIndex]
                    }
                }
            }
        }
    ]
});
                    
             }
         
        },
         error : function(errorMsg) {
             //请求失败时执行该函数
         alert("图表请求数据失败!");
         myChart_xiaoqu.hideLoading();
         }
    })
    </script>
	   
<script type="text/javascript">
        // 基于准备好的dom，初始化echarts实例
        var myChart_kuaxiao = echarts.init(document.getElementById('kuaxiao'));

option = {
  title:{
    text:'跨境销售产品类别',
    x:'center'  ,
	textStyle: {
					fontSize: 18,
					fontWeight: 'bolder',
					color: '#ffffff'          // 主标题文字颜色
				}
  },
    tooltip: {
        trigger: 'item',
        formatter: "{a} <br/>{b}: {c} ({d}%)"
    },
    legend: {
        orient: 'vertical',
        x: 'left',
        data:['直接访问','邮件营销','联盟广告','视频广告','搜索引擎'],
		textStyle : {
            color: '#ffffff'
        }
    },
    series: [
        {
            name:'访问来源',
            type:'pie',
            radius: ['50%', '70%'],
            avoidLabelOverlap: false,
            label: {
                normal: {
                    show: false,
                    position: 'center'
                },
                emphasis: {
                    show: true,
                    textStyle: {
                        fontSize: '30',
                        fontWeight: 'bold'
                    }
                }
            },
            labelLine: {
                normal: {
                    show: false
                }
            },
            data:[
                {value:335, name:'直接访问'},
                {value:310, name:'邮件营销'},
                {value:234, name:'联盟广告'},
                {value:135, name:'视频广告'},
                {value:1548, name:'搜索引擎'}
            ]
        }
    ]
};
var product_categories=[];    //类别数组（实际用来盛放X轴坐标值）
var number=[];
		 $.ajax({
         type : "GET",  
         async : true,            //异步请求（同步请求将会锁住浏览器，用户其他操作必须等待请求完成才可以执行）
         url : "http://zj.alphawu.com/datang_data/frontend/web/index.php?r=api/crosslevelsales&size=20",    //请求发送到
         data : {},
         dataType : "json",        //返回数据形式为json
         success : function(result) {
             //请求成功时执行该函数内容，result即为服务器返回的json对象
             if (result) {
                    for(var i=0;i<result.length;i++){
						product_categories.push(result[i].product_categories);
						number.push(result[i].number);
                    }
					
                    myChart_kuaxiao.hideLoading();    //隐藏加载动画
                    myChart_kuaxiao.setOption({
  title:{
    text:'跨境销售产品类别',
    x:'center'  ,
	textStyle: {
					fontSize: 18,
					fontWeight: 'bolder',
					color: '#ffffff'          // 主标题文字颜色
				}
  },
    tooltip: {
        trigger: 'item',
        formatter: "{a} <br/>{b}: {c} ({d}%)"
    },
    legend: {
        orient: 'vertical',
        x: 'left',
        data:product_categories,
		textStyle : {
            color: '#ffffff'
        }
    },
    series: [
        {
            name:'访问来源',
            type:'pie',
            radius: ['50%', '70%'],
            avoidLabelOverlap: false,
            label: {
                normal: {
                    show: false,
                    position: 'center'
                },
                emphasis: {
                    show: true,
                    textStyle: {
                        fontSize: '30',
                        fontWeight: 'bold'
                    }
                }
            },
            labelLine: {
                normal: {
                    show: false
                }
            },
            data:(function(){
					var res = [];
					var len = product_categories.length;
					while (len--) {
					res.push({name: product_categories[len],value: number[len]});
					}
					return res;
					})()
        }
    ]
});
                    
             }
         
        },
         error : function(errorMsg) {
             //请求失败时执行该函数
         alert("图表请求数据失败!");
         myChart_kuaxiao.hideLoading();
         }
    })
    </script>
	   
	   <script type="text/javascript">
        // 基于准备好的dom，初始化echarts实例
        var myChart_ditu = echarts.init(document.getElementById('ditu'));
option = {
  /*  title : {
        text: '诸暨市跨境电商交易情况',
     //   subtext: 'from United Nations, Total population, both sexes combined, as of 1 July (thousands)',
      //  sublink : 'http://esa.un.org/wpp/Excel-Data/population.htm',
        x:'right',
        y:'top',
        textStyle:{
            fontSize:50,
            fontFamily: "Microsoft YaHei"
        } 
    },*/
    tooltip : {
        trigger: 'item',
        formatter : function (params) {
            var value = (params.value + '').split('.');
            value = value[0].replace(/(\d{1,3})(?=(?:\d{3})+(?!\d))/g, '$1,')
                    + '.' + value[1];
            return params.seriesName + '<br/>' + params.name + ' : ' + value;
        }
    },
    dataRange: {
        min: 0,
        max: 1000000,
		left:'right',
        text:['High','Low'],
        realtime: false,
        calculable : true,
        color: ['orangered','yellow','lightskyblue']
    },
    series : [
        {
            name: 'World Population (2010)',
            type: 'map',
            mapType: 'world',
            roam: true,
            mapLocation: {
                y : 60
            },
            itemStyle:{
                emphasis:{label:{show:true}}
            },
			
            data:[
                {name : 'Afghanistan', value : 28397.812},
                {name : 'Angola', value : 19549.124},
                {name : 'Albania', value : 3150.143},
                {name : 'United Arab Emirates', value : 8441.537},
                {name : 'Argentina', value : 40374.224},
                {name : 'Armenia', value : 2963.496},
                {name : 'French Southern and Antarctic Lands', value : 268.065},
                {name : 'Australia', value : 22404.488},
                {name : 'Austria', value : 8401.924},
                {name : 'Azerbaijan', value : 9094.718},
                {name : 'Burundi', value : 9232.753},
                {name : 'Belgium', value : 10941.288},
                {name : 'Benin', value : 9509.798},
                {name : 'Burkina Faso', value : 15540.284},
                {name : 'Bangladesh', value : 151125.475},
                {name : 'Bulgaria', value : 7389.175},
                {name : 'The Bahamas', value : 66402.316},
                {name : 'Bosnia and Herzegovina', value : 3845.929},
                {name : 'Belarus', value : 9491.07},
                {name : 'Belize', value : 308.595},
                {name : 'Bermuda', value : 64.951},
                {name : 'Bolivia', value : 716.939},
                {name : 'Brazil', value : 195210.154},
                {name : 'Brunei', value : 27.223},
                {name : 'Bhutan', value : 716.939},
                {name : 'Botswana', value : 1969.341},
                {name : 'Central African Republic', value : 4349.921},
                {name : 'Canada', value : 34126.24},
                {name : 'Switzerland', value : 7830.534},
                {name : 'Chile', value : 17150.76},
                {name : 'China', value : 1359821.465},
                {name : 'Ivory Coast', value : 60508.978},
                {name : 'Cameroon', value : 20624.343},
                {name : 'Democratic Republic of the Congo', value : 62191.161},
                {name : 'Republic of the Congo', value : 3573.024},
                {name : 'Colombia', value : 46444.798},
                {name : 'Costa Rica', value : 4669.685},
                {name : 'Cuba', value : 11281.768},
                {name : 'Northern Cyprus', value : 1.468},
                {name : 'Cyprus', value : 1103.685},
                {name : 'Czech Republic', value : 10553.701},
                {name : 'Germany', value : 83017.404},
                {name : 'Djibouti', value : 834.036},
                {name : 'Denmark', value : 5550.959},
                {name : 'Dominican Republic', value : 10016.797},
                {name : 'Algeria', value : 37062.82},
                {name : 'Ecuador', value : 15001.072},
                {name : 'Egypt', value : 78075.705},
                {name : 'Eritrea', value : 5741.159},
                {name : 'Spain', value : 46182.038},
                {name : 'Estonia', value : 1298.533},
                {name : 'Ethiopia', value : 87095.281},
                {name : 'Finland', value : 5367.693},
                {name : 'Fiji', value : 860.559},
                {name : 'Falkland Islands', value : 49.581},
                {name : 'France', value : 63230.866},
                {name : 'Gabon', value : 1556.222},
                {name : 'United Kingdom', value : 62066.35},
                {name : 'Georgia', value : 4388.674},
                {name : 'Ghana', value : 24262.901},
                {name : 'Guinea', value : 10876.033},
                {name : 'Gambia', value : 1680.64},
                {name : 'Guinea Bissau', value : 10876.033},
                {name : 'Equatorial Guinea', value : 696.167},
                {name : 'Greece', value : 11109.999},
                {name : 'Greenland', value : 56.546},
                {name : 'Guatemala', value : 14341.576},
                {name : 'French Guiana', value : 231.169},
                {name : 'Guyana', value : 786.126},
                {name : 'Honduras', value : 7621.204},
                {name : 'Croatia', value : 4338.027},
                {name : 'Haiti', value : 9896.4},
                {name : 'Hungary', value : 10014.633},
                {name : 'Indonesia', value : 240676.485},
                {name : 'India', value : 1205624.648},
                {name : 'Ireland', value : 4467.561},
                {name : 'Iran', value : 240676.485},
                {name : 'Iraq', value : 30962.38},
                {name : 'Iceland', value : 318.042},
                {name : 'Israel', value : 7420.368},
                {name : 'Italy', value : 60508.978},
                {name : 'Jamaica', value : 2741.485},
                {name : 'Jordan', value : 6454.554},
                {name : 'Japan', value : 127352.833},
                {name : 'Kazakhstan', value : 15921.127},
                {name : 'Kenya', value : 40909.194},
                {name : 'Kyrgyzstan', value : 5334.223},
                {name : 'Cambodia', value : 14364.931},
                {name : 'South Korea', value : 51452.352},
                {name : 'Kosovo', value : 97.743},
                {name : 'Kuwait', value : 2991.58},
                {name : 'Laos', value : 6395.713},
                {name : 'Lebanon', value : 4341.092},
                {name : 'Liberia', value : 3957.99},
                {name : 'Libya', value : 6040.612},
                {name : 'Sri Lanka', value : 20758.779},
                {name : 'Lesotho', value : 2008.921},
                {name : 'Lithuania', value : 3068.457},
                {name : 'Luxembourg', value : 507.885},
                {name : 'Latvia', value : 2090.519},
                {name : 'Morocco', value : 31642.36},
                {name : 'Moldova', value : 103.619},
                {name : 'Madagascar', value : 21079.532},
                {name : 'Mexico', value : 117886.404},
                {name : 'Macedonia', value : 507.885},
                {name : 'Mali', value : 13985.961},
                {name : 'Myanmar', value : 51931.231},
                {name : 'Montenegro', value : 620.078},
                {name : 'Mongolia', value : 2712.738},
                {name : 'Mozambique', value : 23967.265},
                {name : 'Mauritania', value : 3609.42},
                {name : 'Malawi', value : 15013.694},
                {name : 'Malaysia', value : 28275.835},
                {name : 'Namibia', value : 2178.967},
                {name : 'New Caledonia', value : 246.379},
                {name : 'Niger', value : 15893.746},
                {name : 'Nigeria', value : 159707.78},
                {name : 'Nicaragua', value : 5822.209},
                {name : 'Netherlands', value : 16615.243},
                {name : 'Norway', value : 4891.251},
                {name : 'Nepal', value : 26846.016},
                {name : 'New Zealand', value : 4368.136},
                {name : 'Oman', value : 2802.768},
                {name : 'Pakistan', value : 173149.306},
                {name : 'Panama', value : 3678.128},
                {name : 'Peru', value : 29262.83},
                {name : 'Philippines', value : 93444.322},
                {name : 'Papua New Guinea', value : 6858.945},
                {name : 'Poland', value : 38198.754},
                {name : 'Puerto Rico', value : 3709.671},
                {name : 'North Korea', value : 1.468},
                {name : 'Portugal', value : 10589.792},
                {name : 'Paraguay', value : 6459.721},
                {name : 'Qatar', value : 1749.713},
                {name : 'Romania', value : 21861.476},
                {name : 'Russia', value : 21861.476},
                {name : 'Rwanda', value : 10836.732},
                {name : 'Western Sahara', value : 514.648},
                {name : 'Saudi Arabia', value : 27258.387},
                {name : 'Sudan', value : 35652.002},
                {name : 'South Sudan', value : 9940.929},
                {name : 'Senegal', value : 12950.564},
                {name : 'Solomon Islands', value : 526.447},
                {name : 'Sierra Leone', value : 5751.976},
                {name : 'El Salvador', value : 6218.195},
                {name : 'Somaliland', value : 9636.173},
                {name : 'Somalia', value : 9636.173},
                {name : 'Republic of Serbia', value : 3573.024},
                {name : 'Suriname', value : 524.96},
                {name : 'Slovakia', value : 5433.437},
                {name : 'Slovenia', value : 2054.232},
                {name : 'Sweden', value : 9382.297},
                {name : 'Swaziland', value : 1193.148},
                {name : 'Syria', value : 7830.534},
                {name : 'Chad', value : 11720.781},
                {name : 'Togo', value : 6306.014},
                {name : 'Thailand', value : 66402.316},
                {name : 'Tajikistan', value : 7627.326},
                {name : 'Turkmenistan', value : 5041.995},
                {name : 'East Timor', value : 10016.797},
                {name : 'Trinidad and Tobago', value : 1328.095},
                {name : 'Tunisia', value : 10631.83},
                {name : 'Turkey', value : 72137.546},
                {name : 'United Republic of Tanzania', value : 44973.33},
                {name : 'Uganda', value : 33987.213},
                {name : 'Ukraine', value : 46050.22},
                {name : 'Uruguay', value : 3371.982},
                {name : 'United States of America', value : 312247.116},
                {name : 'Uzbekistan', value : 27769.27},
                {name : 'Venezuela', value : 236.299},
                {name : 'Vietnam', value : 89047.397},
                {name : 'Vanuatu', value : 236.299},
                {name : 'West Bank', value : 13.565},
                {name : 'Yemen', value : 22763.008},
                {name : 'South Africa', value : 51452.352},
                {name : 'Zambia', value : 13216.985},
                {name : 'Zimbabwe', value : 13076.978}
            ]
        }
    ]
};

        myChart_ditu.setOption(option);
</script>

	   
</body>

</html>