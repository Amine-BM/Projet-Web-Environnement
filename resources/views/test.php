<?php
        try {
            DB::connection()->getPdo();
            echo "connection done ";
            echo DB::connection()->getDatabaseName();

        } catch (\Exception $e) {
            die("Could not connect to the database.  Please check your configuration. error:" . $e );
        }
?>