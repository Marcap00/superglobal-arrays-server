<!-- 
    $_SERVER è un esempio di array superglobale creato dall'interprete PHP a ogni richiesta della pagina.
    Ogni array superglobale contiene dati utilizzabili dal codice PHP della pagina.
    Tutti gli array superglobali sono ASSOCIATIVI.
    Contiene dati:
    - sul browser (inviati nelle intestazioni HTTP)
    - sul tipo di richiesta HTTP (GET o POST)
    - sull'URL della pagina richiesta
    - sulla posizione del file sul server
-->

<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Server array superglobale</title>
    <!-- Bootstrap 5.3.3 -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css'
        integrity='sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg=='
        crossorigin='anonymous' />
</head>

<body>
    <div class="container">
        <h1 class="text-center text-white my-3">SERVER ARRAY SUPERGLOBAL</h1>
        <table class="table table-striped table-hover border border-secondary">
            <tbody>
                <tr>
                    <th class="text-warning" colspan="2">DATA ABOUT BROWSER SENT IN HTTP HEADERS</th>
                </tr>
                <tr>
                    <th class="text-warning">Browser's IP address</th>
                    <td><?= $_SERVER['REMOTE_ADDR']; ?></td>
                </tr>
                <tr>
                    <th class="text-warning">Browser's user agent/Type of browser</th>
                    <td><?= $_SERVER['HTTP_USER_AGENT']; ?></td>
                </tr>
                <tr>
                    <th class="text-warning" colspan="2">HTTP REQUEST</th>
                </tr>
                <tr>
                    <th class="text-warning">Host Name</th>
                    <td><?= $_SERVER['HTTP_HOST']; ?></td>
                </tr>
                <tr>
                    <th class="text-warning">Uri after host name</th>
                    <td><?= $_SERVER['REQUEST_URI']; ?></td>
                </tr>
                <tr>
                    <th class="text-warning">Query String</th>
                    <td><?= $_SERVER['QUERY_STRING']; ?></td>
                    <!-- In this case, it's empty unless you add a query string to the URL -->
                </tr>
                <tr>
                    <th class="text-warning">HTTP Request Method</th>
                    <td><?= $_SERVER['REQUEST_METHOD']; ?></td>
                </tr>
                <tr>
                    <th class="text-warning" colspan="2">LOCATION OF THE FILE BEING EXECUTED</th>
                </tr>
                <tr>
                    <th class="text-warning">Document Root</th>
                    <td><?= $_SERVER['DOCUMENT_ROOT']; ?></td>
                </tr>
                <tr>
                    <th class="text-warning">Path from document root/Script Name</th>
                    <td><?= $_SERVER['SCRIPT_NAME']; ?></td>
                </tr>
                <tr>
                    <th class="text-warning">Absolute Path to the current script</th>
                    <td><?= $_SERVER['SCRIPT_FILENAME']; ?></td>
                </tr>
                <tr>
                    <th class="text-warning">Current File Directory</th>
                    <td><?= $_SERVER['PHP_SELF']; ?></td>
                </tr>
                <tr>
                    <th class="text-warning">Server's Software</th>
                    <td><?= $_SERVER['SERVER_SOFTWARE']; ?></td>
                </tr>
            </tbody>
        </table>
    </div>

</body>

</html>