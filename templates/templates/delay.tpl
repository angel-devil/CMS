    <html> 
    <head> 
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
    <title>等待跳转</title> 
    </head> 
    <body> 
    <script type="text/javascript"> 
    var t={$delaytime};//设定跳转的时间 
    setInterval("refer()",1000); //启动1秒定时 
    function refer(){  
        if(t==0 || t==-{$delaytime}){ 
            location="login.php"; //#设定跳转的链接地址 
        } 
        document.getElementById('show').innerHTML=""+t+"秒后跳转"; // 显示倒计时 
        t--; // 计数器递减 
        //本文转自： 
    } 
    </script> 
    <span id="show"></span> 
    </body> 
    </html> 