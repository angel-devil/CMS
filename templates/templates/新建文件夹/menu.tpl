<!DOCTYPE html>
<html>
<meta charset="utf8">
<head>
{assign var="navid" value=5}
<script src="./jquery-2.1.4.min.js">
</script>
<script>

function myFunction(navid)
{
// alert(navid);

temp = navid;
navid = temp + 1;
// alert(navid);

$("#temp").append("<p id=navid>navid</p>");
}

$(document).ready(function(){
function myFunction(navid)
{
// alert(navid);
navid=navid+1;
alert(navid);

// $("#navid").append("<p id=navid>navid</p>");
}

  // $("#btn1").click(function(){
  //   $("#{$navid}").append("<p id={$navid}>{$navid}</p>");

  // });

  $("#btn2").click(function(){
    $("ol").append("<li>Appended item</li>");
  });
});
</script>
</head>

<body>
<p id={$navid}>{$navid}</p>
<ol>
<li>List item 1</li>
<li>List item 2</li>
<li>List item 3</li>
</ol>

<button id="btn1" onclick="myFunction(6)">追加文本</button>
<button id="btn2">追加列表项</button>

</body>
</html>
