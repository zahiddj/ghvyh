<?php
session_start();

include("config.php");

if (isset($_GET["chat_id"]) and isset($_GET["username"])) {
    $chat_id = htmlspecialchars($_GET["chat_id"]);
    $username = htmlspecialchars($_GET["username"]);
    if (users($chat_id) == 1) {
        $_SESSION["chat_id"] = $chat_id;
        $info = info($_SESSION["chat_id"]);
    }
    else {
        header('Location: index.php?chat_id=' . $chat_id);
    }
} 
else {
       echo "<script>alert('Welcome')</script>";
    header('Location: https://t.me/' . $data->Account->chanell_link);
}
?>
<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="./assets/css/coin.css?id=18709876654">
    <link rel="stylesheet" href="./assets/css/style.css?id=56856">
    
    <style>
        .score-display {
            font-size: 50px;
        }
    </style>
</head>

<body>

    <div class="min-h-screen bg-gradient-to-r from-[#C7913D] to-[#F1D06E] flex justify-center items-center p-3">
        <div class="bg-gradient-to-r from-[#C7913D] to-[#F1D06E] rounded-3xl shadow-2xl	 p-4 w-full max-w-md text-white">
            <div class="flex justify-between items-center mb-4 bg-slate-900/10 rounded-3xl shadow-xl">
                <div class="flex items-center">
                    <img src="./photos/logoo.jpg" width="40px" height="40px" alt="User Avatar" class="rounded-full mr-2">
                    <span><?php if ($username == "") {
                                echo $chat_id;
                            } else {
                                echo $username;
                            } ?> (ANZ)</span>
                </div>
                <button onclick="myFunction()" class="bg-600 p-2 rounded-full flex justify-between items-center bg-slate-900/10 hover:bg-slate-900/5 rounded-3xl">
                                            <span class="font-bold text-lg">2X Coins</span>
                </button>
            </div>
            
                <script>
                        function myFunction() {
                          var x = document.getElementById("snackbar");
                          x.className = "show";
                          setTimeout(function(){ x.className = x.className.replace("show", ""); }, 2000);
                        }
               </script>
               
            <div id="snackbar">Coming Soon !!</div>
            
            
            <div class="flex justify-between items-center bg-slate-900/10 hover:bg-slate-900/5 p-2 rounded-3xl shadow-lg">
    
                <button class="flex-1 items-center p-2">
                    <a href="https://t.me/anzabcoin">
                        <span>Join Community</span>
                    </a>
                </button>
            </div>
            
            
            
            <div class="text-center mb-4 mt-8">
                <div class="text-4xl mb-2">
                    <img src="./photos/scorephoto.png" width="50px" height="50px" alt="Coin" class="inline-block mb-1" id="coin-image">
                    <span id="score" class="score font-bold text-4xl"><?php echo $info["balanse"]; ?></span>
                </div>
            </div>
            <div class="flex justify-center mb-4" id="coin">
                <img src="./photos/anzabcoin.png" width="80%" height="80%" alt="Character" class="rounded-full clickable shadow-2xl" onclick="startVibration()">
            </div>
            <div class="flex justify-between items-center mb-2">
                <div class="flex items-center">
                    <img src="./photos/charge.png" id="charge" alt="Energy" class="mr-2">
                    <div class="flex justify-between items-center">
                        <span id="inventory"><?php echo $info["charge"]; ?></span>
                        <span> / 5000</span>
                    </div>
                </div>

            </div>
            
            <div class="flex justify-between items-center bg-slate-900 rounded-3xl shadow-lg
            mb-2">
                
              <div class="bg-zinc-600 rounded-3xl h-2 w-full mx-2">
                 <div class="bg-gradient-to-r from-[#C7913D] to-[#F1D06E] h-2 rounded-3xl" style="width: 10%;" id="inventory-fill"></div>
               </div><br>
            </div>

            <div class="flex justify-between items-center bg-slate-900 hover:bg-slate-900/95 p-3 rounded-3xl shadow-lg">
                
                <button class="flex-1 flex flex-col items-center ">
                    <img src="./photos/pick-hammer.png" alt="Exchange" class="p-1" width="40px" height="40px">
                    <span class="text-sm">Mine</span>
                </button>
                
                <button class="flex-1 flex flex-col items-center ">
                    <a href="boost.php">
                        <img src="./photos/start-up.png" alt="Mine" class="p-1" width="40px" height="40px">
                        <span class="text-sm">Boost</span>
                    </a>
                </button>
                
                <button class="flex-1 flex flex-col items-center ">
                      <a href="friend.php">
                            <img src="photos/friend.png" alt="Airdrop" class="p-1 ml-1" width="40px" height="40px">
                            <span class="text-sm">Friends</span>
                        </a>
                </button>
                
                <button class="flex-1 flex flex-col items-center ">
                    <a href="task.php">  
                        <img src="photos/check-list.png" alt="Task" class="p-1" width="40px" height="40px">
                        <span class="text-sm">Task</span>
                    </a>
                </button>
                <button class="flex-1 flex flex-col items-center ">
                    <a href="wallet.php">
                        <img src="photos/wallett.png" alt="Airdrop" class="p-1" width="40px" height="40px">
                        <span class="text-sm">Wallet</span>
                    </a>
                </button>
            </div>
        </div>
    </div>
    <div id="sticker" style="display: none; position: absolute;">
        <img src="./photos/kolang.png" alt="Sticker" style="width: 250px; height: 100px;">
    </div>
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
                    formData.append('number', 1);
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
</body>

</html>
