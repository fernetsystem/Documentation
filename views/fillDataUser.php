    <table>
        <tr>
            <td>matricula</td>
            <td>email</td>
            <td>pass</td>
            <td>tipo de usuario</td>
        </tr>
        <?php
            foreach ($getData as $dato) {
            echo "<tr><td>".$dato['matricula']."</td>";
            echo "<td>".$dato['email']."</td>";
            echo "<td>".$dato['password']."</td>";
            echo "<td>".$dato['tipo_user']."</td>";
            echo "</tr>";
        }
        ?>
    </table>