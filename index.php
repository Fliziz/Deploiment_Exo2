<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Site de Streaming de Musique</title>
    <link rel="stylesheet" href="styles.css"> <!-- Lien vers le CSS pour styliser la page -->
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }
        .header {
            padding: 20px;
            background-color: #1e90ff;
            color: white;
            text-align: center;
        }
        .container {
            padding: 20px;
        }
        .song {
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            background-color: #fff;
            border-radius: 5px;
        }
        .song h3 {
            margin: 0 0 10px 0;
        }
        .player {
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Bienvenue sur Mon Site de Streaming de Musique</h1>
    </div>

    <div class="container">
        <h2>Liste des chansons</h2>
        <?php
        // Exemple de données de chansons (normalement récupérées depuis une base de données)
        $songs = [
            ["title" => "Chanson 1", "artist" => "Artiste 1", "file" => "song1.mp3"],
            ["title" => "Chanson 2", "artist" => "Artiste 2", "file" => "song2.mp3"],
            ["title" => "Chanson 3", "artist" => "Artiste 3", "file" => "song3.mp3"],
        ];

        foreach ($songs as $song) {
            echo "<div class='song'>";
            echo "<h3>" . htmlspecialchars($song['title']) . "</h3>";
            echo "<p>Artiste: " . htmlspecialchars($song['artist']) . "</p>";
            echo "<div class='player'>";
            echo "<audio controls>";
            echo "<source src='" . htmlspecialchars($song['file']) . "' type='audio/mpeg'>";
            echo "Votre navigateur ne supporte pas l'audio HTML5.";
            echo "</audio>";
            echo "</div>";
            echo "</div>";
        }
        ?>
    </div>
</body>
</html>