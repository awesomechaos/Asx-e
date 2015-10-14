{{--账号验证，密码重置邮件模板--}}
<!DOCTYPE html>
<html lang="zh-cn" class="no-js">
<head>
</head>
<body>
    <div id="contentDiv"  style="position:relative;font-size:14px;height:auto;padding:15px 15px 10px 15px;z-index:1;zoom:1;line-height:1.7;" class="body">
        <div id="qm_con_body">
            <div id="mailContentContainer" class="qmbox qm_con_body_content">
                <table width="700" border="0" align="center" cellspacing="0" style="width:700px;">
                    <tbody>
                    <tr>
                        <td>
                            <div style="width:700px;margin:0 auto;border-bottom:1px solid #ccc;margin-bottom:30px;">
                                <table border="0" cellpadding="0" cellspacing="0" width="700" height="39" style="font:12px Tahoma, Arial, 宋体;">
                                    <tbody>
                                    <tr>
                                        <td width="210">

                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div style="width:680px;padding:0 10px;margin:0 auto;">
                                <div style="line-height:1.5;font-size:14px;margin-bottom:25px;color:#4d4d4d;">
                                    <strong style="display:block;margin-bottom:15px;">
                                        亲爱的用户：
                                        <span style="color:#f60;font-size: 16px;"></span>
                                    </strong>

                                    <strong style="display:block;margin-bottom:15px;">
                                        {{ $action }}
                                    </strong>
                                    <br/>
                                    <div style="text-align:center"><div style="border-top:1px solid #ddd;width: 600px;display:inline-block;padding:10px"><a style="display:inline-block;background:#fd7b12;border-radius:4px;padding: 3px 15px;color:#fff;text-decoration:none;font-size:12px" href="{{ $url }}" target="_blank">点击这里重置密码</a></div></div>
                                </div>
                            </div>
                            <div style="width:700px;margin:0 auto;">
                                <div style="padding:10px 10px 0;border-top:1px solid #ccc;color:#747474;margin-bottom:20px;line-height:1.3em;font-size:12px;">
                                    <p>此为系统邮件，请勿回复<br>
                                        请保管好您的邮箱，避免账号被他人盗用
                                    </p>
                                </div>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div><!-- --><style>#mailContentContainer .txt {height:auto;}</style>
    </div>
{{--asx:退订email功能待加入--}}
</body>