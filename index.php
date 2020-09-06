
<!DOCTYPE html>
<html lang="en">
<?php
include 'Utilisationchart.php';
include 'alarmeschart.php';
include 'fractionsolairechart.php';
//include 'alarmeschart.php';
/*$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "ensajcap";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}*/
//include 'connect.php';

$sql = "SELECT * FROM capteur";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
     //"id: " . $row["id"]. " - capteurv: " . $row["capteurv"]. " " . $row["capteurnam"]. "<br>";
   //echo "id: " . $row["id"]. " - capteurv: " . $row["capteurv"]. " " . $row["capteurnam"]. "<br>";
    $results[] = $row["capteurv"];
  }
} else {
  echo "0 results";
}
$conn->close();
$a = $results;
//print_r ($a);
//print_r ($a[0]);

?>


<head>
  <title> Solar electricity generation </title>
   
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/css.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">-->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>-->
  <script src="js/jquery.min.js"></script>
  <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>-->
  <script src="js/popper.min.js"></script>
  <!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>-->
  <script src="js/bootstrap.min.js"></script>

 <!-- Custom Font awesome -->
 <!--<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">-->
 <link href="css/font-awesome.css" rel="stylesheet">

 <!-- Bootstrap core CSS
 <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css" rel="stylesheet"> -->

  
 <!--<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"></script>-->
 <script src="js/Chart.min.js"></script>

</head>
<body>

<style>
    body{
      background-color: rgb(231, 230, 236);
    }
    </style>

<nav class="navbar navbar-expand-lg navbar-light bg-bg">
    <img src="img/logo.jpg" class="rounded" alt="Cinque Terre" width="150" height="40">
        
        <div class="navbar-collapse collapse justify-content-between">
          <ul class="navbar-nav mr-auto">

            <p>
              <span class="glyphicon">&#xe123;</span>
            </p>
            <p><span class="glyphicon glyphicon-option-vertical"></span></p>
            <p><span class="glyphicon glyphicon-menu-hamburger"></span></p>
          </ul>
         
        </div>
      </nav>
      
      <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12 card  text-white">
                <div class="card-body">
                    <div class="row">
                        
                        <div class="col"><img src="img/university.png"  style = "width: 250px; height: 100px; " class="img-fluid" alt="Responsive image"></div>
                        
                        <div class="col p-5 mb-3 bg-info text-white text-center " >installation photovoltaïque<br>
                            توليد الكهرباء بالطاقة الشمسية
                        </div>
                        
                        <div class="col"><img src="img/ensaj.jpg"  style = "width: 250px; height: 100px; "  class="img-fluid" alt="Responsive image"></div>
                        
                    </div>
                </div>
              </div>
      </div>
     </div>
<br>
<div class="container-fluid">
        <p class="bg-light border border-info"></p>
        <div class="row">
          <div class="col-xl-5 ">
            
            <div class="card">
              
               
                <div class="card-body align-items-center d-flex justify-content-center text-warning font-weight-bold" >BLANCE ENERGRTIQUE</div>

                
              </div>
            <div class="row">
                <div class="col ">
                    <div class="card bg-danger text-white ">
                        <div class="card-body "><div class="row">
                            <div class="col-xl-2"> </div>
                            <div class="col-xl-10"> RESEAU الشبكة العمومية <hr class="new5"></div>
                        </div>
                         <div  class=" text-center  font-weight-bold">
                             <br><br>
                            <?php //print_r ($a[0]); ?>  <br>
                            <?php print_r ($a[1]); ?> 
                              <br> <br> <br> <br> 
                         </div>  
                        </div>
                      </div>
                </div>
                <div class="col ">
                    <div class="card bg-success text-white">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-xl-2"> </div>
                                <div class="col-xl-10"> ENERGIE SOLAIRE مولد الطاقة الشمسية<hr class="new5"> </div>
                                
                            </div>
                            <div  class=" text-center  font-weight-bold">
                            <?php print_r ($a[2]); ?>    <br>
                            <?php print_r ($a[3]); ?>     <br>
                            <?php print_r ($a[4]); ?>  <br><br>
                                <p class="text-danger">Objective :</p>
                                <?php print_r ($a[5]); ?>   
                            </div>  
                        </div>
                      </div>
                </div>
            </div><br>
            <div class="card bg-light text-black">
                <div class="card-body"><div class="row">
                    <div class="col-xl-2"> </div>
                    <div class="col-xl-10"> UTILISATION الاسعمال<hr class="new5"> </div>
                  
                </div>
                <div  class=" text-center  font-weight-bold">
                    <div class="row">
                        <div class="col-xl-8">  <canvas id="myChart"></canvas></div>
                    <div class="col-xl-4"> <br><br><br>
                    <p id="demo"></p>
                    <p id="demox"></p>
                    <div id="mondiv"></div>
                   </div>
                   
                </div>

<script>

   var jArray3 = [];
    var jArray= <?php echo json_encode($Reseauemparrayblanceenergrtique ); ?>;
    var jArray2= <?php echo json_encode($energiesolaireemparrayblanceenergrtique ); ?>;
  
    document.getElementById("mondiv").innerHTML = jArray3.join();
   
  
for(var i=0;i<jArray.length;i++){
  var tick = function(i) {
        return function() {
 /*
  var cc= 1;
setTimeout(function run() {
  func(cc++);*/
    var ele =  jArray[i] ;
    var ele2 =  jArray2[i] ;
        document.getElementById("demo").innerHTML = ele ;
        document.getElementById("demox").innerHTML = ele2 ;
        //jArray3[i].push(jArray[i], jArray2[i]);
        jArray3.push(ele);
        jArray3.push(ele2);
       //jArray3.push(jArray2[i]);
      //  alert(jArray3[i]);
        
    
//--------------------------  
var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'pie',
    data: {
        //labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
        labels: ['Reseau', 'energiesolaire'],
        datasets: [{
            label: '# of Votes',
          //  data: [12, 19],
          
           data: jArray3,
            //data: [foo, energiesolaireEnsaj],
           // data: [obj.Reseau, obj.energiesolaire],
       
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});

jArray3 =[];
}
    };
    setTimeout(tick(i), 5000 * i);


}


</script>
                </div>  
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-xl-2"></div>
                <div class="col-xl-5"> 
                   <div class="card bg-success text-white divx" style = "width: 20px; height: 10px; display:inline-block;" >
                        <div class="card-body"></div>
                      </div>
                    <div style="display: inline-block;"  class="text-success">Autoconsommation</div> 
                </div>
                <div class="col-xl-5"> 
                    <div class="card bg-danger text-white" style = "width: 20px; height: 10px; display:inline-block;" >
                         <div class="card-body"></div>
                       </div>
                     <div style="display: inline-block;"  class="text-danger">Consommation reseau</div> 
                 </div>
              </div>

              <div class="row">
                <div class="col"></div>
                <div class="col">
              <button type="button" class="btn btn-outline-secondary">Ecron1</button><button type="button" class="btn btn-outline-secondary">Ecron2</button>
            </div>
            </div>
            </div>

          
            <div class="col-xl-7 ">
            <div class="row">
                <div class="col">
                    

                    <div class="card">
               
                        <div class="card-body align-items-center d-flex justify-content-center text-danger font-weight-bold">INDICATEURS--FEVRIER</div>
                      </div>
              <div class="row">
                <div class="col"><img src="img/panneau.jpg"  style = "width: 50px; height: 50px; " class="img-fluid" alt="Responsive image"></div>
                <div class="col"></div>
                <div class="col"> <?php print_r ($a[6]); ?> </div>
              </div>
              <div class="row">
                <div class="col"><img src="img/money.png"  style = "width: 50px; height: 50px; " class="img-fluid" alt="Responsive image"></div>
                <div class="col"></div>
                <div class="col"><?php print_r ($a[7]); ?>  </div>
              </div>
              <div class="row">
                <div class="col"><img src="img/co2.png"  style = "width: 50px; height: 50px; " class="img-fluid" alt="Responsive image"></div>
                <div class="col"></div>
                <div class="col"><?php print_r ($a[8]); ?> </div>
              </div>
                </div> 
                <div class="col">

                    <div class="card">
               
                        <div class="card-body align-items-center d-flex justify-content-center text-danger font-weight-bold">CAPTEURS</div>
                      </div>
                      <div class="row">
                        <div class="col"><img src="img/soll.jpg"  style = "width: 50px; height: 50px; " class="img-fluid" alt="Responsive image"></div>
                        <div class="col">Température solaire</div>
                        <div class="col"> <?php print_r ($a[9]); ?></div>                      </div>
                      <div class="row">
                        <div class="col"><img src="img/weather.png"  style = "width: 50px; height: 50px; " class="img-fluid" alt="Responsive image"></div>
                        <div class="col">Température ambiante</div>
                        <div class="col"><?php print_r ($a[10]); ?> </div>
                      </div>
                      <div class="row">
                        <div class="col"><img src="img/tmp.png"  style = "width: 50px; height: 50px; " class="img-fluid" alt="Responsive image"></div>
                        <div class="col">Température des modules</div>
                        <div class="col"><?php print_r ($a[11]); ?> </div>
                      </div>
                      <div class="row">
                        <div class="col"> Vitesse du vent</div>
                        <div class="col"> </div>
                        <div class="col"><?php print_r ($a[12]); ?> </div>
                      </div>
                </div>  

                
          </div>
          <div class="row">
            <div class="col-xl-12">
            <div class="card center ">
               
                <div class="card-body align-items-center d-flex justify-content-center text-danger font-weight-bold">ALARMES</div>
              </div>
            </div>
            

          </div>
          <div class="row">
            <div class="col"> <canvas id="myChart2"></canvas></div>
            <div class="col">
                Injection réseau <br>
                Alarme modulation <br>
                Puissance d'onduleur <br>
                Désequilibre de courant 
                String<br>
                Perte communication <p id="demo2"></p><p id="demox2"></p><p id="mondiv2"></p><p id="demox20"></p>
                </div>
                </div>
                <script>
//2

   var jArray30 = [];
    var jArray0= <?php echo json_encode($Injectionrealarmes); ?>;
    var jArray20= <?php echo json_encode($onduleurempalarmes); ?>;
    var jArray200= <?php echo json_encode($Pertecommunicationempalarmes); ?>;
    
  
    document.getElementById("mondiv2").innerHTML = jArray30.join();
    
  
for(var i=0;i<jArray0.length;i++){
  var tick = function(i) {
        return function() {
 
    var ele0 =  jArray0[i] ;
    var ele20 =  jArray20[i] ;
    var ele200 =  jArray200[i] ;
        document.getElementById("demo2").innerHTML = ele0 ;
        document.getElementById("demox2").innerHTML = ele20 ;
        document.getElementById("demox20").innerHTML = ele200 ;
       
        jArray30.push(ele0);
        jArray30.push(ele20);
        jArray30.push(ele200);
     
        
    
//--------------------------  
var ctx = document.getElementById('myChart2').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
   
        labels: ['Injection-réseau', 'onduleur', 'Perte-de-communication'],
        datasets: [{
            label: '# of Votes',
          //  data: [12, 19],
          
           data: jArray30,
      
       
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});


///---------------fin

//----------------


jArray30 =[];
}
    };
    setTimeout(tick(i), 5000 * i);


}


</script>
                <script>
    
</script>
<div class="col-xl-12">
                    <div class="card center ">
                       
                        <div class="card-body align-items-center d-flex justify-content-center text-danger font-weight-bold">FRACTION SOLAIRE --FEVRIER</div>
                      </div>
                    </div>
               <div class="row">
                   <div class="col"> <canvas id="myChart3"></canvas></div>
                   <div  class="col text-success"> <br><p id="demo3"></p> <p id="demox3"></p>
                   
                   <p id="demox30"></p> <p id="mondiv3"></p>
                  </div>
               </div>   
               <script>



   var jArray30 = [];
    var jArray0= <?php echo json_encode($matinfractionsolaire); ?>;
    var jArray20= <?php echo json_encode($apresmidifractionsolaire); ?>;
    var jArray200= <?php echo json_encode($finjeurneefractionsolaire); ?>;
    
  
    document.getElementById("mondiv3").innerHTML = jArray30.join();
    
  
for(var i=0;i<jArray0.length;i++){
  var tick = function(i) {
        return function() {
 
    var ele0 =  jArray0[i] ;
    var ele20 =  jArray20[i] ;
    var ele200 =  jArray200[i] ;
        document.getElementById("demo3").innerHTML = ele0 ;
        document.getElementById("demox3").innerHTML = ele20 ;
        document.getElementById("demox30").innerHTML = ele200 ;
       
        jArray30.push(ele0);
        jArray30.push(ele20);
        jArray30.push(ele200);
     
        
    
//--------------------------  
var ctx = document.getElementById('myChart3').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'radar',
    data: {
   
        labels: ['matin', 'aprés-midi', 'fin-de-journée'],
        datasets: [{
            label: '# of Votes',
          
          
           data: jArray30,
           
       
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});





jArray30 =[];
}
    };
    setTimeout(tick(i), 5000 * i);


}


</script>
               <script>

     


</script>
        </div>

        
      </div>


</body>
</html>




