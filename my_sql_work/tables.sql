-- creat club table 
CREATE TABLE clubs(
	club_id int PRIMARY KEY AUTO_INCREMENT,
    name varchar(100),
    logo varchar(500)
);
-- creat nationalities table 
CREATE TABLE nationalities(
	nationality_id int PRIMARY KEY AUTO_INCREMENT,
    name varchar(100),
    flag varchar(500)
);
-- Table of players
CREATE DATABASE futactic;
CREATE TABLE Players( 
    player_id INT PRIMARY KEY NOT NULL AUTO_INCREMENT, 
    name_pla varchar(50), 
    photo VARCHAR(512),
    position varchar(50), 
    nationality_id int,
    club_id int,
    rating INT, 
    pace INT, 
    shooting INT, 
    passing INT, 
    dribbling INT, 
    defending INT, 
    physical INT ,
    FOREIGN KEY(club_id) references clubs(club_id),
    FOREIGN KEY(nationality_id) references nationalities(nationality_id)
);



