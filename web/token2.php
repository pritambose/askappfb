<?php

$acc_tok_temp = file_get_contents("https://graph.facebook.com/oauth/access_token?grant_type=fb_exchange_token&client_id=1788581694700829&client_secret=d95dde9374fe7d3715007c27db6a74a4&fb_exchange_token=CAAZAatKCQfR0BANzAfnuFPANjknNrLQZCn0ZBiBie097CpYSfWvb3lUU6fbv1SGZBO7yH3FjWX4YDF1z9SpjeokPhpb8MOjavrA3iWyLKI0GQYZCxNPVOXlUZCNBrg6dbQ0yZA7pMNJRNlssyraDB9o2fgwdhfUsuXMcADoiIBsZClanpsPqoyQV39apn8z5AgMZD");
$code_url_1="https://graph.facebook.com/oauth/client_code?";
$code_url_2="&client_secret=d95dde9374fe7d3715007c27db6a74a4&redirect_uri=https://askappfb.herokuapp.com/&client_id=1788581694700829";
$code_url = $code_url_1 . $acc_tok_temp . $code_url_2;
$code_json = file_get_contents($code_url);
$p = json_decode($code_json);
$code1 = $p->code;
$acc_tok_1 = "https://graph.facebook.com/oauth/access_token?code=";
$acc_tok_2 = "&client_id=1788581694700829&redirect_uri=https://askappfb.herokuapp.com/";
$acc_tok_url = $acc_tok_1 . $code1 . $acc_tok_2;
$token_json = file_get_contents($acc_tok_url);
$q = json_decode($token_json);
$token=$q->access_token;

echo $token;
?>