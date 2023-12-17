<?php 
// dane, ktore podajemy w inputach:                                :
$nick = $_POST['nick'];         // w zmiennej nick zapisujemy to co podalismy w nick
$haslo = $_POST['haslo'];            // w zmiennej haslo zapisujemy to co podalismy w haslo

$conn = new mysqli('localhost', 'root', '', 'egzamin'); //polaczenie z baza danych

{
$wynikquery = "INSERT INTO zadanie(id,nick,haslo) VALUES(null,'$nick','$haslo')"; //jakie zapytanie w bazie ma zostac wykonane po uzupelnieniu formularza
$result = $conn->query($wynikquery); //przesyla wynik do bazy danych
$conn->close(); // zamkniecie polaczenia z baza (za to jest pkt)
}






// w pliku mysql.php masz szablon łączenia z bazą 
// aby działało musisz to odpalić lokalnie --->    localhost/cwiczenia%20do%20egzaminu/index.html
?>


<!-- 


{
$polecenie = "INSERT INTO zadanie(id,nick,haslo) VALUES(null,'$nick','$haslo')"; 
$wynik = $conn->query($polecenie); 
}


 -->
