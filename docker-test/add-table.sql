CREATE TABLE `haisu`.`users` ( `id` BIGINT NOT NULL AUTO_INCREMENT , `name` VARCHAR(255) NOT NULL ,
 `password` VARCHAR(255) NOT NULL ,
 `email` VARCHAR(255) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;

 INSERT INTO `users` (`id`, `name`, `password`, `email`) VALUES (NULL, 'test2', 'test2', 'test2@mail.com');