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
  print '<div class ="d-flex justify-content-center">';
  print '<table>';
  foreach($gallery as $key => $name){
    print '<div class ="d-flex justify-content-center">';
    print '<table>';
   
        foreach($name as $key => $pavadinimas){
            print '<tr>';
            if($key =='name'){
                print '<p>' . $pavadinimas . ' ' .  ' </p>';
            }elseif($key == 'title'){
                print '<p>' . $pavadinimas . ' ' . ' </p>';
            }elseif($key == 'beds'){
                print '<p>Lovu kiekis: ' . $pavadinimas . ' ' . ' </p>';
            }elseif($key == 'people'){
                print '<p>Zmoniu kiekis: ' . $pavadinimas . ' ' . ' </p>';
            }elseif($key == 'region'){
                print '<p>Sodyba yra: ' . $pavadinimas . ' ' . ' regione ' . ' '  .  ' </p>';
            }elseif($key == 'rating'){
                print '<p>Sodybos vertinimas: ' . $pavadinimas . ' ' . ' </p>';
            }
            print '</tr>';
        }
      
        print '</table>';
        print "<br>";
        print '</div>';
  }


    

  
  print '</div>';

  }



    // $new = [
    //           [
    //             'hashtag' => 'a7e87329b5eab8578f4f1098a152d6f4',
    //             'title' => 'Flower',
    //             'order' => 3,
    //           ],

    //           [
    //             'hashtag' => 'b24ce0cd392a5b0b8dedc66c25213594',
    //             'title' => 'Free',
    //             'order' => 2,
    //           ],

    //           [
    //             'hashtag' => 'e7d31fc0602fb2ede144d18cdffd816b',
    //             'title' => 'Ready',
    //             'order' => 1,
    //           ],
    // ];
function top_10($hotels)
{
    $keys = array_column($hotels, 'beds');
    array_multisort($keys, SORT_DESC, $hotels);
    var_dump($hotels);
    $output = array_slice($hotels, 0, 3);
    foreach($output as $value){
        foreach($value as $item){
            print $item . "<br>";
        }
    }

    
}
    


function get_form($array, $input_name1, $input_name2, $input_name3 = false)
{   print '<div class="cointainer">';
    print '<form action="" method="post">';
    print '<div class="card border-primary rounded-0">';
    print '<div class="card-header p-0">';
    print'<div class="bg-info text-white text-center py-2">';
    print '<h3><i class="fa fa-envelope"></i> Contacts</h3>';
    print '<p class="m-0">Send us a message</p>';
    print ' </div>';
    print ' </div>';
    print '<div class="card-body p-3">';
    print '<div class="form-group">';
    print '<div class="input-group mb-2">';
    print '<div class="input-group-prepend">';
    print '<div class=""><i class="fa fa-user text-info"></i></div>
    ';
    print ' </div>';
    foreach ($array['inputs'] as $input) {
        if ($input['name'] == $input_name1) {
            print '<input class="col-12" type="' . $input['type'] . '" placeholder="' . $input['placeholder'] . '" name="' . $input['name'] . '" >';
            print '</div>';
            print '</div>';
          print '  <div class="form-group">';
        print '   <div class="input-group mb-2">';
         print' <div class="input-group-prepend">';
      print '<div class=""><i class="fa fa-envelope text-info"></i></div>';
         print  '</div>';
        }
 
     elseif ($input['name'] == $input_name2) {
            print '<input class="col-12" type="' . $input['type'] . '" placeholder="' . $input['placeholder'] . '" name="' . $input['name'] . '" >';
         print  '</div>';
        print'</div>';
        print'<div class="form-group">';
      print '<div class="input-group mb-2">';
      print'<div class="input-group-prepend">';
     print'<div class=""><i class="fa fa-comment text-info"></i></div>';
    print ' </div>';
        } elseif ($input['name'] == $input_name3) {
            print '<textarea class="col-12" name="'. $input['name']. '" placeholder="' . $input['placeholder'] . '"></textarea>';
            print ' </div>';
            print ' </div>';
        }
    }
    foreach ($array['buttons'] as $button) {
       print' <div class="text-center">';
        print '<input type="' . $button['type'] . '" value="' . $button['value'] . '" >';
    }
  print'  </div>';
  print'  </div>';
  print'  </div>';
    print '</form>';
    print '</div>';

    var_dump($_POST);
}










