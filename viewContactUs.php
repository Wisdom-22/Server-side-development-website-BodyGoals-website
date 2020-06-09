<?php
    //written by muiz johnson
    require('userDatabase.php');

    $query = "SELECT * FROM contact_us";
    $result = @mysqli_query($db_connection , $query);

    while($row = mysqli_fetch_array($result)){
        include('header.php');
        echo "<section style = 'padding:200px;'> 
                <table style='width:100%; border:1px solid black; border-collapse:collapse'>
                    <tr>
                    <th>first_name</th>
                    <th>last_name</th>
                    <th>email</th>
                    <th>phone_number</th>
                    <th>message</th>
                    </tr>
                    <tr>
                    <td>$row[first_name]</td>
                    <td>$row[last_name]</td>
                    <td>$row[email]</td>
                    <td>$row[phone_number]</td>
                    <td>$row[message]</td>
                    </tr>
                </table>
            </section>";
        include('footer.php');
    }
?>
