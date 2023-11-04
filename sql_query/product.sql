CREATE TABLE `Products` (
    `product_id` BIGINT(20) UNSIGNED NOT NULL  AUTO_INCREMENT PRIMARY KEY,
    `catagory_id` BIGINT(20) UNSIGNED NOT NULL,
    `name` VARCHAR(100),
    `description` TEXT,
    `price` DECIMAL(10, 2),
    FOREIGN KEY (`catagory_id`) REFERENCES `Categories`(`category_id`)
)