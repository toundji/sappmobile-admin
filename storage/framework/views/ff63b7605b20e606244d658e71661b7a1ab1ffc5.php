<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo e($details['subject']); ?></title>
</head>
<body>


    <div style="background-color: #FAFAFA; width: 100%; font-family: 'Arial', 'Helvetica Neue', 'Helvetica', sans-serif; box-sizing: border-box; padding-bottom: 25px; margin: 0;">
        <div style="background: transparent; padding-top: 5px; padding-bottom: 5px; text-align: center;">
        <img style="display: inline-block; height: 30px; width: auto; margin-left: auto; margin-right: auto;" alt="Logo" src="<?php echo e(asset('images/logo.jpg')); ?>" height="150" width="150" />
        </div>
        <div style="background-color: #fff; color: #000; font-size: 1em; border-top: 2px solid #00ff4c; border-bottom: 1px solid #E6E6E6; box-sizing: border-box; padding: 25px; width: 100%; max-width: 600px; margin-left: auto; margin-right: auto;">

        <p style="margin-bottom: 25px;"><?php echo e($details['title']); ?></p>
        <p style="margin-bottom: 40px; color: #555; line-height: 25px; font-size: 15px"><?php echo nl2br($details['body']); ?></p>

        <p style="margin-bottom: 10px; text-align: justify;">SAPP MOBILE, votre chauffeur en un clic !</p>
        <p style="margin-bottom: 5px;">Cordialement,</p>
        <p style="margin-top: 0px;">L'équipe SAPP MOBILE !</p>

        </div>
            <div style="text-align: center; padding-top: 15px; margin-bottom: 15px; font-size: 12px;">
            <a style="color: #00ff4c;" href="">Help</a>
            <span style="color: #ccc;">&nbsp;&nbsp;|&nbsp;&nbsp;</span>
            <a style="color: #00ff4c;" href="">FAQ</a>
            <span style="color: #ccc;">&nbsp;&nbsp;|&nbsp;&nbsp;</span>
            <a style="color: #00ff4c;" href="">Terms of Service</a>
            <span style="color: #ccc;">&nbsp;&nbsp;|&nbsp;&nbsp;</span>
            <a style="color: #00ff4c;" href="">Privacy Policy</a>
            </div>
            <p style="color: #777777; padding: 0 25px; max-width: 400px; box-sizing: border-box; margin-left: auto; margin-right: auto; font-size: 10px; text-align: center;">Veuillez ne pas répondre à cet email. Pour nous contacter, visitez notre <a style="color: #00ff4c;" href="<%= url.resolve(sails.config.custom.baseUrl, '/contact') %>"> centre d'aide.</a> Si vous n'avez aucun compte chez nous, veuillez ignorer ce message.</p>
            <p style="color: #777777; padding: 0 25px; max-width: 400px; box-sizing: border-box; margin-left: auto; margin-right: auto; font-size: 10px; text-align: center;"><em>SAPP MOBILE © <?php echo e(date('Y')); ?></em></p>
        </div>

</body>
</html>
<?php /**PATH G:\Projets\Laravel\sappmobile\resources\views/emails/mailSender.blade.php ENDPATH**/ ?>