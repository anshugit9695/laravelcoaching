<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Center Panel Login</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700;900&family=Inter:wght@300;400;500&display=swap"
        rel="stylesheet">
    <style>
        *,
        *::before,
        *::after {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        @property --angle {
            syntax: '<angle>';
            inherits: false;
            initial-value: 0deg;
        }

        :root {
            --h: 142;
            --primary: hsl(var(--h), 70%, 40%);
            --primary-lt: hsl(var(--h), 80%, 60%);
            --primary-glow: hsl(var(--h), 80%, 55%);
            --bg: hsl(var(--h), 60%, 4%);
            --glass: hsla(var(--h), 40%, 60%, 0.06);
            --gborder: hsla(var(--h), 70%, 60%, 0.25);
            --text: hsl(var(--h), 40%, 95%);
            --muted: hsla(var(--h), 30%, 80%, 0.55);
        }

        html,
        body {
            height: 100%;
            font-family: 'Inter', sans-serif;
            background: var(--bg);
            overflow: hidden;
            cursor: none;
        }

        /* ── CUSTOM CURSOR ── */
        #cursor-dot {
            position: fixed;
            width: 8px;
            height: 8px;
            background: var(--primary-lt);
            border-radius: 50%;
            pointer-events: none;
            z-index: 99999;
            transform: translate(-50%, -50%);
            transition: width .15s, height .15s, opacity .3s;
            mix-blend-mode: screen;
        }

        #cursor-ring {
            position: fixed;
            width: 36px;
            height: 36px;
            border: 2px solid var(--primary-glow);
            border-radius: 50%;
            pointer-events: none;
            z-index: 99998;
            transform: translate(-50%, -50%);
            transition: width .25s, height .25s, border-color .3s, opacity .3s;
            opacity: .7;
        }

        #cursor-trail {
            position: fixed;
            width: 70px;
            height: 70px;
            border-radius: 50%;
            pointer-events: none;
            z-index: 99997;
            transform: translate(-50%, -50%);
            background: radial-gradient(circle, hsla(var(--h), 80%, 60%, 0.1), transparent 70%);
            transition: opacity .3s;
        }

        .cursor-hidden {
            opacity: 0 !important;
        }

        /* ── CANVAS ── */
        #bg-canvas {
            position: fixed;
            inset: 0;
            z-index: 0;
        }

        /* ── ORBS ── */
        .orb {
            position: fixed;
            border-radius: 50%;
            filter: blur(90px);
            pointer-events: none;
            z-index: 1;
            animation: drift 18s ease-in-out infinite alternate;
        }

        .orb-1 {
            width: 560px;
            height: 560px;
            background: radial-gradient(circle, hsla(var(--h), 70%, 35%, 0.4), transparent 70%);
            top: -150px;
            left: -120px;
            animation-duration: 20s;
        }

        .orb-2 {
            width: 400px;
            height: 400px;
            background: radial-gradient(circle, hsla(calc(var(--h) + 40), 70%, 45%, 0.25), transparent 70%);
            bottom: -100px;
            right: -80px;
            animation-duration: 15s;
            animation-delay: -6s;
        }

        .orb-3 {
            width: 280px;
            height: 280px;
            background: radial-gradient(circle, hsla(var(--h), 90%, 65%, 0.2), transparent 70%);
            top: 38%;
            left: 58%;
            animation-duration: 22s;
            animation-delay: -11s;
        }

        @keyframes drift {
            0% {
                transform: translate(0, 0) scale(1);
            }

            33% {
                transform: translate(35px, -45px) scale(1.06);
            }

            66% {
                transform: translate(-25px, 35px) scale(0.96);
            }

            100% {
                transform: translate(25px, 25px) scale(1.04);
            }
        }

        /* ── GRID ── */
        .grid {
            position: fixed;
            inset: 0;
            z-index: 1;
            pointer-events: none;
            background-image: linear-gradient(hsla(var(--h), 60%, 50%, 0.05) 1px, transparent 1px), linear-gradient(90deg, hsla(var(--h), 60%, 50%, 0.05) 1px, transparent 1px);
            background-size: 55px 55px;
            animation: gridPulse 4s ease-in-out infinite alternate;
        }

        @keyframes gridPulse {
            0% {
                opacity: .5;
            }

            100% {
                opacity: 1;
            }
        }

        /* ── PARTICLES ── */
        .particles {
            position: fixed;
            inset: 0;
            z-index: 2;
            pointer-events: none;
            overflow: hidden;
        }

        .p {
            position: absolute;
            border-radius: 50%;
            animation: floatUp linear infinite;
        }

        @keyframes floatUp {
            0% {
                transform: translateY(110vh) rotate(0deg) scale(0);
                opacity: 0;
            }

            5% {
                opacity: 1;
                transform: translateY(100vh) rotate(20deg) scale(1);
            }

            95% {
                opacity: .5;
            }

            100% {
                transform: translateY(-10vh) rotate(720deg) scale(0.5);
                opacity: 0;
            }
        }

        /* ── CLICK BURST ── */
        .burst {
            position: fixed;
            pointer-events: none;
            z-index: 9990;
            border-radius: 50%;
            transform: translate(-50%, -50%) scale(0);
            animation: burstAnim .65s ease-out forwards;
        }

        @keyframes burstAnim {
            0% {
                transform: translate(-50%, -50%) scale(0);
                opacity: 1;
            }

            100% {
                transform: translate(-50%, -50%) scale(5);
                opacity: 0;
            }
        }

        /* ── SCAN LINES ── */
        .scanlines {
            position: fixed;
            inset: 0;
            z-index: 5;
            pointer-events: none;
            background: repeating-linear-gradient(0deg, rgba(0, 0, 0, 0) 0px, rgba(0, 0, 0, 0) 2px, rgba(0, 0, 0, 0.025) 2px, rgba(0, 0, 0, 0.025) 4px);
        }

        /* ── PAGE WRAPPER ── */
        .page-wrapper {
            position: relative;
            z-index: 10;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 24px;
        }

        /* ── ANIMATED BORDER CARD WRAPPER ── */
        .card-wrap {
            position: relative;
            border-radius: 28px;
            padding: 2px;
        }

        .card-wrap::before {
            content: '';
            position: absolute;
            inset: 0;
            border-radius: 28px;
            background: conic-gradient(from var(--angle), transparent 0%, hsla(var(--h), 85%, 65%, 0.95) 8%, transparent 18%, transparent 82%, hsla(calc(var(--h)+50), 80%, 65%, 0.7) 92%, transparent 100%);
            animation: rotateBorder 3.5s linear infinite;
            z-index: -1;
        }

        .card-wrap::after {
            content: '';
            position: absolute;
            inset: 0;
            border-radius: 28px;
            background: conic-gradient(from calc(var(--angle) + 180deg), transparent 0%, hsla(calc(var(--h)+80), 75%, 70%, 0.5) 6%, transparent 14%);
            animation: rotateBorder 3.5s linear infinite reverse;
            z-index: -1;
        }

        @keyframes rotateBorder {
            to {
                --angle: 360deg;
            }
        }

        /* ── LOGIN CARD ── */
        .login-card {
            width: 100%;
            max-width: 430px;
            background: hsla(var(--h), 30%, 8%, 0.85);
            border: 1px solid hsla(var(--h), 50%, 50%, 0.2);
            border-radius: 26px;
            padding: 48px 40px 42px;
            backdrop-filter: blur(30px);
            -webkit-backdrop-filter: blur(30px);
            box-shadow: 0 0 80px hsla(var(--h), 60%, 40%, 0.18), 0 30px 80px rgba(0, 0, 0, 0.6), inset 0 1px 0 rgba(255, 255, 255, 0.06);
            animation: cardIn 1s cubic-bezier(0.16, 1, 0.3, 1) both;
            position: relative;
            overflow: hidden;
        }

        .login-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 1px;
            background: linear-gradient(90deg, transparent, hsla(var(--h), 80%, 70%, 0.8), transparent);
            animation: shimmer 2.5s ease-in-out infinite;
        }

        .login-card::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            height: 1px;
            background: linear-gradient(90deg, transparent, hsla(calc(var(--h)+40), 80%, 70%, 0.5), transparent);
            animation: shimmer 2.5s ease-in-out infinite reverse;
        }

        @keyframes shimmer {

            0%,
            100% {
                opacity: .3;
                transform: scaleX(.5);
            }

            50% {
                opacity: 1;
                transform: scaleX(1);
            }
        }

        @keyframes cardIn {
            from {
                opacity: 0;
                transform: translateY(50px) scale(0.93);
            }

            to {
                opacity: 1;
                transform: translateY(0) scale(1);
            }
        }

        /* Corner brackets */
        .corner {
            position: absolute;
            width: 22px;
            height: 22px;
            pointer-events: none;
        }

        .corner-tl {
            top: 10px;
            left: 10px;
            border-top: 2px solid var(--primary-glow);
            border-left: 2px solid var(--primary-glow);
            border-radius: 4px 0 0 0;
            animation: cPulse 2s ease-in-out infinite;
        }

        .corner-tr {
            top: 10px;
            right: 10px;
            border-top: 2px solid var(--primary-glow);
            border-right: 2px solid var(--primary-glow);
            border-radius: 0 4px 0 0;
            animation: cPulse 2s ease-in-out .5s infinite;
        }

        .corner-bl {
            bottom: 10px;
            left: 10px;
            border-bottom: 2px solid var(--primary-glow);
            border-left: 2px solid var(--primary-glow);
            border-radius: 0 0 0 4px;
            animation: cPulse 2s ease-in-out 1s infinite;
        }

        .corner-br {
            bottom: 10px;
            right: 10px;
            border-bottom: 2px solid var(--primary-glow);
            border-right: 2px solid var(--primary-glow);
            border-radius: 0 0 4px 0;
            animation: cPulse 2s ease-in-out 1.5s infinite;
        }

        @keyframes cPulse {

            0%,
            100% {
                opacity: .3;
            }

            50% {
                opacity: 1;
            }
        }

        /* ── CARD ICON ── */
        .card-icon {
            width: 68px;
            height: 68px;
            background: linear-gradient(135deg, var(--primary), var(--primary-lt));
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 28px;
            box-shadow: 0 0 30px hsla(var(--h), 70%, 50%, 0.6);
            animation: iconPop .8s cubic-bezier(0.34, 1.56, 0.64, 1) .3s both, iconGlow 3s ease-in-out infinite 1.2s;
        }

        @keyframes iconPop {
            from {
                opacity: 0;
                transform: scale(0.3) rotate(-25deg);
            }

            to {
                opacity: 1;
                transform: scale(1) rotate(0);
            }
        }

        @keyframes iconGlow {

            0%,
            100% {
                box-shadow: 0 0 20px hsla(var(--h), 70%, 50%, 0.4);
            }

            50% {
                box-shadow: 0 0 55px hsla(var(--h), 80%, 60%, 0.85), 0 0 90px hsla(var(--h), 80%, 60%, 0.25);
            }
        }

        .card-icon svg {
            width: 32px;
            height: 32px;
            fill: #fff;
        }

        /* ── TITLE ── */
        .card-title {
            font-family: 'Orbitron', sans-serif;
            font-size: 23px;
            font-weight: 900;
            text-align: center;
            letter-spacing: 3px;
            margin-bottom: 6px;
            animation: fadeUp .6s ease .4s both;
            background: linear-gradient(135deg, var(--text), var(--primary-lt));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .card-sub {
            font-size: 12px;
            color: var(--muted);
            text-align: center;
            margin-bottom: 36px;
            animation: fadeUp .6s ease .5s both;
            letter-spacing: .7px;
        }

        @keyframes fadeUp {
            from {
                opacity: 0;
                transform: translateY(14px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* ── FIELDS ── */
        .field {
            margin-bottom: 20px;
            animation: fadeUp .6s ease both;
            transition: transform .25s ease;
        }

        .field:nth-child(1) {
            animation-delay: .55s;
        }

        .field:nth-child(2) {
            animation-delay: .65s;
        }

        .field label {
            display: block;
            font-size: 11px;
            font-weight: 600;
            color: var(--muted);
            letter-spacing: 1.2px;
            text-transform: uppercase;
            margin-bottom: 9px;
            transition: color .3s;
        }

        .field:focus-within label {
            color: var(--primary-lt);
        }

        .input-wrap {
            position: relative;
        }

        .input-wrap .icon {
            position: absolute;
            left: 16px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--muted);
            transition: color .3s, transform .3s;
            pointer-events: none;
        }

        .input-wrap:focus-within .icon {
            color: var(--primary-lt);
            transform: translateY(-50%) scale(1.15);
        }

        .input-wrap input {
            width: 100%;
            background: hsla(var(--h), 30%, 10%, 0.7);
            border: 1px solid hsla(var(--h), 40%, 40%, 0.25);
            border-radius: 14px;
            padding: 15px 16px 15px 48px;
            color: var(--text);
            font-family: 'Inter', sans-serif;
            font-size: 15px;
            outline: none;
            transition: border-color .35s, background .35s, box-shadow .35s;
        }

        .input-wrap input::placeholder {
            color: hsla(var(--h), 20%, 70%, 0.3);
        }

        .input-wrap input:focus {
            border-color: var(--primary-lt);
            background: hsla(var(--h), 40%, 15%, 0.7);
            box-shadow: 0 0 0 3px hsla(var(--h), 70%, 55%, 0.2), 0 0 25px hsla(var(--h), 70%, 50%, 0.15);
        }

        /* Scanning underline */
        .input-wrap::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            width: 0;
            height: 2px;
            background: linear-gradient(90deg, transparent, var(--primary-lt), transparent);
            border-radius: 2px;
            transition: width .4s ease, left .4s ease;
            pointer-events: none;
        }

        .input-wrap:focus-within::after {
            width: 80%;
            left: 10%;
        }

        .toggle-pass {
            position: absolute;
            right: 14px;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            color: var(--muted);
            cursor: pointer;
            padding: 5px;
            transition: color .3s, transform .2s;
        }

        .toggle-pass:hover {
            color: var(--primary-lt);
            transform: translateY(-50%) scale(1.2);
        }

        /* ── BUTTON ── */
        .btn-login {
            margin-top: 10px;
            width: 100%;
            padding: 16px;
            background: linear-gradient(135deg, var(--primary), hsl(calc(var(--h)+20), 70%, 50%));
            border: none;
            border-radius: 14px;
            color: #fff;
            font-family: 'Orbitron', sans-serif;
            font-size: 12px;
            font-weight: 700;
            letter-spacing: 2.5px;
            text-transform: uppercase;
            cursor: pointer;
            position: relative;
            overflow: hidden;
            transition: transform .2s, box-shadow .3s;
            box-shadow: 0 0 30px hsla(var(--h), 70%, 50%, 0.45), 0 8px 20px rgba(0, 0, 0, 0.3);
            animation: fadeUp .6s ease .75s both;
        }

        .btn-login::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.22), transparent);
            transition: left .5s;
        }

        .btn-login:hover {
            transform: translateY(-3px);
            box-shadow: 0 0 55px hsla(var(--h), 80%, 55%, 0.75), 0 14px 35px rgba(0, 0, 0, 0.4);
        }

        .btn-login:hover::before {
            left: 100%;
        }

        .btn-login:active {
            transform: translateY(0);
        }

        /* pulse ring */
        .btn-login::after {
            content: '';
            position: absolute;
            inset: -4px;
            border-radius: 18px;
            border: 1px solid hsla(var(--h), 80%, 60%, 0.45);
            animation: btnRing 2s ease-in-out infinite;
            pointer-events: none;
        }

        @keyframes btnRing {

            0%,
            100% {
                opacity: 0;
                transform: scale(1);
            }

            50% {
                opacity: 1;
                transform: scale(1.025);
            }
        }

        .btn-login.loading {
            pointer-events: none;
        }

        .btn-login .btn-text {
            transition: opacity .2s;
        }

        .btn-login .spinner {
            display: none;
            position: absolute;
            inset: 0;
            align-items: center;
            justify-content: center;
        }

        .btn-login.loading .btn-text {
            opacity: 0;
        }

        .btn-login.loading .spinner {
            display: flex;
        }

        .ripple {
            position: absolute;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.3);
            transform: scale(0);
            animation: rippleA .65s linear;
            pointer-events: none;
        }

        @keyframes rippleA {
            to {
                transform: scale(4);
                opacity: 0;
            }
        }

        @keyframes spin {
            to {
                transform: rotate(360deg);
            }
        }

        .ring {
            width: 22px;
            height: 22px;
            border: 2.5px solid rgba(255, 255, 255, 0.3);
            border-top-color: #fff;
            border-radius: 50%;
            animation: spin .7s linear infinite;
        }

        /* ── FORGOT ── */
        .forgot {
            text-align: center;
            margin-top: 24px;
            animation: fadeUp .6s ease .85s both;
        }

        .forgot a {
            font-size: 12px;
            color: var(--muted);
            text-decoration: none;
            transition: color .3s;
            border-bottom: 1px dashed hsla(var(--h), 40%, 60%, 0.3);
            padding-bottom: 2px;
            letter-spacing: .5px;
        }

        .forgot a:hover {
            color: var(--primary-lt);
            border-color: var(--primary-lt);
        }

        /* ── TOAST ── */
        .toast {
            position: fixed;
            top: 28px;
            right: 28px;
            background: rgba(239, 68, 68, 0.15);
            border: 1px solid rgba(239, 68, 68, 0.4);
            backdrop-filter: blur(20px);
            border-radius: 16px;
            padding: 14px 20px;
            display: flex;
            align-items: center;
            gap: 12px;
            color: #fca5a5;
            font-size: 14px;
            max-width: 320px;
            z-index: 9999;
            transform: translateX(130%);
            transition: transform .45s cubic-bezier(0.16, 1, 0.3, 1);
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.4);
        }

        .toast.show {
            transform: translateX(0);
        }

        /* ── HINT ── */
        #color-hint {
            position: fixed;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            font-family: 'Orbitron', sans-serif;
            font-size: 9px;
            letter-spacing: 2px;
            color: var(--muted);
            opacity: .45;
            animation: fadeUp 1s ease 2.5s both;
            pointer-events: none;
            white-space: nowrap;
            transition: opacity .4s;
        }
    </style>
</head>

<body>

    <div id="cursor-dot"></div>
    <div id="cursor-ring"></div>
    <div id="cursor-trail"></div>

    <canvas id="bg-canvas"></canvas>
    <div class="orb orb-1"></div>
    <div class="orb orb-2"></div>
    <div class="orb orb-3"></div>
    <div class="grid"></div>
    <div class="particles" id="particles"></div>
    <div class="scanlines"></div>

    <div class="toast" id="toast">
        <span style="font-size:18px">⚠️</span>
        <span id="toast-msg">Invalid username or password.</span>
    </div>

    <div class="page-wrapper">
        <div class="card-wrap">
            <div class="login-card" id="loginCard">
                <div class="corner corner-tl"></div>
                <div class="corner corner-tr"></div>
                <div class="corner corner-bl"></div>
                <div class="corner corner-br"></div>

                <div class="card-icon">
                    <svg viewBox="0 0 24 24">
                        <path
                            d="M12 2C9.24 2 7 4.24 7 7s2.24 5 5 5 5-2.24 5-5-2.24-5-5-5zm0 12c-5.33 0-8 2.67-8 4v2h16v-2c0-1.33-2.67-4-8-4z" />
                    </svg>
                </div>
                <h1 class="card-title">CENTER PANEL</h1>
                <p class="card-sub">Sign in to your admin session</p>

                <form id="loginForm" method="POST" action="">
                    <div class="field">
                        <label for="uname">Username</label>
                        <div class="input-wrap">
                            <svg class="icon" width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                                <path
                                    d="M12 12c2.7 0 4.8-2.1 4.8-4.8S14.7 2.4 12 2.4 7.2 4.5 7.2 7.2 9.3 12 12 12zm0 2.4c-3.2 0-9.6 1.6-9.6 4.8v2.4h19.2v-2.4c0-3.2-6.4-4.8-9.6-4.8z" />
                            </svg>
                            <input type="text" id="uname" name="name" placeholder="Enter your username" required
                                autocomplete="username">
                        </div>
                    </div>
                    <div class="field">
                        <label for="passw">Password</label>
                        <div class="input-wrap">
                            <svg class="icon" width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                                <path
                                    d="M18 8h-1V6c0-2.76-2.24-5-5-5S7 3.24 7 6v2H6c-1.1 0-2 .9-2 2v10c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V10c0-1.1-.9-2-2-2zm-6 9c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2zm3.1-9H8.9V6c0-1.71 1.39-3.1 3.1-3.1 1.71 0 3.1 1.39 3.1 3.1v2z" />
                            </svg>
                            <input type="password" id="passw" name="pass" placeholder="Enter your password" required
                                autocomplete="current-password">
                            <button type="button" class="toggle-pass" id="togglePass">
                                <svg id="eyeIcon" width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
                                    <path
                                        d="M12 4.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5zM12 17c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5zm0-8c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <button type="submit" class="btn-login" id="loginBtn">
                        <span class="btn-text">SIGN IN</span>
                        <span class="spinner"><span class="ring"></span></span>
                    </button>
                </form>
                <div class="forgot"><a href="forgot-password.php">Forgot your password?</a></div>
            </div>
        </div>
    </div>

    <div id="color-hint">✦ CLICK OUTSIDE TO CHANGE THEME COLOR ✦</div>

    <script>
        /* ══ 1. CUSTOM CURSOR ══ */
        const dot = document.getElementById('cursor-dot');
        const ring = document.getElementById('cursor-ring');
        const trail = document.getElementById('cursor-trail');
        const card = document.getElementById('loginCard');

        let mx = window.innerWidth / 2, my = window.innerHeight / 2;
        let rx = mx, ry = my, tx = mx, ty = my;

        document.addEventListener('mousemove', e => {
            mx = e.clientX; my = e.clientY;
            dot.style.left = mx + 'px'; dot.style.top = my + 'px';
        });

        (function raf() {
            rx += (mx - rx) * .14; ry += (my - ry) * .14;
            tx += (mx - tx) * .07; ty += (my - ty) * .07;
            ring.style.left = rx + 'px'; ring.style.top = ry + 'px';
            trail.style.left = tx + 'px'; trail.style.top = ty + 'px';
            requestAnimationFrame(raf);
        })();

        // Hide cursor inside card
        card.addEventListener('mouseenter', () => {
            [dot, ring, trail].forEach(el => el.classList.add('cursor-hidden'));
            document.body.style.cursor = 'auto';
        });
        card.addEventListener('mouseleave', () => {
            [dot, ring, trail].forEach(el => el.classList.remove('cursor-hidden'));
            document.body.style.cursor = 'none';
        });

        document.addEventListener('mousedown', () => { ring.style.width = '50px'; ring.style.height = '50px'; });
        document.addEventListener('mouseup', () => { ring.style.width = '36px'; ring.style.height = '36px'; });

        /* ══ 2. OUTSIDE CLICK → COLOR CHANGE ══ */
        const hues = [142, 200, 260, 30, 340, 180, 60, 300, 20, 170];
        const labels = ['Green', 'Cyan', 'Violet', 'Orange', 'Pink', 'Teal', 'Yellow', 'Purple', 'Amber', 'Emerald'];
        let hueIdx = 0;

        document.addEventListener('click', e => {
            if (card.contains(e.target)) return;

            hueIdx = (hueIdx + 1) % hues.length;
            document.documentElement.style.setProperty('--h', hues[hueIdx]);

            // Burst
            const b = document.createElement('div');
            b.className = 'burst';
            b.style.cssText = `left:${e.clientX}px;top:${e.clientY}px;width:100px;height:100px;background:hsla(${hues[hueIdx]},80%,55%,0.3);`;
            document.body.appendChild(b);
            setTimeout(() => b.remove(), 750);

            // Mini label popup
            const lbl = document.createElement('div');
            lbl.textContent = labels[hueIdx];
            lbl.style.cssText = `position:fixed;left:${e.clientX}px;top:${e.clientY - 30}px;font-family:'Orbitron',sans-serif;font-size:11px;letter-spacing:2px;color:hsl(${hues[hueIdx]},80%,70%);pointer-events:none;z-index:9995;animation:fadeUp .4s ease both;transform:translateX(-50%);`;
            document.body.appendChild(lbl);
            setTimeout(() => lbl.remove(), 1000);

            // Flash hint
            const hint = document.getElementById('color-hint');
            hint.style.opacity = '1';
            setTimeout(() => { hint.style.opacity = '.45'; }, 1500);
        });

        /* ══ 3. PARTICLES ══ */
        (function () {
            const c = document.getElementById('particles');
            for (let i = 0; i < 38; i++) {
                const p = document.createElement('div');
                p.className = 'p';
                const s = Math.random() * 6 + 2;
                p.style.cssText = `width:${s}px;height:${s}px;left:${Math.random() * 100}%;background:hsla(${130 + Math.random() * 60},80%,${50 + Math.random() * 20}%,${Math.random() * .5 + .15});animation-duration:${Math.random() * 20 + 12}s;animation-delay:${Math.random() * -28}s;`;
                c.appendChild(p);
            }
        })();

        /* ══ 4. AURORA CANVAS ══ */
        (function () {
            const canvas = document.getElementById('bg-canvas');
            const ctx = canvas.getContext('2d');
            let W, H, t = 0;
            function resize() { W = canvas.width = innerWidth; H = canvas.height = innerHeight; }
            resize(); window.addEventListener('resize', resize);

            function wave(y, amp, freq, phase, color) {
                ctx.beginPath(); ctx.moveTo(0, H);
                for (let x = 0; x <= W; x += 3) {
                    const yy = y + Math.sin(x * freq + phase) * amp + Math.sin(x * freq * .6 + phase * 1.4) * amp * .5;
                    ctx.lineTo(x, yy);
                }
                ctx.lineTo(W, H); ctx.lineTo(0, H); ctx.closePath();
                ctx.fillStyle = color; ctx.fill();
            }

            function getH() { return parseInt(getComputedStyle(document.documentElement).getPropertyValue('--h')) || 142; }

            function draw() {
                const h = getH();
                ctx.clearRect(0, 0, W, H);
                ctx.fillStyle = `hsl(${h},60%,4%)`; ctx.fillRect(0, 0, W, H);
                wave(H * .74, 40, .005, t * .6, `hsla(${h},60%,14%,0.55)`);
                wave(H * .70, 30, .007, t * .9 + 1, `hsla(${h},70%,34%,0.13)`);
                wave(H * .77, 25, .006, t * .5 + 2, `hsla(${h + 30},80%,58%,0.07)`);
                wave(H * .64, 18, .009, t * 1.1 + 3, `hsla(${h + 55},60%,68%,0.04)`);
                t += .012; requestAnimationFrame(draw);
            }
            draw();
        })();

        /* ══ 5. PASSWORD TOGGLE ══ */
        document.getElementById('togglePass').addEventListener('click', function () {
            const inp = document.getElementById('passw');
            const isText = inp.type === 'text';
            inp.type = isText ? 'password' : 'text';
            document.getElementById('eyeIcon').innerHTML = isText
                ? '<path d="M12 4.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5zM12 17c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5zm0-8c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3z"/>'
                : '<path d="M12 7c2.76 0 5 2.24 5 5 0 .65-.13 1.26-.36 1.83l2.92 2.92c1.51-1.26 2.7-2.89 3.43-4.75-1.73-4.39-6-7.5-11-7.5-1.4 0-2.74.25-3.98.7l2.16 2.16C10.74 7.13 11.35 7 12 7zM2 4.27l2.28 2.28.46.46C3.08 8.3 1.78 10.02 1 12c1.73 4.39 6 7.5 11 7.5 1.55 0 3.03-.3 4.38-.84l.42.42L19.73 22 21 20.73 3.27 3 2 4.27zM7.53 9.8l1.55 1.55c-.05.21-.08.43-.08.65 0 1.66 1.34 3 3 3 .22 0 .44-.03.65-.08l1.55 1.55c-.67.33-1.41.53-2.2.53-2.76 0-5-2.24-5-5 0-.79.2-1.53.53-2.2zm4.31-.78l3.15 3.15.02-.16c0-1.66-1.34-3-3-3l-.17.01z"/>';
        });

        /* ══ 6. RIPPLE + LOADING ══ */
        document.getElementById('loginBtn').addEventListener('click', function (e) {
            const btn = this, rect = btn.getBoundingClientRect();
            const r = document.createElement('span'); r.className = 'ripple';
            const s = Math.max(rect.width, rect.height);
            r.style.cssText = `width:${s}px;height:${s}px;left:${e.clientX - rect.left - s / 2}px;top:${e.clientY - rect.top - s / 2}px`;
            btn.appendChild(r); setTimeout(() => r.remove(), 700);
        });
        document.getElementById('loginForm').addEventListener('submit', function () {
            document.getElementById('loginBtn').classList.add('loading');
        });

        /* ══ 7. TOAST ══ */
        function showError(msg) {
            const t = document.getElementById('toast');
            document.getElementById('toast-msg').textContent = msg;
            t.classList.add('show');
            setTimeout(() => t.classList.remove('show'), 4500);
        }

        /* ══ 8. INPUT FOCUS TILT ══ */
        document.querySelectorAll('.input-wrap input').forEach(inp => {
            inp.addEventListener('focus', () => { inp.closest('.field').style.transform = 'scale(1.02) translateX(4px)'; });
            inp.addEventListener('blur', () => { inp.closest('.field').style.transform = 'scale(1) translateX(0)'; });
        });
    </script>
</body>

</html>