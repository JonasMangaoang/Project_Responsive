CREATE TABLE `time_table`
( `id` INT NOT NULL AUTO_INCREMENT , 
    `time_slot` VARCHAR(20) NULL ,
PRIMARY KEY (`id`)) ENGINE = InnoDB;

INSERT INTO `time_table` 
    (`id`, `time_slot`) 
VALUES 
    (NULL, '07:30 - 09:00a'),
    (NULL, '09:00 - 10:30a'),
    (NULL, '10:30 - 12:00a'),
    (NULL, '12:00 - 01:30p'),
    (NULL, '01:30 - 03:00p'),
    (NULL, '03:00 - 04:30p'),
    (NULL, '04:30 - 06:00p'),
    (NULL, '06:00 - 07:30p'),
    (NULL, '07:30 - 09:00p')
    ;