<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <title>Organizer</title>
    <link rel="stylesheet" href="./styl5.css">
</head>

<body>
    <header>
        <section id="bannerOne">
            <img src="./logo1.png" alt="Mój kalendarz">
        </section>
        <section id="bannerTwo">
            <?php
            $mysqli = new mysqli('localhost', 'root', '', 'egzamin5');
            if ($mysqli->connect_error) {
                die("Connection failed: " . $mysqli->connect_error);
            }
            $query = "SELECT miesiac, rok FROM zadania WHERE dataZadania = '2020-07-01';";
            $result = $mysqli->query($query);
            $data = $result->fetch_assoc();
            ?>
            <h2>KALENDARZ</h2>
            <h1>miesiąc: <?= htmlspecialchars($data['miesiac']) ?>, rok: <?= htmlspecialchars($data['rok']) ?></h1>
        </section>
    </header>
    <main>
        <?php
        $query = "SELECT dataZadania, wpis FROM zadania WHERE miesiac = 'lipiec';";
        $result = $mysqli->query($query);
        while ($row = $result->fetch_assoc()) {
            echo "<div class='dzien'>
                    <h5>" . htmlspecialchars($row['dataZadania']) . "</h5>
                    <p>" . htmlspecialchars($row['wpis']) . "</p>
                </div>";
        }
        ?>
    </main>
    <footer>
        <form action="./kalendarz.php" method="POST">
            <label>dodaj wpis:
                <input type="text" name="wpis">
            </label>
            <button name="wyslij">DODAJ</button>
        </form>
        <?php
        if (isset($_POST['wyslij'])) {
            $wpis = $_POST['wpis'];
            $query = "UPDATE zadania SET wpis = ? WHERE dataZadania = ?;";
            $stmt = $mysqli->prepare($query);
            $stmt->bind_param("ss", $wpis, $data);
            $data = '2020-07-13';
            $stmt->execute();
        }
        $mysqli->close();
        ?>
        <p>Stronę napisał: Mateusz Połczyński</p>
    </footer>
</body>

</html>