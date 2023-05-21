<?php

/**
 * Create a PDO database connection
 * 
 * @return PDO The PDO database connection
 * @throws PDOException If the connection to the database fails
 */
function pdo(): PDO
{
    $servername = "localhost";
    $dbname =   "lbvoyages"; //  ???
    $username = "root";
    $password = "";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // Set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch (PDOException $e) {
        throw new PDOException("Connection failed: " . $e->getMessage());
    }
}

/**
 * Check if the request method is POST
 * 
 * @return bool True if the request method is POST, false otherwise
 */
function is_post(): bool
{
    return $_SERVER["REQUEST_METHOD"] === "POST";
}


/**
 * Redirect to a specified URL
 * 
 * @param string $url The URL to redirect to
 * @return void
 */
function redirect(string $url): void
{
    header("Location: {$url}");
    die();
}

function partials(string $name , array $params = [])
{
    extract($params);
    require_once __DIR__."/partials/{$name}.php";
}
