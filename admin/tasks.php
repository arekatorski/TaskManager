<?php
require('../views/adminNav.html');
?>

<div class="container-fluid text-center">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <p class="h2">Lista zadań przypisanych</p>
        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">ID ZADANIA</th>
                    <th scope="col">TYTUŁ</th>
                    <th scope="col">PRACOWNIK ODPOWIEDZIALNY</th>
                    <th scope="col">DEADLINE</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
               <?php
                    $conn = new mysqli('localhost', 'root', '', 'taskmanager');
                    if($conn->connect_error){
                        die("NIE NAWIĄZANO POŁĄCZENIA Z BAZĄ DANYCH");
                    }
                    $query = "SELECT users.name, users.surname, tasks.id, tasks.title, tasks.deadline, tasks.status FROM tasks, users WHERE tasks.userId = users.id";
                    $result = $conn->query($query);

                    if($result->num_rows >0){
                        while($row = $result->fetch_assoc()){
                            echo "<tr><td>".$row['id']."</td><td>".$row['title']."</td><td>"
                            .$row['name']." ".$row['surname']."</td><td>".$row['deadline']
                            ."</td><td>".$row['status']."</td></tr>";
                        }
                    }
               ?>
            </tbody>
            </table>
        </div>
    </div>
</div>

<?php
require("../views/footer.html");
?>