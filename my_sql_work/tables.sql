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
    player_name varchar(50), 
    player_photo VARCHAR(512),
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
-- ('Egypt', 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/fe/Flag_of_Egypt.svg/1200px-Flag_of_Egypt.svg.png'),
-- ('Poland', 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/12/Flag_of_Poland.svg/1200px-Flag_of_Poland.svg.png');


INSERT INTO players (player_name, player_photo, nationality_id, club_id, statistics_id, position_id) VALUES
('Lionel Messi', 'https://cdn.sofifa.net/players/158/023/25_120.png', 1, 1, 1, 2),   --  ST
('Cristiano Ronaldo', 'https://cdn.sofifa.net/players/020/801/25_120.png', 2, 2, 2, 2), -- ST
('Kylian Mbappé', 'https://cdn.sofifa.net/players/231/747/25_120.png', 3, 3, 3, 2),  -- ST
('Neymar Jr', 'https://cdn.sofifa.net/players/190/871/25_120.png', 4, 3, 4, 3),   --  LW
('Kevin De Bruyne', 'https://cdn.sofifa.net/players/192/985/25_120.png', 10, 4, 5, 10), --  CM
('Mohamed Salah', 'https://cdn.sofifa.net/players/209/331/25_120.png', 12, 7, 6, 14),  -- RW
('Robert Lewandowski', 'https://cdn.sofifa.net/players/188/545/25_120.png', 13, 8, 7, 2), -- ST
('Luka Modrić', 'https://cdn.sofifa.net/players/177/003/25_120.png', 6, 5, 8, 10),    -- CM

DELETE FROM players;
DELETE FROM positions;
DELETE FROM nationalities;
DELETE FROM clubs;
DELETE FROM statistics;

-- delete all data .. to replace it with a valid one ===> this because my players tables is contain 4 foreign keys 


-- Nationalities 

INSERT INTO nationalities (nationality_name, nationality_flag) VALUES
('Morocco', 'https://upload.wikimedia.org/wikipedia/commons/thumb/2/2c/Flag_of_Morocco.svg/1200px-Flag_of_Morocco.svg.png'),
('Argentina', 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/1a/Flag_of_Argentina.svg/1200px-Flag_of_Argentina.svg.png'),
('Portugal', 'https://upload.wikimedia.org/wikipedia/commons/thumb/5/5c/Flag_of_Portugal.svg/1200px-Flag_of_Portugal.svg.png'),
('France', 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/bc/Flag_of_France.svg/1200px-Flag_of_France.svg.png'),
('Brazil', 'https://upload.wikimedia.org/wikipedia/commons/thumb/0/05/Flag_of_Brazil.svg/1200px-Flag_of_Brazil.svg.png'),
('England', 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/be/Flag_of_England.svg/1200px-Flag_of_England.svg.png'),
('Spain', 'https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Flag_of_Spain.svg/1200px-Flag_of_Spain.svg.png'),
('Germany', 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/ba/Flag_of_Germany.svg/1200px-Flag_of_Germany.svg.png'),
('Netherlands', 'https://upload.wikimedia.org/wikipedia/commons/thumb/2/20/Flag_of_the_Netherlands.svg/1200px-Flag_of_the_Netherlands.svg.png'),
('Uruguay', 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/fe/Flag_of_Uruguay.svg/1200px-Flag_of_Uruguay.svg.png'),
('Belgium', 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/65/Flag_of_Belgium.svg/1200px-Flag_of_Belgium.svg.png');

-- clubs

INSERT INTO clubs (club_name, club_logo) VALUES
('Sevilla FC', 'https://tmssl.akamaized.net//images/wappen/head/368.png?lm=1499965623'),
('Manchester United', 'https://tmssl.akamaized.net//images/wappen/head/985.png?lm=1453943702'),
('Manchester City', 'https://tmssl.akamaized.net//images/wappen/head/281.png?lm=1458851474'),
('Real Madrid', 'https://tmssl.akamaized.net//images/wappen/head/418.png?lm=1479946867'),
('Bayern Munich', 'https://tmssl.akamaized.net//images/wappen/head/27.png?lm=1455377001'),
('Liverpool FC', 'https://tmssl.akamaized.net//images/wappen/head/31.png?lm=1466339207'),
('FC Barcelona', 'https://tmssl.akamaized.net//images/wappen/head/131.png?lm=1458848073'),
('Arsenal FC', 'https://tmssl.akamaized.net//images/wappen/head/11.png?lm=1673279295'),
('Chelsea FC', 'https://tmssl.akamaized.net//images/wappen/head/631.png?lm=1673279894'),
('Tottenham Hotspur', 'https://tmssl.akamaized.net//images/wappen/head/286.png?lm=1638873880'),
('Juventus FC', 'https://tmssl.akamaized.net//images/wappen/head/506.png?lm=1676906451');


-- positions

INSERT INTO positions (position_name) VALUES
('GK'),      -- Goalkeeper
('LB'),      -- Left Back
('RB'),      -- Right Back
('CB'),      -- Center Back
('CDM'),     -- Center Defensive Midfielder
('CM'),      -- Center Midfielder
('CAM'),     -- Center Attacking Midfielder
('LM'),      -- Left Midfielder
('RM'),      -- Right Midfielder
('LW'),      -- Left Winger
('RW'),      -- Right Winger
('ST'),       -- Striker
('CF'),      -- Center Forward
('LWB'),     -- Left Wing Back
('RWB');     -- Right Wing Back

-- statistics

INSERT INTO statistics (rating, pace, shooting, passing, dribbling, defending, physical) VALUES
(86, 70, 60, 87, 78, 35, 60),    -- Example Midfielder
(89, 85, 82, 80, 92, 40, 77),  -- Example Winger/Forward
(78, 82, 65, 70, 75, 75, 85),  -- Example Defender
(92, 94, 90, 88, 93, 45, 79),  -- Example High rated Forward
(84, 78, 79, 85, 86, 70, 70),  -- Example Balanced Midfielder
(76, 85, 70, 65, 78, 60, 70),  -- Example Fast Player
(88, 90, 82, 84, 88, 40, 75),    -- Example Forward/Winger
(80, 70, 70, 80, 75, 60, 78),  -- Example Midfielder
(75, 50, 60, 60, 55, 80, 90),  -- Example Strong Defender
(86, 60, 82, 82, 78, 80, 60),  -- Example Defender/Midfielder
(93, 80, 95, 94, 92, 80, 75),    -- Example High Rated Attacking Midfielder
(88, 80, 85, 80, 85, 50, 90),    -- Example Strong Attacking Midfielder
(79, 75, 70, 80, 88, 60, 78),     -- Example good balance between dribble and passing
(70, 78, 80, 60, 70, 60, 90),    -- Example physical and shooting
(82, 80, 85, 75, 82, 88, 70);     -- Example Good defending and balance in other aspects

-- 
