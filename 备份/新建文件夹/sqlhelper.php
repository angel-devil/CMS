<?php  

   class sqlhelper{
   	  
   	  public $conn;
   	  public $host;      //服务器名	        
   	  public $username;  //用户名
   	  public $password;  //密码
   	  public $dbname;    //数据库名  
   	  
   	  //建立连接数据库
   	  public function __construct(){
   	     $file = fopen("./cache.php","r");//打开文件
         while(!feof($file))//当文件不结束
         {
           $line=fgets($file);  //读文本文件一行
           list($this->host,$this->username,$this->password,$this->dbname)=explode(" ",$line);
         }
         
   	  	 $this->conn=mysql_connect($this->host,$this->username,$this->password);
   	  	 if (!$this->conn){
   	  	 	die("连接失败".mysql_errno());
   	  	 }
   	  	 mysql_query("set names utf8",$this->conn);
   	  	 mysql_select_db($this->dbname,$this->conn); //选择数据库
   	  } 
   	  public function abcd(){
   	  	   echo $this->host." ".$this->username." ".$this->password." ".$this->dbname;	  
   	  }
 	  
   	  //执行sql语句
   	  public function execute_sql($sql){
   	  	 $res=mysql_query($sql,$this->conn);
   	  	 return $res;
   	  }
      
   	  //创建新数据库dbname
      public function create_db(){
          $sql = "CREATE DATABASE $this->dbname CHARACTER SET utf8";
          $this->execute_sql($sql);
   	  }
   	  //新建表
   	  public  function create_table(){
		  //管理员表
   	  	  $sql="create table user_table
   	  	  (
   	  	  username varchar(16) primary key not null,
   	  	  password varchar(64) not null
   	  	  )"; echo $sql; 
   	  	  $this->execute_sql($sql);
   	  	  
		  //导航栏表
   	  	  $sql="create table nav_table(
           navid  int primary key not null,
           navname  varchar(32) not null,
           navsort int not null
           )"; echo $sql; 
   	  	  $this->execute_sql($sql);
   	  	  
		  //子菜单表
   	  	  $sql="create table sub_table(
           subid int primary key not null,
           subname varchar(20) not null,
           subsort int not null,
           navid int not null,
           foreign key (navid) references nav_table(navid)
           )";
 echo $sql; 
   	  	  $this->execute_sql($sql);
   	  	  
		  //新闻内容表
   	  	  $sql="create table article_table(
          id int primary key,
          title varchar(50),
          subid int,
          foreign key(subid) references sub_table(subid) 
          )";   	  	
          echo $sql;  
   	  	  $this->execute_sql($sql);    	  	  
   	  }
   	  
   	  //导航栏_增
   	  public function insert_nav($navid,$navname,$navsort){
   	  	 $sql="INSERT INTO nav_table (navid,navname,navsort) VALUES ('$navid','$navname','$navsort')";
   	  	 $this->execute_sql($sql);
   	  }
   	  
   	  //子菜单栏_增
   	  public function insert_sub($subid,$subname,$subsort,$navid){
   	  	 $sql="INSERT INTO sub_table($subid,$subname,$subsort,$navid) VALUES ('$subid','$subname','$subsort','$navid')";
   	  	 $this->execute_sql($sql);
   	  }
   	  
	  //管理员_增
      public function insert_user($username,$password){
   	  	 $sql="INSERT INTO user_table (username,password) VALUES ('$username','$password')";
         // echo $sql;
   	  	 $this->execute_sql($sql);
   	  }
   	  
	  //新闻内容_增
      public function insert_sec($id,$subid,$title,$body,$releasedate,$pic1,$pic2,$pic3,$pic4,$pic5){
   	  	 $sql="INSERT INTO sub_table($subid,$subname,$subsort,$navid) VALUES 
   	  	 ('$id','$subid','$title','$body','$releasedate','$pic1','$pic2','$pic3','$pic4','$pic5')";
   	  	 $this->execute_sql($sql);
   	  }
   	  
   	  //查询表数据
   	  public function select_nav($sql) {
   	  	 $arr=array();
   	  	 $res=mysql_query($sql);  	  	 
   	  	 while($row=mysql_fetch_assoc($res)){
   	  	 	$arr[]=$row;
   	  	 }
         // echo $sql;
         // print_r($arr);
   	  	 return $arr;
   	  }  	  
   	  
   	  //关闭连接
   	  public function close_connect(){
   	  	 if (!empty($this->conn)){
   	  	 	mysql_free_result($this->conn);
   	  	 }
   	  }  	  
   }
   
   class data_save{
      //数据保存到本地文件
   	  public function data_save($host,$username,$password,$dbname){
   	  	    $arr=$host." ".$username." ".$password." ".$dbname;
            file_put_contents("./cache.php",$arr); 
   	  }
   }
?>