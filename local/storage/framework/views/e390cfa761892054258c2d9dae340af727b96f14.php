<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <h2>Konfirmasi Alamat Email Anda</h2>
        <div>
            Terima kasih telah membuat akun di Toko Kami.<br/>
            Silahkan klik link dibawah ini untuk konfirmasi alamat email anda
            <?php echo e(URL::to('register/verify/' . $confirmation_code)); ?>.<br/>
 
        </div>
    </body>
</html>