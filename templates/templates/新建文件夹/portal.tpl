<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"#"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="css/main.css" />
<title>门户网站</title>
</head>
<body id="homepage">
<div id="wrap">
  <div id="main_nav">
    <ul>

    {foreach $navarray as $nav}       
      <li><a href="#">{$nav.navname}</a>
      <ul>
        {foreach $subarray as $sub}
          {if $sub.navid  eq  $nav.navid}
            <li><a href="#">{$sub.subname}</a></li>
          {/if}
        {/foreach}
      </ul>
      </li>
    {/foreach}


    </ul>   
  </div>
  <div class="clear"></div>
</div><!--end of header-->  
<script type="text/javascript" src="javascript/jquery.js"></script>
<script type="text/javascript" src="javascript/main.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('#main_nav').allenMenu();
    });
  </script>
<!--end of wrap-->
<div style="text-align:center;">

</div>
</body>
</html>
