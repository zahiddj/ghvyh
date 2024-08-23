
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    body,
    html {
      height: 100%;
      margin: 0;
    }

    .full-height {
      height: 108%;
    }
  </style>
  <link rel="stylesheet" href="./assets/css/style.css">
  <link rel="stylesheet" href="./assets/css/responsive.css">
</head>

<body class="boost">
  <div class=" text-white p-4 rounded-lg max-w-md mx-auto full-height flex flex-col">
    <div class="flex justify-between items-center mb-4">
      <a>
        <svg width="35px" height="35px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M22 11.9299H2" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
          <path d="M8.00009 19L2.84009 14C2.5677 13.7429 2.35071 13.433 2.20239 13.0891C2.05407 12.7452 1.97754 12.3745 1.97754 12C1.97754 11.6255 2.05407 11.2548 2.20239 10.9109C2.35071 10.567 2.5677 10.2571 2.84009 10L8.00009 5" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
      </a>

    </div>
    <div class="flex-grow overflow-auto">
      <h2 class="text-center text-2xl font-bold mb-2">Invite friends!</h2>
      <p class="text-center mb-4">You and your friend will receive bonuses</p>
      <div class="space-y-4">
        <div class="bg-slate-900 p-4 flex items-center rounded-3xl shadow-lg">
          <img src="photos/friend.png" width="50px" height="50px" alt="gift" class="w-12 h-12 mr-4">
          <div>
            <p class="font-bold">Invite a friend</p>
            <p class="text-yellow-400">+5,000 for you and your friend</p>
          </div>
        </div>
      </div>

      <h3 class="mt-6 mb-2">List of your friends (0)</h3><div class="space-y-2"><div class="space-y-2"></div>    </div>
  </div>
  <button id="inviteButton" class="bg-slate-900 hover:bg-slate-900/95 text-white w-full py-6 mt-4 rounded-3xl shadow-lg flex items-center justify-center">
    <span>Invite a friend</span>
  </button>
  <p id="copyMessage" class="text-center text-green-500 mt-4 hidden">Copy Success..!</p>
  </div>

  <script>
    document.getElementById('inviteButton').addEventListener('click', function() {
      const chatId = "";
      const textToCopy = "https://t.me/share/url?url=https://t.me/AnzabCoin_bot?start=" + chatId + "&text=Join%20me%20in%20AnzabCoin%20and%20start%20mining%20today!%20Let's%20earn%20together!";
      navigator.clipboard.writeText(textToCopy).then(function() {
        const copyMessage = document.getElementById('copyMessage');
        copyMessage.classList.remove('hidden');
        copyMessage.classList.add('block');

        setTimeout(function() {
          copyMessage.classList.remove('block');
          copyMessage.classList.add('hidden');
          window.location = "https://t.me/share/url?url=https://t.me/AnzabCoin_bot?start=" + chatId + "&text=Join%20me%20in%20AnzabCoin%20and%20start%20mining%20today!%20Let's%20earn%20together!"
        }, 2000);
      }).catch(function(err) {
        console.error('Error in copying text: ', err);
      });
    });
    
    <?php
    
include("config.php");

if (isset($_GET["chat_id"]) and isset($_GET["username"])) {
    $chat_id = htmlspecialchars($_GET["chat_id"]);
    $username = htmlspecialchars($_GET["username"]);
}
?>
    
  </script>
</body>

</html>