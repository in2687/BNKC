<?php

if(empty($_POST['name'])
   empty($_POST['email'])
   empty($_POST['subject'])
   empty($_POST['message'])
   !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
   {
		echo "No arguments Provided!";
		return false;
   }

$name = strip_tags(htmlspecialchars($_POST['name']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$subject = strip_tags(htmlspecialchars($_POST['subject']));
$message = strip_tags(htmlspecialchars($_POST['message']));

$to = 'in2687@naver.com';
$eamil_subject = "������ �����߽��ϴ� : $name";
$email_body = "����� ���� Ȩ���������� ������ �����߽��ϴ�. \n\n", "�̸� : $name\n\n �̸��� : $email_addess\n\n ���� : $subject\n\n ���� : \n$message";
$headers = "From : www.bnkc.kr";
mail($to, $email_subject, $email_body, $headers);
return true;

?>