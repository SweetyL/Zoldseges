<?php
    if(empty($_SESSION['id']) ){
        echo "<a href='index.php?page=belep&action=login'>Belépés</a>";
    }else{
        echo "<a href='index.php?page=belep&action=logout'>Kilépés</a><br>";
        echo "<a href='index.php?page=hozzaad'>Hozzáad</a>";
    }
?>
<?php
    if(!empty($_SESSION['id'])){
?>
 <table>
  <tr>
    <th>Termék név</th>
    <th>Termék mennyisége</th>
  </tr>
    <?php
        foreach($termekLista as $row){
            $termek->set_termek($row,$conn);
            echo "<tr>";
            echo "<td>".$termek->get_nev()."</td>";
            echo "<td>".$termek->get_mass($row,$conn)." kg</td>";
            echo "</tr>";
        }
    ?>
</table>
<?php
    }
?>