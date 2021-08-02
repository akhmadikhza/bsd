<?php
session_start();
if (isset($_SESSION['table1'])) {
    // code...?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
   <!--  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
     <!-- ICON -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
  </head>
  <body >

   <!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark shadow-sm fixed-top" style="background-color:#eb6657">
  <div class="container">
    <a class="navbar-brand" href="index.php">Ikhza 18.11.0205</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
      
      </ul>
    </div>
  </div>
</nav>
   <!-- End Navbar -->

<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fa9589" fill-opacity="1" d="M0,128L48,160C96,192,192,256,288,277.3C384,299,480,277,576,250.7C672,224,768,192,864,170.7C960,149,1056,139,1152,149.3C1248,160,1344,192,1392,208L1440,224L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>




<div class="container" style="margin-top:6rem;">

  <table style="margin-top:30px;" class="table table-bordered">
<thead>
 <tr>
   <th>Q</th>
   <?php
   $table1=$_SESSION['table1'];
    $f=1;
    foreach ($table1[0]['dok'] as $key) {
        echo "<th>D".$f."</th>";
        ++$f;
    } ?>
   <th>df</th>
   <th>D/df</th>
   <th>IDF</th>
   <th>IDF+1</th>
 </tr>
</thead>
<tbody>
<?php
$p=0;
    foreach ($table1 as $key) {
        echo "<tr>
    <td>".$key['term']."</td>";
        foreach ($key['dok'] as $key1) {
            echo "<td>".$key1."</td>";
        }

        echo "<td>".$key['df']."</td>
<td>".$key['Ddf']."</td>
<td>".$key['idf']."</td>
<td>".$key['idf1']."</td>
</tr>";


        ++$p;
    }


    //echo json_encode($_SESSION['table2']);?>


</tbody>
</table>

<table class="table table-bordered">
   <thead>
     <tr>
       <?php
       $table2=$_SESSION['table2'];
    $f=1;
    foreach ($table2 as $key) {
        echo "<th>Kalimat ".$f."</th>";
        ++$f;
    } ?>
     </tr>
   </thead>
   <tbody>


     <?php
     $counter=count($table2[0]['a']);
    for ($h=0;$h<$counter;++$h) {
        echo "<tr>";
        for ($e=0;$e<count($table2);++$e) {
            echo "<td>".$table2[$e]['a'][$h]."</td>";
        }
        echo "</tr>";
        //  print_r($table2[$q][1]);
    } ?>

   </tbody>
 </table>


 <table class="table table-bordered">
    <thead>
      <tr>
        <th>Kalimat</th>
        <th>Score Pembobotan</th>

      </tr>
    </thead>
    <tbody>
      <?php
      $urutan2=$_SESSION['urutan2'];
foreach ($urutan2 as $key => $value) {

 echo "<tr>
   <td>Kalimat ".($key+1)."</td>
   <td>".$value."</td>
 </tr>";
}
      ?>


    </tbody>
  </table>

<div style="margin-bottom:30px;">
  <h3 style="text-align:center;">Result</h3>
  <?php
  $data_asli=explode(".",$_SESSION['original_data']);
  $s=0;
  foreach ($urutan2 as $key => $value) {
    echo $data_asli[$key].".";
  if($s==1){
    break;
  }
  ++$s;
  }
  ?>
</div>



</div>


<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fa9589" fill-opacity="1" d="M0,96L48,117.3C96,139,192,181,288,176C384,171,480,117,576,128C672,139,768,213,864,224C960,235,1056,181,1152,160C1248,139,1344,149,1392,154.7L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>

<footer style="background-color: #fa9589;" class="text-center pb-5">

<p>Created with <i class="bi bi-heart-fill text-danger"></i> by <a href="https://www.instagram.com/akhmadikhza_assaufi/" class="text-white fw-bold">Akhmad Ikhza Assaufi</a> </p>

</footer>

  </body>

</html>

<?php
}
session_destroy();
?>
