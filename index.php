<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style> 
@import url('https://fonts.googleapis.com/css?family=Titillium+Web'); 
</style>
<style>
body {
    font: 15px ;
    color: #0ED095;
    text-align: center;
    padding: 35px;
    background-color:#03192A;
    font-family: 'Titillium Web', sans-serif;
}

form,p,span {
    margin: 0;
    padding: 0;
}

input {
    font: 17px arial;
}

a {
    color: #0BCBD7;
    text-decoration: none;
}

a:hover {
    text-decoration: underline;
}

#wrapper,#loginform {
    margin: 0 auto;
    padding-bottom: 25px;
    background: #1e2b35;
    width: 100%;
    border: 1px solid #142e3d;
}
#chatbox {
    text-align: left;
    margin: 0 auto;
    margin-bottom: 25px;
    padding: 10px;
    background: #494949;
    height: 270px;
    width: 95%;
    border: 1px solid #0AC875;
    overflow: auto;
}
#ae 
    {
    box-sizing: border-box;
     width: 70%;
}

#menu {
    padding: 12.5px 25px 12.5px 25px;
}
</style>
<title>User IP Information</title>
</head>
<body>

    <h2>User IP Information</h2>
<div id="wrapper">
        <div id="menu">
            
        <h1>   <?php 
 //IP address
$ip = getenv("REMOTE_ADDR") ; 
 Echo "Your IP is : " . $ip; 
 ?>  </h1>
 <h2> <a href="<?php echo "http://whatismyipaddress.com/ip/$ip"; ?>">..Click Here To See More Information..</a></h2> 
        </div>
    <script type="text/javascript"
        src="https://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>
    <script type="text/javascript">
</script>
</body>
<footer>
    <br></br>
    <span class="copyright">Copyright © <a href="https://github.com/akalankauk" target="_blank">AE Developers</a>
</footer>
</html>
