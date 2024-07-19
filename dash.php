<?php

require "conn.php";

$query = "SELECT * FROM user";
$result = $conn->query($query);

if ($result->num_rows > 0) {

    echo '
    <div
    class="table-responsive"
    >
        <table border
         class="table table-primary"
        >
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">NAME</th>
                    <th scope="col">EMAIL</th>
                </tr>
            </thead>
        <tbody>
    ';

    while ($row = $result->fetch_assoc()) {
        echo "<tr class=''>
                <td>{$row['id']}</td>
                <td>{$row['name']}</td>
                <td>{$row['email']}</td>
            </tr>";
    }

    echo '</tbody>
    </table>
</div>';
}




