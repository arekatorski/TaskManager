<?php
require('../views/adminNav.html');
?>

<div class="container text-center">
    <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-4 functionCards" style="padding: 5px; margin:5px;"><a href="">Dodaj pracownika</a></div>
    <div class="col-md-4 functionCards" style="padding: 5px; margin:5px;"><a href="">Usuń pracownika</a></div>
    </div>
   <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
    <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">ID PRACOWNIKA</th>
      <th scope="col">IMIĘ</th>
      <th scope="col">NAZWISKO</th>
      <th scope="col">EMAIL</th>
    </tr>
  </thead>
  <tbody>
    <?php
      $conn = new mysqli('localhost', 'root', '', 'taskmanager');
     if($conn->connect_error){
      die("NIE NAWIĄZANO POŁĄCZENIA Z BAZĄ DANYCH");
     }
     $query = "SELECT * from users where accountId = 2";
     $result = $conn->query($query);
      if($result->num_rows >0){
        while($row = $result->fetch_assoc()){
          echo "<tr><td>".$row['id']."</td><td>".$row['name']."</td><td>"
          .$row['surname']."</td><td>".$row['email']."</td></tr>";
        }
      }
    ?>
  </tbody>
</table>
    </div>
    <div class="col-md-2"></div>
   </div>
</div>

<?php
require("../views/footer.html");
?>