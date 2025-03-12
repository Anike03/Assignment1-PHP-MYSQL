-- Create the database
CREATE DATABASE IF NOT EXISTS ipl_db;
USE ipl_db;

-- Create teams table
CREATE TABLE teams (
    team_id INT AUTO_INCREMENT PRIMARY KEY,
    team_name VARCHAR(100) NOT NULL,
    captain VARCHAR(100) NOT NULL,
    coach VARCHAR(100) NOT NULL,
    home_city VARCHAR(100) NOT NULL,
    logo_path VARCHAR(255) NOT NULL
);

-- Create players table
CREATE TABLE players (
    player_id INT AUTO_INCREMENT PRIMARY KEY,
    player_name VARCHAR(100) NOT NULL,
    team_id INT,
    role VARCHAR(50) NOT NULL,
    nationality VARCHAR(50) NOT NULL,
    date_of_birth DATE NOT NULL,
    picture_path VARCHAR(255) NOT NULL,
    FOREIGN KEY (team_id) REFERENCES teams(team_id)
);

-- Create matches table
CREATE TABLE matches (
    match_id INT AUTO_INCREMENT PRIMARY KEY,
    team1_id INT,
    team2_id INT,
    match_date DATE NOT NULL,
    venue VARCHAR(100) NOT NULL,
    winner_id INT,
    FOREIGN KEY (team1_id) REFERENCES teams(team_id),
    FOREIGN KEY (team2_id) REFERENCES teams(team_id),
    FOREIGN KEY (winner_id) REFERENCES teams(team_id)
);

-- Insert sample data into teams table
INSERT INTO teams (team_name, captain, coach, home_city, logo_path) 
VALUES 
('Mumbai Indians', 'Rohit Sharma', 'Mark Boucher', 'Mumbai', 'assets/images/teams/mi.png'),
('Chennai Super Kings', 'MS Dhoni', 'Stephen Fleming', 'Chennai', 'assets/images/teams/csk.png'),
('Royal Challengers Bangalore', 'Faf du Plessis', 'Sanjay Bangar', 'Bengaluru', 'assets/images/teams/rcb.png'),
('Kolkata Knight Riders', 'Shreyas Iyer', 'Chandrakant Pandit', 'Kolkata', 'assets/images/teams/kkr.png'),
('Delhi Capitals', 'Rishabh Pant', 'Ricky Ponting', 'Delhi', 'assets/images/teams/dc.png');

-- Insert sample data into players table
INSERT INTO players (player_name, team_id, role, nationality, date_of_birth, picture_path) 
VALUES 
('Virat Kohli', 3, 'Batsman', 'India', '1988-11-05', 'assets/images/players/kohli.jpg'),
('Jasprit Bumrah', 1, 'Bowler', 'India', '1993-12-06', 'assets/images/players/bumrah.jpg'),
('Ravindra Jadeja', 2, 'All-rounder', 'India', '1988-12-06', 'assets/images/players/jadeja.jpg'),
('Shreyas Iyer', 4, 'Batsman', 'India', '1994-12-06', 'assets/images/players/siyer.jpg'),
('Rishabh Pant', 5, 'Wicketkeeper', 'India', '1997-10-04', 'assets/images/players/pant.jpg'),
('Andre Russell', 4, 'All-rounder', 'Jamaica', '1988-04-29', 'assets/images/players/ar.jpg'),
('Kagiso Rabada', 5, 'Bowler', 'South Africa', '1995-05-25', 'assets/images/players/rabada.jpg'),
('Sunil Narine', 4, 'All-rounder', 'Trinidad and Tobago', '1988-05-26', 'assets/images/players/sn.jpg'),
('David Warner', 5, 'Batsman', 'Australia', '1986-10-27', 'assets/images/players/dw.jpg');

-- Insert sample data into matches table
INSERT INTO matches (team1_id, team2_id, match_date, venue, winner_id) 
VALUES 
(1, 2, '2023-04-09', 'Wankhede Stadium', 1),
(2, 3, '2023-04-12', 'M. A. Chidambaram Stadium', 2),
(4, 5, '2023-04-15', 'Eden Gardens', 4),
(3, 4, '2023-04-18', 'Arun Jaitley Stadium', 3),
(1, 5, '2023-04-21', 'Wankhede Stadium', 1),
(2, 4, '2023-04-24', 'M. A. Chidambaram Stadium', 4);