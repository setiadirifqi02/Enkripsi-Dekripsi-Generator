<?php require('components/head.php') ?>
<?php function enkripsi()
{
    $input = $_POST["input"];
    $inputToLowerCase = strtolower($input);
    $key = array(
        'a' => 'R', 'b' => 'I', 'c' => 'F', 'd' => 'Q', 'e' => 'S',
        'f' => 'E', 'g' => 'T', 'h' => 'A', 'i' => 'D', 'j' => 'B',
        'k' => 'C', 'l' => 'G', 'm' => 'H', 'n' => 'J', 'o' => 'K',
        'p' => 'L', 'q' => 'M', 'r' => 'N', 's' => 'O', 't' => 'P',
        'u' => '*', 'v' => '^', 'w' => '@', 'x' => '$', 'y' => '?', 'z' => '~'
    );

    $enkripsi = str_replace(array_keys($key), $key, $inputToLowerCase);
    $upperEnkripsi = strtoupper($enkripsi);

    // echo "Kata yang di enkripsi adalah", $input;
    // echo "<br><br>";
    echo "<div class='text-bg-dark me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden'>
            <div class='bg-light shadow-sm mx-auto' style='width: 90%; height: 600px; border-radius: 21px 21px 0 0'>
                <h4 class='py-4 mx-4 text-dark'>Hasil Enkripsi</>
                <p class='lead py-5 text-dark fw-lighter'>{$upperEnkripsi}</p>
            </div>
          </div>";
};

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    enkripsi();
}
?>
<?php require('components/footer.php') ?>