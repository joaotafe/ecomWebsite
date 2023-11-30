<?php
function fetchRecords() {
    // Database credentials
    require_once("recordplayerdb_conn.php");

    // SQL query to fetch record details
    $sql = "SELECT recordID, title, artist, secondHand, price, recordCover FROM record";
    $result = $mysqli->query($sql);

    if ($result && $result->num_rows > 0) {
        $records = $result->fetch_all(MYSQLI_ASSOC);
        $result->free();
        $mysqli->close();
        return $records;
    } else {
        $mysqli->close();
        return [];
    }
}
?>