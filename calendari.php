<?php
$semana = 0;

for($i=1;$i<=date('t');$i++) {
    $dia_semana = date('N', strtotime(date('Y-m').'-'.$i));
    $calendario[$semana][$dia_semana] = $i;
    if ($dia_semana == 7) {
        $semana++;
    };
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Calendari mes actual</title>
</head>
<body>
<table border="2">
    <thead>
    <tr>
        <th>Dilluns</th>
        <th>Dimarts</th>
        <th>Dimecres</th>
        <th>Dijous</th>
        <th>Divendres</th>
        <th>Dissabte</th>
        <th>Diumenge</th>
    </tr>
    </thead>
    <tbody>
        <tr>
            <td>dias</td>
        </tr>
    </tbody>
</table>
</body>
</html>
