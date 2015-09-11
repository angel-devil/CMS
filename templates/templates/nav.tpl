<!DOCTYPE html>
<html>
   <meta charset="utf8">
   <head>
      <title>首页</title>
      <link rel="stylesheet" href="./bootstrap-3.3.5-dist/css/bootstrap.min.css">
      <script src="./jquery-2.1.4.min.js"></script>
      <script src="./bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>
   </head>
   <body>
      <ul class="nav nav-pills">
      {if $logined eq 'true'}<li class="active"><a href="admin.php">管理中心</a></li>{/if}
         <li class="active"><a href="index.php">首页</a></li>
         {foreach $navarray as $nav}
         <li class="dropdown" >
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">{$nav.navname}
               <span class="caret"></span>
            </a>
            <ul  class="dropdown-menu" >
               {foreach $subarray as $sub}
               {if $sub.navid  eq  $nav.navid}
               <li ><a href="article.php?subid={$sub.subid}">{$sub.subname}</a></li>
               {/if}
                        {/foreach}
            </ul>
         </li>
         {/foreach}
         
      </ul>

   </body>
</html>