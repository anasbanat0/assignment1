<?php
  # Anas Ali Banat
  # 20172121
?>
<!DOCTYPE html>
<?php
  $name = "Anas Ali Banat";
  $id = "20172121";
?>
<html lang="en">
  <?php
    # Anas Ali Banat
    # 20172121
  ?>
  <head> 
  <title><?php echo $name . " " . $id ; ?></title>
    <style> 
      .header {
        background-image: url('map.jpg'); 
        background-repeat: no-repeat; 
        background-size: cover;
      } 
      form { 
        max-width: 1000px; 
        margin: auto; 
        text-align: center; 
        margin-top: 3vh; 
      } 
      .heading1,
      .heading2 { 
        padding: 15px; 
        max-width: 900px; 
        margin: auto; 
        text-align: center; 
        color: skyblue;
        font-size: 2.7em; 
        background: lighten(brown, 5%);
        font-family: 'Lobster';
        text-shadow: 2px 1px 0px #fff, 
                     9px 8px 0px rgba(0,0,0,0.15);
      }
      .heading1 span,
      .heading2 span {
        display: block;
        transform: rotate(-7.5deg);
      }
      .heading1 {
        margin-top: 20vh;
      }
      .heading2 {
        margin-bottom: 10vh;
      }
      <?php
        # Anas Ali Banat
        # 20172121
      ?>
      select {
        background-color: white;
        border: thin solid blue;
        border-radius: 4px;
        display: inline-block;
        font: inherit;
        line-height: 1.5em;
        padding: 0.5em 3.5em 0.5em 1em;
        margin: 0;      
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
        -webkit-appearance: none;
        -moz-appearance: none;
        width: 600px;
      } 
      select.round {
        background-image: linear-gradient(45deg, transparent 50%, gray 50%),
                          linear-gradient(135deg, gray 50%, transparent 50%),
                          radial-gradient(#ddd 70%, transparent 72%);
        background-position: calc(100% - 20px) calc(1em + 2px),
                              calc(100% - 15px) calc(1em + 2px),
                              calc(100% - .5em) .5em;
        background-size: 5px 5px, 5px 5px, 1.5em 1.5em;
        background-repeat: no-repeat;
      }
      <?php
        # Anas Ali Banat
        # 20172121
      ?>
      select.round:focus {
        background-image: linear-gradient(45deg, white 50%, transparent 50%),
                          linear-gradient(135deg, transparent 50%, white 50%),
                          radial-gradient(gray 70%, transparent 72%);
        background-position: calc(100% - 15px) 1em, calc(100% - 20px) 1em, calc(100% - .5em) .5em;
        background-size: 5px 5px, 5px 5px, 1.5em 1.5em;
        background-repeat: no-repeat;
        border-color: green;
        outline: 0;
      }
      .btn-main {
        cursor: pointer;
        font-size: 20px;
        font-weight: bold;
        padding: 10px;
        color: #f8f8f8;
        background-color: #34f034;
        width: 100px;
        border: none;
        border-radius: 5px;
        margin-top: 50px;
        outline: none;
        box-shadow: 0 6px #95a5a6;
      }
      .btn-main:hover{
        background-color: #2ecc71;
      }
      .btn-main:active {
        background-color: #2ecc71;
        box-shadow: 0 5px #95a5a6;
        transform: translateY(4px);
      }
      <?php
        # Anas Ali Banat
        # 20172121
      ?>
      p { 
        margin:50px auto 0; 
        border-color: yellow; 
        color: white; 
        text-align: center; 
        font-size: 2em;
        font-weight: bold;
        padding: 2px 2px 2px 2px; 
        width: 30%; 
        border-style: dashed; 
      } 
      .result { 
        color: black; 
        text-shadow: 2px 2px 4px #34f034; 
      } 
    </style> 
  </head> 
  <?php
    # Anas Ali Banat
    # 20172121
  ?>
  <body class="header">
    <?php 
      $places = array (
        "Japan" => "Tokyo", 
        "Mexico" => "Mexico City", 
        "USA" => "New York City", 
        "India" => "Mumbai", 
        "Korea" => "Seoul", 
        "China" => "Shanghai", 
        "Nigeria" => "Lagos", 
        "Argentina" => "Buenos Aires", 
        "Egypt" => "Cairo", 
        "UK" => "London",
      ); 
    ?> 
    <?php
      # Anas Ali Banat
      # 20172121
    ?>
    <h1 class="heading1"><span>In which country a city is located?</span></h1> 
    <h2 class="heading2"><span>Please choose a city:</span></h2> 
    <form method='post'> 
      <select class="round" name="places" id="places"> 
        <?php 
          foreach($places as $city) { 
            echo '<option name="city" value="'.$city.'">'.$city.'</option>'; 
          } 
        ?> 
      </select><br> 
      <button class="btn-main" type="submit" name="submit">GO</button> 
    </form>
    <?php
      # Anas Ali Banat
      # 20172121
    ?> 
    <?php 
      if(isset($_POST['submit'])) {
        foreach($places as $country => $city) { 
          if($_POST['places'] == $city) { 
            echo "<p>".$city." is in ". "<span class='result'>".$country."</span></p>"; 
          }
        } 
      } 
    ?> 
  </body>
</html>
<?php
  # Anas Ali Banat
  # 20172121
?>