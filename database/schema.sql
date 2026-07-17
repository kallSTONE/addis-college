-- Addis Future College — MySQL schema
-- Production database. The PHP app falls back to JSON files in environments
-- without MySQL, but this schema should be applied to the production database.

CREATE DATABASE IF NOT EXISTS `addis_future_college`
  CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `addis_future_college`;

CREATE TABLE IF NOT EXISTS `applications` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `first_name` VARCHAR(80) NOT NULL,
  `last_name` VARCHAR(80) NOT NULL,
  `email` VARCHAR(160) NOT NULL,
  `phone` VARCHAR(40) NOT NULL,
  `dob` DATE NULL,
  `gender` VARCHAR(20) NULL,
  `program` VARCHAR(160) NOT NULL,
  `intake` VARCHAR(60) NULL,
  `address` VARCHAR(255) NULL,
  `city` VARCHAR(100) NULL,
  `region` VARCHAR(100) NULL,
  `school` VARCHAR(200) NULL,
  `gpa` VARCHAR(40) NULL,
  `notes` TEXT NULL,
  `ip` VARCHAR(64) NULL,
  `status` ENUM('new','reviewing','interview','offered','enrolled','rejected') NOT NULL DEFAULT 'new',
  `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  INDEX `idx_applications_email` (`email`),
  INDEX `idx_applications_status` (`status`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE IF NOT EXISTS `contact_messages` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `name` VARCHAR(120) NOT NULL,
  `email` VARCHAR(160) NOT NULL,
  `phone` VARCHAR(40) NULL,
  `subject` VARCHAR(120) NULL,
  `message` TEXT NOT NULL,
  `ip` VARCHAR(64) NULL,
  `is_read` TINYINT(1) NOT NULL DEFAULT 0,
  `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  INDEX `idx_contact_email` (`email`),
  INDEX `idx_contact_unread` (`is_read`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE IF NOT EXISTS `portal_interest` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `portal` VARCHAR(40) NOT NULL,
  `email` VARCHAR(160) NOT NULL,
  `ip` VARCHAR(64) NULL,
  `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  INDEX `idx_portal` (`portal`),
  INDEX `idx_portal_email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE IF NOT EXISTS `newsletter_subscribers` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `email` VARCHAR(160) NOT NULL UNIQUE,
  `subscribed_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
