
<?php
if(isset($_POST['dodaj'])){

    $polaczenie = new mysqli("localhost", "root", "", "ee09");
    $karetka = $_POST['numerKaretki'];
    $rat1 = $_POST['rat1'];
    $rat2 = $_POST['rat2'];
    $rat3 = $_POST['rat3'];
    
    $zapytanie = "INSERT INTO `ratownicy`(`id`, `nrKaretki`, `ratownik1`, `ratownik2`, `ratownik3`) VALUES ('','$karetka','$rat1','$rat2','$rat3')";
    
    mysqli_query($polaczenie, $zapytanie);
    
    
    mysqli_close($polaczenie);

    echo("Do bazy zostało wysłane zapytanie: $zapytanie");

}



?>