<?php

namespace Stage\Portfolio\Functions;

use http\Exception\RuntimeException;

class DataGetter
{
    private $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    public function getData(string $table, int $id = null): array|false
    {
        if ($id !== null)
        {
            $stmt = $this->conn->prepare("SELECT * FROM $table WHERE id = ?");
            $stmt->bind_param("i", $id);
        }
        else
        {
            $stmt = $this->conn->prepare("SELECT * FROM $table");
        }

        if ($stmt)
        {
            $stmt->execute();

            $result = $stmt->get_result();

            if ($result)
            {
                $data = $result->fetch_all(MYSQLI_ASSOC);

                $stmt->close();

                return $data;
            }

            $stmt->close();
        }

        return false;
    }
}
