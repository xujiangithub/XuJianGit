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
	</head>
	<body>
		
		<div id="alldiv"><img src="img/map5.jpg" /></div> 
		
		
		<div class="container-fluid">
       		<div class="row">
	       		<div class="col-md-12" style="text-align:center; color:white;"><h1>诸暨市农村电子商务发展状况</h1></div>
	       		<div class="col-md-4">
	       			<p><span class="col-md-9">电子商务园区数量:</span><span class="col-md-3">10个</span></p>
	       			<div style="height: 20px;"></div>
	       			<p><span class="col-md-9">涉电商企业:</span><span class="col-md-3">20个</span></p>
	       			<div style="height: 20px;"></div>
	       			<p><span class="col-md-9">淘宝付款:</span><span class="col-md-3">12个</span></p>
	       			<div style="height: 20px;"></div>
	       			<p><span class="col-md-9">自建品牌数:</span><span class="col-md-3">2个</span></p>
	       			<div style="height: 20px;"></div>
	       			<div id="cuntao"class="col-md-12"></div>
	       			<div id="wangxiao"class="col-md-12"></div>
	       		</div>
	       		<div class="col-md-4">
                    <div id="CurrentTime" class="col-md-12" style="text-align:center; color:white;"></div>
	       			<div id="main" class="col-md-12"></div>
	       		</div>
	       		<div class="col-md-4">

                    <div class="col-md-12"><h4>村淘点业务量排行（上行、下行）</h4></div>
                    <p><span class="col-md-2">排名</span><span class="col-md-2">站点名</span><span class="col-md-3">上行量</span><span class="col-md-3">下行量</span><span class="col-md-2">站点名</span></p>

                    <?php for ($i=1;$i<=5;$i++):?>
                    <p><span class="col-md-2">No.<?php echo $i; ?></span><span class="col-md-2">454254</span><span class="col-md-3">5345524</span><span class="col-md-3">142522</span><span class="col-md-2">142522</span></p>
                    <?php endfor; ?>

                    <div class="col-md-12" style="height:80px"></div>
                    <div id="nongxiao" class="col-md-12"></div>
                    <div class="col-md-12" style="height:80px"></div>
                    

                    <div class="col-md-12" style="text-align:center;"><h4>诸暨市店铺销量排行</h4></div>
                    <p><span class="col-md-2">排名</span><span class="col-md-3">公司名称</span><span class="col-md-4">单量（万单）</span><span class="col-md-3">所属乡镇</span></p>

                    <?php for ($i=1;$i<=5;$i++):?>
                    <p><span class="col-md-2">No.<?php echo $i; ?></span><span class="col-md-3">454254</span><span class="col-md-4">5345524</span><span class="col-md-3">142522</span></p>
                    <?php endfor; ?>
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
        data: ['一', '二', '三', '四', '五', '六', '七', '八', '九']
    },
    grid: {
        left: '3%',
        right: '4%',
        bottom: '3%',
        containLabel: true
    },
    yAxis: {
        type: 'log',
        name: 'y'
    },
    series: [
        {
            name: '3的指数',
            type: 'line',
            data: [56, 23, 33, 81, 50, 74, 22, 66, 48, 12, 98]
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
        boundaryGap: [0, 0.01]
    },
    yAxis: {
        type: 'category',
        data: ['巴西','印尼','美国','印度','中国']
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
