<?php

declare(strict_types=1);
/**
 * Static class to use pdo
 */
class DB
{
    public ?PDO $pdo = null;
    /**
     * @return PDO|void
     */
    public static function &connection()
    {
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_CASE => PDO::CASE_NATURAL,
            PDO::ATTR_ORACLE_NULLS => PDO::NULL_EMPTY_STRING
        ];
        $host = '';
        $dbname = '';
        $username = '';
        $password = '';
        try {
            $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password, $options);
        } catch (PDOException $exception) {
            printf("\nPDO Error : " . $exception->getMessage() . "\n<br/>");
            die();
        }
        return $pdo;
    }
}
