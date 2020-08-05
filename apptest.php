<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP || App Test</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>My Bowling Team</h1>
    <table>
    <tr>
        <th>Bowler</th>
        <th>Games Played</th>
        <th>Average</th>
    </tr>
    <?php
        $db = new mysqli("localhost", "phpuser1", "Password", "phptest");
        if (!$db) {
            echo "Sorry, I could not connect to the database server";
            exit;
        }
        $query = "SELECT userid, name FROM users ORDER BY name";
        $result = $db->query($query);
        while($row = $result->fetch_assoc()) {
            $userid = $row['userid'];
            $name = $row['name'];
            $query2 = "SELECT COUNT(score) AS games, AVG(score) AS average FROM games" . " WHERE userid = $userid";
            $result2 = $db->query($query2);
            $row2 = $result2->fetch_assoc();
            $games = $row2['games'];
            $average = $row2['average'];
            echo "<tr><td>$name</td><td>$games</td><td>$average</td>\n";
        }
    ?>
    </table>
</body>
</html>