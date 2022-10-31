<?php
  include('connection.php');



 
  function gettable_1() {
    global $con;
    


  
           $query = "SELECT * FROM table1";
           $query_run = mysqli_query($connection, $query);


if($query_run)
{
 foreach($query_run as $row)
{

echo '<tbody>';
echo '<tr>'

            . $row['id'] .  "</td><td>"
           . $row['teams'] .  "</td><td>"
           . $row['tip']  .  "</td><td>"
           . $row['result'] .  "</td><td>";
}

}}

echo '</table> ';


















   
//     $sql = "SELECT league, teams,  tip, result FROM table1";
//     $result = $con->query($sql);
//     if ($result->num_rows > 0) {
//     // output data of each row
//     while($row = $result->fetch_assoc()) {
//     echo "<tr >
//     <td>"
    
//     . $row["league"].  "</td><td>"
//     . $row["teams"].    "</td><td>"
    
//     . $row["tip"].    "</td><td>"
//     . $row["result"].    "</td><td>";
    
//     }
//    echo '<td>';
//    echo '<button type="button" class="btn btn-success editbtn"> EDIT </button>';
//    echo '</td>';
//    echo '<td>';
//    echo '<button type="button" class="btn btn-danger deletebtn"> DELETE </button>';
//    echo '</td>';
//     echo  "</tr></td>";
//     echo "</table>";
//     } else { 
//         echo '<h3>No Bets Added !!';
//      }
  


?>


