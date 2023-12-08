<?php

namespace Stage\Portfolio\Functions;

class DataGetter
{
    public function getData($conn, $table)
    {
        $stmt = $conn->prepare("SELECT * FROM $table");

        if ($stmt)
        {
            $stmt->execute();

            $stmt->fetch_assoc();
        }


        $stmt->close();
    }
}