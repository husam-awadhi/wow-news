<?php

namespace App;

use \PDO;
use \PDOException;

final class DB
{
    private string $dsn = "mysql:host=%s;dbname=%s;charset=%s";

    static $connection = false;
    private string $host;
    private string $db;
    private string $user;
    private string $pass;
    private string $charset;

    public function __construct($host = '', $db = '', $user = '', $pass = '', $charset = 'utf8')
    {
        $this->host = $host;
        $this->db = $db;
        $this->user = $user;
        $this->pass = $pass;
        $this->charset = $charset;

        self::$connection = $this->connect();
    }

    public function connect()
    {

        $pdo = false;

        try {
            if (!$this->host && !$this->db) $this->setConfigurations();
            $dsn = sprintf($this->dsn, $this->host, $this->db, $this->charset);

            $options = [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES   => false,
            ];

            $pdo = new PDO($dsn, $this->user, $this->pass, $options);
        } catch (PDOException $e) {
            Helpers::log("[{$e->getCode()}] {$e->getMessage()}", 'ERROR');
        }
        return $pdo;
    }

    public function setConfigurations()
    {
        $this->host = Config::getValue('db.host');
        $this->db   = Config::getValue('db.name');
        $this->user = Config::getValue('db.user');
        $this->pass = Config::getValue('db.password');
        $this->charset = Config::getValue('db.charset');
    }

    static public function getConnection()
    {
        if (!self::$connection) {
            new self();
        }
        return self::$connection;
    }
}
