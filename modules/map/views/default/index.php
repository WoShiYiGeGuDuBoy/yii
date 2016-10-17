<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Hello, World</title>
    <style type="text/css">
        html{height:100%}
        body{height:100%;margin:0px;padding:0px}
        #container{height:100%}
    </style>
    <script type="text/javascript" src="http://api.map.baidu.com/api?key=&v=1.1&services=true"></script>

<!--    <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=您的密钥">-->
<!--        //v2.0版本的引用方式：src="http://api.map.baidu.com/api?v=2.0&ak=您的密钥"-->
<!--    </script>-->
</head>

<body>
<div id="container"></div>
<script type="text/javascript">

    // 定义一个控件类，即function
    function ZoomControl(){
        // 设置默认停靠位置和偏移量
        this.defaultAnchor = BMAP_ANCHOR_TOP_LEFT;
        this.defaultOffset = new BMap.Size(100, 10);
    }
    // 通过JavaScript的prototype属性继承于BMap.Control
    ZoomControl.prototype = new BMap.Control();
    // 自定义控件必须实现initialize方法，并且将控件的DOM元素返回
    // 在本方法中创建个div元素作为控件的容器，并将其添加到地图容器中
    ZoomControl.prototype.initialize = function(map){
        // 创建一个DOM元素
        var div = document.createElement("div");
        // 添加文字说明
        div.appendChild(document.createTextNode("放大2级"));
        // 设置样式
        div.style.cursor = "pointer";
        div.style.border = "1px solid gray";
        div.style.backgroundColor = "white";
        // 绑定事件，点击一次放大两级
        div.onclick = function(e){
            map.zoomTo(map.getZoom() + 2);
        };
        // 添加DOM元素到地图中
        map.getContainer().appendChild(div);
        // 将DOM元素返回
        return div;
    };

    // 创建控件实例
    var myZoomCtrl = new ZoomControl();

    var map = new BMap.Map("container");          // 创建地图实例
    var shangHaiPoint = new BMap.Point(121.4802370000,31.2363050000);
    var beiJingPoint = new BMap.Point(116.404, 39.915);  // 创建点坐标
    map.centerAndZoom(beiJingPoint, 15);                 // 初始化地图，设置中心点坐标和地图级别
    map.addControl(new BMap.NavigationControl()); //添加基本控件

    var opts = {offset: new BMap.Size(10, 30)};
    map.addControl(new BMap.ScaleControl(opts));//左下角比例尺
    map.addControl(myZoomCtrl);
    map.addControl(new BMap.OverviewMapControl());//右下角小地图


    map.addControl(new BMap.MapTypeControl());
    var myIcon = new BMap.Icon("http://img.mukewang.com/545847c10001f40702200220-100-100.jpg", new BMap.Size(110, 110), {
        // 指定定位位置。
        // 当标注显示在地图上时，其所指向的地理位置距离图标左上
        // 角各偏移10像素和25像素。您可以看到在本例中该位置即是
        // 图标中央下端的尖角位置。
        offset: new BMap.Size(0, 0),
        // 设置图片偏移。
        // 当您需要从一幅较大的图片中截取某部分作为标注图标时，您
        // 需要指定大图的偏移位置，此做法与css sprites技术类似。
        imageOffset: new BMap.Size(0, 0)   // 设置图片偏移
    });
    var marker = new BMap.Marker(shangHaiPoint,{icon:myIcon});        // 创建标注
    map.addOverlay(marker);                     // 将标注添加到地图中
    marker.addEventListener("click", function(){
        alert("您点击了蓝猫");
    });

    window.setTimeout(function(){
        alert('现在是北京,我要去上海');

        map.panTo(shangHaiPoint);
        map.setCurrentCity("上海"); // 仅当设置城市信息时，MapTypeControl的切换功能才能可用

    }, 2000);
</script>
</body>
</html>