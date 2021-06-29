            
            if ($urgent_list == "1" && isset($_POST["mail_address"])){
                $to = $user["mail_address"];
                $subject = "【緊急伝言メモ】　在席管理アプリ";
                $msg = '
＿＿＿＿＿＿＿＿＿＿＿＿＿
緊急伝言メモのお知らせ
＿＿＿＿＿＿＿＿＿＿＿＿＿
緊急対応が必要な伝言メモが登録されました。
＿＿＿＿＿＿＿＿＿＿＿＿＿
                    
■伝言メモ
                    
送信者名　：　%name%
相手先部門　：　%pass_sec%
相手先電話　：　%pass_tel%
相手先名前　：　%pass_name%
伝言区分　：　%msec_list%
伝言　：　%message%
＿＿＿＿＿＿＿＿＿＿＿＿＿
                    
■お知らせ
                    
ご不明な点がございましたら気軽にご連絡下さい。
また、今後ともよろしくお願いします。
                    
お問い合わせ先
http://localhost:8080/Zaiseki/
';
                $hdr = "Content-Type: text/plain;charset=ISO-2022-JP";
                
                mb_language("ja");
                
                $subject = mb_convert_encoding($subject, "JIS", "UTF-8");
                $msg = mb_convert_encoding($msg, "JIS", "UTF-8");
                
                $d1 = ["%name%", "%pass_sec%", "%pass_tel%", "%pass_name%", "%msec_list%", "%message%"];
                $d2 = [$messages["message_id"], $messages["pass_sec"], $messages["pass_tel"], $messages["pass_name"],
                    $msec_list[$messages["msec"]], $messages["message"]];
                $d3 = str_replace($d1, $d2, $msg);
                
                mb_send_mail($to, $subject, $d3, $hdr);
                
                
            }