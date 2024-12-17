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

