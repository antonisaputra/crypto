<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;1,100;1,200;1,300;1,400;1,500&family=Poppins:ital,wght@0,200;0,300;1,100&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <title>Chiper-Text</title>
    <style>
        * {
            font-family: 'Roboto', sans-serif;
        }
    </style>
</head>

<body>
    <div class="container mt-3">
        <div class="card border-0 shadow p-3">
            <h2 class="text-center my-2">Kriptografi Chiper-Text</h2>
            <div class="card-body">
                <form action="" method="post">
                    <div class="row">
                        <div class="col-3">
                            <div class="input-group mb-3">
                                <span class="input-group-text text-light bg-success" id="basic-addon1">M</span>
                                <?php if (isset($_POST['penyelesaianencrypt'])) : ?>
                                    <input type="text" name="m1" id="m1" class="form-control" value="<?= $_POST['m1'] ?>">
                                <?php else : ?>
                                    <input type="text" name="m1" id="m1" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="input-group mb-3">
                                <span class="input-group-text text-light bg-success" id="basic-addon1">K</span>
                                <?php if (isset($_POST['penyelesaianencrypt']) || isset($_POST['penyelesaiandecrypt'])) : ?>
                                    <input type="number" value="<?= $_POST['k1']; ?>" name="k1" id="k1" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                                <?php else : ?>
                                    <input type="number" name="k1" id="k1" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="input-group mb-3">
                                <span class="input-group-text text-light bg-success" id="basic-addon1">C</span>
                                <?php if (isset($_POST['penyelesaiandecrypt'])) : ?>
                                    <input type="text" value="<?= $_POST['c1'] ?>" name="c1" id="c1" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                                <?php else : ?>
                                    <input type="text" name="c1" id="c1" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                                <?php endif ?>
                            </div>
                        </div>
                        <div class="col-12 mb-3">
                            <div class="flex">
                                <button type="button" class="btn btn-success" onclick="encrypt()">Enkripsi</button>
                                <button type="button" class="btn btn-primary" onclick="decrypt()">Dekripsi</button>
                                <button type="submit" name="penyelesaianencrypt" class="btn btn-info">Penyelesaian Encrypt</button>
                                <button type="submit" name="penyelesaiandecrypt" class="btn btn-info">Penyelesaian Decrypt</button>
                            </div>

                        </div>
                    </div>
                </form>
                <form action="" method="post">
                    <div class="row">
                        <div class="col-3">
                            <div class="input-group mb-3">
                                <span class="input-group-text text-light bg-success" id="basic-addon1">M</span>
                                <?php if (isset($_POST['penyelesaianencryptascii'])) : ?>
                                    <input type="text" name="m2" value="<?= $_POST['m2'] ?>" id="m2" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                                <?php else : ?>
                                    <input type="text" name="m2" id="m2" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="input-group mb-3">
                                <span class="input-group-text text-light bg-success" id="basic-addon1">K</span>
                                <?php if (isset($_POST['penyelesaianencryptascii']) || isset($_POST['penyelesaiandecryptascii'])) : ?>
                                    <input type="text" name="k2" value="<?= $_POST['k2'] ?>" id="k2" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                                <?php else : ?>
                                    <input type="text" name="k2" id="k2" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                                <?php endif ?>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="input-group mb-3">
                                <span class="input-group-text text-light bg-success" id="basic-addon1">ASCII</span>
                                <?php if (isset($_POST['penyelesaianencryptascii']) || isset($_POST['penyelesaiandecryptascii'])) : ?>
                                    <input type="text" name="ascii" value="<?= $_POST['ascii'] ?>" id="asciic2" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                                <?php else : ?>
                                    <input type="text" name="ascii" id="asciic2" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                                <?php endif ?>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="input-group mb-3">
                                <span class="input-group-text text-light bg-success" id="basic-addon1">C</span>
                                <?php if (isset($_POST['penyelesaiandecryptascii'])) : ?>
                                    <input type="text" name="c2" value="<?= $_POST['c2'] ?>" id="c2" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                                <?php else : ?>
                                    <input type="text" name="c2" id="c2" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                                <?php endif ?>

                            </div>
                        </div>
                        <div class="col-12">
                            <div class="flex">
                                <button type="button" class="btn btn-success" onclick="encryptASCII()">Enkripsi</button>
                                <button type="button" class="btn btn-primary" onclick="decryptASCII()">Dekripsi</button>
                                <button type="submit" name="penyelesaianencryptascii" class="btn btn-info">Penyelesaian Encrypt ASCII</button>
                                <button type="submit" name="penyelesaiandecryptascii" class="btn btn-info">Penyelesaian Decrypt ASCII</button>
                            </div>

                        </div>
                    </div>
                </form>
            </div>
        </div>

        <?php $this->load->view('penyelesaian_chiper'); ?>
        <?php $this->load->view('penyelesaian_chiper_ascii'); ?>

        <div class="mt-3">
            <a href="<?= base_url() ?>Chiper_text" class="btn btn-secondary">Chiper Text</a>
            <a href="<?= base_url() ?>Veganere" class="btn btn-secondary">Veganere</a>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script>
        function caesarEncrypt(text, shift) {
            let encryptedText = '';

            for (let i = 0; i < text.length; i++) {
                let char = text[i];
                if (char.match(/[a-z]/i)) {
                    let code = text.charCodeAt(i);

                    if (char === char.toLowerCase()) {
                        code = (code - 97 + shift) % 26 + 97;
                    } else {
                        code = (code - 65 + shift) % 26 + 65;
                    }

                    char = String.fromCharCode(code);
                }

                encryptedText += char;
            }

            return encryptedText;
        }

        function caesarDecrypt(ciphertext, shift) {
            return caesarEncrypt(ciphertext, 26 - shift);
        }

        function encrypt() {
            const plaintext = document.getElementById("m1").value;
            const shift = parseInt(document.getElementById("k1").value, 10);
            const encryptedText = caesarEncrypt(plaintext, shift);

            document.getElementById("c1").value = encryptedText;
        }

        function decrypt() {
            const ciphertext = document.getElementById("c1").value;
            const shift = parseInt(document.getElementById("k1").value, 10);
            const decryptedText = caesarDecrypt(ciphertext, shift);
            document.getElementById("m1").value = decryptedText;
        }
    </script>
    <script>
        function caesarEncryptACII(text, shift) {
            let encryptedText = '';

            for (let i = 0; i < text.length; i++) {
                let char = text[i];

                if (char.match(/[a-z]/i)) {
                    let code = text.charCodeAt(i);

                    if (char === char.toLowerCase()) {
                        code = (code - 97 + shift) % 26 + 97;
                    } else {
                        code = (code - 65 + shift) % 26 + 65;
                    }

                    char = String.fromCharCode(code);
                }

                encryptedText += char;
            }

            return encryptedText;
        }

        function caesarDecryptACII(text, shift) {
            return caesarEncryptACII(text, 26 - shift);
        }

        function encryptASCII() {
            const plaintext = document.getElementById("m2").value;
            const shift = parseInt(document.getElementById("k2").value, 10);
            const encryptedText = caesarEncryptACII(plaintext, shift);
            const asciiValue = encryptedText.charCodeAt(0);
            document.getElementById("c2").value = encryptedText;
            document.getElementById("ascii2").value = asciiValue;
        }

        // Dekripsi tidak dapat dilakukan pada Caesar Cipher karena kita tidak menyimpan kunci yang benar
        function decryptASCII() {
            const ciphertext = document.getElementById("c2").value;
            const shift = parseInt(document.getElementById("k2").value, 10);
            const decryptedText = caesarDecryptACII(ciphertext, shift);
            document.getElementById("m2").value = decryptedText;
        }
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>