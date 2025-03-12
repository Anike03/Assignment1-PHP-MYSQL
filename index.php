<?php
include 'includes/db_connect.php';

// Fetch teams data
$sql = "SELECT * FROM teams";
$teams_result = $conn->query($sql);

// Fetch players data
$sql = "SELECT players.player_name, players.role, players.picture_path, players.nationality, players.date_of_birth, teams.team_name 
        FROM players 
        JOIN teams ON players.team_id = teams.team_id";
$players_result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IPL Data</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <div class="container">
        <h1>INDIAN PREMIER LEAGUE</h1>

        <h2>Teams</h2>
        <div class="teams-container">
            <?php
            if ($teams_result->num_rows > 0) {
                while ($row = $teams_result->fetch_assoc()) {
                    // Define team URLs
                    $team_url = '';
                    switch ($row['team_name']) {
                        case 'Chennai Super Kings':
                            $team_url = 'https://www.chennaisuperkings.com/';
                            break;
                        case 'Royal Challengers Bangalore':
                            $team_url = 'https://www.royalchallengers.com/';
                            break;
                        case 'Mumbai Indians':
                            $team_url = 'https://www.mumbaiindians.com/';
                            break;
                        case 'Kolkata Knight Riders':
                            $team_url = 'https://www.iplt20.com/teams/kolkata-knight-riders';
                            break;
                        case 'Delhi Capitals':
                            $team_url = 'https://www.delhicapitals.in/';
                            break;
                        default:
                            $team_url = '#'; // Default link if no match
                    }

                    echo '<div class="team-card">';
                    echo '<a href="' . $team_url . '" target="_blank">';
                    echo '<img src="' . $row['logo_path'] . '" alt="' . $row['team_name'] . ' Logo" class="team-logo">';
                    echo '<h3>' . $row['team_name'] . '</h3>';
                    echo '</a>';
                    echo '<p>Captain: ' . $row['captain'] . '</p>';
                    echo '<p>Coach: ' . $row['coach'] . '</p>';
                    echo '<p>Home City: ' . $row['home_city'] . '</p>';
                    echo '</div>';
                }
            } else {
                echo "No teams found.";
            }
            ?>
        </div>

        <h2>Players</h2>
        <div class="players-container">
            <?php
            if ($players_result->num_rows > 0) {
                while ($row = $players_result->fetch_assoc()) {
                    echo '<div class="player-card">';
                    echo '<img src="' . $row['picture_path'] . '" alt="' . $row['player_name'] . '" class="player-picture">';
                    echo '<h3>' . $row['player_name'] . '</h3>';
                    echo '<p>Role: ' . $row['role'] . '</p>';
                    echo '<p>Team: ' . $row['team_name'] . '</p>';
                    echo '<p>Nationality: ' . $row['nationality'] . '</p>';
                    echo '<p>DOB: ' . $row['date_of_birth'] . '</p>';
                    echo '</div>';
                }
            } else {
                echo "No players found.";
            }
            ?>
        </div>
    </div>
</body>

</html>