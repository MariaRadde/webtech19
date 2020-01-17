<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
echo '<table class="table table-striped table-hover table-responsive">
    <thead>
    <tr>';
        for($i=0; $i<count($multMyArray[0]); $i++) {
        echo '<th>'.$multMyArray[0][$i].'</th>'; } echo '
    </tr>
    </thead>
    <tbody>';
    for($i=1; $i<count($multMyArray); $i++) {
        echo '<tr>'; for($j=0; $j<count($multMyArray[$i]); $j++) {
        echo '<td>'.$multMyArray[$i][$j].'</td>'; }
        echo '</tr>'; }
        echo '</tbody> </table>';
</body>
</html>
