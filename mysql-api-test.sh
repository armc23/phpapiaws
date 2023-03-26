echo "** Creating default DB and users"
mysql -u root -p$MYSQL_ROOT_PASSWORD -e \
"CREATE DATABASE IF NOT EXISTS $DB_DATABASE_NAME;
CREATE USER IF NOT EXISTS '$DB_USERNAME'@'%' IDENTIFIED BY '$DB_PASSWORD';
GRANT ALL PRIVILEGES ON $DB_DATABASE_NAME.* TO '$DB_USERNAME'@'%';
FLUSH PRIVILEGES;
use $DB_DATABASE_NAME;
CREATE table users( user_id int not null AUTO_INCREMENT,username varchar(100) NOT NULL,PRIMARY KEY (user_id));

INSERT INTO users(username) VALUES('armen');"

echo "** Default DB and user are created"
