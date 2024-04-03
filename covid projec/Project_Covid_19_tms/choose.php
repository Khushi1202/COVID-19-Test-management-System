<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial;
  color: white;
}

.split {
  height: 100%;
  width: 50%;
  position: fixed;
  z-index: 1;
  top: 0;
  overflow-x: hidden;
  padding-top: 20px;
}

.left {
  left: 0;
  background-color: #111;
}

.right {
  right: 0;
  background-color: red;
}

.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
}

.centered img {
  width: 350px;
  border-radius: 50%;
}
</style>
</head>
<body>

<div class="split left">
  <div class="centered">
  
  <a href="index.php"> <img src="https://i.pinimg.com/736x/89/90/48/899048ab0cc455154006fdb9676964b3.jpg"  class="image"> </a>
  
    <h2> User </h2>
  
  </div>
</div>

<div class="split right">
  <div class="centered">
  
   <a href="admin/login.php"> <img src="https://cdn-icons-png.flaticon.com/512/219/219986.png"  class="image"> </a>
   
    <h2>admin</h2>
    
  </div>
</div>
     
</body>
</html> 
