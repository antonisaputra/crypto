<?php if (isset($_POST['penyelesaianencryptascii'])) : ?>
    <div class="container mt-3">
        <div class="card border-0 shadow">
            <h3 class="text-center">Penyelesaian Encrypt</h3>
            <?php if (!empty($_POST['m2']) && !empty($_POST['k2'] && !empty($_POST['ascii']))) : ?>
                <table class="table">
                    <tbody>
                        <tr>
                            <th class="bg-primary">M</th>
                            <?php
                            $m2 = strtoupper($_POST['m2']);
                            $katam2 = str_split($m2);
                            ?>
                            <?php foreach ($katam2 as $row) :  ?>
                                <th><?= $row; ?></th>
                            <?php endforeach ?>
                        </tr>
                        <tr>
                            <th class="bg-primary"></th>
                            <?php foreach ($katam2 as $row) :  ?>
                                <?php
                                for ($i = 0; $i < 26; $i++) {
                                    $letter = chr(65 + $i); // Mengubah angka menjadi karakter huruf (A-Z)
                                ?>
                                    <?php if ($row === $letter) :  ?>
                                        <th><?= $i + $_POST['ascii']; ?></th>
                                    <?php elseif ($row == " ") : ?>
                                        <th></th>
                                        <?php break; ?>
                                    <?php endif; ?>
                                <?php } ?>
                            <?php endforeach ?>
                        </tr>
                        <tr>
                            <th class="bg-primary">- <?= $_POST['ascii']; ?></th>
                            <?php foreach ($katam2 as $row) :  ?>
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
                            <?php foreach ($katam2 as $row) :  ?>
                                <?php if ($row == " ") : ?>
                                    <th></th>
                                    <?php continue; ?>
                                <?php else : ?>
                                    <th><?= $_POST['k2']; ?></th>
                                <?php endif; ?>
                            <?php endforeach ?>
                        </tr>
                        <tr>
                            <th class="bg-primary">Mod 26</th>
                            <?php foreach ($katam2 as $row) :  ?>
                                <?php
                                for ($i = 0; $i < 26; $i++) {
                                    $letter = chr(65 + $i); // Mengubah angka menjadi karakter huruf (A-Z)
                                ?>
                                    <?php if ($row === $letter) :  ?>
                                        <th><?= $i + $_POST['k2']; ?></th>
                                    <?php elseif ($row == " ") : ?>
                                        <th></th>
                                        <?php break; ?>
                                    <?php endif; ?>
                                <?php } ?>
                            <?php endforeach ?>
                        </tr>
                        <tr>
                            <th class="bg-primary">MOD 26</th>
                            <?php foreach ($katam2 as $row) :  ?>
                                <?php
                                for ($i = 0; $i < 26; $i++) {
                                    $letter = chr(65 + $i); // Mengubah angka menjadi karakter huruf (A-Z)
                                ?>
                                    <?php if ($row === $letter) :  ?>
                                        <th><?= $i + $_POST['k2']; ?></th>
                                    <?php elseif ($row == " ") : ?>
                                        <th></th>
                                        <?php break; ?>
                                    <?php endif; ?>
                                <?php } ?>
                            <?php endforeach ?>
                        </tr>
                        <tr>
                            <th class="bg-primary"><?= $_POST['ascii']; ?></th>
                            <?php foreach ($katam2 as $row) :  ?>
                                <?php
                                for ($i = 0; $i < 26; $i++) {
                                    $letter = chr(65 + $i); // Mengubah angka menjadi karakter huruf (A-Z)
                                ?>
                                    <?php if ($row === $letter) :  ?>
                                        <th><?= ($i + $_POST['k2']) + $_POST['ascii']; ?></th>
                                    <?php elseif ($row == " ") : ?>
                                        <th></th>
                                        <?php break; ?>
                                    <?php endif; ?>
                                <?php } ?>
                            <?php endforeach ?>
                        </tr>
                        <tr>
                            <th class="bg-primary">C</th>
                            <?php foreach ($katam2 as $row) :  ?>
                                <?php
                                for ($i = 0; $i < 26; $i++) {
                                    $letter = chr(65 + $i); // Mengubah angka menjadi karakter huruf (A-Z)
                                ?>
                                    <?php if ($row === $letter) :  ?>
                                        <th><?= chr(65 + ($i + $_POST['k2'])); ?></th>
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

<?php elseif (isset($_POST['penyelesaiandecryptascii'])) : ?>
    <div class="container mt-3">
        <div class="card border-0 shadow">
            <h3 class="text-center">Penyelesaian Encrypt</h3>
            <?php if (!empty($_POST['c2']) && !empty($_POST['k2'] && !empty($_POST['ascii']))) : ?>
                <table class="table">
                    <tbody>
                        <tr>
                            <th class="bg-primary">C</th>
                            <?php
                            $c2 = strtoupper($_POST['c2']);
                            $katac2 = str_split($c2);
                            ?>
                            <?php foreach ($katac2 as $row) :  ?>
                                <th><?= $row; ?></th>
                            <?php endforeach ?>
                        </tr>
                        <tr>
                            <th class="bg-primary"></th>
                            <?php foreach ($katac2 as $row) :  ?>
                                <?php
                                for ($i = 0; $i < 26; $i++) {
                                    $letter = chr(65 + $i); // Mengubah angka menjadi karakter huruf (A-Z)
                                ?>
                                    <?php if ($row === $letter) :  ?>
                                        <th><?= $i + $_POST['ascii']; ?></th>
                                    <?php elseif ($row == " ") : ?>
                                        <th></th>
                                        <?php break; ?>
                                    <?php endif; ?>
                                <?php } ?>
                            <?php endforeach ?>
                        </tr>
                        <tr>
                            <th class="bg-primary">- <?= $_POST['ascii']; ?></th>
                            <?php foreach ($katac2 as $row) :  ?>
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
                            <th class="bg-primary">(+26-K)</th>
                            <?php foreach ($katac2 as $row) :  ?>
                                <?php
                                for ($i = 0; $i < 26; $i++) {
                                    $letter = chr(65 + $i); // Mengubah angka menjadi karakter huruf (A-Z)
                                ?>
                                    <?php if ($row === $letter) :  ?>
                                        <th><?= ($i + 26) - $_POST['k2']; ?></th>
                                    <?php elseif ($row == " ") : ?>
                                        <th></th>
                                        <?php break; ?>
                                    <?php endif; ?>
                                <?php } ?>
                            <?php endforeach ?>
                        </tr>
                        <tr>
                            <th class="bg-primary">MOD 26</th>
                            <?php foreach ($katac2 as $row) :  ?>
                                <?php
                                for ($i = 0; $i < 26; $i++) {
                                    $letter = chr(65 + $i); // Mengubah angka menjadi karakter huruf (A-Z)
                                ?>
                                    <?php if ($row === $letter) :  ?>
                                        <?php $mod =  ($i + 26) - $_POST['k2']; ?>
                                        <th><?= $mod - 26 ?></th>
                                    <?php elseif ($row == " ") : ?>
                                        <th></th>
                                        <?php break; ?>
                                    <?php endif; ?>
                                <?php } ?>
                            <?php endforeach ?>
                        </tr>
                        <tr>
                            <th class="bg-primary"><?= $_POST['ascii']; ?></th>
                            <?php foreach ($katac2 as $row) :  ?>
                                <?php
                                for ($i = 0; $i < 26; $i++) {
                                    $letter = chr(65 + $i); // Mengubah angka menjadi karakter huruf (A-Z)
                                ?>
                                    <?php if ($row === $letter) :  ?>
                                        <?php $mod =  ($i + 26) - $_POST['k2']; ?>
                                        <th><?= ($mod - 26) + $_POST['ascii'] ?></th>
                                    <?php elseif ($row == " ") : ?>
                                        <th></th>
                                        <?php break; ?>
                                    <?php endif; ?>
                                <?php } ?>
                            <?php endforeach ?>
                        </tr>
                        <tr>
                            <th class="bg-primary">M</th>
                            <?php foreach ($katac2 as $row) :  ?>
                                <?php
                                for ($i = 0; $i < 26; $i++) {
                                    $letter = chr(65 + $i); // Mengubah angka menjadi karakter huruf (A-Z)
                                ?>
                                    <?php if ($row === $letter) :  ?>
                                        <?php $mod =  ($i + 26) - $_POST['k2']; ?>
                                        <?php $hasild =  ($mod - 26) + $_POST['ascii'] ?>
                                        <th><?= chr(65 + ($hasild - $_POST['ascii'])) ?></th>
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
<?php endif; ?>