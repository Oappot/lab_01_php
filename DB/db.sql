/*DROP ALL FOR WORK*/
DROP DATABASE orfarile;
DROP USER orfarile@'%';

/*CREATE ALL FOR WORK*/
CREATE DATABASE IF NOT EXISTS orfarile;
USE orfarile;

/*USER FOR CONNECTION*/
CREATE USER IF NOT EXISTS orfarile@'%' IDENTIFIED BY 'orfarile';

GRANT ALL ON orfarile.* TO 'orfarile'@'%';

CREATE TABLE IF NOT EXISTS users(
    user_id INT(10) NOT NULL AUTO_INCREMENT,
    user_login VARCHAR(20) NOT NULL,
    user_password VARCHAR(32) NOT NULL,
    user_mail VARCHAR(50) NOT NULL,
    PRIMARY KEY (user_id)
);

