CREATE TABLE `user_table`
    ( `id` INT NOT NULL AUTO_INCREMENT , 
      `type` INT NOT NULL , 
      `username` VARCHAR(20) NOT NULL , 
      `password` VARCHAR(20) NOT NULL ,
      PRIMARY KEY (`id`));

INSERT INTO `user_table` 
    (`id`, `type`, `username`, `password`) 
VALUES 
    (NULL, 2, 'root', 'root'),
    (NULL, 1, 'admin', 'admin'),
    (NULL, 0, 'user0', 'user0'),
    (NULL, 0, 'user1', 'user1'),
    (NULL, 0, 'user2', 'user2')
    ;