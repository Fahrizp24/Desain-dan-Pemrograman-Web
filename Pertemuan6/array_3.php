<!DOCTYPE html>
<html>
<head>
    <style>
        table{
            border-collapse: collapse;
            border-spacing: 0;
            width: 100%;
            border: 1px solid #ddd;
        }

        th,td{
            text-align: left;
            padding: 16px;
        }

        tr:nth-child(even){
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>Multidimensional Array</h2>
    <table>
        <tr>
            <th>Judul Film</th>
            <th>Tahun</th>
            <th>Rating</th>
        </tr>
        <?php
        $movies = array(
            array("Avengers: Infinity War", 2018, 8.7),
            array("The Avengers", 2012, 8.1),
            array("Guardians of the Galaxy", 2014, 8.1),
            array("Iron Man", 2008, 7.9)
        );

        foreach ($movies as $movie) {
            echo "<tr>";
            echo "<td>" . $movie[0] . "</td>";
            echo "<td>" . $movie[1] . "</td>";
            echo "<td>" . $movie[2] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
