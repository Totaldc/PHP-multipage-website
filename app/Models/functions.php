<?php 


function menu($array)
{
    print '<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">LOGO</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">';
    foreach ($array as $menu_name => $link) {
        print '<li class="nav-item" ><a class="nav-link" href = "' . $link . '" >' . $menu_name . '<span class="sr-only" > (current)</span ></a ></li>';
    }
    print '</ul></div></nav>';
}






function display_text($arr)
{
  print '<div class="container">';
  print '<div class ="column justify-content-center mt-5">';
  
  foreach ($arr as $key => $value) {
    if($key == 'left') {
     
        print '<div class="d-flex justify-content-center">';
        print '<div class="mt-5"><img src="' . $value . '" width="750" height="500"></div>';
        print '</div>';
    }elseif($key == 'right') {
      
        print '<div class=""><p>"' . $value . '"</p></div>';
      
    }
   }
  print '</div>';
  print '</div>';
}


function galerija($gallery)
{
  print '<div class="container">';
 
  foreach($gallery as $key => $name){
    print '<div class ="d-flex justify-content-center">';
        foreach($name as $key => $pavadinimas){
            if($key =='name'){
                print '<p>"' . $pavadinimas . ' ' .  '" </p>';
            }elseif($key == 'title'){
                print '<p>"' . $pavadinimas . ' ' . '" </p>';
            }elseif($key == 'beds'){
                print '<p>Lovu kiekis: "' . $pavadinimas . ' ' . '" </p>';
            }elseif($key == 'people'){
                print '<p>Zmoniu kiekis: "' . $pavadinimas . ' ' . '" </p>';
            }elseif($key == 'region'){
                print '<p>Sodyba yra: "' . $pavadinimas . ' ' . '" regione "' . ' '  .  '" </p>';
            }elseif($key == 'rating'){
                print '<p>Sodybos vertinimas: "' . $pavadinimas . ' ' . '" </p>';
            }
        }
        print "<br>";
        print '</div>';
  }


    

  
  print '</div>';

  }
 



?>


