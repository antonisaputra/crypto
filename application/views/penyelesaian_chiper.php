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
                                    $letter = chr(65 + $i); // Mengubah angka menjadi karakter huruf (A-Z)
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
                            <?php foreach ($katam1 as $row) :  ?>
                                <?php if ($row == " ") : ?>
                                    <th></th>
                                    <?php continue; ?>
                                <?php else : ?>
                                    <th><?= $_POST['k1']; ?></th>
                                <?php endif; ?>
                            <?php endforeach ?>
                        </tr>
                        <tr>
                            <th class="bg-primary">MOD 26</th>
                            <?php foreach ($katam1 as $row) :  ?>
                                <?php
                                for ($i = 0; $i < 26; $i++) {
                                    $letter = chr(65 + $i); // Mengubah angka menjadi karakter huruf (A-Z)
                                ?>
                                    <?php if ($row === $letter) :  ?>
                                        <th><?= $i + $_POST['k1']; ?></th>
                                    <?php elseif ($row == " ") : ?>
                                        <th></th>
                                        <?php break; ?>
                                    <?php endif; ?>
                                <?php } ?>
                            <?php endforeach ?>
                        </tr>
                        <tr>
                            <th class="bg-primary">C</th>
                            <?php foreach ($katam1 as $row) :  ?>
                                <?php
                                for ($i = 0; $i < 26; $i++) {
                                    $letter = chr(65 + $i); // Mengubah angka menjadi karakter huruf (A-Z)
                                ?>
                                    <?php if ($row === $letter) :  ?>
                                        <th><?= chr(65 + ($i + $_POST['k1'])); ?></th>
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
                            $m1 = strtoupper($_POST['c1']);
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
                                    $letter = chr(65 + $i); // Mengubah angka menjadi karakter huruf (A-Z)
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
                            <th class="bg-primary">(+26 - K)</th>
                            <?php foreach ($katam1 as $row) :  ?>
                                <?php
                                for ($i = 0; $i < 26; $i++) {
                                    $letter = chr(65 + $i); // Mengubah angka menjadi karakter huruf (A-Z)
                                ?>
                                    <?php if ($row === $letter) :  ?>
                                        <th><?= ($i + 26) - $_POST['k1']; ?></th>
                                    <?php elseif ($row == " ") : ?>
                                        <th></th>
                                        <?php break; ?>
                                    <?php endif; ?>
                                <?php } ?>
                            <?php endforeach ?>
                        </tr>
                        <tr>
                            <th class="bg-primary">MOD 26</th>
                            <?php foreach ($katam1 as $row) :  ?>
                                <?php
                                for ($i = 0; $i < 26; $i++) {
                                    $letter = chr(65 + $i); // Mengubah angka menjadi karakter huruf (A-Z)
                                ?>
                                    <?php if ($row === $letter) :  ?>
                                        <?php $hasilkey = ($i + 26) - $_POST['k1']; ?>
                                        <th><?= $hasilkey - 26 ?></th>
                                    <?php elseif ($row == " ") : ?>
                                        <th></th>
                                        <?php break; ?>
                                    <?php endif; ?>
                                <?php } ?>
                            <?php endforeach ?>
                        </tr>
                        <tr>
                            <th class="bg-primary">M</th>
                            <?php foreach ($katam1 as $row) :  ?>
                                <?php
                                for ($i = 0; $i < 26; $i++) {
                                    $letter = chr(65 + $i); // Mengubah angka menjadi karakter huruf (A-Z)
                                ?>
                                    <?php if ($row === $letter) :  ?>
                                        <?php $hasilkey = ($i + 26) - $_POST['k1']; ?>
                                        <th><?= chr(65 + ($hasilkey - 26)) ?></th>
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