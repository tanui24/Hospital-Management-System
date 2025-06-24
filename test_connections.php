<?php
$files = [
    'admin-panel.php',
    'admin-panel1.php',
    'doctor-panel.php',
    'func.php',
    'func1.php',
    'func2.php',
    'func3.php',
    'newfunc.php',
    'include/config.php'
];

foreach ($files as $file) {
    echo "Testing $file... ";
    $content = file_get_contents($file);
    preg_match('/mysqli_connect\(.*?\);/', $content, $matches);
    
    if (!empty($matches[0])) {
        eval($matches[0]);
        if (mysqli_connect_error()) {
            echo "FAILED: " . mysqli_connect_error() . "\n";
        } else {
            echo "SUCCESS!\n";
            mysqli_close($con);
        }
    } else {
        echo "No connection found\n";
    }
}
?>
