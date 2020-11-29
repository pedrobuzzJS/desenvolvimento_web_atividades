<?php

    function dados($conn) {
        try {
            $sSql = 'select * from regiao;';

            $stmt = $conn->prepare($sSql);
        }

    }

    function listar($result) {

    }