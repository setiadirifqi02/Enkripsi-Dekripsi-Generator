<?php require('components/head.php') ?>
<?php function enkripsi()
{
    $input = $_POST["input"];
    $key = array(
        'R' => 'a', 'I' => 'b', 'F' => 'c', 'Q' => 'd', 'S' => 'e',
        'E' => 'f', 'T' => 'g', 'A' => 'h', 'D' => 'i', 'B' => 'j',
        'C' => 'k', 'G' => 'l', 'H' => 'm', 'J' => 'n', 'K' => 'o',
        'L' => 'p', 'M' => 'q', 'N' => 'r', 'O' => 's', 'P' => 't',
        '*' => 'u', '^' => 'v', '@' => 'w', '$' => 'x', '?' => 'y', '~' => 'z'
    );

    $dekripsi = str_replace(array_keys($key), $key, $input);

    // echo "Kata yang di enkripsi adalah", $input;
    // echo "<br><br>";
    echo "<div class='text-bg-light me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden'>
            <div class='bg-dark shadow-sm mx-auto' style='width: 90%; height: 600px; border-radius: 21px 21px 0 0'>
                <h4 class='py-4 mx-4 text-light'>Hasil Enkripsi</>
                <p class='lead py-5 text-light fw-lighter'>{$dekripsi}</p>
            </div>
          </div>";
};

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    enkripsi();
}
?>
<?php require('components/footer.php') ?>