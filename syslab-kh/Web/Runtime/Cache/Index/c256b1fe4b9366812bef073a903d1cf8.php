<?php if (!defined('THINK_PATH')) exit();?><html>  
<head> 
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"></meta>
    <meta name="keyword" content="syslab"></meta>
    <meta name="description" content="syslab"></meta>
    <meta name="author" content="严涵"></meta>
    <link href="/syslab-kh/Web/Tpl/Index/Public/css/jsdaima.css" media="screen" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="/syslab-kh/Web/Tpl/Index/Public/css/tab.css" />
    <script type="text/javascript" src="/syslab-kh/Web/Tpl/Index/Public/js/jquery-1.11.1.min.js"></script> 
    <script type="text/javascript" src="/syslab-kh/Web/Tpl/Index/Public/js/jsdaima.js"></script>
    <link rel="stylesheet" href="/syslab-kh/Web/Tpl/Index/Public/css/vertical.news.slider.css">
    <title>News</title>
    <style>
        body{
           margin:0 auto;

       }
       div {
           margin:0 auto;
       }
       .bj{
           width: 1600px;
           height: 900px;
           background:url(/syslab-kh/Web/Tpl/Index/Public/images/bj2.png);

       }


       .h1{
           position:relative;
           left:200px; /*左右位置*/ 
           top:40px
       }
       .h2{
           position:absolute;
           left:1200px; /*左右位置*/ 
           top:40px
       }
       .h3{
           position:absolute;
           left:500px; /*左右位置*/ 
           top:40px
       }
       .h4{
           position:absolute;
           left:600px; /*左右位置*/ 
           top:40px
       }
       .h5{
           position:absolute;
           left:700px; /*左右位置*/ 
           top:40px
       }
       .h6{
           position:absolute;
           left:800px; /*左右位置*/ 
           top:40px
       }
       .p{
           position:absolute;
           left:200px; /*左右位置*/ 
           top:40px;
           color:blue;
       }
       a{TEXT-DECORATION:none}a:hover{TEXT-DECORATION:underline}
       .bord{
           position:relative;
           left:500px; /*左右位置*/ 
           top:550px
       }
       .q{float:left;}
       #box3{padding:10px;width: 940px;height: 800px;position:relative;
         /*左右位置*/ 
         top:80px;
         color:blue}
         #box3{background:url(/syslab-kh/Web/Tpl/Index/Public/images/xinwen.png)}



     </style>

 </head>
 <body>
   <div class="bj">
      <div >
          <div class="top" >
             <div class="h1"><a href="<?php echo U('Index/Index/indextwo');?>" style="text-decoration:none"><p><font color=blue size=14>Syslab</font></p></a></div>
             <div >      
                <div class="h5"></div>
                <div> 
                    <div id="box3"  >

                        <div style="position:absolute;left:50px; /*左右位置*/ top:80px">
                            <div class="film_focus">
                                <div class="film_focus_desc">
                                    <h3>syslab</h3>
                                    <ul class="film_focus_nav">
                                        <?php if(is_array($data)): foreach($data as $key=>$v): ?><li class="cur"> <b><?php echo ($v["content"]); ?></b><span><?php echo ($v["title"]); ?></span></li>
             <!--    <li> <b><?php echo ($data2["content"]); ?></b><span><?php echo ($data2["title"]); ?></span> </li>
                <li> <b><?php echo ($data3["content"]); ?></b><span><?php echo ($data3["title"]); ?></span> </li>
                <li> <b><?php echo ($data4["content"]); ?></b><span><?php echo ($data4["title"]); ?></span> </li>
                <li> <b><?php echo ($data5["content"]); ?></b><span><?php echo ($data5["title"]); ?></span> </li> --><?php endforeach; endif; ?>
        </ul>
    </div>
    <div class="film_focus_imgs_wrap">
        <ul class="film_focus_imgs">

          <li><a target="_blank" href="<?php echo U('Index/Index/NewsManage/cpage?id=1');?>"><img  src="/syslab-kh/Web/Tpl/Index/Public/images/001.jpg" alt="<?php echo ($data1["title"]); ?>" /></a></li>
          <li><a target="_blank" href="<?php echo U('Index/Index/NewsManage/cpage?id=2');?>"><img  src="/syslab-kh/Web/Tpl/Index/Public/images/002.jpg" alt="<?php echo ($data2["title"]); ?>" /></a></li>
          <li><a target="_blank" href="<?php echo U('Index/Index/NewsManage/cpage?id=3');?>"><img  src="/syslab-kh/Web/Tpl/Index/Public/images/003.jpg" alt="<?php echo ($data3["title"]); ?>" /></a></li>
          <li><a target="_blank" href="<?php echo U('Index/Index/NewsManage/cpage?id=4');?>"><img  src="/syslab-kh/Web/Tpl/Index/Public/images/004.jpg" alt="<?php echo ($data4["title"]); ?>" /></a></li>
          <li><a target="_blank" href="<?php echo U('Index/Index/NewsManage/cpage?id=5');?>"><img  src="/syslab-kh/Web/Tpl/Index/Public/images/005.jpg" alt="<?php echo ($data5["title"]); ?>" /></a></li>

      </ul>
  </div>
</div>
<!--焦点图END--> 
<script type="text/javascript">
    $(function(){
      $(".film_focus").th_video_focus({
        navContainerClass:".film_focus_nav",
        focusContainerClass:".film_focus_imgs",
        delayTime:3000
    });
  }); 
</script>
</div>
<div>
  <div id="tab" style="margin-top:450px;right:80px">
    <h3 class="up" id="two1" onmouseover="setContentTab('two',1,4)"><a>新闻动态</h3>
    <div class="block" id="con_two_1">
        <ul >
            <li><a class="tab_title" href="<?php echo U('Index/Index/NewsManage/cpage?id=1');?>"><?php echo ($data1["title"]); ?></a><span><?php echo ($data1["time"]); ?></span></li>
            <li><a class="tab_title" href="<?php echo U('Index/Index/NewsManage/cpage?id=2');?>"><?php echo ($data2["title"]); ?></a><span><?php echo ($data2["time"]); ?></span></li>
            <li><a class="tab_title" href="<?php echo U('Index/Index/NewsManage/cpage?id=3');?>"><?php echo ($data3["title"]); ?></a><span><?php echo ($data3["time"]); ?></span></li>
            <li><a class="tab_title" href="<?php echo U('Index/Index/NewsManage/cpage?id=4');?>"><?php echo ($data4["title"]); ?></a><span><?php echo ($data4["time"]); ?></span></li>

        </ul>

    </div>
    <h3 id="two2" onmouseover="setContentTab('two',2,4)"><a>项目发布</a></h3>
    <div id="con_two_2">
        <ul >

            <li><font color="black"><a class="tab_title" href="<?php echo U('Index/Index/NewsManage/pro?id=1');?>"><?php echo ($p1["name"]); ?></a><span><?php echo ($p1["time"]); ?></span></font></li>
            <li><a class="tab_title" href="<?php echo U('Index/Index/NewsManage/pro?id=2');?>"><?php echo ($p2["name"]); ?></a><span><?php echo ($p2["time"]); ?></span></li>
            <li><a class="tab_title" href="<?php echo U('Index/Index/NewsManage/pro?id=3');?>"><?php echo ($p3["name"]); ?></a><span><?php echo ($p3["time"]); ?></span></li>
            <li><a class="tab_title" href="<?php echo U('Index/Index/NewsManage/pro?id=4');?>"><?php echo ($p4["name"]); ?></a><span><?php echo ($p4["time"]); ?></span></li>

        </ul>
    </div>
    <h3 id="two3" onmouseover="setContentTab('two',3,4)"><a href="<?php echo U('Index/NewsManage/show');?>">成果展示</a></h3>
    <div id="con_two_3">
       
    </div>
    <h3 id="two4" onmouseover="setContentTab('two',4,4)"><a href="<?php echo U('Index/Index/NewsManage/remark');?>">评论交流</h3>
    <div id="con_two_4">
        <ul >
            <?php if(is_array($content)): foreach($content as $key=>$v): ?><li style="color:black;background:;float:left;width:300px;white-space:nowrap;overflow: hidden;"><?php echo ($v["content"]); ?></li><li><span><?php echo ($v["time"]); ?></span></li>
               <!--  <li><a class="tab_title" href="#">评论交流2</a><span>2015-03-28</span></li>
                <li><a class="tab_title" href="#">评论交流3</a><span>2015-03-28</span></li>
                <li><a class="tab_title" href="#">评论交流4</a><span>2015-03-28</span></li> --><?php endforeach; endif; ?>

        </ul>

    </div>
</div>

<script type="text/javascript">
   function setContentTab(name, curr, n) {
    for (i = 1; i <= n; i++) {
        var menu = document.getElementById(name + i);
        var cont = document.getElementById("con_" + name + "_" + i);
        menu.className = i == curr ? "up" : "";
        if (i == curr) {
            cont.style.display = "block";
        } else {
            cont.style.display = "none";
        }
    }
}
</script>
</div>
</div>
</div>           
</div>       			
</div>
</div>
</div>     
</div>
</body>  
</html>