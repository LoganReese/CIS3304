<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Friends List</title>
</head>
<body>
<h1>Logan's Friends List</h1>
<form name="sourceForm" method="post" action="w9n2.php">
<p>Add friends to remember:<br>
<textarea name="source" rows="10" cols="40">
<?php
if(!empty($_POST['source'])) {
    $source = $_POST['source'];
    echo "$source";
}
else {
    defaultSource();
}
?>
</textarea>
</p>
<input type="submit" value="Add your friends!">
</form>
<?php
$arr = explode("\n", $source);
$listing = array();
echo "<p>";
for ($i=0; $i<count($arr); $i++) {
    preg_match('/(\w+)\s(\w+)/', $arr[$i], $matches);
    $listing[] = sprintf("%3s %-10s %s\n",
             $matches[1], $matches[2], $matches[3]);
}
echo "</p>";
echo "<p>Friends List</p>";
echo "<pre>";
foreach ($listing as $line) {
    echo "$line";
}
echo "</pre>";
?>
</body>
</html>
<?php
function defaultSource() {
    echo "John Smithing\n";
    echo "James Smithington \n";
    echo "Not Boca\n";
    echo "George LeButtler";
}
?>
