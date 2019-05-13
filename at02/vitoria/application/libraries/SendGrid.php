<?php

    class SendGrid{

        private $headers;
        private $ch;
        private $data;

        /**
         * Consome a API SendGrid, sendo o último passo para o envio do email, 
         * com o template HTML gerado no site da API
         * @param array $v 
         */
        public function envia($v){

            $headers = array(
                'Authorization: Bearer Insert Your API Key',
                'Content-Type: application/json'
            );
    
            $data = array(
                "personalizations" => array(
                    array(
                        "to" => array(
                            array(
                                "email" => $v['email'],
                                "name" => $v['name']
                            )
                        )
                    )
                ),
                "from" => array(
                    "email" => $v['email_from']
                ),
                "subject" => $v['subject'],
                "content" => array(
                    array(
                        "type" => "text/html",
                        "value" => '
                                    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
                                    <html data-editor-version="2" class="sg-campaigns" xmlns="http://www.w3.org/1999/xhtml">

                                    <head>
                                        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
                                        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
                                        <!--[if !mso]><!-->
                                        <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
                                        <!--<![endif]-->
                                        <!--[if (gte mso 9)|(IE)]>
                                                                <xml>
                                                                <o : OfficeDocumentSettings>
                                                                <o : AllowPNG/>
                                                                <o : PixelsPerInch>96</o: PixelsPerInch>
                                                                </o: OfficeDocumentSettings>
                                                                </xml>
                                                                <![endif]-->
                                        <!--[if (gte mso 9)|(IE)]>
                                                                <style type = "text/css">
                                                                body {width: 600px;margin: 0 auto;}
                                                                table {border-collapse: collapse;}
                                                                table, td {mso-table-lspace: 0pt;mso-table-rspace: 0pt;}
                                                                img {-ms-interpolation-mode: bicubic;}
                                                                </style>
                                                                <![endif]-->

                                        <style type="text/css">
                                            body,
                                            p,
                                            div {
                                                font-family: arial;
                                                font-size: 14px;
                                            }

                                            body {
                                                color: #000000;
                                            }

                                            body a {
                                                color: #1188E6;
                                                text-decoration: none;
                                            }

                                            p {
                                                margin: 0;
                                                padding: 0;
                                            }

                                            table.wrapper {
                                                width: 100% !important;
                                                table-layout: fixed;
                                                -webkit-font-smoothing: antialiased;
                                                -webkit-text-size-adjust: 100%;
                                                -moz-text-size-adjust: 100%;
                                                -ms-text-size-adjust: 100%;
                                            }

                                            img.max-width {
                                                max-width: 100% !important;
                                            }

                                            .column.of-2 {
                                                width: 50%;
                                            }

                                            .column.of-3 {
                                                width: 33.333%;
                                            }

                                            .column.of-4 {
                                                width: 25%;
                                            }

                                            @media screen and (max-width:480px) {

                                                .preheader .rightColumnContent,
                                                .footer .rightColumnContent {
                                                    text-align: left !important;
                                                }

                                                .preheader .rightColumnContent div,
                                                .preheader .rightColumnContent span,
                                                .footer .rightColumnContent div,
                                                .footer .rightColumnContent span {
                                                    text-align: left !important;
                                                }

                                                .preheader .rightColumnContent,
                                                .preheader .leftColumnContent {
                                                    font-size: 80% !important;
                                                    padding: 5px 0;
                                                }

                                                table.wrapper-mobile {
                                                    width: 100% !important;
                                                    table-layout: fixed;
                                                }

                                                img.max-width {
                                                    height: auto !important;
                                                    max-width: 480px !important;
                                                }

                                                a.bulletproof-button {
                                                    display: block !important;
                                                    width: auto !important;
                                                    font-size: 80%;
                                                    padding-left: 0 !important;
                                                    padding-right: 0 !important;
                                                }

                                                .columns {
                                                    width: 100% !important;
                                                }

                                                .column {
                                                    display: block !important;
                                                    width: 100% !important;
                                                    padding-left: 0 !important;
                                                    padding-right: 0 !important;
                                                    margin-left: 0 !important;
                                                    margin-right: 0 !important;
                                                }
                                            }
                                        </style>
                                        <!--user entered Head Start-->

                                        <!--End Head user entered-->
                                    </head>

                                    <body>
                                        <center class="wrapper" data-link-color="#1188E6" data-body-style="font-size: 14px; font-family: arial; color: #000000; background-color: #ffffff;">
                                            <div class="webkit">
                                                <table cellpadding="0" cellspacing="0" border="0" width="100%" class="wrapper" bgcolor="#ffffff">
                                                    <tr>
                                                        <td valign="top" bgcolor="#ffffff" width="100%">
                                                            <table width="100%" role="content-container" class="outer" align="center" cellpadding="0" cellspacing="0" border="0">
                                                                <tr>
                                                                    <td width="100%">
                                                                        <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                                                            <tr>
                                                                                <td>
                                                                                    <!--[if mso]>
                                                                                    <center>
                                                                                    <table><tr><td width = "600">
                                                                                    <![endif]-->
                                                                                    <table width="100%" cellpadding="0" cellspacing="0" border="0" style="width: 100%; max-width:600px;" align="center">
                                                                                        <tr>
                                                                                            <td role="modules-container" style="padding: 0px 0px 0px 0px; color: #000000; text-align: left;" bgcolor="#ffffff" width="100%" align="left">

                                                                                                <table class="module preheader preheader-hide" role="module" data-type="preheader" border="0" cellpadding="0" cellspacing="0" width="100%" style="display: none !important; mso-hide: all; visibility: hidden; opacity: 0; color: transparent; height: 0; width: 0;">
                                                                                                    <tr>
                                                                                                        <td role="module-content">
                                                                                                            <p></p>
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                </table>

                                                                                                <table class="wrapper" role="module" data-type="image" border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout: fixed;">
                                                                                                    <tr>
                                                                                                        <td style="font-size:6px;line-height:10px;padding:0px 0px 0px 0px;" valign="top" align="center">
                                                                                                            <img class="max-width" border="0" style="display:block;color:#000000;text-decoration:none;font-family:Helvetica, arial, sans-serif;font-size:16px;max-width:50% !important;width:50%;height:auto !important;" src="https://marketing-image-production.s3.amazonaws.com/uploads/88e8679c8bed5aff2d8e52002251b6afd8353d42758949697e976d997d756b848a980c41381866450a4539c9ca9cea3b55c037fca8bc89cad1e8087e086882ce.png" alt="emailer" width="300">
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                </table>

                                                                                                <table class="wrapper" role="module" data-type="image" border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout: fixed;">
                                                                                                    <tr>
                                                                                                        <td style="font-size:6px;line-height:10px;padding:0px 0px 0px 0px;" valign="top" align="center">
                                                                                                            <img class="max-width" border="0" style="display:block;color:#000000;text-decoration:none;font-family:Helvetica, arial, sans-serif;font-size:16px;max-width:100% !important;width:100%;height:auto !important;" src="https://marketing-image-production.s3.amazonaws.com/uploads/2223a4c75e988dc1a68188f1b0ee3db2fc08f85df7749ede27c1b5da903975af6a95b38e4a0ae39a4c109b050e2f765a1b3d13c0a9ed48e7db4b5e57daefa57f.jpg" alt="arvore" width="600">
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                </table>

                                                                                                <table class="module" role="module" data-type="text" border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout: fixed;">
                                                                                                    <tr>
                                                                                                        <td style="padding:18px 0px 18px 0px;line-height:22px;text-align:inherit;" height="100%" valign="top" bgcolor="">
                                                                                                            <div style="text-align: center;">
                                                                                                                <div style="font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; font-family: arial; font-size: 14px; color: rgb(155, 155, 155); text-align: center;"><span style="font-size: 14px; color: rgb(255, 102, 102);"><span style="font-size: 22px;">'.$v['name'].'&nbsp;se declarou para você !</span></span></div>

                                                                                                                <div style="font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; font-family: arial; font-size: 14px; color: rgb(155, 155, 155);">&nbsp;</div>

                                                                                                                <div style="font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; font-family: arial; font-size: 14px; color: rgb(155, 155, 155); text-align: center;">'.$v['body'].'</div>
                                                                                                            </div>

                                                                                                            <div>&nbsp;</div>

                                                                                                        </td>
                                                                                                    </tr>
                                                                                                </table>
                                                                                                <table border="0" cellPadding="0" cellSpacing="0" class="module" data-role="module-button" data-type="button" role="module" style="table-layout:fixed" width="100%">
                                                                                                    <tbody>
                                                                                                        <tr>
                                                                                                            <td align="center" class="outer-td" style="padding:0px 0px 0px 0px">
                                                                                                                <table border="0" cellPadding="0" cellSpacing="0" class="button-css__deep-table___2OZyb wrapper-mobile" style="text-align:center">
                                                                                                                    <tbody>
                                                                                                                        <tr>
                                                                                                                            <td align="center" bgcolor="#f26d6d" class="inner-td" style="border-radius:6px;font-size:16px;text-align:center;background-color:inherit"><a style="background-color:#f26d6d;border:1px solid #333333;border-color:#F26D6D;border-radius:6px;border-width:1px;color:#ffffff;display:inline-block;font-family:arial,helvetica,sans-serif;font-size:16px;font-weight:normal;letter-spacing:0px;line-height:16px;padding:12px 18px 12px 18px;text-align:center;text-decoration:none" href="http://localhost/lp2/at02/vitoria/emailer" target="_blank">Declare-se</a></td>
                                                                                                                        </tr>
                                                                                                                    </tbody>
                                                                                                                </table>
                                                                                                            </td>
                                                                                                        </tr>
                                                                                                    </tbody>
                                                                                                </table>
                                                                                                <table class="module" role="module" data-type="divider" border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout: fixed;">
                                                                                                    <tr>
                                                                                                        <td style="padding:0px 0px 0px 0px;" role="module-content" height="100%" valign="top" bgcolor="">
                                                                                                            <table border="0" cellpadding="0" cellspacing="0" align="center" width="100%" height="2px" style="line-height:2px; font-size:2px;">
                                                                                                                <tr>
                                                                                                                    <td style="padding: 0px 0px 2px 0px;" bgcolor="#F26D6D"></td>
                                                                                                                </tr>
                                                                                                            </table>
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                </table>

                                                                                            </td>
                                                                                        </tr>
                                                                                    </table>
                                                                                    <!--[if mso]>
                                                                                    </td></tr></table>
                                                                                    </center>
                                                                                    <![endif]-->
                                                                                </td>
                                                                            </tr>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </center>
                                    </body>

                                    </html>
                        ' 
                    )
                )
                
            );
    
    
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, "https://api.sendgrid.com/v3/mail/send");
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $response = curl_exec($ch);
            curl_close($ch);
    
            echo $response;
        }
        
    }
    