<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
		<link rel="stylesheet" href="css/myfirst.css" />
		
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<script type="text/javascript" src="js/jquery-3.1.1.min.js" ></script>
		<script type="text/javascript" src="js/bootstrap.min.js" ></script>
		<script type="text/javascript" src="js/echarts.js" ></script>
		<script type="text/javascript" src="js/china.js" ></script>
</head>

<body >
    <!-- 设置网页背景图片 -->
       <div id="alldiv"><img src="img/map5.jpg" /></div> 
       
       <div style="width:100%; text-align:center; color:white;"><h1>诸暨市电子商务交易数据分析</h1></div>
       <div style="width:100%; text-align:center; color:white;"><div id="CurrentTime"></div></div>

        <div class="container-fluid">
       		<div class="row">
                <div class="col-md-7" style="text-align:center;">
                    <div class="col-md-12"><div id="ditu"></div></div>
                </div>
                <div class="col-md-1">
                    <div style="height:100px"></div>
                    <p><span class="col-md-12">今日交易额/元</span></p>
                    <p><span class="col-md-12">888888888</span></p>
                    <p><span class="col-md-12">昨日交易额/元</span></p>
                    <p><span class="col-md-12">3456789</span></p>
                </div>
       			<div class="col-md-4">
       				<div id="youshangjiao" class="col-md-12"></div>
       				<div id="huanxingtu" class="col-md-12"></div>
       			</div>
       			<div class="col-md-4">
       				<div id="zuoxiajiao" class="col-md-12"></div>
       			</div>
       			<div class="col-md-4">
                    <div class="col-md-12"><h4>热销产品排行榜</h4></div>
                    <p><span class="col-md-2">排名</span><span class="col-md-4">商品名称</span><span class="col-md-3">店铺名称</span><span class="col-md-3">所属乡镇</span></p>

                    <div class="col-md-12">
                    <?php for ($i=1;$i<=5;$i++):?>
                    <p><span class="col-md-2">No.<?php echo $i; ?></span><span class="col-md-4">454254</span><span class="col-md-3">5345524</span><span class="col-md-3">142522</span></p>
                    <?php endfor; ?>
                    </div>
       			</div>
       			<div class="col-md-4">
       				<div id="hengxiangtu" ></div>
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
        var myChart = echarts.init(document.getElementById('ditu'));
var geoCoordMap = {
    '上海': [121.4648,31.2891],
    '东莞': [113.8953,22.901],
    '东营': [118.7073,37.5513],
    '中山': [113.4229,22.478],
    '临汾': [111.4783,36.1615],
    '临沂': [118.3118,35.2936],
    '丹东': [124.541,40.4242],
    '丽水': [119.5642,28.1854],
    '乌鲁木齐': [87.9236,43.5883],
    '佛山': [112.8955,23.1097],
    '保定': [115.0488,39.0948],
    '兰州': [103.5901,36.3043],
    '包头': [110.3467,41.4899],
    '北京': [116.4551,40.2539],
    '北海': [109.314,21.6211],
    '南京': [118.8062,31.9208],
    '南宁': [108.479,23.1152],
    '南昌': [116.0046,28.6633],
    '南通': [121.1023,32.1625],
    '厦门': [118.1689,24.6478],
    '台州': [121.1353,28.6688],
    '合肥': [117.29,32.0581],
    '呼和浩特': [111.4124,40.4901],
    '咸阳': [108.4131,34.8706],
    '哈尔滨': [127.9688,45.368],
    '唐山': [118.4766,39.6826],
    '嘉兴': [120.9155,30.6354],
    '大同': [113.7854,39.8035],
    '大连': [122.2229,39.4409],
    '天津': [117.4219,39.4189],
    '太原': [112.3352,37.9413],
    '威海': [121.9482,37.1393],
    '宁波': [121.5967,29.6466],
    '宝鸡': [107.1826,34.3433],
    '宿迁': [118.5535,33.7775],
    '常州': [119.4543,31.5582],
    '广州': [113.5107,23.2196],
    '廊坊': [116.521,39.0509],
    '延安': [109.1052,36.4252],
    '张家口': [115.1477,40.8527],
    '徐州': [117.5208,34.3268],
    '德州': [116.6858,37.2107],
    '惠州': [114.6204,23.1647],
    '成都': [103.9526,30.7617],
    '扬州': [119.4653,32.8162],
    '承德': [117.5757,41.4075],
    '拉萨': [91.1865,30.1465],
    '无锡': [120.3442,31.5527],
    '日照': [119.2786,35.5023],
    '昆明': [102.9199,25.4663],
    '杭州': [119.5313,29.8773],
    '枣庄': [117.323,34.8926],
    '柳州': [109.3799,24.9774],
    '株洲': [113.5327,27.0319],
    '武汉': [114.3896,30.6628],
    '汕头': [117.1692,23.3405],
    '江门': [112.6318,22.1484],
    '沈阳': [123.1238,42.1216],
    '沧州': [116.8286,38.2104],
    '河源': [114.917,23.9722],
    '泉州': [118.3228,25.1147],
    '泰安': [117.0264,36.0516],
    '泰州': [120.0586,32.5525],
    '济南': [117.1582,36.8701],
    '济宁': [116.8286,35.3375],
    '海口': [110.3893,19.8516],
    '淄博': [118.0371,36.6064],
    '淮安': [118.927,33.4039],
    '深圳': [114.5435,22.5439],
    '清远': [112.9175,24.3292],
    '温州': [120.498,27.8119],
    '渭南': [109.7864,35.0299],
    '湖州': [119.8608,30.7782],
    '湘潭': [112.5439,27.7075],
    '滨州': [117.8174,37.4963],
    '潍坊': [119.0918,36.524],
    '烟台': [120.7397,37.5128],
    '玉溪': [101.9312,23.8898],
    '珠海': [113.7305,22.1155],
    '盐城': [120.2234,33.5577],
    '盘锦': [121.9482,41.0449],
    '石家庄': [114.4995,38.1006],
    '福州': [119.4543,25.9222],
    '秦皇岛': [119.2126,40.0232],
    '绍兴': [120.564,29.7565],
    '聊城': [115.9167,36.4032],
    '肇庆': [112.1265,23.5822],
    '舟山': [122.2559,30.2234],
    '苏州': [120.6519,31.3989],
    '莱芜': [117.6526,36.2714],
    '菏泽': [115.6201,35.2057],
    '营口': [122.4316,40.4297],
    '葫芦岛': [120.1575,40.578],
    '衡水': [115.8838,37.7161],
    '衢州': [118.6853,28.8666],
    '西宁': [101.4038,36.8207],
    '西安': [109.1162,34.2004],
    '贵阳': [106.6992,26.7682],
    '连云港': [119.1248,34.552],
    '邢台': [114.8071,37.2821],
    '邯郸': [114.4775,36.535],
    '郑州': [113.4668,34.6234],
    '鄂尔多斯': [108.9734,39.2487],
    '重庆': [107.7539,30.1904],
    '金华': [120.0037,29.1028],
    '铜川': [109.0393,35.1947],
    '银川': [106.3586,38.1775],
    '镇江': [119.4763,31.9702],
    '长春': [125.8154,44.2584],
    '长沙': [113.0823,28.2568],
    '长治': [112.8625,36.4746],
    '阳泉': [113.4778,38.0951],
    '青岛': [120.4651,36.3373],
    '韶关': [113.7964,24.7028],
    '诸暨': [120.23,29.71]
};

var BJData = [
    [{name:'诸暨'}, {name:'上海',value:10}],
    [{name:'诸暨'}, {name:'广州',value:10}],
    [{name:'诸暨'}, {name:'大连',value:60}],
    [{name:'诸暨'}, {name:'南宁',value:40}],
    [{name:'诸暨'}, {name:'南昌',value:10}],
    [{name:'诸暨'}, {name:'拉萨',value:80}],
    [{name:'诸暨'}, {name:'长春',value:50}],
    [{name:'诸暨'}, {name:'包头',value:90}],
    [{name:'诸暨'}, {name:'重庆',value:50}],
    [{name:'诸暨'}, {name:'常州',value:10}]
];

var planePath = 'path://M1705.06,1318.313v-89.254l-319.9-221.799l0.073-208.063c0.521-84.662-26.629-121.796-63.961-121.491c-37.332-0.305-64.482,36.829-63.961,121.491l0.073,208.063l-319.9,221.799v89.254l330.343-157.288l12.238,241.308l-134.449,92.931l0.531,42.034l175.125-42.917l175.125,42.917l0.531-42.034l-134.449-92.931l12.238-241.308L1705.06,1318.313z';

var convertData = function (data) {
    var res = [];
    for (var i = 0; i < data.length; i++) {
        var dataItem = data[i];
        var fromCoord = geoCoordMap[dataItem[0].name];
        var toCoord = geoCoordMap[dataItem[1].name];
        if (fromCoord && toCoord) {
            res.push({
                fromName: dataItem[0].name,
                toName: dataItem[1].name,
                coords: [fromCoord, toCoord]
            });
        }
    }
    return res;
};

var color = ['#a6c84c', '#ffa022', '#46bee9'];
var series = [];
[['诸暨', BJData]].forEach(function (item, i) {
    series.push({
        name: item[0] + ' Top10',
        type: 'lines',
        zlevel: 1,
        effect: {
            show: true,
            period: 6,
            trailLength: 0.7,
            color: '#7fff00',
            symbolSize: 4
        },
        lineStyle: {
            normal: {
                color: color[i],
                width: 0,
                curveness: 0.2
            }
        },
        data: convertData(item[1])
    },
    {
        name: item[0] + ' Top10',
        type: 'lines',
        zlevel: 2,
        effect: {
            show: true,
            period: 6,
            trailLength: 0,
            symbol: planePath,
            symbolSize: 30
        },
        lineStyle: {
            normal: {
                color: color[i],
                width: 4,
                opacity: 0.4,
                curveness: 0.2
            }
        },
        data: convertData(item[1])
    },
    {
        name: item[0] + ' Top10',
        type: 'effectScatter',
        coordinateSystem: 'geo',
        zlevel: 2,
        rippleEffect: {
            brushType: 'stroke'
        },
        label: {
            normal: {
                show: true,
                position: 'right',
                formatter: '{b}'
            }
        },
        symbolSize: function (val) {
            return val[2] / 4;
        },
        itemStyle: {
            normal: {
                color: '#000000'
            }
        },
        data: item[1].map(function (dataItem) {
            return {
                name: dataItem[1].name,
                value: geoCoordMap[dataItem[1].name].concat([dataItem[1].value])
            };
        })
    });
});

option = {
   // backgroundColor: '#404a59',
    title : {
        text: '年累计交易额：￥ 322222273',
        left: 'center',
        textStyle : {
            color: '#ffff00'
        }
    },
    tooltip : {
        trigger: 'item'
    },
    legend: {
        orient: 'vertical',
        top: 'bottom',
        left: 'right',
        data:['诸暨 Top10'],
        textStyle: {
            color: '#fff'
        },
        selectedMode: 'single'
    },
    geo: {
        map: 'china',
        label: {
            emphasis: {
                show: false
            }
        },
        roam: true,
        itemStyle: {
            normal: {
                areaColor: '#48D1CC',
                borderColor:'#030303',
                borderWidth:1,
            },
            emphasis: {
                areaColor: '#2a333d'
            }
        }
    },
    series: series
};
        // 使用刚指定的配置项和数据显示图表。
        myChart.setOption(option);
    </script>

    <script type="text/javascript">
        // 基于准备好的dom，初始化echarts实例
        var myChart = echarts.init(document.getElementById('youshangjiao'));

        // 指定图表的配置项和数据
        option = {
    tooltip : {
        trigger: 'axis',
        axisPointer : {            // 坐标轴指示器，坐标轴触发有效
            type : 'shadow'        // 默认为直线，可选为：'line' | 'shadow'
        }
    },
    legend: {
        data:['直接访问','邮件营销','联盟广告','视频广告','搜索引擎','百度','谷歌','必应','其他']
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
            data : ['周一','周二','周三','周四','周五','周六','周日']
        }
    ],
    yAxis : [
        {
            type : 'value'
        }
    ],
    series : [
        {
            name:'直接访问',
            type:'bar',
            data:[320, 332, 301, 334, 390, 330, 320]
        },
        {
            name:'搜索引擎',
            type:'bar',
            data:[862, 1018, 964, 1026, 1679, 1600, 1570],
            markLine : {
                lineStyle: {
                    normal: {
                        type: 'dashed'
                    }
                },
                data : [
                    [{type : 'min'}, {type : 'max'}]
                ]
            }
        }
    ]
};

        // 使用刚指定的配置项和数据显示图表。
        myChart.setOption(option);
    </script>

    <script type="text/javascript">
        // 基于准备好的dom，初始化echarts实例
        var myChart_huanxingtu = echarts.init(document.getElementById('huanxingtu'));

        // 指定图表的配置项和数据
        var option = {
        	tooltip: {
        trigger: 'item',
        formatter: "{a} <br/>{b}: {c} ({d}%)"
    },
    legend: {
        orient: 'vertical',
        x: 'left',
        data:[]
    },
    series: [
        {
            name:'访问来源',
            type:'pie',
            selectedMode: 'single',
            radius: [0, '30%'],

            label: {
                normal: {
                    position: 'inner'
                }
            },
            labelLine: {
                normal: {
                    show: false
                }
            },
            data:[]
        },
        {
            name:'访问来源',
            type:'pie',
            radius: ['40%', '55%'],

            data:[]
        }
    ]
        };

        // 使用刚指定的配置项和数据显示图表。
        myChart_huanxingtu .showLoading();
   		 var word=[];    //类别数组（实际用来盛放X轴坐标值）
         var wordrepeat=[];  
         var quality=[];    //销量数组（实际用来盛放Y坐标值）
         var sum;
           
         $.ajax({
         type : "GET",  
         async : true,            //异步请求（同步请求将会锁住浏览器，用户其他操作必须等待请求完成才可以执行）
         url : "http://data.cctongle.com/api/keyword?size=10",    //请求发送到
         data : {},
         dataType : "json",        //返回数据形式为json
         success : function(result) {
             //请求成功时执行该函数内容，result即为服务器返回的json对象
             if (result) {
             	wordrepeat.push('裤子');
                    for(var i=0;i<result.length;i++){   
                    	//alert(result[i].townname);
                    	//alert(result[i].quantity);
                       word.push(result[i].word);    //挨个取出类别并填入类别数组
                       wordrepeat.push(result[i].word);
                       quality.push(result[i].quality);  //挨个取出销量并填入销量数组
                       sum+=result[i].quality;
                    }
                    myChart_huanxingtu .hideLoading();    //隐藏加载动画
                    myChart_huanxingtu .setOption({        //加载数据图表
                    	tooltip: {
        trigger: 'item',
        formatter: "{a} <br/>{b}: {c} ({d}%)"
    },
    legend: {
        orient: 'vertical',
        x: 'left',
        data:wordrepeat
    },
    series: [
        {
            name:'访问来源',
            type:'pie',
            selectedMode: 'single',
            radius: [0, '30%'],

            label: {
                normal: {
                    position: 'inner'
                }
            },
            labelLine: {
                normal: {
                    show: false
                }
            },
            data:[
                {value:sum, name:'裤子'}
            ]
        },
        {
            name:'访问来源',
            type:'pie',
            radius: ['40%', '55%'],

			data: (function(){
					var res = [];
					var len = word.length;
					while (len--) {
					res.push({name: word[len],value: quality[len]});
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
         myChart_huanxingtu .hideLoading();
         }
    })
         myChart_huanxingtu .setOption(option);
    </script>

    <script type="text/javascript">
        // 基于准备好的dom，初始化echarts实例
        var myChart_hengxiangtu = echarts.init(document.getElementById('hengxiangtu'));

        // 指定图表的配置项和数据
option = {
    tooltip : {
        trigger: 'axis',
        axisPointer : {            // 坐标轴指示器，坐标轴触发有效
            type : 'shadow'        // 默认为直线，可选为：'line' | 'shadow'
        }
    },
    legend: {
        data: ['正在发送', '已发送','收货数']
    },
    grid: {
        left: '3%',
        right: '4%',
        bottom: '3%',
        containLabel: true
    },
    xAxis:  {
        type: 'value'
    },
    yAxis: {
        type: 'category',
        data: []
    },
    series: [
        {
            name: '正在发送',
            type: 'bar',
            stack: '总量',
            label: {
                normal: {
                    show: true,
                    position: 'insideRight'
                }
            },
            data: []
        },
        {
            name: '已发送',
            type: 'bar',
            stack: '总量',
            label: {
                normal: {
                    show: true,
                    position: 'insideRight'
                }
            },
            data: []
        },
        {
            name: '收货数',
            type: 'bar',
            stack: '总量',
            label: {
                normal: {
                    show: true,
                    position: 'insideRight'
                }
            },
            data: []
        }
    ]
};
		myChart_hengxiangtu.setOption(option);
         myChart_hengxiangtu.showLoading();
   		 var expressName=[];    //类别数组（实际用来盛放X轴坐标值）
         var sendingNumber=[];    //销量数组（实际用来盛放Y坐标值）
         var sendedNumber=[]; 
         var receivedNumber=[]; 
         $.ajax({
         type : "GET",  
         async : true,            //异步请求（同步请求将会锁住浏览器，用户其他操作必须等待请求完成才可以执行）
         url : "http://data.cctongle.com/api/logisticsdeliverystatistics",    //请求发送到
         data : {},
         dataType : "json",        //返回数据形式为json
         success : function(result) {
             //请求成功时执行该函数内容，result即为服务器返回的json对象
             if (result) {
                    for(var i=0;i<result.length;i++){   
                    	//alert(result[i].townname);
                    	//alert(result[i].quantity);
                       expressName.push(result[i].expressName);    
                       sendingNumber.push(result[i].sendingNumber);
                       sendedNumber.push(result[i].sendedNumber);
                       receivedNumber.push(result[i].receivedNumber);
                    }
                    myChart_hengxiangtu.hideLoading();    //隐藏加载动画
                    myChart_hengxiangtu.setOption({        //加载数据图表
                                tooltip : {
        trigger: 'axis',
        axisPointer : {            // 坐标轴指示器，坐标轴触发有效
            type : 'shadow'        // 默认为直线，可选为：'line' | 'shadow'
        }
    },
    legend: {
        data: ['正在发送', '已发送','收货数']
    },
    grid: {
        left: '3%',
        right: '4%',
        bottom: '3%',
        containLabel: true
    },
    xAxis:  {
        type: 'value'
    },
    yAxis: {
        type: 'category',
        data: expressName
    },
    series: [
        {
            name: '正在发送',
            type: 'bar',
            stack: '总量',
            label: {
                normal: {
                    show: true,
                    position: 'insideRight'
                }
            },
            data: sendingNumber
        },
        {
            name: '已发送',
            type: 'bar',
            stack: '总量',
            label: {
                normal: {
                    show: true,
                    position: 'insideRight'
                }
            },
            data: sendedNumber
        },
        {
            name: '收货数',
            type: 'bar',
            stack: '总量',
            label: {
                normal: {
                    show: true,
                    position: 'insideRight'
                }
            },
            data: receivedNumber
        }
    ]
                    });
                    
             }
         
        },
         error : function(errorMsg) {
             //请求失败时执行该函数
         alert("图表请求数据失败!");
         myChart_hengxiangtu.hideLoading();
         }
    })
    </script>

    <script type="text/javascript">
        // 基于准备好的dom，初始化echarts实例
        var myChart_zuoxiajiao = echarts.init(document.getElementById('zuoxiajiao'));

        // 指定图表的配置项和数据
        var option = {
            title: {
                text: 'ECharts'
            },
            tooltip: {},
            legend: {
                data:['销量']
            },
            xAxis: {
                data: []
            },
            yAxis: {},
            series: [{
                name: '销量',
                type: 'bar',
                data: []
            }]
        };

        // 使用刚指定的配置项和数据显示图表。
        myChart_zuoxiajiao .showLoading();
   		 var names=[];    //类别数组（实际用来盛放X轴坐标值）
         var nums=[];    //销量数组（实际用来盛放Y坐标值）
           
         $.ajax({
         type : "GET",  
         async : true,            //异步请求（同步请求将会锁住浏览器，用户其他操作必须等待请求完成才可以执行）
         url : "http://data.cctongle.com/api/toptentown?size=30",    //请求发送到
         data : {},
         dataType : "json",        //返回数据形式为json
         success : function(result) {
             //请求成功时执行该函数内容，result即为服务器返回的json对象
             if (result) {
                    for(var i=0;i<result.length;i++){   
                    	//alert(result[i].townname);
                    	//alert(result[i].quantity);
                       names.push(result[i].townname);    //挨个取出类别并填入类别数组
                       nums.push(result[i].quantity);  //挨个取出销量并填入销量数组
                    }
                    myChart_zuoxiajiao .hideLoading();    //隐藏加载动画
                    myChart_zuoxiajiao .setOption({        //加载数据图表
                        xAxis: {
                            data: names
                        },
                        series: [{
                            // 根据名字对应到相应的系列
                            name: '销量',
                            data: nums
                        }]
                    });
                    
             }
         
        },
         error : function(errorMsg) {
             //请求失败时执行该函数
         alert("图表请求数据失败!");
         myChart_zuoxiajiao .hideLoading();
         }
    })
         myChart_zuoxiajiao .setOption(option);
    </script>
    
</body>
</html>