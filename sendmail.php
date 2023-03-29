<?php 
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'phpmailer/src/Exception.php';
    require 'phpmailer/src/PHPMailer.php';

    $mail = new PHPMailer(true);
    $mail->CharSet = 'UTF-8';
    $mail->setLanguage('ru', 'phpmailer/language/');
    $mail->IsHTML(true);

    $mail->addAddress('alinaaktsh@gmail.com');
    $mail->Subject = 'Заказ услуги. Анализ бизнес-процессов';

    if (trim(!empty($_POST['process']))) {
        $body.='<p><strong>Количество процессов: </strong> '.$_POST['process'].'</p>';
    }
    if (trim(!empty($_POST['departments']))) {
        $body.='<p><strong>Количество отделов, участвующих в процессах: </strong> '.$_POST['departments'].'</p>';
    }
    if (trim(!empty($_POST['staff']))) {
        $body.='<p><strong>Количество сотрудников: </strong> '.$_POST['staff'].'</p>';
    }
    if (trim(!empty($_POST['interview']))) {
        $body.='<p><strong>Количество интервью: </strong> '.$_POST['interview'].'</p>';
    }
    if (trim(!empty($_POST['Chouse']))) {
        $body.='<p><strong>Контрольная сессия со всеми участниками: </strong> '.$_POST['Chouse'].'</p>';
    }
    if (trim(!empty($_POST['Chouse2']))) {
        $body.='<p><strong>Планирование по оптимизации критических моментов: </strong> '.$_POST['Chouse2'].'</p>';
    }
    if (trim(!empty($_POST['Chouse3']))) {
        $body.='<p><strong>Требуется ли подготовка инструкций по текущим процессам: </strong> '.$_POST['Chouse3'].'</p>';
    }
    if (trim(!empty($_POST['phone']))) {
        $body.='<p><strong>Номер телефона: </strong> '.$_POST['phone'].'</p>';
    }
    if (trim(!empty($_POST['email']))) {
        $body.='<p><strong>Email: </strong> '.$_POST['email'].'</p>';
    }

    $mail->Body = $body;

    if(!$mail->send()) {
        $message = 'Ошибка!';
    }
    else {
        $message = 'Данные отправлены!';
    }

    $response = ['message' => $message];

    header('Content-type: application/json');
    echo json_encode($response);
?>