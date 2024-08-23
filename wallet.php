<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AnzabCoin - Wallet</title>
    <link rel="stylesheet" href="./assets/css/style.css?=174923">
    <link rel="stylesheet" href="./assets/css/responsive.css?=123474456">

    <link rel="icon" type="image/x-icon" href="./assets/favicon/favicon.ico">
    <link rel="icon" type="image/png" href="./assets/favicon/favicon-16x16.png" sizes="16x16">
    <link rel="icon" type="image/png" href="./assets/favicon/favicon-32x32.png" sizes="32x32">
    <link rel="apple-touch-icon" href="./assets/favicon/apple-touch-icon.png">
    <link rel="android-chrome-192x192" href="./assets/favicon/android-chrome-192x192.png" sizes="192x192">
    <link rel="android-chrome-512x512" href="./assets/favicon/android-chrome-512x512.png" sizes="512x512">
    <script src="https://cdn.tailwindcss.com"></script>
    
    <style>
        body {
  background: linear-gradient(to left top, #22132e, #000) fixed;
 
}

.div-wir {
  margin: auto;
  position: relative;
  top: 5px;
  width: auto;
}

#form {
  width: 100%;
  padding: 10px;
  font-size: 18px;
  outline:none;
  background: linear-gradient(to left top, #000, rgb(15 23 42)) fixed;
  border-radius: 24px;
  border: 2px solid rgba(255,255,255,0.2);
  color: rgba(255,255,255,0.8);
  transition: all 0.5s;
}

#form:hover {
  border: 2px solid rgba(255,255,255,0.5);
}
#form:focus {
  border: 2px solid rgba(255,255,255,0.5);
  background: linear-gradient(to left top, #000, #4e2d69) fixed;
}

#button {
  width: 100%;
  padding: 10px;
  margin-top: 10px;
  font-size: 15px;
  font-weight:bold;
  outline:none;
  background: linear-gradient(to left top, #000, rgb(15 23 42)) fixed;
  border-radius: 24px;
  border: 5px solid rgba(255,255,255,0.2);
  color: rgba(255,255,255,0.8);
  transition: all 0.5s;
}

#button:hover {
  border: 5px solid rgba(255,255,255,0.5);
  background: linear-gradient(to left top, #000, #8b5db0) fixed;
}

#button:focus {
  background: linear-gradient(to left top, #8b5db0, #000) fixed;
}

    </style>
    
</head>

<body class="boost">

 <div class="blur-[3px]"> 
 
    <div class="user-balance ml-4 mr-4 bg-slate-900 rounded-3xl shadow-lg p-4 mt-10">

        <div class="balance-coins">
            <img src="./photos/walletpic.png" width="200px">

        </div>

    </div>
    
        
        <div class="div-wir p-4">
              <input type="text" id="form" placeholder="20 $ANZ">
               <input class="mt-2 p-4" type="submit" id="button" value="Withdrawal">
        </div>
 
 </div>

<div class="bg-slate-900 rounded-3xl shadow-lg m-4 p-4">
    <div class="balance-coins mt-2">
            <img src="./photos/tonkeeeper.png" width="180px">
     </div>
                    
    <div class="text-center mt-2">
        <span class="text-lg font-normal">Withdrawal date 08/30/2024</span>
    </div>
    
    <div class="text-center">
        <span class="text-lg font-normal">Is your tonkeeper wallet ready?</span>
    </div>
    
    <div class="flex justify-between items-center bg-slate-800/80 hover:bg-slate-800/60 p-2 rounded-3xl shadow-lg mt-4">
    
                <button class="flex-1 items-center p-2">
                    <a href="https://t.me/anzabcoin">
                        <span>Follow the news</span>
                    </a>
                </button>
            </div>
</div>
    
 

</body>

</html>