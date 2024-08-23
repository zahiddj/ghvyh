<?php
session_start();
include("config.php");

$information = info($_SESSION["chat_id"]);

if (isset($_GET["chat_id"]) and isset($_GET["username"])) {
    $chat_id = htmlspecialchars($_GET["chat_id"]);
    $username = htmlspecialchars($_GET["username"]);
    if (users($chat_id) == 1) {
        $_SESSION["chat_id"] = $chat_id;
        $info = info($_SESSION["chat_id"]);
    } else {
        header('Location: index.php?chat_id=' . $chat_id);
    }
} 


?>

<!DOCTYPE html>
<html lang="en">

<head>


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ScopCoin - Boosters</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/responsive.css">

    <link rel="icon" type="image/x-icon" href="./assets/favicon/favicon.ico">
    <link rel="icon" type="image/png" href="./assets/favicon/favicon-16x16.png" sizes="16x16">
    <link rel="icon" type="image/png" href="./assets/favicon/favicon-32x32.png" sizes="32x32">
    <link rel="apple-touch-icon" href="./assets/favicon/apple-touch-icon.png">
    <link rel="android-chrome-192x192" href="./assets/favicon/android-chrome-192x192.png" sizes="192x192">
    <link rel="android-chrome-512x512" href="./assets/favicon/android-chrome-512x512.png" sizes="512x512">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <style>
        * {
            user-select: none;
        }

        @keyframes slide-up {
            from {
                transform: translateY(100%);
                opacity: 0;
            }

            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        .slide-up {
            animation: slide-up 0.5s ease-out;
        }

        .hidden {
            display: none;
        }

        .tooltip {
            position: relative;
            display: inline-block;
            cursor: pointer;
        }

        .tooltip .tooltiptext {
            visibility: hidden;
            width: 120px;
            background-color: black;
            color: #fff;
            text-align: center;
            border-radius: 6px;
            padding: 5px 0;
            position: absolute;
            z-index: 1;
            bottom: 125%;

            left: 50%;
            margin-left: -60px;

            opacity: 0;
            transition: opacity 0.3s;
        }

        .tooltip:hover .tooltiptext {
            visibility: visible;
            opacity: 1;
        }

        #task {
            border: 2px solid aqua;
            border-radius: 1em;
            margin: 10px;
            padding: 10px;
        }
    </style>
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

    <div class="user-balance ml-4 mr-4 bg-slate-900 rounded-3xl shadow-lg p-4 mt-2">

        <div class="balance-coins">
            <img src="./photos/anzabcoin.png" width="50px" alt="">
            <span id="score"><?php echo $information["balanse"]; ?></span>
        </div>

   
        
        <div class="balance-title">
            <span class="select-none text-center">Do the tasks to mine more coins</span>
             <hr class="mt-2">
        </div>
        
    </div>


    <div class="buy-skins">
        <div class="boosters-title" style="padding: 0 1.25rem">
            <h2 class="select-none text-2xl">Tasks</h2>
        </div>

        <div class="swiper skinSwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide slide">
<div class="skin-button m-b-1" id="coin">
                                            <div class="boosters-button-detail">
                            <a href="https://www.youtube.com/@Mr.Lightcode">
                                <div class="boosters-button-image" id="coin">
                                    <img src="./photos/youtube.png" width="50px" alt="Character" onclick="startVibration()">
                                </div>
                                   <div>
                                    <div>
                                        <h4 class="tooltip">Subscribe Youtube Channel<span class="tooltiptext">Daily bonus with unique rewards</span>
                                        </h4>
                                    </div>
                                <div class="boosters-button-data"><img src="./photos/anzabcoin.png" width="20px" class="m-r-25">
                                      <h5>50,000</h5>
                                </div>
                            </a>
                                   </div>
                                </div>
                                <div>
                                    <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9 5L14.15 10C14.4237 10.2563 14.6419 10.5659 14.791 10.9099C14.9402 11.2539 15.0171 11.625 15.0171 12C15.0171 12.375 14.9402 12.7458 14.791 13.0898C14.6419 13.4339 14.4237 13.7437 14.15 14L9 19" stroke="#ffffff" opacity="0.4" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        
                                        </div>
                                        
                </div>
              <div class="skin-button m-b-1" id="coin">
                                            <div class="boosters-button-detail">
                            <a href="https://t.me/anzabcoin">
                                <div class="boosters-button-image" id="coin">
                                    <img src="./photos/telegram.png" width="50px" alt="Character" onclick="startVibration()">
                                </div>
                                   <div>
                                    <div>
                                        <h4 class="tooltip">Join Community<span class="tooltiptext">Daily bonus with unique rewards</span>
                                        </h4>
                                    </div>
                                <div class="boosters-button-data"><img src="./photos/anzabcoin.png" width="20px" class="m-r-25">
                                      <h5>50,000</h5>
                                </div>
                            </a>
                                   </div>
                                </div>
                                <div>
                                    <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9 5L14.15 10C14.4237 10.2563 14.6419 10.5659 14.791 10.9099C14.9402 11.2539 15.0171 11.625 15.0171 12C15.0171 12.375 14.9402 12.7458 14.791 13.0898C14.6419 13.4339 14.4237 13.7437 14.15 14L9 19" stroke="#ffffff" opacity="0.4" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        
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
                <img src="photos/friend.png" width="50%" height="50%" alt="lightning bolt" class="mb-4" />
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
                <img src="photos/gift-box.png" width="50%" height="50%" alt="lightning bolt" class="mb-4" />
                <h2 id="task" class="text-2xl font-bold mb-2">Task Start</h2>

                <p class="text-center mb-4 hidden">Task is ready to start!</p>
                <div class="flex items-center mb-6">
                    <span class="text-lg font-bold hidden">Free</span>
                </div>

            </div>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

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
    
    <script>
        function startVibration() {
            // Check if the device supports vibration
            if ("vibrate" in navigator) {
                // Vibrate for 200ms
                window.navigator.vibrate(20);
            } else {
                console.log("Vibration not supported on this device");
            }
            
            
        }

        document.addEventListener('DOMContentLoaded', function() {
            const image = document.querySelector('.clickable');
            const scoreElement = document.getElementById('score');
            const inventoryElement = document.getElementById('inventory');
            const inventoryFill = document.getElementById('inventory-fill');
            var currentSearch = window.location.search;
            var index = currentSearch.indexOf("&");
            var number = currentSearch.substring(1, index);

            let inventory = parseInt(inventoryElement.textContent, 10);
            const maxInventory = 5000;

            function updateInventory() {
                inventoryElement.textContent = `${inventory}`;
                inventoryFill.style.width = `${(inventory / maxInventory) * 100}%`;

                var formData = new FormData();
                formData.append('username', number.replace("chat_id=", ""));
                formData.append('charge', inventory);

                fetch('update.php', {
                        method: 'POST',
                        body: formData
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (!data.success) {
                            console.error('Error:', data.message);
                        }
                    })
                    .catch(error => console.error('Error:', error));
            }

            function recharge() {
                if (inventory < maxInventory) {
                    inventory += 1;
                    if (inventory > maxInventory) {
                        inventory = maxInventory;
                    }
                    updateInventory();
                }
            }

            setInterval(recharge, 1000);

            image.addEventListener('click', function(event) {
                if (inventory > 0) {
                    inventory -= 1;
                    updateInventory();

                    image.classList.add('shake');
                    setTimeout(() => {
                        image.classList.remove('shake');
                    }, 500);

                    const scoreDisplay = document.createElement('div');
                    scoreDisplay.textContent = "+1";
                    scoreDisplay.classList.add('score-display');
                    const rect = image.getBoundingClientRect();

                    scoreDisplay.style.top = `${event.clientY - rect.top}px`;
                    scoreDisplay.style.left = `${event.clientX - rect.left}px`;
                    image.parentElement.style.position = 'relative';
                    image.parentElement.appendChild(scoreDisplay);

                    setTimeout(() => {
                        scoreDisplay.remove();
                    }, 2000);

                    var formData = new FormData();
                    formData.append('number', 10);
                    formData.append('username', number.replace("chat_id=", ""));

                    fetch('update.php', {
                            method: 'POST',
                            body: formData
                        })
                        .then(response => response.json())
                        .then(data => {
                            if (data.success) {
                                scoreElement.textContent = data.balanse;
                                inventoryElement.textContent = `${data.charge}`;
                            } else {
                                console.error('Error:', data.message);
                            }
                        })
                        .catch(error => console.error('Error:', error));
                }
            });

            updateInventory();
        });
    </script>
    
    <script src="./assets/js/charge.js"></script>
    <script src="./assets/js/boost.js"></script>
</body>

</html>