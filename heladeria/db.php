<?php
class MyDB extends PDO {
    private $dsn = 'sqlite:helados.db';

    public function __construct() {
        try {
            parent::__construct($this->dsn);
            $this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->createHeladoTable(); // Asegurarse de que la tabla de helados esté creada al instanciar la clase
        } catch(PDOException $e) {
            die("Error al conectar con la base de datos: " . $e->getMessage());
        }
    }

    private function createHeladoTable() {
        $sql = "CREATE TABLE IF NOT EXISTS helados (
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            flavor TEXT NOT NULL,
            description TEXT,
            price REAL NOT NULL
        )";
        $this->exec($sql);
    }

    public function insertHelado($flavor, $description, $price) {
        $sql = "INSERT INTO helados (flavor, description, price) VALUES (?, ?, ?)";
        $stmt = $this->prepare($sql);
        $stmt->execute([$flavor, $description, $price]);
    }

    public function deleteHelado($id) {
        $sql = "DELETE FROM helados WHERE id = ?";
        $stmt = $this->prepare($sql);
        $stmt->execute([$id]);
    }

    public function updateHelado($id, $flavor, $description, $price) {
        $sql = "UPDATE helados SET flavor = ?, description = ?, price = ? WHERE id = ?";
        $stmt = $this->prepare($sql);
        $stmt->execute([$flavor, $description, $price, $id]);
    }

    public function getAllHelados() {
        $sql = "SELECT * FROM helados";
        $stmt = $this->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}

// Instancia de la clase MyDB para la conexión a la base de datos
$db = new MyDB();
?>
