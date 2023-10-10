<!doctype html>
<html>
 <head>
 	<link rel="stylesheet" href="<?= base_url('assets/styles.css') ?>" type="text/css">
   <title>Halaman Tidak Diketahui</title>
   <style>
   body{
     width: 99%;
     height: 100%;
     background-color: #d9d8d4;
     color: black;
   }
   div {
     position: absolute;
     width: 400px;
     height: 300px;
     z-index: 15;
     top: 35%;
     left: 50%;
     margin: -100px 0 0 -200px;
     text-align: center;
   }
   h1,h2{
     text-align: center;
   }
   h1{
     font-size: 60px;
     margin-bottom: 10px;
     border-bottom: 1px solid white;
     padding-bottom: 10px;
   }
   h2{
     margin-bottom: 40px;
   }
   a{
     margin-top:10px;
     text-decoration: none;
     padding: 10px 25px;
     color: white;
     margin-top: 20px;
     border-radius: 8px;
   }
   </style>
 </head>
 <body>
   <div>
     <img src="<?= base_url('assets/img/error-ghost.png'); ?>" width="150" height="165">
     <h1 class="poppins-600">Error</h1>
     <h2 class="poppins-600"><?=$judul;?></h2>
     <a href='<?= base_url(); ?><?=$url?>' class="poppins-500 bg-hitam-custom"><?=$caption;?></a>
   </div>
 </body>
</html>