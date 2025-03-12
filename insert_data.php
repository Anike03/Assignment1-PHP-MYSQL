<?php
// Include the database connection file
include 'includes/db_connect.php';

// Insert teams data
$sql_teams = "INSERT INTO teams (team_name, captain, coach, home_city, logo_path) 
              VALUES 
              ('Mumbai Indians', 'Rohit Sharma', 'Mark Boucher', 'Mumbai', 'assets/images/teams/mi.png'),
              ('Chennai Super Kings', 'MS Dhoni', 'Stephen Fleming', 'Chennai', 'assets/images/teams/csk.png'),
              ('Royal Challengers Bangalore', 'Faf du Plessis', 'Sanjay Bangar', 'Bengaluru', 'assets/images/teams/rcb.png'),
              ('Kolkata Knight Riders', 'Shreyas Iyer', 'Chandrakant Pandit', 'Kolkata', 'assets/images/teams/kkr.png'),
              ('Delhi Capitals', 'Rishabh Pant', 'Ricky Ponting', 'Delhi', 'assets/images/teams/dc.png')";

if ($conn->query($sql_teams)) {
    echo "Teams data inserted successfully.<br>";
} else {
    echo "Error inserting teams data: " . $conn->error . "<br>";
}

// Insert players data
$sql_players = "INSERT INTO players (player_name, team_id, role, nationality, date_of_birth, picture_path) 
                VALUES 
                ('Virat Kohli', 3, 'Batsman', 'India', '1988-11-05', 'assets/images/players/kohli.jpg'),
                ('Jasprit Bumrah', 1, 'Bowler', 'India', '1993-12-06', 'assets/images/players/bumrah.jpg'),
                ('Ravindra Jadeja', 2, 'All-rounder', 'India', '1988-12-06', 'assets/images/players/jadeja.jpg'),
                ('Shreyas Iyer', 4, 'Batsman', 'India', '1994-12-06', 'assets/images/players/si.jpg'),
                ('Rishabh Pant', 5, 'Wicketkeeper', 'India', '1997-10-04', 'assets/images/players/pant.jpg'),
                ('Andre Russell', 4, 'All-rounder', 'Jamaica', '1988-04-29', 'assets/images/players/ar.jpg'),
                ('Kagiso Rabada', 5, 'Bowler', 'South Africa', '1995-05-25', 'assets/images/players/rabada.jpg'),
                ('Sunil Narine', 4, 'All-rounder', 'Trinidad and Tobago', '1988-05-26', 'assets/images/players/sn.jpg'),
                ('David Warner', 5, 'Batsman', 'Australia', '1986-10-27', 'assets/images/players/dw.jpg')";

if ($conn->query($sql_players)) {
    echo "Players data inserted successfully.<br>";
} else {
    echo "Error inserting players data: " . $conn->error . "<br>";
}

// Insert matches data
$sql_matches = "INSERT INTO matches (team1_id, team2_id, match_date, venue, winner_id) 
                VALUES 
                (1, 2, '2023-04-09', 'Wankhede Stadium', 1),
                (2, 3, '2023-04-12', 'M. A. Chidambaram Stadium', 2),
                (4, 5, '2023-04-15', 'Eden Gardens', 4),
                (3, 4, '2023-04-18', 'Arun Jaitley Stadium', 3),
                (1, 5, '2023-04-21', 'Wankhede Stadium', 1),
                (2, 4, '2023-04-24', 'M. A. Chidambaram Stadium', 4)";

if ($conn->query($sql_matches)) {
    echo "Matches data inserted successfully.<br>";
} else {
    echo "Error inserting matches data: " . $conn->error . "<br>";
}

// Close the database connection
$conn->close();
?>