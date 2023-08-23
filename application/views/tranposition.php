<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transposition Rail Fence Cipher</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;1,100;1,200;1,300;1,400;1,500&family=Poppins:ital,wght@0,200;0,300;1,100&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        * {
            font-family: 'Roboto', sans-serif;
        }
    </style>
</head>

<body>
    <div class="card container my-5 border-0 shadow">
        <div class="card-body">
            <h1 class="text-center">Transposition Rail Fence Cipher</h1>

            <h4>Enkripsi</h4>
            <input class="form-control" id="plaintext" rows="4" cols="50" placeholder="Masukkan plaintext..."></input>
            <br>
            <button class="btn btn-success mb-2" onclick="encrypt()">Enkripsi</button>
            <br>
            <input id="ciphertext" class="form-control" rows="4" cols="50" placeholder="Hasil enkripsi..." readonly></input>

            <h2>Dekripsi</h2>
            <input id="encryptedText" class="form-control" rows="4" cols="50" placeholder="Masukkan ciphertext..."></input>
            <br>
            <button class="btn btn-success mb-2" onclick="decrypt()">Dekripsi</button>
            <br>
            <input id="decryptedText" class="form-control" rows="4" cols="50" placeholder="Hasil dekripsi..." readonly></input>
        </div>
    </div>
    
    <script>
        function encrypt() {
            const plaintext = document.getElementById("plaintext").value;
            const key = parseInt(prompt("Masukkan jumlah baris (key) untuk enkripsi:"), 10);
            const encryptedText = railFenceEncrypt(plaintext, key);
            document.getElementById("ciphertext").value = encryptedText;
        }

        function decrypt() {
            const ciphertext = document.getElementById("encryptedText").value;
            const key = parseInt(prompt("Masukkan jumlah baris (key) untuk dekripsi:"), 10);
            const decryptedText = railFenceDecrypt(ciphertext, key);
            document.getElementById("decryptedText").value = decryptedText;
        }

        function railFenceEncrypt(plaintext, key) {
            const fence = new Array(key).fill('').map(() => []);
            let rail = 0;
            let direction = 1;

            for (let char of plaintext) {
                fence[rail].push(char);
                rail += direction;

                if (rail === key - 1 || rail === 0) {
                    direction = -direction;
                }
            }

            let encryptedText = '';
            for (let rail of fence) {
                encryptedText += rail.join('');
            }

            return encryptedText;
        }

        function railFenceDecrypt(ciphertext, key) {
            const fence = new Array(key).fill('').map(() => []);
            let rail = 0;
            let direction = 1;

            for (let i = 0; i < ciphertext.length; i++) {
                fence[rail].push(null); // Placeholder for characters
                rail += direction;

                if (rail === key - 1 || rail === 0) {
                    direction = -direction;
                }
            }

            rail = 0; // Reset rail to 0 before populating the fence
            for (let i = 0; i < ciphertext.length; i++) {
                fence[rail].pop(); // Remove the placeholder
                rail += direction;
            }

            let charIndex = 0;
            for (let rail = 0; rail < key; rail++) {
                for (let col = 0; col < fence[rail].length; col++) {
                    if (charIndex < ciphertext.length) {
                        fence[rail][col] = ciphertext[charIndex];
                        charIndex++;
                    }
                }
                rail += direction;
            }

            let decryptedText = '';
            rail = 0;
            direction = 1;
            for (let i = 0; i < ciphertext.length; i++) {
                decryptedText += fence[rail].shift();
                rail += direction;

                if (rail === key - 1 || rail === 0) {
                    direction = -direction;
                }
            }

            return decryptedText;
        }
    </script>

</body>

</html>