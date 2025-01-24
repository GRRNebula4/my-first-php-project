<link rel="stylesheet" href="./index.css">
<html>

<head>
    <title>My first PHP page</title>

</head>

<body>
    <?php echo phpinfo(); ?>
    <h1>Helou</h1>

    <?php

    $conn = new PDO(dsn: "pgsql:host=possukka;port=5432;dbname=postgres;user=postgres;password=example");

    //console.log
    var_dump(value: $conn);
    print_r(value: $conn);
    $query = $conn->query("SELECT * FROM person");
    $rows = $query->fetchAll(PDO::FETCH_ASSOC);


    ?>

    <pre>
            <?php var_dump(value: $rows); ?>
        </pre>


    <?php echo "My first PHP ECHO"; ?>



    <p>
        lalalaa
    </p>

    <ul>
        <?php foreach ($rows as $row): ?>
            <li><?php echo $row['name']; ?></li>
        <?php endforeach; ?>
    </ul>

    <p> tekstiä</p>
</body>

</html>