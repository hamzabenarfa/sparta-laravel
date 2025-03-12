<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <style>
        /* General Body Styles */
        body {
            margin: 0;
            font-family: 'Arial', sans-serif;
            background-color: #050615;
        }

        /* Footer Styles */
        .footer {
            background: linear-gradient(135deg, #060b27, #1c1e36); /* Gradient from #060b27 to #050615 */
            color: white;
            padding: 20px;
        }

        /* Additional Footer Styles */
        .footer h4 {
            font-size: 1rem;
            font-weight: 600;
            margin-bottom: 10px;
        }

        .footer a {
            color: #ffffff;
            text-decoration: none;
        }

        .footer a:hover {
            text-decoration: underline;
        }

        /* Responsive Design for Footer */
        @media (min-width: 768px) {
            .footer {
                padding: 30px;
            }
        }

        .footer img {
            max-width: 100%;
            height: auto;
        }

        .footer .footer-list {
            margin-bottom: -10px;
        }

        .footer .footer-list h3 {
            margin-bottom: -40px;
            color: #61dafb;
        }

        .footer .footer-list ul {
            padding: 0;
            list-style-type: none;
        }

        .footer .footer-list ul li {
            margin-bottom: 10px;
        }

        .footer .footer-list ul li a {
            color: #adb5bd;
            transition: color 0.3s;
        }

        .footer .footer-list ul li a:hover {
            color: #ffffff;
        }

        .footer .social-icons a {
            color: #adb5bd;
            margin-right: 10px;
            font-size: 1.5em;
            transition: color 0.3s;
        }

        .footer .social-icons a:hover {
            color: #ffffff;
        }

        .footer .small-btn img {
            width: 36px;
            height: 36px;
            margin: 5px;
        }

        .footer .right-align {
            text-align: right;
        }

        @media (min-width: 768px) {
            .footer {
                padding: 40px;
            }

            .footer .grid {
                display: grid;
                grid-template-columns: repeat(3, 1fr);
                gap: 20px;
            }

            .footer .grid .col-span-2 {
                grid-column: span 2;
            }
        }

        .fixed-footer {
            display: none;
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            background: linear-gradient(160deg, #060b27, #1c1e36);
            color: #fff;
            text-align: center;
            padding: 10px 0;
            z-index: 1000;
        }

        .fixed-footer-item {
            display: inline-block;
            margin: 0 10px;
            font-size: 0.9rem;
            vertical-align: middle;
            text-align: center;
        }

        .fixed-footer .ff-icon {
            display: block;
            width: 30px; /* Adjust the size based on your needs */
            height: 30px;
            background-size: cover;
            margin: 0 auto; /* Centers the icon */
        }

        .fixed-footer .ff-home {
            background-image: url('web/img/footer/home.svg');
        }

        .fixed-footer .ff-sports {
            background-image: url('web/img/footer/sports.svg');
        }

        .fixed-footer .ff-casino {
            background-image: url('web/img/footer/casino.svg');
        }

        .fixed-footer .ff-livecasino {
            background-image: url('web/img/footer/livecasino.svg');
        }

        .fixed-footer .ff-racing {
            background-image: url('web/img/footer/racing.png');
        }

        .fixed-footer .ff-label {
            display: block;
            margin-top: 5px;
            font-size: 0.8rem; /* Adjust the font size as needed */
        }

        @media (max-width: 768px) {
            .fixed-footer {
                display: block;
            }
        }
    </style>
</head>
<body>
    <div class="relative">
        <div class="footer pb-32 md:pb-5 mt-5 footer-color p-4 md:p-8">
            <div class="md:w-4/6 2xl:w-4/6 m-auto">
                <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                    <div class="col-span-2 md:col-span-1 flex flex-col">
                        <div class="flex justify-between mb-3">
                            <div class="mr-5">
                                <a href="/" class="flex ml-2 md:mr-24">
                                    <img src="/web/img/logo.png" alt="Logo Black" class="h-10 mr-3 block dark:hidden">
                                </a>
                            </div>
                            <div class="right-align">
                                <img src="/web/img/+18.png" width="42" alt="18+">
                            </div>
                        </div>
                        <div>
                            <div class="flex mt-5 social-icons">
                                <a href="#" class="text-3xl"><i class="fab fa-facebook-f"></i></a>
                                <a href="#" class="text-3xl"><i class="fab fa-twitter"></i></a>
                                <a href="#" class="text-3xl"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="footer-list right-align">
                        <h3 class="text-base md:text-lg font-bold">Glovebet</h3>
                        <ul class="list-none mt-5">
                            <li class="transition duration-300 text-[12px]">
                                <a href="/terms/about-us/">About Us</a>
                            </li>
                            <li class="transition duration-300 text-[12px]">
                                <a href="/terms/">Service Terms</a>
                            </li>
                            <li class="transition duration-300 text-[12px]">
                                <a href="/terms/responsible/">Responsible Gaming</a>
                            </li>
                            <li class="transition duration-300 text-[12px]">
                                <a href="">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <hr class="border-t border-gray-400 mt-5">
            <div class="mt-5 flex flex-col justify-start">
                <p>© 2025 Glovebet All rights reserved.</p>
                <p class="flex text-[10px] md:text-[12px] w-full">
                    <strong>❤️ Developed by</strong>
                    <a href="https://telegram.me/mdraaf" target="_blank" class="ml-2 transition duration-300 cursor-pointer"> RAAF ❤️ </a>
                    <hr class="border-t border-gray-400 mt-5">
                </p>
            </div>
        </div>
        <div class="fixed-footer">
            <a href="/" class="fixed-footer-item">
                <span class="ff-icon ff-home"></span>
                <span class="ff-label">Home</span>
            </a>
                <a href="/provider/all" class="fixed-footer-item">
                <span class="ff-icon ff-casino"></span>
                <span class="ff-label">Casino</span>
            </a>
                 <a href="/404" class="fixed-footer-item">
                <span class="ff-icon ff-livecasino"></span>
                <span class="ff-label">Live Casino</span>
            </a>
                <a href="/404" class="fixed-footer-item">
                <span class="ff-icon ff-sports"></span>
                <span class="ff-label">Sports</span>
            </a>
            <a href="/404" class="fixed-footer-item">
                <span class="ff-icon ff-racing"></span>
                <span class="ff-label">Racing</span>
            </a>
        </div>
    </div>
</body>
</html>
