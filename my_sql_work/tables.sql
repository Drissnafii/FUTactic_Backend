-- Table of players
CREATE DATABASE futactic;
CREATE TABLE Players( 
    player_id INT PRIMARY KEY NOT NULL AUTO_INCREMENT, 
    name varchar(50), 
    photo VARCHAR(512),
    position varchar(50), 
    nationality varchar(200), 
    flag VARCHAR(512), 
    club varchar(50), 
    logo VARCHAR(512), 
    rating INT, 
    pace INT, 
    shooting INT, 
    passing INT, 
    dribbling INT, 
    defending INT, 
    physical INT 
);

-- creat nationalities table 
CREATE TABLE nationalities(
	nationality_id int PRIMARY KEY AUTO_INCREMENT,
    name varchar(100),
    flag varchar(500)
);


-- creat club table 
CREATE TABLE clubs(
	club_id int PRIMARY KEY AUTO_INCREMENT,
    name varchar(100),
    logo varchar(500)
);
