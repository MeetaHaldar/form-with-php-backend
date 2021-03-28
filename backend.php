<?php
include('includes/config.php');
if(isset($_POST['signup'])){
 $name =$_POST['name'];
 $birthday =$_POST['birthday'];
 $Gender =$_POST['gender'];
 $Email =$_POST['email'];
 $Phone =$_POST['phone'];
 $Password =$_POST['password'];

 $sql="Insert into people (Name,Email,Birthdate,Password,Phone,Gender) values ((:name),(:Email),(:birthday),(:Password),(:Phone) ,(:Gender));";
 $query = $dbh->prepare($sql);
 $query-> bindParam(':name', $name, PDO::PARAM_STR);
 $query-> bindParam(':Email', $Email, PDO::PARAM_STR);
 $query-> bindParam(':birthday', $birthday, PDO::PARAM_STR);
 $query-> bindParam(':Password', $Password, PDO::PARAM_STR);
 $query-> bindParam(':Phone', $Phone, PDO::PARAM_STR);
 $query-> bindParam(':Gender', $Gender, PDO::PARAM_STR);
 if($query->execute()){
	 header('location:login.html');
}
}
if(isset($_POST['login'])){
	 $email =$_POST['email'];
 $password =$_POST['password'];
 
 $sql1="select * from people where Email=(:email) and Password=(:password)";
 $query1 = $dbh->prepare($sql1);
 $query1-> bindParam(':email', $email, PDO::PARAM_STR);
 $query1-> bindParam(':password', $password, PDO::PARAM_STR);
 $query1->execute();
 $results1=$query1->fetch(PDO::FETCH_OBJ);
if($query1->rowCount() > 0)
 {
	 header('location:welcomepage.php?email='.$results1->Email.'&name='.$results1->Name.'');
 }else{
	 header('location:index.html');
}
    
}
?>