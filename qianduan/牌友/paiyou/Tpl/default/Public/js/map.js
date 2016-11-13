var map = new BMap.Map('allmap');
var poi = new BMap.Point(118.674362,32.08588);
map.centerAndZoom(poi, 16);
map.enableScrollWheelZoom();

map.addControl(new BMap.NavigationControl());               // 添加平移缩放控件
map.addControl(new BMap.ScaleControl());                    // 添加比例尺控件
map.addControl(new BMap.OverviewMapControl());              //添加缩略地图控件
map.enableScrollWheelZoom();                            //启用滚轮放大缩小
map.addControl(new BMap.MapTypeControl());          //添加地图类型控件
map.disable3DBuilding();

var content = '<div style="margin:0;line-height:20px;padding:2px;">' +
    '地址：南京市浦口区工大科技园<br/>电话：400-616-7008<br/>简介：南京锐谷节能科技有限公司' +
    '</div>';

//创建检索信息窗口对象
var searchInfoWindow = null;
searchInfoWindow = new BMapLib.SearchInfoWindow(map, content, {
    title  : "南京锐谷节能科技有限公司",      //标题
    width  : 290,             //宽度
    height : 70,              //高度
    panel  : "panel",         //检索结果面板
    enableAutoPan : true,     //自动平移
    searchTypes   :[
        BMAPLIB_TAB_SEARCH,   //周边检索
        BMAPLIB_TAB_TO_HERE,  //到这里去
        BMAPLIB_TAB_FROM_HERE //从这里出发
    ]
});
var marker = new BMap.Marker(poi); //创建marker对象
marker.enableDragging(); //marker可拖拽
searchInfoWindow.open(marker);//调用检索信息的方法
map.addOverlay(marker); //在地图中添加marker


//代码使用如下,即可. 模板页可以查看http://developer.baidu.com/map/custom/list.htm
//设置地图颜色模式map.setMapStyle({style:'light'});
// map.setMapStyle({style:'light'});