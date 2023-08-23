<?php if (isset($_POST['penyelesaianencrypt'])) : ?>
    <div class="container mt-3">
        <div class="card border-0 shadow">
            <h3 class="text-center">Penyelesaian Encrypt</h3>
            <?php if (!empty($_POST['m1']) && !empty($_POST['k1'])) : ?>
                <table class="table">
                    <tbody>
                        <tr>
                            <th class="bg-primary">M</th>
                            <?php
                            $m1 = strtoupper($_POST['m1']);
                            $katam1 = str_split($m1);
                            ?>
                            <?php foreach ($katam1 as $row) :  ?>
                                <th><?= $row; ?></th>
                            <?php endforeach ?>
                        </tr>
                        <tr>
                            <th class="bg-primary"></th>
                            <?php foreach ($katam1 as $row) :  ?>
                                <?php
                                for ($i = 0; $i < 26; $i++) {
                                    $letter = chr(65 + $i);
                                ?>
                                    <?php if ($row === $letter) :  ?>
                                        <th><?= $i ?></th>
                                    <?php elseif ($row == " ") : ?>
                                        <th></th>
                                        <?php break; ?>
                                    <?php endif; ?>
                                <?php } ?>
                            <?php endforeach ?>
                        </tr>
                        <tr>
                            <th class="bg-primary">K</th>
                            <?php
                            $ky = strtoupper($_POST['k1']);
                            $katak1 = str_split($ky);
                            $panjangKata = [];
                            $string = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
                            ?>
                            <?php foreach ($katam1 as $row) :  ?>


                                <?php foreach ($katak1 as $k) : ?>
                                    <?php $panjangKata[] = $k; ?>
                                    <?php if (count($panjangKata) > strlen($_POST['m1'])) : ?>
                                        <?php break; ?>
                                    <?php else : ?>
                                        <th><?= $k; ?></th>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            <?php endforeach ?>
                        </tr>

                        <tr>
                            <th class="bg-primary"></th>
                            <?php
                            $ky = strtoupper($_POST['k1']);
                            $katak1 = str_split($ky);
                            $panjangKata = [];
                            $string = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
                            ?>
                            <?php foreach ($katam1 as $row) :  ?>
                                <th><?= ord($_POST['k1']) - 97 ?></th>
                            <?php endforeach ?>
                        </tr>
                        <tr>
                            <th class="bg-primary">Mod 26</th>
                            <?php
                            $ky = strtoupper($_POST['k1']);
                            $katak1 = str_split($ky);
                            $panjangKata = [];
                            $string = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
                            ?>
                            <?php foreach ($katam1 as $row) :  ?>
                                <?php foreach ($katak1 as $k) : ?>
                                    <?php $panjangKata[] = $k; ?>
                                    <?php if (count($panjangKata) > strlen($_POST['m1'])) : ?>
                                    <?php else : ?>
                                        <?php for ($i = 0; $i < strlen($string); $i++) : ?>
                                            <?php $char = $string[$i];
                                            $numericValue = ord($k) - ord('A'); ?>
                                            <?php for ($i = 0; $i < 26; $i++) {
                                                $letter = chr(65 + $i);
                                            ?>
                                                <?php if ($row === $letter) :  ?>
                                                    <th><?= $i + $numericValue ?></th>
                                                <?php elseif ($row == " ") : ?>
                                                    <th></th>
                                                    <?php break; ?>
                                                <?php endif; ?>
                                            <?php } ?>
                                            <?php break; ?>
                                        <?php endfor; ?>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            <?php endforeach ?>
                        </tr>
                        <tr>
                            <th class="bg-primary">C</th>
                            <?php
                            $panjangKata2 = [];
                            $string = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
                            ?>
                            <?php foreach ($katam1 as $row) :  ?>
                                <?php foreach ($katak1 as $k) : ?>
                                    <?php $panjangKata2[] = $k; ?>
                                    <?php if (count($panjangKata2) > strlen($_POST['m1'])) : ?>
                                        <?php return; ?>
                                    <?php else : ?>
                                        <?php for ($i = 0; $i < strlen($string); $i++) : ?>
                                            <?php $char = $string[$i];
                                            $numericValue = ord($k) - ord('A'); ?>
                                            <?php for ($i = 0; $i < 26; $i++) {
                                                $letter = chr(65 + $i);
                                            ?>
                                                <?php if ($row === $letter) :  ?>
                                                    <th><?= chr(65 + $i + $numericValue);  ?></th>
                                                <?php elseif ($row == " ") : ?>
                                                    <th></th>
                                                    <?php break; ?>
                                                <?php endif; ?>
                                            <?php } ?>
                                            <?php break; ?>
                                        <?php endfor; ?>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            <?php endforeach ?>
                        </tr>
                    </tbody>
                </table>
            <?php else : ?>
                <p class="text-center mt-2 fs-3 fw-bold text-danger">M dan K di isi !</p>
            <?php endif; ?>
        </div>
    </div>

<?php elseif (isset($_POST['penyelesaiandecrypt'])) : ?>
    <div class="container mt-3">
        <div class="card border-0 shadow">
            <h3 class="text-center">Penyelesaian Decrypt</h3>
            <?php if (!empty($_POST['c1']) && !empty($_POST['k1'])) : ?>
                <table class="table">
                    <tbody>
                        <tr>
                            <th class="bg-primary">C</th>
                            <?php
                            $c1 = strtoupper($_POST['c1']);
                            $katac1 = str_split($c1);
                            ?>
                            <?php foreach ($katac1 as $row) :  ?>
                                <th><?= $row; ?></th>
                            <?php endforeach ?>
                        </tr>
                        <tr>
                            <th class="bg-primary"></th>
                            <?php
                            $c1 = strtoupper($_POST['c1']);
                            $katac1 = str_split($c1);
                            ?>
                            <?php foreach ($katac1 as $row) :  ?>
                                <?php
                                for ($i = 0; $i < 26; $i++) {
                                    $letter = chr(65 + $i);
                                ?>
                                    <?php if ($row === $letter) :  ?>
                                        <th><?= $i ?></th>
                                    <?php elseif ($row == " ") : ?>
                                        <th></th>
                                        <?php break; ?>
                                    <?php endif; ?>
                                <?php } ?>
                            <?php endforeach ?>
                        </tr>
                        <tr>
                            <th class="bg-primary">K</th>
                            <?php foreach ($katac1 as $row) :  ?>
                                <th><?= $_POST['k1']; ?></th>
                            <?php endforeach ?>
                        </tr>
                        <tr>
                            <th class="bg-primary"></th>
                            <?php
                            $ky = strtoupper($_POST['k1']);
                            $katak1 = str_split($ky);
                            $panjangKata = [];
                            $string = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
                            ?>
                            <?php foreach ($katac1 as $row) :  ?>
                                <th><?= ord($_POST['k1']) - 97 ?></th>
                            <?php endforeach ?>
                        </tr>
                        <tr>
                            <th class="bg-primary">+26 - K</th>
                            <?php
                            $ky = strtoupper($_POST['k1']);
                            $katak1 = str_split($ky);
                            $panjangKata2 = [];
                            $string = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
                            $katac1 = str_split($c1);
                            ?>

                            <?php foreach ($katac1 as $row) :  ?>
                                <?php $keynilai =  ord($_POST['k1']) - 97 ?>
                                <?php for ($i = 0; $i < 26; $i++) {
                                    $letter = chr(65 + $i);
                                ?>
                                    <?php if ($row === $letter) :  ?>
                                        <th><?= $i + 26 - $keynilai ?></th>
                                    <?php elseif ($row == " ") : ?>
                                        <th></th>
                                        <?php break; ?>
                                    <?php endif; ?>
                                <?php } ?>
                            <?php endforeach ?>
                        </tr>
                        <tr>
                            <th class="bg-primary">MOD 26</th>
                            <?php
                            $ky = strtoupper($_POST['k1']);
                            $katak1 = str_split($ky);
                            $panjangKata2 = [];
                            $string = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
                            $katac1 = str_split($c1);
                            ?>

                            <?php foreach ($katac1 as $row) :  ?>
                                <?php $keynilai =  ord($_POST['k1']) - 97 ?>
                                <?php for ($i = 0; $i < 26; $i++) {
                                    $letter = chr(65 + $i);
                                ?>
                                    <?php if ($row === $letter) :  ?>
                                        <th><?= ($i + 26 - $keynilai) - 26 ?></th>
                                    <?php elseif ($row == " ") : ?>
                                        <th></th>
                                        <?php break; ?>
                                    <?php endif; ?>
                                <?php } ?>
                            <?php endforeach ?>
                        </tr>
                        <tr>
                            <th class="bg-primary">M</th>
                            <?php
                            $ky = strtoupper($_POST['k1']);
                            $katak1 = str_split($ky);
                            $panjangKata2 = [];
                            $string = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
                            $katac1 = str_split($c1);
                            ?>

                            <?php foreach ($katac1 as $row) :  ?>
                                <?php $keynilai =  ord($_POST['k1']) - 97 ?>
                                <?php for ($i = 0; $i < 26; $i++) {
                                    $letter = chr(65 + $i);
                                ?>
                                    <?php if ($row === $letter) :  ?>
                                        <th><?= chr(65 + (($i + 26 - $keynilai) - 26))  ?></th>
                                    <?php elseif ($row == " ") : ?>
                                        <th></th>
                                        <?php break; ?>
                                    <?php endif; ?>
                                <?php } ?>
                            <?php endforeach ?>
                        </tr>
                    </tbody>
                </table>
            <?php else : ?>
                <p class="text-center mt-2 fs-3 fw-bold text-danger">C dan K di isi !</p>
            <?php endif; ?>
        </div>
    </div>
<?php endif; ?>