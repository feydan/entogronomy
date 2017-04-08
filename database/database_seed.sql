CREATE TABLE insects (
	insect_id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	species VARCHAR(128),
	common_name VARCHAR(128) NOT NULL,
	description TEXT
);

CREATE TABLE plants (
	plant_id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	species VARCHAR(128),
	common_name VARCHAR(128) NOT NULL,
	description TEXT
);

CREATE TABLE insect_images (
	insect_id INT UNSIGNED NOT NULL,
	url VARCHAR(512)
);

CREATE TABLE interactions (
	interaction_id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	plant_id INT UNSIGNED NOT NULL,
	insect_id INT UNSIGNED NOT NULL,
	`type` ENUM('positive', 'negative', 'neutral') NOT NULL,
	`verb` ENUM('consumes', 'polinates'),
	`location` VARCHAR(128),
	`lat` INT,
	`long` INT,
	description TEXT
);

CREATE TABLE interaction_images (
	interaction_id INT UNSIGNED NOT NULL,
	url VARCHAR(512),
	approval_status ENUM('new', 'pending', 'approved')
);