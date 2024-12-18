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
-- creat nationalities table 
CREATE TABLE statistics(
	statistics_id int PRIMARY KEY AUTO_INCREMENT,
    rating INT, 
    pace INT, 
    shooting INT, 
    passing INT, 
    dribbling INT, 
    defending INT, 
    physical INT ,
);

CREATE TABLE position(
	position_id int PRIMARY KEY AUTO_INCREMENT,
    name varchar(100),
    logo varchar(500)
);
-- Table of players
CREATE DATABASE futactic;
CREATE TABLE Players( 
    player_id INT PRIMARY KEY NOT NULL AUTO_INCREMENT, 
    name_pla varchar(50), 
    photo VARCHAR(512),
    position_id int, 
    nationality_id int,
    club_id int,
    statistics_id int,
    FOREIGN KEY(club_id) references clubs(club_id),
    FOREIGN KEY(nationality_id) references nationalities(nationality_id),
    FOREIGN KEY(statistics_id) references statistics(statistics_id),
    FOREIGN KEY(position_id) references position(position_id)
);



