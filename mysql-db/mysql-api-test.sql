CREATE DATABASE IF NOT EXISTS $DB_DATABASE_NAME;
CREATE DATABASE $DB_DATABASE_NAME;
CREATE USER '$DB_USERNAME'@'%' IDENTIFIED BY '$DB_PASSWORD'; 
GRANT ALL PRIVILEGES ON api_dev.* TO '$DB_USERNAME'@'%';
FLUSH PRIVILEGES;
use $DB_DATABASE_NAME;
CREATE table users(
          user_id int not null AUTO_INCREMENT,
          username varchar(100) NOT NULL,
          PRIMARY KEY (user_id)
);

INSERT INTO users(username) VALUES("armen");
