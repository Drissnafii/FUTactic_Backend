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

-- Insert sample data for player statistics

INSERT INTO statistics (rating, pace, shooting, passing, dribbling, defending, physical)
VALUES
    (88, 92, 85, 88, 90, 45, 75),   -- Example player with good all-around stats
    (93, 89, 94, 93, 95, 35, 78),    -- Example player who's an offensive star
    (75, 78, 70, 75, 72, 80, 78),   -- Example player who's more balanced
    (65, 60, 62, 68, 58, 82, 85),  -- Example player who's good for defense
    (80, 85, 80, 78, 82, 65, 78),    -- Example player who's fast with good shooting
    (70, 60, 75, 65, 60, 70, 80), -- Example player who is good at shooting and physical
    (90, 92, 85, 90, 92, 70, 70),  -- Example player who's great with good all around stats
     (66, 70, 70, 80, 60, 55, 89),   -- Example player who's very physical
    (68, 64, 64, 58, 83, 76, 54),
     (55, 80, 55, 75, 67, 55, 70),    -- Example player who's very fast
     (95, 90, 98, 97, 98, 85, 94),  -- Example player with very high stats
      (78, 80, 70, 75, 80, 85, 78),  -- Example player who is balanced in all aspects
    (90, 75, 92, 94, 85, 77, 75),   -- Example player with high offensive capabilities
    (70, 77, 66, 80, 79, 81, 55), -- Example player who is very good at passing and defending
    (70, 88, 70, 75, 80, 66, 79),
    (77, 70, 72, 70, 70, 80, 80); -- Another balanced player.


INSERT INTO nationalities (nationality_name, nationality_flag) VALUES
('Argentina', 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/1a/Flag_of_Argentina.svg/1200px-Flag_of_Argentina.svg.png'),
('Portugal', 'https://upload.wikimedia.org/wikipedia/commons/thumb/5/5c/Flag_of_Portugal.svg/1200px-Flag_of_Portugal.svg.png'),
('France', 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/bc/Flag_of_France.svg/1200px-Flag_of_France.svg.png'),
('Brazil', 'https://upload.wikimedia.org/wikipedia/commons/thumb/0/05/Flag_of_Brazil.svg/1200px-Flag_of_Brazil.svg.png'),
('England', 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/be/Flag_of_England.svg/1200px-Flag_of_England.svg.png'),
('Spain', 'https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Flag_of_Spain.svg/1200px-Flag_of_Spain.svg.png'),
('Germany', 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/ba/Flag_of_Germany.svg/1200px-Flag_of_Germany.svg.png'),
('Netherlands', 'https://upload.wikimedia.org/wikipedia/commons/thumb/2/20/Flag_of_the_Netherlands.svg/1200px-Flag_of_the_Netherlands.svg.png'),
('Uruguay', 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/fe/Flag_of_Uruguay.svg/1200px-Flag_of_Uruguay.svg.png'),
('Belgium', 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/65/Flag_of_Belgium.svg/1200px-Flag_of_Belgium.svg.png'),
('Italy', 'https://upload.wikimedia.org/wikipedia/commons/thumb/0/03/Flag_of_Italy.svg/1200px-Flag_of_Italy.svg.png'),
('Egypt', 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/fe/Flag_of_Egypt.svg/1200px-Flag_of_Egypt.svg.png'),
('Poland', 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/12/Flag_of_Poland.svg/1200px-Flag_of_Poland.svg.png');



