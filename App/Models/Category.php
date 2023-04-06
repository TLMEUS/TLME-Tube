<?php
/*
 * This file contains the C:/TLME/Projects/TLME-Tube/App/Models/Category.php model class for the TLME-Tube Website
 *
 * PHP Version: 8.2
 *
 * @author troylmarker
 * @version 1.0
 * @since 2023-4-4
 */

namespace App\Models;

/**
 * Import needed classes
 */
use Core\Model;
use PDO;
use PDOException;

/**
 * The Category Model
 *
 * @extends Core\Model
 * @noinspection PhpUndefinedNamespaceInspection
 * @noinspection PhpUndefinedClassInspection
 */
class Category extends Model {

    /**
     * getAll Method
     *
     * This method returns a list of all categories in an array
     *
     * @return array
     */
    public static function getAll(): array {
        try {
            $db = static::getDB();
            $stmt = $db->query('SELECT * FROM categories');
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $ex) {
            echo $e->getMessage();
            return [];
        }

    }
}