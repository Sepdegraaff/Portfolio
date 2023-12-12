<?php

namespace Stage\Portfolio\Functions;

class DataGetter
{
    public function getData($conn, string $table): array|false
    {
        $stmt = $conn->prepare("SELECT * FROM $table");

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
