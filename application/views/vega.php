<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;1,100;1,200;1,300;1,400;1,500&family=Poppins:ital,wght@0,200;0,300;1,100&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <title>Hello, world!</title>
    <style>
        * {
            font-family: 'Roboto', sans-serif;
        }
    </style>
</head>

<body>
    <div class="container mt-3">
        <div class="card border-0 shadow p-3">
            <h2 class="text-center my-2">Kriptografi Veganere</h2>
            <div class="card-body">
                <form action="" method="post">
                    <div class="row">
                        <div class="col-3">
                            <div class="input-group mb-3">
                                <span class="input-group-text text-light bg-success" id="basic-addon1">M</span>
                                <?php if (isset($_POST['penyelesaianencrypt'])) : ?>
                                    <input type="text" name="m1" id="m1" class="form-control" value="<?= $_POST['m1']; ?>" aria-label="Username" aria-describedby="basic-addon1">
                                <?php else : ?>
                                    <input type="text" name="m1" id="m1" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                                <?php endif ?>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="input-group mb-3">
                                <span class="input-group-text text-light bg-success" id="basic-addon1">K</span>
                                <?php if (isset($_POST['penyelesaianencrypt'])) : ?>
                                    <input type="text" name="k1" id="k1" class="form-control" value="<?= $_POST['k1'] ?>" aria-label="Username" aria-describedby="basic-addon1">
                                <?php else : ?>
                                    <input type="text" name="k1" id="k1" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="input-group mb-3">
                                <span class="input-group-text text-light bg-success" id="basic-addon1">C</span>
                                <input type="text" name="c1" id="c1" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="flex">
                                <button type="button" class="btn btn-success" onclick="encrypt()">Enkripsi</button>
                                <button type="button" class="btn btn-primary" onclick="decrypt()">Dekripsi</button>
                                <button type="submit" class="btn btn-info" name="penyelesaianencrypt">Penyelesain Encrypt</button>
                                <button type="submit" class="btn btn-info" name="penyelesaiandecrypt">Penyelesain Encrypt</button>
                            </div>

                        </div>
                    </div>
                </form>

            </div>
        </div>
        <div class="mt-3">
            <a href="<?= base_url() ?>Chiper_text" class="btn btn-secondary">Chiper Text</a>
            <a href="<?= base_url() ?>Veganere" class="btn btn-secondary">Veganere</a>
        </div>
    </div>
    <?php $this->load->view('penyelesaian_vega');  ?>
    <script>
        function vigenereEncrypt(plaintext, key) {
            plaintext = plaintext.toLowerCase();
            key = key.toLowerCase();
            const alphabet = "abcdefghijklmnopqrstuvwxyz";
            let encryptedText = "";

            for (let i = 0; i < plaintext.length; i++) {
                const plaintextChar = plaintext[i];
                const keyChar = key[i % key.length];
                const plaintextIndex = alphabet.indexOf(plaintextChar);
                const keyIndex = alphabet.indexOf(keyChar);

                if (plaintextIndex !== -1) {
                    const encryptedIndex = (plaintextIndex + keyIndex) % alphabet.length;
                    encryptedText += alphabet[encryptedIndex];
                } else {
                    encryptedText += plaintextChar; // Keep non-alphabet characters unchanged
                }
            }

            return encryptedText;
        }

        function vigenereDecrypt(ciphertext, key) {
            ciphertext = ciphertext.toLowerCase();
            key = key.toLowerCase();
            const alphabet = "abcdefghijklmnopqrstuvwxyz";
            let decryptedText = "";

            for (let i = 0; i < ciphertext.length; i++) {
                const ciphertextChar = ciphertext[i];
                const keyChar = key[i % key.length];
                const ciphertextIndex = alphabet.indexOf(ciphertextChar);
                const keyIndex = alphabet.indexOf(keyChar);

                if (ciphertextIndex !== -1) {
                    const decryptedIndex = (ciphertextIndex - keyIndex + alphabet.length) % alphabet.length;
                    decryptedText += alphabet[decryptedIndex];
                } else {
                    decryptedText += ciphertextChar; // Keep non-alphabet characters unchanged
                }
            }

            return decryptedText;
        }

        function encrypt() {
            const plaintext = document.getElementById("m1").value;
            const key = document.getElementById("k1").value;
            const encryptedText = vigenereEncrypt(plaintext, key);
            document.getElementById("c1").value = encryptedText;
        }

        function decrypt() {
            const ciphertext = document.getElementById("c1").value;
            const key = document.getElementById("k1").value;
            const decryptedText = vigenereDecrypt(ciphertext, key);
            document.getElementById("m1").value = decryptedText;
        }
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>