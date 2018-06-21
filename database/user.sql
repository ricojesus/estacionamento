
CREATE USER 'parking_user'@'%' IDENTIFIED WITH mysql_native_password;GRANT USAGE ON *.* TO 'parking_user'@'%' REQUIRE NONE WITH MAX_QUERIES_PER_HOUR 0 MAX_CONNECTIONS_PER_HOUR 0 MAX_UPDATES_PER_HOUR 0 MAX_USER_CONNECTIONS 0;
SET PASSWORD FOR 'parking_user'@'%' = 'parking_user';

GRANT ALL PRIVILEGES ON `parking`.* TO 'parking_user'@'localhost';



REVOKE ALL PRIVILEGES ON `parking`.* FROM 'parking_user'@'localhost'; GRANT ALL PRIVILEGES ON `parking`.* TO 'parking_user'@'localhost' WITH GRANT OPTION;

FLUSH PRIVILEGES;
