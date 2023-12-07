<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Page</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .payment-container {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 40px;
            width: 500px;
            text-align: center;
        }

        .payment-options {
            display: flex;
            justify-content: space-around;
            margin-top: 20px;
        }

        .card-details {
            display: none;
            margin-top: 20px;
        }

        .card-details h3 {
            margin-bottom: 10px;
            font-size: 18px;
            color: #333;
        }

        .card-details input {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            box-sizing: border-box;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        button {
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            border: none;
            border-radius: 5px;
            background-color: #004080;
            color: #fff;
        }

        button:hover {
            background-color: #00264d;
        }

        svg {
            width: 100%;
            max-width: 500px;
            height: auto;
            margin: 20px 0;
            transition: opacity 0.3s ease-in-out;
            /* Add transition effect */
        }

        .card-number,
        .card-holder,
        .expiry-date,
        .cvv,
        .phone-svg {
            fill: #fff;
        }

        .upi-details {
        margin-top: 20px;
        border: 1px solid #ddd;
        padding: 15px;
        border-radius: 8px;
        background-color: #fff;
    }

    .upi-details h3 {
        margin-bottom: 10px;
        font-size: 18px;
        color: #333;
    }

    .upi-details input {
        width: 100%;
        padding: 30px;
        margin-bottom: 10px;
        box-sizing: border-box;
        border: 1px solid #ddd;
        border-radius: 5px;
    }

    #upiId {
        padding: 9px;
        text-align: start;
        font-size: 13px;
    }


    </style>
</head>

<body>

    <div class="payment-container">
        <h2>Select Payment Method</h2>

        <div class="payment-options">
            <button onclick="showPaymentOption('card')">Credit/Debit Card</button>
            <button onclick="showPaymentOption('phone')">UPI</button>
            <button onclick="showPaymentOption('cash')">Cash on Delivery</button>

        </div>

        <div>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 600 360" id="creditCardSVG" class="credit-card-svg"
                style="display: none;">
                <!-- Card Background -->
                <rect width="600" height="360" rx="20" fill="#004080" />

                <rect x="490" y="210" width="40" height="20" width="60" fill="#fff" />
                <text x="495" y="225" font-family="Arial" font-size="12" fill="#004080">VISA</text>

                <!-- Magnetic Stripe -->
                <rect x="30" y="140" width="540" height="40" rx="5" fill="#444" />

                <!-- Chip -->
                <rect x="80" y="40" width="60" height="40" rx="5" fill="#fff" />

                <!-- Card Number -->
                <text x="90" y="210" font-family="Arial" font-size="35" class="card-number" fill="#fff">**** **** ****
                    ****</text>

                <!-- Card Holder -->
                <text x="90" y="260" font-family="Arial" font-size="14" class="card-holder" fill="#fff">Card
                    Holder</text>

                <!-- Expiry Date -->
                <text x="320" y="260" font-family="Arial" font-size="14" class="expiry-date" fill="#fff">MM/YY</text>

                <!-- CVV -->
                <text x="490" y="260" font-family="Arial" font-size="14" class="cvv" fill="#fff">CVV</text>

                <!-- Visa Logo -->

            </svg>

            <div class="card-details" id="cardDetails" style="display: none;">
                <h3>Enter Card Details</h3>
                <input type="text" placeholder="Card Number" id="cardNumber" oninput="updateCardText('card-number', this.value, true)">
                <br>
                <input type="text" placeholder="Card Holder" id="cardHolder" oninput="updateCardText('card-holder', this.value, false)">
                <br>
                <input type="text" placeholder="CVV" id="cvv" oninput="updateCardText('cvv', this.value, true)">
                <br>
                <input type="text" placeholder="Expiry Date" id="expiryDate" oninput="updateExpiryDate(this.value)">
            </div>
            
            
            
        </div>


        <div id="upiDetailsContainer" style="display: none;">
            <h3>Enter UPI Details</h3>
            <input type="text" placeholder="UPI ID" id="upiId" oninput="updateUpiText(this.value)">

            <svg class="animated " id="freepik_stories-mobile-login" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 500 500" version="1.1"
                xmlns:svgjs="http://svgjs.com/svgjs">
                <style>
                    svg#freepik_stories-mobile-login:not(.animated) .animable {
                        opacity: 0;
                    }

                    svg#freepik_stories-mobile-login.animated #freepik--background-simple--inject-1--inject-16 {
                        animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) fadeIn;
                        animation-delay: 0s;
                    }

                    svg#freepik_stories-mobile-login.animated #freepik--Device--inject-1--inject-16 {
                        animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) slideLeft, 1.5s Infinite linear floating;
                        animation-delay: 0s, 1s;
                    }

                    svg#freepik_stories-mobile-login.animated #freepik--Plant--inject-1--inject-16 {
                        animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) slideDown;
                        animation-delay: 0s;
                    }

                    svg#freepik_stories-mobile-login.animated #freepik--Character--inject-1--inject-16 {
                        animation: 1.6s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) slideUp;
                        animation-delay: 0s;
                    }

                    @keyframes fadeIn {
                        0% {
                            opacity: 0;
                        }

                        100% {
                            opacity: 1;
                        }
                    }

                    @keyframes slideLeft {
                        0% {
                            opacity: 0;
                            transform: translateX(-30px);
                        }

                        100% {
                            opacity: 1;
                            transform: translateX(0);
                        }
                    }

                    @keyframes floating {
                        0% {
                            opacity: 1;
                            transform: translateY(0px);
                        }

                        50% {
                            transform: translateY(-10px);
                        }

                        100% {
                            opacity: 1;
                            transform: translateY(0px);
                        }
                    }

                    @keyframes slideDown {
                        0% {
                            opacity: 0;
                            transform: translateY(-30px);
                        }

                        100% {
                            opacity: 1;
                            transform: translateY(0);
                        }
                    }

                    @keyframes slideUp {
                        0% {
                            opacity: 0;
                            transform: translateY(30px);
                        }

                        100% {
                            opacity: 1;
                            transform: inherit;
                        }
                    }
                </style><!--Mobile login-->
                <g id="freepik--background-simple--inject-1--inject-16" class="animable"
                    style="transform-origin: 247.659px 223.729px;">
                    <path
                        d="M409.13,103c-24.88-56.73-84.6-78.09-131.72-40-18.4,14.86-29.88,38.51-52.41,48-21.14,8.9-47.92,6.28-70.78,11.1C105.54,132.3,40,171,45,230.63c2.19,26.12,19.81,55.13,28.52,79.57,10,28.12,16,63.3,42.47,80.11,45.38,28.86,100.12,5.27,141-18,22-12.51,34.11-20.2,57.8-15.91,21.93,4,41.68,18,63.11,1.39,16.09-12.47,17.42-37.74,30.93-52.58,15.22-16.72,30.65-17.93,38.56-43.06,9.59-30.49-4.54-49.54-14.09-76.78S420.85,129.69,409.13,103Z"
                        style="fill: #4CE17B; transform-origin: 247.659px 223.729px;" id="elwycr86oygb"
                        class="animable">
                    </path>
                    <g id="el5q535xmdg3b">
                        <g style="opacity: 0.7; transform-origin: 247.659px 223.729px;" class="animable"
                            id="ellb0hf5em4c">
                            <path
                                d="M409.13,103c-24.88-56.73-84.6-78.09-131.72-40-18.4,14.86-29.88,38.51-52.41,48-21.14,8.9-47.92,6.28-70.78,11.1C105.54,132.3,40,171,45,230.63c2.19,26.12,19.81,55.13,28.52,79.57,10,28.12,16,63.3,42.47,80.11,45.38,28.86,100.12,5.27,141-18,22-12.51,34.11-20.2,57.8-15.91,21.93,4,41.68,18,63.11,1.39,16.09-12.47,17.42-37.74,30.93-52.58,15.22-16.72,30.65-17.93,38.56-43.06,9.59-30.49-4.54-49.54-14.09-76.78S420.85,129.69,409.13,103Z"
                                style="fill: rgb(255, 255, 255); transform-origin: 247.659px 223.729px;"
                                id="eln9or5hwpjme" class="animable"></path>
                        </g>
                    </g>
                </g>
                <g id="freepik--Shadow--inject-1--inject-16" class="animable"
                    style="transform-origin: 219.81px 428.05px;">
                    <ellipse cx="219.81" cy="428.05" rx="154.58" ry="9.63"
                        style="fill: #4CE17B; transform-origin: 219.81px 428.05px;" id="elmvgcpbq2ar9" class="animable">
                    </ellipse>
                    <g id="eloir6oi8t6v">
                        <ellipse cx="219.81" cy="428.05" rx="154.58" ry="9.63"
                            style="fill: rgb(255, 255, 255); opacity: 0.8; transform-origin: 219.81px 428.05px;"
                            class="animable" id="el2qkaoei8uqs"></ellipse>
                    </g>
                </g>
                <g id="freepik--Device--inject-1--inject-16" class="animable"
                    style="transform-origin: 258.255px 245.36px;">
                    <rect x="161.11" y="61.86" width="194.29" height="367" rx="19.43"
                        style="fill: rgb(38, 50, 56); transform-origin: 258.255px 245.36px;" id="el792jv42n9at"
                        class="animable"></rect>
                    <rect x="169.74" y="102.16" width="177.02" height="286.4"
                        style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-miterlimit: 10; stroke-width: 1.33739px; transform-origin: 258.25px 245.36px;"
                        id="elrwqfbin6iq" class="animable"></rect>
                    <g id="el3lyqk380jlv">
                        <circle cx="258.26" cy="191" r="38.37"
                            style="fill: #4CE17B; transform-origin: 258.26px 191px; transform: rotate(-45deg);"
                            class="animable" id="elnylmxak5e2"></circle>
                    </g>
                    <path
                        d="M308.63,370.55H207.89a1.72,1.72,0,0,1-1.73-1.72h0a1.72,1.72,0,0,1,1.73-1.73H308.63a1.72,1.72,0,0,1,1.72,1.73h0A1.72,1.72,0,0,1,308.63,370.55Z"
                        style="fill: #4CE17B; transform-origin: 258.255px 368.825px;" id="elkjq4qluirxk"
                        class="animable">
                    </path>
                    <rect x="200.59" y="250.94" width="115.33" height="20.67" rx="4.01"
                        style="fill: #4CE17B; transform-origin: 258.255px 261.275px;" id="elsiw8ajujwq"
                        class="animable">
                    </rect>
                    <rect x="200.59" y="289.6" width="115.33" height="20.67" rx="4.01"
                        style="fill: #4CE17B; transform-origin: 258.255px 299.935px;" id="elijpysqqix9"
                        class="animable">
                    </rect>
                    <path
                        d="M277.36,210.14l-11.29-6.5v-5.37a17.66,17.66,0,0,0,3.47-6.77,3.64,3.64,0,0,0,1.21.21c1.4,0,2.29-4.34,2.44-7.44,1.63-3.45-.59-5.47-.59-5.47s.92-.92,1.53-4.61-2.15-2.15-4.3-5.53-3.69-7.06-10.75-7.06a9.7,9.7,0,0,0-9.22,5.84,23.36,23.36,0,0,0-5.22.61c-2.16.61-2.77,7.68-.93,10.45a10.53,10.53,0,0,1,1.28,4.93c-.49-.6-1-.76-1.28.6-.61,3.07,1.85,7.37,1.85,7.37l1.27-.36a18,18,0,0,0,3.61,7.23v5.37l-11.29,6.5a8.68,8.68,0,0,0-4.34,7.51v3.72a38.35,38.35,0,0,0,46.89,0v-3.72A8.66,8.66,0,0,0,277.36,210.14Z"
                        style="fill: rgb(38, 50, 56); transform-origin: 258.255px 195.483px;" id="ely2iodtfxglr"
                        class="animable"></path>
                    <path
                        d="M215.2,305.13a1,1,0,0,1-.69-.29.93.93,0,0,1-.31-.7,1,1,0,0,1,.15-.51l1.8-2.88-3.51.11a.94.94,0,0,1-.72-.27,1,1,0,0,1,0-1.33.91.91,0,0,1,.72-.28l3.46.13-1.78-2.87a1,1,0,0,1-.15-.52.93.93,0,0,1,.31-.7,1,1,0,0,1,.69-.29.9.9,0,0,1,.81.52l1.71,3.09,1.69-3.07a1,1,0,0,1,.87-.56.91.91,0,0,1,.67.3,1,1,0,0,1,.28.71,1,1,0,0,1-.13.49l-1.81,2.9,3.51-.13a.91.91,0,0,1,.72.28.93.93,0,0,1,.26.66,1,1,0,0,1-.26.67.94.94,0,0,1-.72.27l-3.53-.11L221,303.6a1,1,0,0,1,.15.53,1,1,0,0,1-1,1,.88.88,0,0,1-.8-.54l-1.67-3-1.66,3A.94.94,0,0,1,215.2,305.13Z"
                        style="fill: rgb(38, 50, 56); transform-origin: 217.708px 299.92px;" id="elw9myijn0lw"
                        class="animable"></path>
                    <path
                        d="M231.42,305.13a1,1,0,0,1-.69-.29.93.93,0,0,1-.31-.7,1,1,0,0,1,.15-.51l1.8-2.88-3.5.11a1,1,0,0,1-.73-.27.95.95,0,0,1,.73-1.61l3.45.13-1.78-2.87a1,1,0,0,1-.15-.52.93.93,0,0,1,.31-.7,1,1,0,0,1,.69-.29.9.9,0,0,1,.81.52l1.71,3.09,1.69-3.07a1,1,0,0,1,.87-.56.89.89,0,0,1,.67.3,1,1,0,0,1,.29.71,1,1,0,0,1-.14.49l-1.81,2.9L239,299a.89.89,0,0,1,.71.28.93.93,0,0,1,.26.66,1,1,0,0,1-.26.67.92.92,0,0,1-.71.27l-3.54-.11,1.76,2.85a1,1,0,0,1,.15.53,1,1,0,0,1-1,1,.88.88,0,0,1-.8-.54l-1.67-3-1.66,3A.94.94,0,0,1,231.42,305.13Z"
                        style="fill: rgb(38, 50, 56); transform-origin: 233.921px 299.93px;" id="elpzofug66p3f"
                        class="animable"></path>
                    <path
                        d="M247.65,305.13a1,1,0,0,1-.7-.29.93.93,0,0,1-.31-.7,1,1,0,0,1,.15-.51l1.8-2.88-3.5.11a.95.95,0,0,1-.73-1.6.94.94,0,0,1,.73-.28l3.45.13-1.78-2.87a1,1,0,0,1-.15-.52,1,1,0,0,1,.31-.7,1,1,0,0,1,.7-.29.9.9,0,0,1,.8.52l1.71,3.09,1.69-3.07a1,1,0,0,1,.87-.56.89.89,0,0,1,.67.3,1,1,0,0,1,.29.71,1,1,0,0,1-.14.49l-1.81,2.9,3.52-.13a.91.91,0,0,1,1,.94,1,1,0,0,1-.25.67.94.94,0,0,1-.72.27l-3.53-.11,1.75,2.85a1,1,0,0,1,.15.53,1,1,0,0,1-.31.7.94.94,0,0,1-.68.3.87.87,0,0,1-.79-.54l-1.68-3-1.66,3A.93.93,0,0,1,247.65,305.13Z"
                        style="fill: rgb(38, 50, 56); transform-origin: 250.161px 299.92px;" id="elq7mewfqdazq"
                        class="animable"></path>
                    <path
                        d="M263.87,305.13a1,1,0,0,1-.7-.29,1,1,0,0,1-.3-.7.94.94,0,0,1,.14-.51l1.8-2.88-3.5.11a1,1,0,0,1-.73-.27,1,1,0,0,1,0-1.33,1,1,0,0,1,.73-.28l3.46.13L263,296.24a1,1,0,0,1-.15-.52,1,1,0,0,1,.31-.7,1,1,0,0,1,.7-.29.9.9,0,0,1,.81.52l1.7,3.09,1.69-3.07a1,1,0,0,1,.87-.56.89.89,0,0,1,.67.3,1,1,0,0,1,.29.71,1,1,0,0,1-.14.49l-1.81,2.9,3.52-.13a.91.91,0,0,1,1,.94,1,1,0,0,1-.25.67.94.94,0,0,1-.72.27l-3.53-.11,1.75,2.85a1,1,0,0,1,.15.53.93.93,0,0,1-.31.7.94.94,0,0,1-.68.3.87.87,0,0,1-.79-.54l-1.68-3-1.66,3A.93.93,0,0,1,263.87,305.13Z"
                        style="fill: rgb(38, 50, 56); transform-origin: 266.394px 299.92px;" id="eli11309yiord"
                        class="animable"></path>
                    <path
                        d="M280.09,305.13a1,1,0,0,1-.7-.29,1,1,0,0,1-.15-1.21l1.79-2.88-3.5.11a1,1,0,0,1-.73-.27,1,1,0,0,1,0-1.33,1,1,0,0,1,.73-.28l3.46.13-1.78-2.87a1,1,0,0,1-.15-.52,1,1,0,0,1,.3-.7,1,1,0,0,1,.7-.29.9.9,0,0,1,.81.52l1.7,3.09,1.69-3.07a1,1,0,0,1,.87-.56.91.91,0,0,1,.68.3,1,1,0,0,1,.28.71,1,1,0,0,1-.14.49l-1.81,2.9,3.52-.13a.91.91,0,0,1,1,.94,1,1,0,0,1-.25.67.94.94,0,0,1-.72.27l-3.53-.11,1.75,2.85a1,1,0,0,1,.15.53.93.93,0,0,1-.31.7.94.94,0,0,1-.68.3.87.87,0,0,1-.79-.54l-1.68-3-1.66,3A.93.93,0,0,1,280.09,305.13Z"
                        style="fill: rgb(38, 50, 56); transform-origin: 282.604px 299.92px;" id="el7y0tw13lpc"
                        class="animable"></path>
                    <path
                        d="M296.31,305.13a1,1,0,0,1-.69-.29.93.93,0,0,1-.31-.7,1,1,0,0,1,.15-.51l1.79-2.88-3.5.11a.93.93,0,0,1-1-.94.93.93,0,0,1,.27-.66.91.91,0,0,1,.72-.28l3.46.13-1.78-2.87a1,1,0,0,1-.15-.52,1,1,0,0,1,.3-.7,1,1,0,0,1,.7-.29.9.9,0,0,1,.81.52l1.7,3.09,1.7-3.07a1,1,0,0,1,.86-.56.91.91,0,0,1,.68.3,1,1,0,0,1,.28.71,1,1,0,0,1-.13.49l-1.81,2.9,3.51-.13a.91.91,0,0,1,.72.28.93.93,0,0,1,.26.66,1,1,0,0,1-.26.67.94.94,0,0,1-.72.27l-3.53-.11,1.75,2.85a1,1,0,0,1,.15.53,1,1,0,0,1-.3.7,1,1,0,0,1-.69.3.87.87,0,0,1-.79-.54l-1.68-3-1.66,3A.93.93,0,0,1,296.31,305.13Z"
                        style="fill: rgb(38, 50, 56); transform-origin: 298.8px 299.92px;" id="eljk0bb5bz1ap"
                        class="animable"></path>
                    <rect x="169.74" y="102.54" width="177.02" height="11.09"
                        style="fill: #4CE17B; mix-blend-mode: multiply; transform-origin: 258.25px 108.085px;"
                        id="el2e9p89azdog" class="animable"></rect>
                    <path
                        d="M277.5,82.11H239a2.62,2.62,0,0,1-2.62-2.62h0A2.62,2.62,0,0,1,239,76.87H277.5a2.62,2.62,0,0,1,2.62,2.62h0A2.62,2.62,0,0,1,277.5,82.11Z"
                        style="fill: #4CE17B; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.33739px; transform-origin: 258.25px 79.49px;"
                        id="ele10seehtytw" class="animable"></path>
                    <path d="M268.75,404.74a10.5,10.5,0,1,0-10.49,10.49A10.5,10.5,0,0,0,268.75,404.74Z"
                        style="fill: #4CE17B; transform-origin: 258.25px 404.73px;" id="el7ml40vz55i9" class="animable">
                    </path>
                    <rect x="252.94" y="399.42" width="10.64" height="10.64"
                        style="fill: #4CE17B; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.33739px; transform-origin: 258.26px 404.74px;"
                        id="elrvqb3hypit" class="animable"></rect>
                </g>
                <g id="freepik--Plant--inject-1--inject-16" class="animable"
                    style="transform-origin: 391.371px 333.028px;">
                    <path
                        d="M385,284s-13.94-35.42-1.53-39.63c12.92-4.39,12.35,19,11.85,30.4-1.05,24.36-3.74,28.89-5.75,22.94Zm-4.19,27.63c3.83,5,4.91-.18-2-23.57-3.24-11-10.28-33.25-21.08-24.9-10.37,8,14.31,37,14.31,37Zm-7.4,20.3c3.65,3.24,3.72-.85-4.95-17.74-4.07-7.91-12.68-23.92-19.73-16-6.77,7.64,16.3,26.21,16.3,26.21Zm-8,24.14c3.65,3.25,3.72-.85-4.95-17.73-4.07-7.91-12.68-23.93-19.73-16C334,330,357,348.57,357,348.57Zm23.1-49.14c-5.84,2.28-1.2,4.76,23.19,4.69,11.44,0,34.8-.52,29.82-13.23-4.77-12.21-39.51,3.34-39.51,3.34Zm-6.65,16.24c-6.18,1.07-2.12,4.43,21.8,9.21,11.21,2.25,34.2,6.4,31.85-7-2.25-12.92-39.39-4.58-39.39-4.58ZM374.42,343c-5.26.76-1.9,3.69,18.21,8.29,9.43,2.16,28.78,6.21,27.1-5.22-1.6-11-33.2-4.78-33.2-4.78Zm-5.65,18.37c-5.15,1.31-1.5,3.87,19,6.31,9.6,1.14,29.27,3.12,26.4-8.07-2.77-10.74-33.53-1.23-33.53-1.23ZM398.91,287c-3,6.72,3.23,5.7,24.41-12.78,9.92-8.67,29.82-26.81,14.06-35.84-15.13-8.68-31.4,33.2-31.4,33.2Zm-29.36,98.3c-3.17,1.85-.06,2.57,14.48-.33,6.82-1.35,20.69-4.35,16-10.27C395.49,369,376.89,381,376.89,381Z"
                        style="fill: #4CE17B; transform-origin: 391.371px 312.057px;" id="eldfogjmv7sj"
                        class="animable">
                    </path>
                    <g id="eljcsaq3bxta">
                        <path
                            d="M385,284s-13.94-35.42-1.53-39.63c12.92-4.39,12.35,19,11.85,30.4-1.05,24.36-3.74,28.89-5.75,22.94Zm-4.19,27.63c3.83,5,4.91-.18-2-23.57-3.24-11-10.28-33.25-21.08-24.9-10.37,8,14.31,37,14.31,37Zm-7.4,20.3c3.65,3.24,3.72-.85-4.95-17.74-4.07-7.91-12.68-23.92-19.73-16-6.77,7.64,16.3,26.21,16.3,26.21Zm-8,24.14c3.65,3.25,3.72-.85-4.95-17.73-4.07-7.91-12.68-23.93-19.73-16C334,330,357,348.57,357,348.57Zm23.1-49.14c-5.84,2.28-1.2,4.76,23.19,4.69,11.44,0,34.8-.52,29.82-13.23-4.77-12.21-39.51,3.34-39.51,3.34Zm-6.65,16.24c-6.18,1.07-2.12,4.43,21.8,9.21,11.21,2.25,34.2,6.4,31.85-7-2.25-12.92-39.39-4.58-39.39-4.58ZM374.42,343c-5.26.76-1.9,3.69,18.21,8.29,9.43,2.16,28.78,6.21,27.1-5.22-1.6-11-33.2-4.78-33.2-4.78Zm-5.65,18.37c-5.15,1.31-1.5,3.87,19,6.31,9.6,1.14,29.27,3.12,26.4-8.07-2.77-10.74-33.53-1.23-33.53-1.23ZM398.91,287c-3,6.72,3.23,5.7,24.41-12.78,9.92-8.67,29.82-26.81,14.06-35.84-15.13-8.68-31.4,33.2-31.4,33.2Zm-29.36,98.3c-3.17,1.85-.06,2.57,14.48-.33,6.82-1.35,20.69-4.35,16-10.27C395.49,369,376.89,381,376.89,381Z"
                            style="fill: rgb(255, 255, 255); opacity: 0.3; transform-origin: 391.371px 312.057px;"
                            class="animable" id="el7wr7qiv476y"></path>
                    </g>
                    <path
                        d="M391.15,300.49l-2.43-40.43m-5.26,53.77L368.1,279.06m55,24.66L386.29,309M375.5,332.57,355.57,307M379,324.73l27.46,1.38M372.5,344.34l21,2.08M367.43,356.8,357,341.11m9.23,21.23,24.69.23m-29.69,46.09a.63.63,0,0,0,.58-.67c-1.57-23.58,7.55-62.2,22.18-93.9,9.35-20.26,46-60.08,46.39-60.48a.63.63,0,0,0,0-.89.62.62,0,0,0-.88,0c-.37.4-37.17,40.37-46.6,60.81C368,346,359,383.92,360.6,408.07a.64.64,0,0,0,.63.59Zm29.91-107.55a.63.63,0,0,0,.59-.66L389.34,260a.62.62,0,0,0-.66-.59.63.63,0,0,0-.59.66l2.43,40.43a.62.62,0,0,0,.62.59Zm-7.46,13.29a.63.63,0,0,0,.32-.82l-15.37-34.77a.62.62,0,0,0-1.14.5l15.36,34.77a.63.63,0,0,0,.57.38A.62.62,0,0,0,383.72,314.4Zm2.66-4.8,36.79-5.26a.63.63,0,1,0-.17-1.24l-36.79,5.26a.62.62,0,0,0,.08,1.24Zm-10.49,23.47a.63.63,0,0,0,.11-.88l-19.94-25.62a.63.63,0,1,0-1,.77L375,333a.62.62,0,0,0,.49.24A.63.63,0,0,0,375.89,333.07Zm31.16-6.93a.63.63,0,0,0-.6-.65L379,324.1a.63.63,0,0,0-.06,1.25l27.46,1.39h0A.63.63,0,0,0,407.05,326.14Zm-12.93,20.34a.62.62,0,0,0-.56-.69l-21-2.07a.62.62,0,0,0-.68.56.63.63,0,0,0,.56.68l21,2.08h.06A.62.62,0,0,0,394.12,346.48Zm-26.35,10.84a.63.63,0,0,0,.18-.87l-10.38-15.69a.64.64,0,0,0-.87-.17.63.63,0,0,0-.18.87l10.38,15.69a.65.65,0,0,0,.53.28A.6.6,0,0,0,367.77,357.32Zm23.82,5.25a.64.64,0,0,0-.62-.63l-24.69-.23h0a.62.62,0,0,0-.62.62.61.61,0,0,0,.62.63l24.69.23h0A.63.63,0,0,0,391.59,362.57Zm-33.13,36.92c.05-.11,4.26-11.71,16.92-14.48a.63.63,0,0,0,.48-.75.64.64,0,0,0-.75-.47c-13.35,2.92-17.78,15.17-17.83,15.29a.64.64,0,0,0,.39.8l.2,0A.62.62,0,0,0,358.46,399.49Zm2.81,9.17a.63.63,0,0,0,.58-.67c-1.57-23.58,7.55-62.2,22.18-93.9,9.35-20.26,46-60.08,46.39-60.48a.63.63,0,0,0,0-.89.62.62,0,0,0-.88,0c-.37.4-37.17,40.37-46.6,60.81C368,346,359,383.92,360.6,408.07a.64.64,0,0,0,.63.59Zm29.91-107.55a.63.63,0,0,0,.59-.66L389.34,260a.62.62,0,0,0-.66-.59.63.63,0,0,0-.59.66l2.43,40.43a.62.62,0,0,0,.62.59Zm-7.46,13.29a.63.63,0,0,0,.32-.82l-15.37-34.77a.62.62,0,0,0-1.14.5l15.36,34.77a.63.63,0,0,0,.57.38A.62.62,0,0,0,383.72,314.4Zm2.66-4.8,36.79-5.26a.63.63,0,1,0-.17-1.24l-36.79,5.26a.62.62,0,0,0,.08,1.24Zm-10.49,23.47a.63.63,0,0,0,.11-.88l-19.94-25.62a.63.63,0,1,0-1,.77L375,333a.62.62,0,0,0,.49.24A.63.63,0,0,0,375.89,333.07Zm31.16-6.93a.63.63,0,0,0-.6-.65L379,324.1a.63.63,0,0,0-.06,1.25l27.46,1.39h0A.63.63,0,0,0,407.05,326.14Zm-12.93,20.34a.62.62,0,0,0-.56-.69l-21-2.07a.62.62,0,0,0-.68.56.63.63,0,0,0,.56.68l21,2.08h.06A.62.62,0,0,0,394.12,346.48Zm-26.35,10.84a.63.63,0,0,0,.18-.87l-10.38-15.69a.64.64,0,0,0-.87-.17.63.63,0,0,0-.18.87l10.38,15.69a.65.65,0,0,0,.53.28A.6.6,0,0,0,367.77,357.32Zm23.82,5.25a.64.64,0,0,0-.62-.63l-24.69-.23h0a.62.62,0,0,0-.62.62.61.61,0,0,0,.62.63l24.69.23h0A.63.63,0,0,0,391.59,362.57Zm-33.13,36.92c.05-.11,4.26-11.71,16.92-14.48a.63.63,0,0,0,.48-.75.64.64,0,0,0-.75-.47c-13.35,2.92-17.78,15.17-17.83,15.29a.64.64,0,0,0,.39.8l.2,0A.62.62,0,0,0,358.46,399.49Z"
                        style="fill: #4CE17B; transform-origin: 392.726px 330.598px;" id="elssr09nm7ke"
                        class="animable">
                    </path>
                    <g id="elpnl5tofz5t">
                        <path
                            d="M391.15,300.49l-2.43-40.43m-5.26,53.77L368.1,279.06m55,24.66L386.29,309M375.5,332.57,355.57,307M379,324.73l27.46,1.38M372.5,344.34l21,2.08M367.43,356.8,357,341.11m9.23,21.23,24.69.23m-29.69,46.09a.63.63,0,0,0,.58-.67c-1.57-23.58,7.55-62.2,22.18-93.9,9.35-20.26,46-60.08,46.39-60.48a.63.63,0,0,0,0-.89.62.62,0,0,0-.88,0c-.37.4-37.17,40.37-46.6,60.81C368,346,359,383.92,360.6,408.07a.64.64,0,0,0,.63.59Zm29.91-107.55a.63.63,0,0,0,.59-.66L389.34,260a.62.62,0,0,0-.66-.59.63.63,0,0,0-.59.66l2.43,40.43a.62.62,0,0,0,.62.59Zm-7.46,13.29a.63.63,0,0,0,.32-.82l-15.37-34.77a.62.62,0,0,0-1.14.5l15.36,34.77a.63.63,0,0,0,.57.38A.62.62,0,0,0,383.72,314.4Zm2.66-4.8,36.79-5.26a.63.63,0,1,0-.17-1.24l-36.79,5.26a.62.62,0,0,0,.08,1.24Zm-10.49,23.47a.63.63,0,0,0,.11-.88l-19.94-25.62a.63.63,0,1,0-1,.77L375,333a.62.62,0,0,0,.49.24A.63.63,0,0,0,375.89,333.07Zm31.16-6.93a.63.63,0,0,0-.6-.65L379,324.1a.63.63,0,0,0-.06,1.25l27.46,1.39h0A.63.63,0,0,0,407.05,326.14Zm-12.93,20.34a.62.62,0,0,0-.56-.69l-21-2.07a.62.62,0,0,0-.68.56.63.63,0,0,0,.56.68l21,2.08h.06A.62.62,0,0,0,394.12,346.48Zm-26.35,10.84a.63.63,0,0,0,.18-.87l-10.38-15.69a.64.64,0,0,0-.87-.17.63.63,0,0,0-.18.87l10.38,15.69a.65.65,0,0,0,.53.28A.6.6,0,0,0,367.77,357.32Zm23.82,5.25a.64.64,0,0,0-.62-.63l-24.69-.23h0a.62.62,0,0,0-.62.62.61.61,0,0,0,.62.63l24.69.23h0A.63.63,0,0,0,391.59,362.57Zm-33.13,36.92c.05-.11,4.26-11.71,16.92-14.48a.63.63,0,0,0,.48-.75.64.64,0,0,0-.75-.47c-13.35,2.92-17.78,15.17-17.83,15.29a.64.64,0,0,0,.39.8l.2,0A.62.62,0,0,0,358.46,399.49Zm2.81,9.17a.63.63,0,0,0,.58-.67c-1.57-23.58,7.55-62.2,22.18-93.9,9.35-20.26,46-60.08,46.39-60.48a.63.63,0,0,0,0-.89.62.62,0,0,0-.88,0c-.37.4-37.17,40.37-46.6,60.81C368,346,359,383.92,360.6,408.07a.64.64,0,0,0,.63.59Zm29.91-107.55a.63.63,0,0,0,.59-.66L389.34,260a.62.62,0,0,0-.66-.59.63.63,0,0,0-.59.66l2.43,40.43a.62.62,0,0,0,.62.59Zm-7.46,13.29a.63.63,0,0,0,.32-.82l-15.37-34.77a.62.62,0,0,0-1.14.5l15.36,34.77a.63.63,0,0,0,.57.38A.62.62,0,0,0,383.72,314.4Zm2.66-4.8,36.79-5.26a.63.63,0,1,0-.17-1.24l-36.79,5.26a.62.62,0,0,0,.08,1.24Zm-10.49,23.47a.63.63,0,0,0,.11-.88l-19.94-25.62a.63.63,0,1,0-1,.77L375,333a.62.62,0,0,0,.49.24A.63.63,0,0,0,375.89,333.07Zm31.16-6.93a.63.63,0,0,0-.6-.65L379,324.1a.63.63,0,0,0-.06,1.25l27.46,1.39h0A.63.63,0,0,0,407.05,326.14Zm-12.93,20.34a.62.62,0,0,0-.56-.69l-21-2.07a.62.62,0,0,0-.68.56.63.63,0,0,0,.56.68l21,2.08h.06A.62.62,0,0,0,394.12,346.48Zm-26.35,10.84a.63.63,0,0,0,.18-.87l-10.38-15.69a.64.64,0,0,0-.87-.17.63.63,0,0,0-.18.87l10.38,15.69a.65.65,0,0,0,.53.28A.6.6,0,0,0,367.77,357.32Zm23.82,5.25a.64.64,0,0,0-.62-.63l-24.69-.23h0a.62.62,0,0,0-.62.62.61.61,0,0,0,.62.63l24.69.23h0A.63.63,0,0,0,391.59,362.57Zm-33.13,36.92c.05-.11,4.26-11.71,16.92-14.48a.63.63,0,0,0,.48-.75.64.64,0,0,0-.75-.47c-13.35,2.92-17.78,15.17-17.83,15.29a.64.64,0,0,0,.39.8l.2,0A.62.62,0,0,0,358.46,399.49Z"
                            style="opacity: 0.2; transform-origin: 392.726px 330.598px;" class="animable"
                            id="eluesvczwnf9k"></path>
                    </g>
                    <polygon
                        points="377.56 391.03 349.25 391.03 349.25 396.89 351.72 396.89 356.83 428.86 369.98 428.86 375.09 396.89 377.56 396.89 377.56 391.03"
                        style="fill: #4CE17B; transform-origin: 363.405px 409.945px;" id="elebf0829n74"
                        class="animable">
                    </polygon>
                    <g id="elvbal0a55wh">
                        <polygon
                            points="377.56 391.03 349.25 391.03 349.25 396.89 351.72 396.89 356.83 428.86 369.98 428.86 375.09 396.89 377.56 396.89 377.56 391.03"
                            style="fill: rgb(255, 255, 255); opacity: 0.3; transform-origin: 363.405px 409.945px;"
                            class="animable" id="el54vjzr5m7d5"></polygon>
                    </g>
                </g>
                <g id="freepik--Character--inject-1--inject-16" class="animable"
                    style="transform-origin: 110.773px 272.381px;">
                    <polygon
                        points="122.68 213.83 89.75 203.08 86.82 195.34 80.13 195.13 67.99 192.83 69.45 195.34 84.73 206.43 88.5 208.31 122.94 226.3 122.68 213.83"
                        style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-miterlimit: 10; stroke-width: 1.00396px; transform-origin: 95.465px 209.565px;"
                        id="el7zbdoiiztch" class="animable"></polygon>
                    <polygon points="86.82 195.34 83.68 193.46 77.41 195.76 78.45 197.01 86.82 195.34"
                        style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linejoin: round; stroke-width: 1.00396px; transform-origin: 82.115px 195.235px;"
                        id="ellgnf3rbrfmm" class="animable"></polygon>
                    <polygon
                        points="122.68 213.83 89.75 203.08 86.82 195.34 80.13 195.13 67.99 192.83 69.45 195.34 84.73 206.43 88.5 208.31 122.94 226.3 122.68 213.83"
                        style="fill: rgb(255, 255, 255); transform-origin: 95.465px 209.565px;" id="el140n0xvhoc7d"
                        class="animable"></polygon>
                    <g style="clip-path: url(&quot;#freepik--clip-path--inject-1--inject-16&quot;); transform-origin: 95.465px 209.565px;"
                        id="ellve1cqw1sum" class="animable">
                        <g id="el2r6kouy1uic">
                            <polygon
                                points="122.68 213.83 89.75 203.08 86.82 195.34 80.13 195.13 67.99 192.83 69.45 195.34 84.73 206.43 88.5 208.31 122.94 226.3 122.68 213.83"
                                style="fill: #4CE17B; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; stroke-width: 1.00396px; opacity: 0.5; transform-origin: 95.465px 209.565px;"
                                class="animable" id="elx6f24spfa3o"></polygon>
                        </g>
                    </g>
                    <polygon
                        points="122.68 213.83 89.75 203.08 86.82 195.34 80.13 195.13 67.99 192.83 69.45 195.34 84.73 206.43 88.5 208.31 122.94 226.3 122.68 213.83"
                        style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; stroke-width: 1.00396px; transform-origin: 95.465px 209.565px;"
                        id="elu983tq6hie" class="animable"></polygon>
                    <polygon points="86.82 195.34 83.68 193.46 77.41 195.76 78.45 197.01 86.82 195.34"
                        style="fill: rgb(255, 255, 255); transform-origin: 82.115px 195.235px;" id="el3n71jmqgjon"
                        class="animable"></polygon>
                    <g style="clip-path: url(&quot;#freepik--clip-path-2--inject-1--inject-16&quot;); transform-origin: 82.115px 195.235px;"
                        id="el0twpvl0tpqd" class="animable">
                        <g id="eligi892wllo">
                            <polygon points="86.82 195.34 83.68 193.46 77.41 195.76 78.45 197.01 86.82 195.34"
                                style="fill: #4CE17B; stroke: rgb(38, 50, 56); stroke-linejoin: round; stroke-width: 1.00396px; opacity: 0.5; transform-origin: 82.115px 195.235px;"
                                class="animable" id="elsua7w2o8tk"></polygon>
                        </g>
                    </g>
                    <polygon points="86.82 195.34 83.68 193.46 77.41 195.76 78.45 197.01 86.82 195.34"
                        style="fill: none; stroke: rgb(38, 50, 56); stroke-linejoin: round; stroke-width: 1.00396px; transform-origin: 82.115px 195.235px;"
                        id="elmon5xwzpct" class="animable"></polygon>
                    <path
                        d="M129.67,144.06s-.51,4.5.76,7.39,8.32,12.68,8.32,12.68l-13.16,10.55s-5.46-11-6.5-12.78-2.29-9.44,1.1-14.93S128.46,140,129.67,144.06Z"
                        style="fill: rgb(255, 255, 255); transform-origin: 128.364px 158.213px;" id="elmedxo04rpbi"
                        class="animable"></path>
                    <g style="clip-path: url(&quot;#freepik--clip-path-3--inject-1--inject-16&quot;); transform-origin: 124.23px 166.605px;"
                        id="elicvgd5bcz8" class="animable">
                        <g id="elxsvv52zpoz">
                            <polygon points="122.91 158.52 128.62 170.36 125.58 174.69 119.84 164.44 122.91 158.52"
                                style="fill: #4CE17B; opacity: 0.5; mix-blend-mode: multiply; transform-origin: 124.23px 166.605px;"
                                class="animable" id="elzicgd5ehspj"></polygon>
                        </g>
                    </g>
                    <path
                        d="M129.67,144.06s-.51,4.5.76,7.39,8.32,12.68,8.32,12.68l-13.16,10.55s-5.46-11-6.5-12.78-2.29-9.44,1.1-14.93S128.46,140,129.67,144.06Z"
                        style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; stroke-width: 1.00396px; transform-origin: 128.364px 158.213px;"
                        id="el2jl0jnu20eu" class="animable"></path>
                    <path
                        d="M133.75,135.82c-.81-5-6.54-15.17-15.63-14.78-5.9.26-8.66,1.45-11.22,2.9a33,33,0,0,0-5.8,4.34c-4.44,5.33-6,6.79-5.14,10.87a12.24,12.24,0,0,0,.75,4.78c1.36,3.63,2.29,6,3.47,7.73-.36,1.69-1.3,6.15-1.35,7.17s3,.31,4.54-.08c2.86,6.4,8.1,10.84,9.73,11.35,2.84.89,7.33-3.78,9.71-7.4s.58-7.69.59-9.31,5.35-5.18,7.33-6.31S134.55,140.81,133.75,135.82Z"
                        style="fill: rgb(255, 255, 255); transform-origin: 114.837px 145.62px;" id="elig9onnjzm3s"
                        class="animable"></path>
                    <g style="clip-path: url(&quot;#freepik--clip-path-4--inject-1--inject-16&quot;); transform-origin: 109.873px 147.975px;"
                        id="ela6gznh8tbmc" class="animable">
                        <g id="el74a1el6rsmi">
                            <path
                                d="M96,139.15a12.24,12.24,0,0,0,.75,4.78c1.36,3.63,2.29,6,3.47,7.73-.36,1.69-1.3,6.15-1.35,7.17s3,.31,4.54-.08c2.86,6.4,8.1,10.84,9.73,11.35,2.84.89,7.33-3.78,9.71-7.4a7.29,7.29,0,0,0,1.13-3c-.13-.47-.22-.76-.22-.76s-1.34,5.15-4,4.48-6.73-6-9-7.84-1.34-4.26-1.79-7-7.17-5.15-7.62-6.72,1.12-8.07,1.12-8.07,2.55-3.4,2-2a9.52,9.52,0,0,0,.67,7.39,5.1,5.1,0,0,0,4.71,2.91L112.29,130l-5.15-4.26-6,2.5C96.66,133.61,95.13,135.07,96,139.15Z"
                                style="fill: #4CE17B; opacity: 0.5; mix-blend-mode: multiply; transform-origin: 109.873px 147.975px;"
                                class="animable" id="el3wde7vkzuqg"></path>
                        </g>
                    </g>
                    <path
                        d="M133.75,135.82c-.81-5-6.54-15.17-15.63-14.78-5.9.26-8.66,1.45-11.22,2.9a33,33,0,0,0-5.8,4.34c-4.44,5.33-6,6.79-5.14,10.87a12.24,12.24,0,0,0,.75,4.78c1.36,3.63,2.29,6,3.47,7.73-.36,1.69-1.3,6.15-1.35,7.17s3,.31,4.54-.08c2.86,6.4,8.1,10.84,9.73,11.35,2.84.89,7.33-3.78,9.71-7.4s.58-7.69.59-9.31,5.35-5.18,7.33-6.31S134.55,140.81,133.75,135.82Z"
                        style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 114.837px 145.62px;"
                        id="el7ykur3tw6u" class="animable"></path>
                    <path d="M101.42,148.64l1,2.86s2.15.71,4.77-2.15"
                        style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-miterlimit: 10; transform-origin: 104.305px 150.109px;"
                        id="elha9z36fsh6s" class="animable"></path>
                    <path d="M108.81,162s2.38-.24,3.34-3.58"
                        style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-miterlimit: 10; transform-origin: 110.48px 160.21px;"
                        id="elcou28bzfisw" class="animable"></path>
                    <path d="M99.75,146.25s.71-2.15,5-2.15"
                        style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-miterlimit: 10; transform-origin: 102.25px 145.175px;"
                        id="elcpur8pov7y" class="animable"></path>
                    <path
                        d="M121.74,117.06a71.06,71.06,0,0,0-9.41-.72s-9.42-5.43-18.47.36-4.7,15.93-4.7,18.46-2.9,2.54-1.09,5.8S96,142.42,96,142.42a8.7,8.7,0,0,1,3.27-6.35c3.26-2.53,5.86-3.08,6.94-2.35,0,0-.72,5.43.36,7.6,0,0,3.62,1.81,4.71,1.81s-.71,1.53,2.9,2.89a4.52,4.52,0,0,0,4-.47c.53-2.2,1.69-5.51,3.85-4.74,3.17,1.13,6.06,8.93,1.77,11.59,5.16.94,11.41-8.19,11.78-16.51S127.1,118,121.74,117.06Z"
                        style="fill: rgb(38, 50, 56); transform-origin: 111.533px 133.248px;" id="elk7rgpc5tcrb"
                        class="animable"></path>
                    <path d="M106.37,130.15s2.66-1.43,5.92,1.63,9.6,7.15,18,4.9"
                        style="fill: none; stroke: rgb(255, 255, 255); stroke-linecap: round; stroke-linejoin: round; stroke-width: 0.5px; transform-origin: 118.33px 133.572px;"
                        id="elnzhbh2gyfv" class="animable"></path>
                    <path d="M106,127.7s1.83-2.86,4.89-2.86,10.21,4.29,15.92,4.29"
                        style="fill: none; stroke: rgb(255, 255, 255); stroke-linecap: round; stroke-linejoin: round; stroke-width: 0.5px; transform-origin: 116.405px 126.985px;"
                        id="elhujzpo41uqt" class="animable"></path>
                    <path d="M103.92,133.21s-3.47-4.28-6.73-.81S96,139.15,96,139.15"
                        style="fill: none; stroke: rgb(255, 255, 255); stroke-linecap: round; stroke-linejoin: round; stroke-width: 0.5px; transform-origin: 99.636px 135.096px;"
                        id="elqgougeohibp" class="animable"></path>
                    <path d="M90.05,136.07a10.6,10.6,0,0,0,3.46-6.94c.41-4.49,6.54-8.37,10.41-4.69"
                        style="fill: none; stroke: rgb(255, 255, 255); stroke-linecap: round; stroke-linejoin: round; stroke-width: 0.5px; transform-origin: 96.985px 129.522px;"
                        id="ele1pljdeq3nu" class="animable"></path>
                    <path d="M96.37,119.74s6.13-5.92,11.23,1.63"
                        style="fill: none; stroke: rgb(255, 255, 255); stroke-linecap: round; stroke-linejoin: round; stroke-width: 0.5px; transform-origin: 101.985px 119.451px;"
                        id="elias7mwh0ek" class="animable"></path>
                    <path
                        d="M146.26,410.81s3.77,5.86,3.35,9.63l-.41,3.77S135.37,428,132.44,428,114,426.53,114,426.53l-.67-2.66a.88.88,0,0,1,.48-1l13.83-6.45,4.36-4.77Z"
                        style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-miterlimit: 10; stroke-width: 1.00396px; transform-origin: 131.474px 419.405px;"
                        id="elp2wlo1uou3" class="animable"></path>
                    <path
                        d="M134.54,425.05c3.75.29,10.87-2,15-3.46l-.29,2.62S135.37,428,132.44,428,114,426.53,114,426.53l-.48-1.9C116,424.64,129.58,424.67,134.54,425.05Z"
                        style="fill: #4CE17B; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; stroke-width: 1.00396px; transform-origin: 131.53px 424.795px;"
                        id="eliebyoto59mb" class="animable"></path>
                    <path
                        d="M127.66,416.42l-20.13,8.76s-1.72,4.31,0,5.17,39.22,0,39.22,0,2.59-6.81-1.5-11.38S127.66,416.42,127.66,416.42Z"
                        style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-miterlimit: 10; stroke-width: 1.00396px; transform-origin: 127.162px 423.354px;"
                        id="el83zdlu44cur" class="animable"></path>
                    <path
                        d="M146.75,430.35s-37.5.86-39.22,0c-.83-.42-.86-1.63-.67-2.78h40.55A15.25,15.25,0,0,1,146.75,430.35Z"
                        style="fill: #4CE17B; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; stroke-width: 1.00396px; transform-origin: 127.087px 429.151px;"
                        id="eldgrhyzg9o0o" class="animable"></path>
                    <path
                        d="M118.14,264.21s-5.26,23.31-7.25,37.89-3.16,43.79-2.74,47.14,21.36,59.48,21.36,59.48l2.09,5,14.66-2.93s-6.7-21.36-9.21-33.09-8-31-8-34.35,13-67.33,13.93-71.53,5.15-10.65,5.15-10.65l-28.07-.57Z"
                        style="fill: #4CE17B; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; stroke-width: 1.00396px; transform-origin: 128.097px 337.16px;"
                        id="eluky3u2ms9mo" class="animable"></path>
                    <path
                        d="M118.14,264.21s-3.08,21.29-1.81,36.09,4,46.31,4,51,7.57,32.7,8,41.5c.67,12.71-.27,19-.27,19l-.45,4.61s8.83,1.26,10.76,1.81a23.9,23.9,0,0,0,6.83.74s3.21-14.13,3.21-26.17-2.67-36.82-4-46.86,2.86-48.77,5.24-56,7.58-22.54,4.08-30.36S118.14,264.21,118.14,264.21Z"
                        style="fill: #4CE17B; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; stroke-width: 1.00396px; transform-origin: 135.464px 337.983px;"
                        id="el0577b22wrnur" class="animable"></path>
                    <path
                        d="M157.62,255.65l-.32,9.52s-5.7,1.13-13.38,2.46c-6.34,1.1-22.26-.29-27.62-.81a1.86,1.86,0,0,1-1.69-2l.52-8.6Z"
                        style="fill: rgb(38, 50, 56); transform-origin: 136.112px 261.846px;" id="elrwawfw54ia"
                        class="animable"></path>
                    <path
                        d="M135.34,160.75s-9,9.73-12.39,15.78-4.73,15.32-6,22.62,2.17,24.44,1.2,32.31l-3.07,24.79s-.66,1.68,1.55,3.52,13,2.51,22.75,3c3.56.18,14.19-2.11,15.93-2.22,2.1-.13,2.17-2.8,2.26-4.9.42-9.87,2.2-36.18,3.37-47.64C163.35,184.64,150.16,162.08,135.34,160.75Z"
                        style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-miterlimit: 10; stroke-width: 1.00396px; transform-origin: 138.107px 211.765px;"
                        id="el5vv42okmga9" class="animable"></path>
                    <path
                        d="M159.84,221.3c.4-5.19.8-9.9,1.15-13.29.1-1,.16-2,.21-3l-23.91,4-20.54-7a113.78,113.78,0,0,0,.72,12.72l20.15,5.64Z"
                        style="fill: #4CE17B; mix-blend-mode: multiply; transform-origin: 138.975px 211.655px;"
                        id="elwpo68ouc1f" class="animable"></path>
                    <path d="M134.45,161.73c-1.36,1.51-4.06,4.58-6.63,7.84L143,185l5-2Z"
                        style="fill: #4CE17B; mix-blend-mode: multiply; transform-origin: 137.91px 173.365px;"
                        id="elggrj79yifv" class="animable"></path>
                    <path
                        d="M135.34,160.75s-9,9.73-12.39,15.78a30.69,30.69,0,0,0-2.43,5.78l18.1-20.91A17,17,0,0,0,135.34,160.75Z"
                        style="fill: rgb(38, 50, 56); transform-origin: 129.57px 171.53px;" id="elmxgv9cr66t8"
                        class="animable"></path>
                    <path
                        d="M117.65,195.21l19.64,6.46,23.85-2.74a55.93,55.93,0,0,0-3.91-17.31L138,189.33l-17.19-7.79A90.47,90.47,0,0,0,117.65,195.21Z"
                        style="fill: #4CE17B; mix-blend-mode: multiply; transform-origin: 139.395px 191.605px;"
                        id="elhibfoppe27n" class="animable"></path>
                    <path
                        d="M151.46,245.78a60.81,60.81,0,0,1-29.74-2.43l-4.79-1.64-1.49,12,5.46,1.53a82.33,82.33,0,0,0,31.93,2.46l4.41-.53a4,4,0,0,0,.38-1.55c.12-2.67.33-6.55.6-11Z"
                        style="fill: #4CE17B; mix-blend-mode: multiply; transform-origin: 136.83px 249.995px;"
                        id="ellruqu3b9x6" class="animable"></path>
                    <path
                        d="M154.13,229.44A60.58,60.58,0,0,1,124.39,227l-6.1-2.09a39.4,39.4,0,0,1-.09,6.54l-.71,5.77,6.08,1.7a82.29,82.29,0,0,0,31.92,2.47l3-.36c.25-4,.54-8.26.85-12.47Z"
                        style="fill: #4CE17B; mix-blend-mode: multiply; transform-origin: 138.415px 233.439px;"
                        id="elsekod2po03" class="animable"></path>
                    <g id="elxmic6l5yhtn">
                        <rect x="58" y="193.74" width="24.81" height="1.33"
                            style="fill: rgb(38, 50, 56); transform-origin: 70.405px 194.405px; transform: rotate(-141.2deg);"
                            class="animable" id="el99inuddsi3q"></rect>
                    </g>
                    <path
                        d="M144.65,171.54s7.09,4.83,7.25,16.24c.07,5-.45,9.67-1.6,17.86s-8.29,34.86-13.85,38.1-14.19-2.88-14.19-2.88L80.52,213.15,70.43,205l-5-9.44L67,192.56,79.31,202l-6.63-6.13,1.3-1.65,2.4,1.67,7,2.62,1.53,10,2.16,1.48L127,224.58s-.5-21.49-.13-25.6.88-14.44,5.28-21.93"
                        style="fill: rgb(255, 255, 255); transform-origin: 108.668px 208.113px;" id="ele0rd2qwvj8"
                        class="animable"></path>
                    <g style="clip-path: url(&quot;#freepik--clip-path-5--inject-1--inject-16&quot;); transform-origin: 101.9px 212.585px;"
                        id="elenbcdbhj45k" class="animable">
                        <g id="elll3em5klsrj">
                            <path
                                d="M126.72,208.34c0,7.42.25,16.24.25,16.24L87.08,210.05l-2.16-1.48-1.53-10-7-2.62L74,194.25l-1.3,1.65L79.31,202,67,192.56l-1.49,2.95,5,9.44,10.09,8.2,2.54,1.69,55.15,17.77Z"
                                style="fill: #4CE17B; opacity: 0.5; mix-blend-mode: multiply; transform-origin: 101.9px 212.585px;"
                                class="animable" id="elxpxndujuun"></path>
                        </g>
                    </g>
                    <path
                        d="M144.65,171.54s7.09,4.83,7.25,16.24c.07,5-.45,9.67-1.6,17.86s-8.29,34.86-13.85,38.1-14.19-2.88-14.19-2.88L80.52,213.15,70.43,205l-5-9.44L67,192.56,79.31,202l-6.63-6.13,1.3-1.65,2.4,1.67,7,2.62,1.53,10,2.16,1.48L127,224.58s-.5-21.49-.13-25.6.88-14.44,5.28-21.93"
                        style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; stroke-width: 1.00396px; transform-origin: 108.668px 208.113px;"
                        id="elbfeea3pq2rl" class="animable"></path>
                    <path
                        d="M127,224.58l15.24,11,3.95-7s2.73-2.15,3.13-3.77-.11-4.25.3-5.87,2.45-3.14,2.64-7.06,0-7.19,0-7.19,3.3-13.57,2.94-19.47-6.05-16.33-10.61-16.56-10.49.46-15.09,7.42-3.66,27.28-4.38,28.55.28,7.54.28,7.54A3.51,3.51,0,0,0,124,214.7c-.08,1.63,1.68,5.64,1.68,5.64Z"
                        style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-miterlimit: 10; stroke-width: 1.00396px; transform-origin: 139.612px 202.102px;"
                        id="elntqrnx44c1t" class="animable"></path>
                    <path
                        d="M125.52,199.41a28.22,28.22,0,0,1-.39,5.21c-.64,1.14.09,6.29.25,7.34a59.36,59.36,0,0,0,26.51,2,9.89,9.89,0,0,0,.34-2.13c.2-3.91,0-7.19,0-7.19s.29-1.21.69-3.05A96.52,96.52,0,0,1,125.52,199.41Z"
                        style="fill: #4CE17B; mix-blend-mode: multiply; transform-origin: 138.896px 207.021px;"
                        id="elk0h188ce4i7" class="animable"></path>
                    <path
                        d="M128.88,177.19c-1.43,2.87-2.23,7.18-2.69,11.55a59.57,59.57,0,0,0,28.51,3.47,38.14,38.14,0,0,0,.51-7,19.48,19.48,0,0,0-1.3-5.4A98.86,98.86,0,0,1,128.88,177.19Z"
                        style="fill: #4CE17B; mix-blend-mode: multiply; transform-origin: 140.704px 184.923px;"
                        id="elb1u97tj3jco" class="animable"></path>
                    <path
                        d="M125.68,220.45l1.29,4.13,15.24,11,3.95-7s2.73-2.15,3.13-3.77a4.44,4.44,0,0,0,.13-.86A93.19,93.19,0,0,1,125.68,220.45Z"
                        style="fill: rgb(38, 50, 56); transform-origin: 137.55px 228.015px;" id="elgokj0gwrlq9"
                        class="animable"></path>
                    <path
                        d="M136.71,418.09s.34-8.66,2-21.32-2.33-30.64-3-33.64.34-9.66-.33-12-3.91-12.32-2-23.9,3.46-42.19,3.46-42.19-4.81-3.91-6.22-9-.33-6.69-.33-6.69"
                        style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; stroke-width: 1.00396px; transform-origin: 134.503px 343.72px;"
                        id="elvupfy0b711" class="animable"></path>
                    <line x1="138.94" y1="269.82" x2="137.09" y2="280.06"
                        style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; stroke-width: 1.00396px; transform-origin: 138.015px 274.94px;"
                        id="elpil6r3v8ngp" class="animable"></line>
                </g>
                <defs>
                    <clipPath id="freepik--clip-path--inject-1--inject-16">
                        <polygon
                            points="122.68 213.83 89.75 203.08 86.82 195.34 80.13 195.13 67.99 192.83 69.45 195.34 84.73 206.43 88.5 208.31 122.94 226.3 122.68 213.83"
                            style="fill:#fff;stroke:#263238;stroke-miterlimit:10;stroke-width:1.0039600000000002px">
                        </polygon>
                    </clipPath>
                    <clipPath id="freepik--clip-path-2--inject-1--inject-16">
                        <polygon points="86.82 195.34 83.68 193.46 77.41 195.76 78.45 197.01 86.82 195.34"
                            style="fill:#fff;stroke:#263238;stroke-linejoin:round;stroke-width:1.0039600000000002px">
                        </polygon>
                    </clipPath>
                    <clipPath id="freepik--clip-path-3--inject-1--inject-16">
                        <path
                            d="M129.67,144.06s-.51,4.5.76,7.39,8.32,12.68,8.32,12.68l-13.16,10.55s-5.46-11-6.5-12.78-2.29-9.44,1.1-14.93S128.46,140,129.67,144.06Z"
                            style="fill:#fff;stroke:#263238;stroke-miterlimit:10;stroke-width:1.0039600000000002px">
                        </path>
                    </clipPath>
                    <clipPath id="freepik--clip-path-4--inject-1--inject-16">
                        <path
                            d="M133.75,135.82c-.81-5-6.54-15.17-15.63-14.78-5.9.26-8.66,1.45-11.22,2.9a33,33,0,0,0-5.8,4.34c-4.44,5.33-6,6.79-5.14,10.87a12.24,12.24,0,0,0,.75,4.78c1.36,3.63,2.29,6,3.47,7.73-.36,1.69-1.3,6.15-1.35,7.17s3,.31,4.54-.08c2.86,6.4,8.1,10.84,9.73,11.35,2.84.89,7.33-3.78,9.71-7.4s.58-7.69.59-9.31,5.35-5.18,7.33-6.31S134.55,140.81,133.75,135.82Z"
                            style="fill:#fff;stroke:#263238;stroke-miterlimit:10"></path>
                    </clipPath>
                    <clipPath id="freepik--clip-path-5--inject-1--inject-16">
                        <path
                            d="M144.65,171.54s7.09,4.83,7.25,16.24c.07,5-.45,9.67-1.6,17.86s-8.29,34.86-13.85,38.1-14.19-2.88-14.19-2.88L80.52,213.15,70.43,205l-5-9.44L67,192.56,79.31,202l-6.63-6.13,1.3-1.65,2.4,1.67,7,2.62,1.53,10,2.16,1.48L127,224.58s-.5-21.49-.13-25.6.88-14.44,5.28-21.93"
                            style="fill:#fff;stroke:#263238;stroke-miterlimit:10;stroke-width:1.0039600000000002px">
                        </path>
                    </clipPath>
                </defs>
                <defs>
                    <filter id="active" height="200%">
                        <feMorphology in="SourceAlpha" result="DILATED" operator="dilate" radius="2"></feMorphology>
                        <feFlood flood-color="#32DFEC" flood-opacity="1" result="PINK"></feFlood>
                        <feComposite in="PINK" in2="DILATED" operator="in" result="OUTLINE"></feComposite>
                        <feMerge>
                            <feMergeNode in="OUTLINE"></feMergeNode>
                            <feMergeNode in="SourceGraphic"></feMergeNode>
                        </feMerge>
                    </filter>
                    <filter id="hover" height="200%">
                        <feMorphology in="SourceAlpha" result="DILATED" operator="dilate" radius="2"></feMorphology>
                        <feFlood flood-color="#ff0000" flood-opacity="0.5" result="PINK"></feFlood>
                        <feComposite in="PINK" in2="DILATED" operator="in" result="OUTLINE"></feComposite>
                        <feMerge>
                            <feMergeNode in="OUTLINE"></feMergeNode>
                            <feMergeNode in="SourceGraphic"></feMergeNode>
                        </feMerge>
                        <feColorMatrix type="matrix"
                            values="0   0   0   0   0                0   1   0   0   0                0   0   0   0   0                0   0   0   1   0 ">
                        </feColorMatrix>
                    </filter>
                </defs>
            </svg>
        </div>

        <button onclick="processPayment()" style="margin-top: 15px;">Pay Now</button>
    </div>

    <script>
        function showPaymentOption(paymentOption) {
            var creditCardSVG = document.getElementById('creditCardSVG');
            var upiDetailsContainer = document.getElementById('upiDetailsContainer');
            var cardDetails = document.getElementById('cardDetails');

            switch (paymentOption) {
                case 'card':
                    creditCardSVG.style.display = 'block';
                    cardDetails.style.display = 'block';
                    upiDetailsContainer.style.display = 'none';
                    break;
                case 'phone':
                    creditCardSVG.style.display = 'none';
                    cardDetails.style.display = 'none';
                    upiDetailsContainer.style.display = 'block';
                    break;
                case 'cash':
                    creditCardSVG.style.display = 'none';
                    cardDetails.style.display = 'none';
                    upiDetailsContainer.style.display = 'none';
                    break;
                default:
                    break;
            }
        }

        function updateCardText(className, value, isNumeric) {
    if (isNumeric) {
        // For numeric fields (card number, CVV)
        // Remove any non-digit characters
        value = value.replace(/\D/g, '');
    } else {
        // For non-numeric fields (card holder)
        // Remove any non-alphabetic characters
        value = value.replace(/[^a-zA-Z ]/g, '');
    }

    // Add formatting as needed
    if (isNumeric) {
        // Truncate to a specific length (e.g., 16 for card number)
        value = value.slice(0, 16);

        // Add space after every four digits
        value = value.replace(/(\d{4})/g, '$1 ').trim();
    }

    document.querySelector('.' + className).textContent = value ? value : '';
}



        function updateExpiryDate(value) {
            // Add '/' after two digits
            value = value.replace(/(\d{2})/, '$1/');
            document.querySelector('.expiry-date').textContent = value ? value : 'MM/YY';
        }

        function processPayment() {
            // Here, you would typically send the payment information to your server for processing.
            // This is just a static example and does not perform any real transaction.
            alert('Payment Processed Successfully!');
        }

        function updateUpiText(value) {
            // Update the UPI ID or any other UPI-related details as needed
            document.getElementById('upiId').value = value;
        }
    </script>


</body>

</html>