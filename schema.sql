CREATE DATABASE IF NOT EXISTS `customize_gift`;
USE `customize_gift`;

CREATE TABLE IF NOT EXISTS `categories` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `cat_title` VARCHAR(255) NOT NULL,
  `cat_image` VARCHAR(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE IF NOT EXISTS `brand` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `brand_title` VARCHAR(255) NOT NULL,
  `brand_image` VARCHAR(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE IF NOT EXISTS `products` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `product_title` VARCHAR(255) NOT NULL,
  `product_description` TEXT DEFAULT NULL,
  `product_keyword` VARCHAR(255) DEFAULT NULL,
  `brand_id` INT DEFAULT NULL,
  `category_id` INT DEFAULT NULL,
  `product_image1` VARCHAR(255) DEFAULT NULL,
  `product_image2` VARCHAR(255) DEFAULT NULL,
  `product_image3` VARCHAR(255) DEFAULT NULL,
  `product_price` DECIMAL(10,2) NOT NULL DEFAULT 0.00,
  `status` VARCHAR(50) DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE IF NOT EXISTS `users` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `full_name` VARCHAR(255) NOT NULL,
  `email` VARCHAR(255) NOT NULL,
  `mobile` VARCHAR(20) DEFAULT NULL,
  `password` VARCHAR(255) NOT NULL,
  `address` TEXT DEFAULT NULL,
  `city` VARCHAR(100) DEFAULT NULL,
  `state` VARCHAR(100) DEFAULT NULL,
  `country` VARCHAR(100) DEFAULT NULL,
  `gender` VARCHAR(20) DEFAULT NULL,
  `pincode` VARCHAR(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE IF NOT EXISTS `orders` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `user_id` INT NOT NULL,
  `order_number` VARCHAR(100) NOT NULL,
  `product_name` VARCHAR(255) DEFAULT NULL,
  `product_image` VARCHAR(255) DEFAULT NULL,
  `weight` VARCHAR(50) DEFAULT NULL,
  `quantity` INT DEFAULT 1,
  `subtotal` DECIMAL(10,2) NOT NULL DEFAULT 0.00,
  `payment_method` VARCHAR(50) DEFAULT NULL,
  `upi_transaction_id` VARCHAR(100) DEFAULT NULL,
  `order_status` VARCHAR(50) DEFAULT 'Pending',
  `created_at` DATETIME DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE IF NOT EXISTS `admins` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `username` VARCHAR(100) NOT NULL,
  `password` VARCHAR(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Sample initial data
INSERT INTO `categories` (`cat_title`, `cat_image`) VALUES
('Snacks', 'snacks.jpg'),
('Sweets', 'sweets.jpg')
ON DUPLICATE KEY UPDATE `cat_title`=`cat_title`;

INSERT INTO `brand` (`brand_title`, `brand_image`) VALUES
('CrackNCrunch Special', 'brand1.jpg')
ON DUPLICATE KEY UPDATE `brand_title`=`brand_title`;

INSERT INTO `admins` (`username`, `password`) VALUES
('admin', 'admin123')
ON DUPLICATE KEY UPDATE `username`=`username`;
