   <?php  
    require_once('C:/OSPanel/domains/practice/phpmailer/PHPMailerAutoload.php');
    $mail = new PHPMailer;
    $mail->CharSet = 'utf-8';

    $number = $_POST['number'];
    $date = $_POST['date'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $surname = $_POST['surname'];
    $itn = $_POST['itn'];
    $requisites = $_POST['requisites'];
    $type_company = $_POST['type_company'];
    $company = $_POST['company'];
    $type_client = $_POST['type_client'];
    $client = $_POST['client'];
    $td1 = $_POST['td1'];
    $td2 = $_POST['td2'];
    $td3 = $_POST['td3'];
    $td4 = $_POST['td4'];
    $td5 = $_POST['td5'];
    $td6 = $_POST['td6'];
    $td7 = $_POST['td7'];
    $td8 = $_POST['td8'];
    $login = $_POST['LoginEmail'];


    $mail->SMTPDebug = 3;                               // Enable verbose debug output

    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.mail.ru';  																							// Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'itsanaswer@mail.ru'; //  логин от почты с которой будут отправляться письма
    $mail->Password = 'JWpmwhBF4HedMaHixN7L'; //  пароль от почты с которой будут отправляться письма
    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465; // TCP port to connect to / этот порт может отличаться у других провайдеров

    $mail->setFrom('itsanaswer@mail.ru'); // от кого будет уходить письмо?
    $mail->addAddress($login);     // Кому будет уходить письмо 
    $mail->Subject = 'Счет на оплату';
    $mail->Body    = 'Номер счета:' .$number . 'Дата создания:' .$date . ' ' .$firstname. ' ' .$lastname . ' ' .$surname .  'ИНН: ' .$itn. 'Номер банковского счета: ' .$requisites . ' ' .$td1 . ' ' .$td2 . ' ' .$td3 . ' ' .$td4 . ' ' .$td5 . ' ' .$td6 . ' ' .$td7 . ' ' .$td8 . ' ';
    $mail->AltBody = '';

    if(!$mail->send()) {
    echo 'Error';
    } else {
    header('location: index.html');
    }

    function json_fix_cyr($json_str) {
        $cyr_chars = array (
            '\u0430' => 'а', '\u0410' => 'А',
            '\u0431' => 'б', '\u0411' => 'Б',
            '\u0432' => 'в', '\u0412' => 'В',
            '\u0433' => 'г', '\u0413' => 'Г',
            '\u0434' => 'д', '\u0414' => 'Д',
            '\u0435' => 'е', '\u0415' => 'Е',
            '\u0451' => 'ё', '\u0401' => 'Ё',
            '\u0436' => 'ж', '\u0416' => 'Ж',
            '\u0437' => 'з', '\u0417' => 'З',
            '\u0438' => 'и', '\u0418' => 'И',
            '\u0439' => 'й', '\u0419' => 'Й',
            '\u043a' => 'к', '\u041a' => 'К',
            '\u043b' => 'л', '\u041b' => 'Л',
            '\u043c' => 'м', '\u041c' => 'М',
            '\u043d' => 'н', '\u041d' => 'Н',
            '\u043e' => 'о', '\u041e' => 'О',
            '\u043f' => 'п', '\u041f' => 'П',
            '\u0440' => 'р', '\u0420' => 'Р',
            '\u0441' => 'с', '\u0421' => 'С',
            '\u0442' => 'т', '\u0422' => 'Т',
            '\u0443' => 'у', '\u0423' => 'У',
            '\u0444' => 'ф', '\u0424' => 'Ф',
            '\u0445' => 'х', '\u0425' => 'Х',
            '\u0446' => 'ц', '\u0426' => 'Ц',
            '\u0447' => 'ч', '\u0427' => 'Ч',
            '\u0448' => 'ш', '\u0428' => 'Ш',
            '\u0449' => 'щ', '\u0429' => 'Щ',
            '\u044a' => 'ъ', '\u042a' => 'Ъ',
            '\u044b' => 'ы', '\u042b' => 'Ы',
            '\u044c' => 'ь', '\u042c' => 'Ь',
            '\u044d' => 'э', '\u042d' => 'Э',
            '\u044e' => 'ю', '\u042e' => 'Ю',
            '\u044f' => 'я', '\u042f' => 'Я',
     
            '\r' => '',
            '\n' => '<br />',
            '\t' => ''
        );
     
        foreach ($cyr_chars as $cyr_char_key => $cyr_char) {
            $json_str = str_replace($cyr_char_key, $cyr_char, $json_str);
        }
        return $json_str;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Ваш код для обработки данных из формы
        $number = $_POST['number'];
        $date = $_POST['date'];
        // ... другие переменные
    
        // Здесь должен быть ваш код для отправки почты
    
        // Перенаправление пользователя на другую страницу после отправки формы
        header('Location: index.html');
        exit();
    }
?>
