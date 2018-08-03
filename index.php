<?php 
if(isset($_POST['envoie'])){
    // print_r($_FILES);
    include './assets/uploads/upload.php';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php include('./assets/vue/link.php') ?>
</head>
<body>
<?php include './assets/vue/newProductForm.php'; ?>
     <!-- <div class="row"> 
         <div class="col-md-12 col-lg-6">
             <div class="row">
                 <div class="row">
                     <div class="col-md-12 col-lg-9">
                     </div>
                     <div class="col-md-12 col-lg-3">
                     </div>
                 </div>

                 <div class="row">
                     <div class="col-md-12 col-lg-9">
                     </div>
                     <div class="col-md-12 col-lg-3">
                     </div>
                 </div>

                 <div class="row">
                     <div class="col-md-12 col-lg-9">
                     </div>
                     <div class="col-md-12 col-lg-3">
                     </div>
                 </div>

                 <div class="row">
                     <div class="col-md-12 col-lg-9">
                     </div>
                     <div class="col-md-12 col-lg-3">
                     </div>
                 </div>

                 <div class="row">
                     <div class="col-md-12 col-lg-9">
                     </div>
                     <div class="col-md-12 col-lg-3">
                     </div>
                 </div>
                
                 <div class="row">
                     <div class="col-md-12 col-lg-9">
                     </div>
                     <div class="col-md-12 col-lg-3">
                     </div>
                 </div>
             </div>
         </div>
         <div class="col-md-12 col-lg-6">
             <div class="row">
                 <div class="row">
                     <div class="col-md-12 col-lg-9">
                     </div>
                     <div class="col-md-12 col-lg-3">
                     </div>
                 </div>

                 <div class="row">
                     <div class="col-md-12 col-lg-9">
                     </div>
                     <div class="col-md-12 col-lg-3">
                     </div>
                 </div>

                 <div class="row">
                     <div class="col-md-12 col-lg-9">
                     </div>
                     <div class="col-md-12 col-lg-3">
                     </div>
                 </div>

                 <div class="row">
                     <div class="col-md-12 col-lg-9">
                     </div>
                     <div class="col-md-12 col-lg-3">
                     </div>
                 </div>

                <div class="row">
                     <div class="col-md-12 col-lg-9">
                     </div>
                     <div class="col-md-12 col-lg-3">
                     </div>
                 </div>
                
                 <div class="row">
                     <div class="col-md-12 col-lg-9">
                     </div>
                     <div class="col-md-12 col-lg-3">
                     </div>
                 </div>
             </div>
         </div>
     </div> -->
</body>
</html>