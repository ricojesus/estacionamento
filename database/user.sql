CREATE USER 'parking_user'@'localhost' IDENTIFIED BY 'parking_user';

GRANT ALL PRIVILEGES ON parking.* TO 'parking_user'@'localhost';

FLUSH PRIVILEGES;
