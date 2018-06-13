<?php


$connect = new PDO('mysql:host=localhost;dbname=schedule', 'root', '');

$data = array();


$query = "SELECT S.id as sts,E.id,E.description,E.date1,E.date2,S.description as desc2 FROM tb_events as E INNER JOIN tb_status as S ON E.fk_status = S.id";

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();

foreach($result as $row)
{
  $data[] = array(
    'id'   => $row["id"],
    'title'   => utf8_decode($row["description"])."-".$row["id"],
    'start'   => $row["date1"],
    'start'   => $row["date2"],
    'status' => $row["desc2"],
    'sts' => $row["sts"]
  );
}

echo json_encode($data);


?>
