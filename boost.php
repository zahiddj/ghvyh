<?php
session_start();
include("config.php");

$information = info($_SESSION["chat_id"]);
?>
<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AnzabCoin - Boosters</title>
    <link rel="stylesheet" href="./assets/css/style.css?id=0999056">
    <link rel="stylesheet" href="./assets/css/responsive.css?id=1234">

    <link rel="icon" type="image/x-icon" href="./assets/favicon/favicon.ico">
    <link rel="icon" type="image/png" href="./assets/favicon/favicon-16x16.png" sizes="16x16">
    <link rel="icon" type="image/png" href="./assets/favicon/favicon-32x32.png" sizes="32x32">
    <link rel="apple-touch-icon" href="./assets/favicon/apple-touch-icon.png">
    <link rel="android-chrome-192x192" href="./assets/favicon/android-chrome-192x192.png" sizes="192x192">
    <link rel="android-chrome-512x512" href="./assets/favicon/android-chrome-512x512.png" sizes="512x512">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />





</head>

<body class="boost">

  <div class="haeder">
        <a>
            <svg width="25px" height="25px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M22 11.9299H2" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M8.00009 19L2.84009 14C2.5677 13.7429 2.35071 13.433 2.20239 13.0891C2.05407 12.7452 1.97754 12.3745 1.97754 12C1.97754 11.6255 2.05407 11.2548 2.20239 10.9109C2.35071 10.567 2.5677 10.2571 2.84009 10L8.00009 5" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
        </a>
    </div>


    <div class="user-balance">
        <div class="balance-title">
            <span class="select-none">Mined Coins</span>
        </div>
        <div class="balance-coins">
            <img src="./photos/anzabcoin.png" width="50px" alt="">
            <span><?php echo $information["balanse"]; ?></span>
        </div>

    </div>
  
 
               <script>
                        function myFunction() {
                          var x = document.getElementById("snackbar");
                          x.className = "show";
                          setTimeout(function(){ x.className = x.className.replace("show", ""); }, 2000);
                        }
                        
               </script>
               
            <div id="snackbar">Coming Soon !!</div>
 
 

    <div class="free-boosts">
        <div class="free-boosts-title">
            <h2>Free daily boosters</h2>
        </div>
        <div class="free-boosts-buttons">

            <div onclick="myFunction()" class="free-boost-button m-r" id="turbo">
                <div class="free-boosts-detail">
                    <span class="select-none">Turbo</span>
                    <span class="available select-none">3/3 available</span>
                </div>
                <div>
                    <img src="./assets/images/rocket.png" width="30px" alt="">
                </div>
            </div>

            <div onclick="myFunction()" class="free-boost-button m-l">
                <div class="free-boosts-detail">
                    <span class="select-none">Full Energy</span>
                    <span class="available select-none" id="full_charge">3/3 available</span>
                </div>
                <div>
                    <img src="./assets/images/thunder.png" width="30px" alt="">
                </div>
            </div>


        </div>

    </div>

    <div class="boosters">
        <div class="boosters-title">
            <h2 class="select-none">Boosters</h2>
        </div>

        <div class="boosters-buttons">
            <div class="boosters-button m-b-1">

                <div onclick="myFunction()" class="boosters-button-detail">
                    <div class="boosters-button-image">
                        <img src="./assets/images/point_up.png" width="50px">
                    </div>
                    <div>
                        <div>
                            <h4>Multitap</h4>
                        </div>
                        <div class="boosters-button-data">
                            <img src="./photos/anzabcoin.png" width="20px" class="m-r-25">
                            <h5 class="m-r-25">1,000</h5>
                            <span class="m-r-25">•</span>
                            <p>1 lvl</p>
                        </div>
                    </div>
                </div>

                <div>
                    <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9 5L14.15 10C14.4237 10.2563 14.6419 10.5659 14.791 10.9099C14.9402 11.2539 15.0171 11.625 15.0171 12C15.0171 12.375 14.9402 12.7458 14.791 13.0898C14.6419 13.4339 14.4237 13.7437 14.15 14L9 19" stroke="#ffffff" opacity="0.4" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>


            </div>

            <div onclick="myFunction()" class="boosters-button m-b-1">

                <div class="boosters-button-detail">
                    <div class="boosters-button-image">
                        <img src="./assets/images/battery.png" width="45px">
                    </div>
                    <div>
                        <div>
                            <h4>Energy Limit</h4>
                        </div>
                        <div class="boosters-button-data">
                            <img src="./photos/anzabcoin.png" width="20px" class="m-r-25">
                            <h5 class="m-r-25">1,000</h5>
                            <span class="m-r-25">•</span>
                            <p>1 lvl</p>
                        </div>
                    </div>
                </div>

                <div>
                    <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9 5L14.15 10C14.4237 10.2563 14.6419 10.5659 14.791 10.9099C14.9402 11.2539 15.0171 11.625 15.0171 12C15.0171 12.375 14.9402 12.7458 14.791 13.0898C14.6419 13.4339 14.4237 13.7437 14.15 14L9 19" stroke="#ffffff" opacity="0.4" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>


            </div>

            <div onclick="myFunction()" class="boosters-button m-b-1">

                <div class="boosters-button-detail">
                    <div class="boosters-button-image">
                        <img src="./assets/images/thunder.png" width="50px">
                    </div>
                    <div>
                        <div>
                            <h4>Charging Speed</h4>
                        </div>
                        <div class="boosters-button-data">
                            <img src="./photos/anzabcoin.png" width="20px" class="m-r-25">
                            <h5 class="m-r-25">1,000</h5>
                            <span class="m-r-25">•</span>
                            <p>1 lvl</p>
                        </div>
                    </div>
                </div>

                <div>
                    <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9 5L14.15 10C14.4237 10.2563 14.6419 10.5659 14.791 10.9099C14.9402 11.2539 15.0171 11.625 15.0171 12C15.0171 12.375 14.9402 12.7458 14.791 13.0898C14.6419 13.4339 14.4237 13.7437 14.15 14L9 19" stroke="#ffffff" opacity="0.4" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>


            </div>

            <div onclick="myFunction()" class="boosters-button">

                <div class="boosters-button-detail">
                    <div class="boosters-button-image">
                        <img src="./assets/images/robot_face.png" width="45px">
                    </div>
                    <div>
                        <div>
                            <h4>Robot Mine</h4>
                        </div>
                        <div class="boosters-button-data">
                            <img src="./photos/anzabcoin.png" width="20px" class="m-r-25">
                            <h5 class="m-r-25">250,000</h5>
                            <span class="m-r-25">•</span>
                            <p>1 lvl</p>
                        </div>
                    </div>
                </div>

                <div>
                    <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9 5L14.15 10C14.4237 10.2563 14.6419 10.5659 14.791 10.9099C14.9402 11.2539 15.0171 11.625 15.0171 12C15.0171 12.375 14.9402 12.7458 14.791 13.0898C14.6419 13.4339 14.4237 13.7437 14.15 14L9 19" stroke="#ffffff" opacity="0.4" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>


            </div>
        </div>
    </div>


    <div class="buy-skins">
        <div class="boosters-title" style="padding: 0 1.25rem;">
            <h2 class="select-none">Buy Skins</h2>
        </div>

        <div class="swiper skinSwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide slide">
                    <div class="skin-button m-b-1">
                        <div class="boosters-button-detail">
                            <div class="boosters-button-image">
                                <img src="./assets/images/anzabcoin.png" width="50px">
                            </div>
                            <div>
                                <div>
                                    <h4>Basic</h4>
                                </div>
                                <div class="boosters-button-data">
                                    <h5>You own it</h5>
                                </div>
                            </div>
                        </div>

                        <div>
                            <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9 5L14.15 10C14.4237 10.2563 14.6419 10.5659 14.791 10.9099C14.9402 11.2539 15.0171 11.625 15.0171 12C15.0171 12.375 14.9402 12.7458 14.791 13.0898C14.6419 13.4339 14.4237 13.7437 14.15 14L9 19" stroke="#ffffff" opacity="0.4" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                    </div>

                    <div onclick="myFunction()" class="skin-button m-b-1">
                        <div class="boosters-button-detail">
                            <div class="boosters-button-image">
                                <img src="./assets/images/silver.png" width="50px">
                            </div>
                            <div>
                                <div>
                                    <h4>Silver</h4>
                                </div>
                                <div class="boosters-button-data">
                                    <img src="./photos/anzabcoin.png" width="20px" class="m-r-25">
                                    <h5>250,000</h5>
                                </div>
                            </div>
                        </div>

                        <div>
                            <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9 5L14.15 10C14.4237 10.2563 14.6419 10.5659 14.791 10.9099C14.9402 11.2539 15.0171 11.625 15.0171 12C15.0171 12.375 14.9402 12.7458 14.791 13.0898C14.6419 13.4339 14.4237 13.7437 14.15 14L9 19" stroke="#ffffff" opacity="0.4" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                    </div>

                    <div onclick="myFunction()" class="skin-button m-b-1">
                        <div class="boosters-button-detail">
                            <div class="boosters-button-image">
                                <img src="./assets/images/cookie.png" width="50px">
                            </div>
                            <div>
                                <div>
                                    <h4>Cookie</h4>
                                </div>
                                <div class="boosters-button-data">
                                    <img src="./photos/anzabcoin.png" width="20px" class="m-r-25">
                                    <h5>250,000</h5>
                                </div>
                            </div>
                        </div>

                        <div>
                            <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9 5L14.15 10C14.4237 10.2563 14.6419 10.5659 14.791 10.9099C14.9402 11.2539 15.0171 11.625 15.0171 12C15.0171 12.375 14.9402 12.7458 14.791 13.0898C14.6419 13.4339 14.4237 13.7437 14.15 14L9 19" stroke="#ffffff" opacity="0.4" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                    </div>

                    <div onclick="myFunction()" class="skin-button">
                        <div class="boosters-button-detail">
                            <div class="boosters-button-image">
                                <img src="./assets/images/soccer-ball.png" width="50px">
                            </div>
                            <div>
                                <div>
                                    <h4>Soccer Ball</h4>
                                </div>
                                <div class="boosters-button-data">
                                    <img src="./photos/anzabcoin.png" width="20px" class="m-r-25">
                                    <h5>250,000</h5>
                                </div>
                            </div>
                        </div>

                        <div>
                            <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9 5L14.15 10C14.4237 10.2563 14.6419 10.5659 14.791 10.9099C14.9402 11.2539 15.0171 11.625 15.0171 12C15.0171 12.375 14.9402 12.7458 14.791 13.0898C14.6419 13.4339 14.4237 13.7437 14.15 14L9 19" stroke="#ffffff" opacity="0.4" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div onclick="myFunction()" class="swiper-slide slide">
                    <div class="skin-button m-b-1">
                        <div class="boosters-button-detail">
                            <div class="boosters-button-image">
                                <img src="./assets/images/diamond.png" width="50px">
                            </div>
                            <div>
                                <div>
                                    <h4>Diamond</h4>
                                </div>
                                <div class="boosters-button-data">
                                    <img src="./photos/anzabcoin.png" width="20px" class="m-r-25">
                                    <h5>250,000</h5>
                                </div>
                            </div>
                        </div>

                        <div>
                            <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9 5L14.15 10C14.4237 10.2563 14.6419 10.5659 14.791 10.9099C14.9402 11.2539 15.0171 11.625 15.0171 12C15.0171 12.375 14.9402 12.7458 14.791 13.0898C14.6419 13.4339 14.4237 13.7437 14.15 14L9 19" stroke="#ffffff" opacity="0.4" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                    </div>

                    <div onclick="myFunction()" class="skin-button">
                        <div class="boosters-button-detail">
                            <div class="boosters-button-image">
                                <img src="./assets/images/diamond (1).png" width="50px">
                            </div>
                            <div>
                                <div>
                                    <h4>Diamond 2</h4>
                                </div>
                                <div class="boosters-button-data">
                                    <img src="./photos/anzabcoin.png" width="20px" class="m-r-25">
                                    <h5>250,000</h5>
                                </div>
                            </div>
                        </div>

                        <div>
                            <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9 5L14.15 10C14.4237 10.2563 14.6419 10.5659 14.791 10.9099C14.9402 11.2539 15.0171 11.625 15.0171 12C15.0171 12.375 14.9402 12.7458 14.791 13.0898C14.6419 13.4339 14.4237 13.7437 14.15 14L9 19" stroke="#ffffff" opacity="0.4" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide"></div>
            </div>
        </div>
    </div>
    
    <div class="fixed inset-0 flex items-center justify-center hidden" id="notification">
        <div class="bg-zinc-800 dark:bg-zinc-800 text-white dark:text-white rounded-lg p-6 relative w-full max-w-md shadow-lg border-yellow-500 border-4 slide-up">
            <button id="close" class="absolute top-2 right-2 text-zinc-400 dark:text-zinc-400 hover:text-zinc-200 dark:hover:text-zinc-200">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
            <div class="flex flex-col items-center" id="notificationBox">
                <img src="photos/battry.gif" width="50%" height="50%" alt="lightning bolt" class="mb-4" />
                <h2 class="text-2xl font-bold mb-2">Full energy </h2>

                <p class="text-center mb-4">Recharge your energy to the maximum and do another round of mining </p>
                <div class="flex items-center mb-6">

                    <span class="text-lg font-bold">Free</span>
                </div>
                <button id="closeNotification" class="bg-blue-600 dark:bg-blue-700 hover:bg-blue-700 dark:hover:bg-blue-800 text-white font-bold py-2 px-4 rounded-full w-full max-w-xs">Go
                    ahead</button>
            </div>
        </div>
    </div>
    <div class="fixed inset-0 flex items-center justify-center hidden" id="taskNotification">
        <div class="bg-zinc-800 dark:bg-zinc-800 text-white dark:text-white rounded-lg p-6 relative w-full max-w-md shadow-lg border-yellow-500 border-4 slide-up">
            <button id="closeNotificationBtn" class="absolute top-2 right-2 text-zinc-400 dark:text-zinc-400 hover:text-zinc-200 dark:hover:text-zinc-200">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
            <div class="flex flex-col items-center" id="notificationBox">
                <img src="photos/gift.webp" width="50%" height="50%" alt="lightning bolt" class="mb-4" />
                <h2 class="text-2xl font-bold mb-2">Task Start</h2>
                <p class="text-center mb-4">Task is ready to start!</p>
                <div class="flex items-center mb-6">
                    <span class="text-lg font-bold">Free</span>
                </div>
                <button id="startTask" class="bg-blue-600 dark:bg-blue-700 hover:bg-blue-700 dark:hover:bg-blue-800 text-white font-bold py-2 px-4 rounded-full w-full max-w-xs">Start Task</button>
            </div>
        </div>



    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    
        <script>
        var swiper = new Swiper(".skinSwiper", {
            slidesPerView: 2,
            spaceBetween: 10

        });
    </script>
    
    
     <script>
        function showTaskNotification(url, name, price) {
            taskUrl = url;
            const notification = document.getElementById('taskNotification');
            notification.classList.remove('hidden');
            document.getElementById('taskNotification').addEventListener('click', function() {
                var chat_id = null;
                var xhr = new XMLHttpRequest();
                xhr.open('POST', 'task.php', true);
                xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                xhr.onload = function() {
                    if (xhr.status === 200) {
                        var response = JSON.parse(xhr.responseText);
                        if (response.message === 'Task added successfully') {
                            console.log('Task successfully updated');
                            window.location.href = taskUrl;
                        } else {
                            console.log(response.message);
                            alert(response.message);
                            location.reload();

                        }
                    } else {
                        console.error('Error occurred: ' + xhr.status);
                    }
                };
                xhr.send('chat_id=' + encodeURIComponent(chat_id) + '&task_name=' + encodeURIComponent(name) + '&price=' + price);


            });
        }

        document.getElementById('closeNotificationBtn').addEventListener('click', function() {
            const taskNotification = document.getElementById('taskNotification');
            taskNotification.classList.add('hidden');
            location.reload();

        });


        document.getElementById('close').addEventListener('click', function() {
            const notification = document.getElementById('notification');
            notification.classList.add('hidden');
        });
    </script>

    <script>
        let notificationEnabled = true;

        document.getElementById('showNotification').addEventListener('click', function() {
            if (notificationEnabled) {
                const notification = document.getElementById('notification');
                notification.classList.remove('hidden');
            }
        });

        if (3 === 0) {
            document.getElementById('full_charge').style.color = 'red';
            notificationEnabled = false;
        }


        document.getElementById('closeNotification').addEventListener('click', function() {
            const notification = document.getElementById('notification');
            notification.classList.add('hidden');
            // انجام آپدیت صفحه
            location.reload();

        });

        document.getElementById('close').addEventListener('click', function() {
            const notification = document.getElementById('notification');
            notification.classList.add('hidden');
        });
        var swiper = new Swiper(".skinSwiper", {
            slidesPerView: 2,
            spaceBetween: 10

        });
        document.querySelector('#notificationBox button').addEventListener('click', function() {
            var chat_id = null;
            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'ahead.php', true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.onload = function() {
                if (xhr.status === 200) {
                    console.log(xhr.responseText);
                } else {
                    console.error('Error occurred: ' + xhr.status);
                }
            };
            xhr.send('chat_id=' + encodeURIComponent(chat_id) + '&charge=1');
        });
    </script>
    
    
    <div class="fixed inset-0 flex items-center justify-center hidden" id="notification">
        <div class="bg-zinc-800 dark:bg-zinc-800 text-white dark:text-white rounded-lg p-6 relative w-full max-w-md shadow-lg border-yellow-500 border-4 slide-up">
            <button id="close" class="absolute top-2 right-2 text-zinc-400 dark:text-zinc-400 hover:text-zinc-200 dark:hover:text-zinc-200">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
            <div class="flex flex-col items-center" id="notificationBox">
                <img src="photos/battry.gif" width="50%" height="50%" alt="lightning bolt" class="mb-4" />
                <h2 class="text-2xl font-bold mb-2">Full energy </h2>

                <p class="text-center mb-4">Recharge your energy to the maximum and do another round of mining </p>
                <div class="flex items-center mb-6">

                    <span class="text-lg font-bold">Free</span>
                </div>
                <button id="closeNotification" class="bg-blue-600 dark:bg-blue-700 hover:bg-blue-700 dark:hover:bg-blue-800 text-white font-bold py-2 px-4 rounded-full w-full max-w-xs">Go
                    ahead</button>
            </div>
        </div>
    </div>
    
    <script src="./assets/js/charge.js"></script>
    <script src="./assets/js/boost.js"></script>
</body>

</html>
