
<div id="myCarousel" class="carousel slide">
   <!-- 轮播（Carousel）指标 -->
   <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
   </ol> 
   <!-- 轮播（Carousel）项目 -->
      <div class="carousel-inner"  align='center'>
         {foreach $array2 as $sub}
       <div class="item {if $sub.id eq 1}active{/if}">
         <img  height="300" width="300" src="{$sub.pic1}" alt={if $sub.id eq 1 }"First slide"{/if}{if $sub.id eq 2 }"Second slide"{/if}{if $sub.id eq 3 }"Third slide"{/if}{if $sub.id eq 4 }"Fourth slide"{/if}>
          <div class="carousel-caption">标题 {$sub.id}</div> 
      </div>
      {/foreach}
    </div>   
                       
   <!-- 轮播（Carousel）导航 -->
   <a class="carousel-control left" href="#myCarousel" 
      data-slide="prev">&lsaquo;</a>
   <a class="carousel-control right" href="#myCarousel" 
      data-slide="next">&rsaquo;</a>
</div> 

