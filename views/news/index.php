<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>

    <!-- Bootstrap -->
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <!-- flexslider -->
    <link rel="stylesheet" href="/template/plugins/flexslider/flexslider.css" type="text/css"/>
    <!-- magnific-popup -->
    <link rel="stylesheet" href="/template/plugins/magnific-popup/magnific-popup.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.7.7/css/bootstrap-select.css">


    <!-- fonts css -->
    <link rel="stylesheet" href="/template/css/fonts.css">
    <!-- custom css -->
    <link rel="stylesheet" href="/template/css/style.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<div style="height: 0; width: 0; position: absolute; visibility: hidden">
    <svg xmlns="http://www.w3.org/2000/svg">
        <defs>
            <filter x="-50%" y="-50%" width="200%" height="200%" filterUnits="objectBoundingBox" id="filter-1">
                <feOffset dx="1" dy="1" in="SourceAlpha" result="shadowOffsetInner1"></feOffset>
                <feGaussianBlur stdDeviation="0.5" in="shadowOffsetInner1" result="shadowBlurInner1"></feGaussianBlur>
                <feComposite in="shadowBlurInner1" in2="SourceAlpha" operator="arithmetic" k2="-1" k3="1" result="shadowInnerInner1"></feComposite>
                <feColorMatrix values="0 0 0 0 0   0 0 0 0 0   0 0 0 0 0  0 0 0 0.525 0" in="shadowInnerInner1" type="matrix" result="shadowMatrixInner1"></feColorMatrix>
                <feMerge>
                    <feMergeNode in="SourceGraphic"></feMergeNode>
                    <feMergeNode in="shadowMatrixInner1"></feMergeNode>
                </feMerge>
            </filter>
            <filter id="filter-2" x="-50%" y="-50%" width="200%" height="200%" filterUnits="userSpaceOnUse">
                <feOffset result="offset" in="SourceAlpha"/>
                <feGaussianBlur result="blur" stdDeviation="2.828"/>
                <feFlood result="flood"/>
                <feComposite result="composite" operator="in" in2="blur"/>
                <feBlend result="blend" in="SourceGraphic"/>
                <feGaussianBlur result="blur-2" stdDeviation="0.667" in="SourceAlpha"/>
                <feFlood result="flood-2" flood-color="#fff" flood-opacity="0.41"/>
                <feComposite result="composite-3" operator="out" in2="blur-2"/>
                <feComposite result="composite-2" operator="in" in2="SourceAlpha"/>
                <feBlend result="blend-2" in2="blend"/>
            </filter>
            <filter id="filter-3" x="-50%" y="-50%" width="200%" height="200%" filterUnits="userSpaceOnUse">
                <feOffset result="offset" dx="2.5" dy="4.33" in="SourceAlpha"/>
                <feGaussianBlur result="blur"/>
                <feFlood result="flood" flood-opacity="0.36"/>
                <feComposite result="composite" operator="in" in2="blur"/>
                <feBlend result="blend" in="SourceGraphic"/>
            </filter>
        </defs>
        <symbol id="icon-arrow-tl" viewBox="0 0 13.969 14">
            <path id="icon-arrow-tl"
                  d="M2.86 13.5l7.712-7.73v3.7a1.7 1.7 0 1 0 3.387 0V1.86c0-.03-.007-.06-.01-.09s.006-.05.01-.07A1.75 1.75 0 0 0 12.15 0H4.47a1.7 1.7 0 1 0 0 3.4h3.674L.467 11.1a1.7 1.7 0 0 0 0 2.4 1.675 1.675 0 0 0 2.394 0z"/>
        </symbol>
        <symbol id="icon-arrow" viewBox="0 0 17 10">
            <path id="icon-arrow"
                  d="M17 1.666l-6.8 6.667L8.5 10 0 1.667 1.7 0l6.8 6.666L15.3 0z"/>
        </symbol>
        <symbol id="icon-bad-acc" viewBox="0 0 53 102">
            <path id="icon-bad-acc"
                  d="M44.284 5.88h-7.8V0H16.12v5.88h-7.4a8.787 8.787 0 0 0-8.726 8.83v78.47A8.785 8.785 0 0 0 8.72 102h35.562a8.783 8.783 0 0 0 8.724-8.82V14.71a8.785 8.785 0 0 0-8.722-8.83zm2.907 87.3a2.928 2.928 0 0 1-2.906 2.94H8.724a2.93 2.93 0 0 1-2.91-2.94V14.71a2.93 2.93 0 0 1 2.91-2.94h35.56a2.928 2.928 0 0 1 2.907 2.94v78.47zm-3.17-.54H8.985V79.73H44.02v12.91zm0-16.09H8.985V63.64H44.02v12.91z"/>
        </symbol>
        <symbol id="icon-broke-glass" viewBox="0 0 87 99">
            <path id="icon-broke-glass"
                  d="M79.76 43.15l-8.96-5.61-.24-.14-.51-.05-1.72-.16 4.85-9.06-7.89 8.78-6.42-.59-2.61-1.6L52.42 32l6.84-9.6.44-.63-.03-.46-.61-7.81L70.18.82 57.46 12.59l-.18.18-.05.41-.99 7.25-8.53 8.85-5.96 2.91-2.79-3.08-1.87 1.72-.66-6.9 2.16-12.17.14-.81-.41-.44L27.59 0l7.93 11.63-3.36 11.7-.03.11-.03.42-.5 8.3-12.79-6.22-.48-.23h-.23l-15.81.18 14.91 3.25 9.18 6.25-1.42 8.95L0 61.72l25.97-12.28 4.54.28-1.35 7.11-10.31 3.07 9.81-.46-3.48 18.35 9-23.13.72 2.63 7.16-2L56.6 99l-6.15-31.83 5.01-9.35-5.65 6.28-1.7-8.18 6.96 1.45 24.8 22.16-22.2-27.25-2.31-8.42 8.93-2.84 5.39-.14 9.75 4.06.62.26.35-.39 6.6-7.37zM43.5 49.2l-5.36 2.32-1.68-6.13-5.29-.33-.27-2.41-2.28-2.69 4.21-6.29 3.93 2.9 3.66-2.26 5.67 2.85 2.55-3.92 5.02 6.56-4.17 3.73 1.92 9.22z"/>
        </symbol>
        <symbol id="icon-change-body" viewBox="0 0 52 98">
            <path id="icon-change-body"
                  d="M51.984 4.78v-.54A4.267 4.267 0 0 0 47.69 0H4.29A4.268 4.268 0 0 0 0 4.24v1.55h.02v86.42H0v1.55A4.268 4.268 0 0 0 4.293 98h43.4a4.268 4.268 0 0 0 4.293-4.24v-1.02H52V4.78h-.013zM11.85 2.71a1.23 1.23 0 1 1-1.242 1.23 1.236 1.236 0 0 1 1.242-1.23zm-5.384-.58a1.81 1.81 0 1 1-1.83 1.81 1.82 1.82 0 0 1 1.83-1.81zM48 88.01H4v-77h44v77zm-19.31-71a3.57 3.57 0 0 0-2.344 1.21 3.36 3.36 0 0 0-.844 2.47 2.932 2.932 0 0 0 2.36-1.13 3.523 3.523 0 0 0 .823-2.55zM23.225 33c1.008-.04 1.387-.66 2.605-.66s1.56.66 2.628.64c1.084-.02 1.77-.99 2.434-1.97a8.7 8.7 0 0 0 1.1-2.27 3.536 3.536 0 0 1-2.136-3.24 3.624 3.624 0 0 1 1.72-3.04 3.71 3.71 0 0 0-2.91-1.58c-1.24-.13-2.42.73-3.047.73s-1.6-.72-2.626-.7a3.886 3.886 0 0 0-3.29 2.01c-1.4 2.44-.36 6.07 1.007 8.05.673.98 1.47 2.06 2.516 2.03z"/>
        </symbol>
        <symbol id="icon-crash-display" viewBox="0 0 61 91">
            <path id="icon-crash-display"
                  d="M53.62 48.36a5.87 5.87 0 0 1-1.242 3.56v17.37a1.56 1.56 0 0 1-1.575 1.55h-40.61a1.56 1.56 0 0 1-1.574-1.55V11.28a1.56 1.56 0 0 1 1.574-1.55h2.99l2.853-4.1V0h-9.8a6.184 6.184 0 0 0-6.24 6.13v78.74A6.184 6.184 0 0 0 6.236 91h48.518a6.183 6.183 0 0 0 6.24-6.13V37.48l-7.38 1.8v9.08zM30.5 86.45a6.046 6.046 0 1 1 6.156-6.05 6.1 6.1 0 0 1-6.156 6.05zM54.76 0H29.863v8.47l-.447.73-.325.53H50.8a1.56 1.56 0 0 1 1.575 1.55v14.81l7.117-3.82 1.5-.81V6.13A6.183 6.183 0 0 0 54.76 0zM14.577 15.3L19.306 28a1.076 1.076 0 0 1 .06.53l-1.834 13.73a.748.748 0 0 0 .4.73.78.78 0 0 0 .333.07.746.746 0 0 0 .663-.39l7.022-13.43a2.817 2.817 0 0 0 .09-2.42l-4.343-10.07a1.114 1.114 0 0 1 .074-1.02l4.958-8.12V0h-7.552v6.59l-4.265 6.12a2.8 2.8 0 0 0-.332 2.59zM43.13 36.57l.91 8.56a.444.444 0 0 1-.134.37l-7.34 7.05a2.822 2.822 0 0 0-.786 2.75l2.9 11.09a.785.785 0 0 0 .582.57.7.7 0 0 0 .2.03.806.806 0 0 0 .784-.6l1.83-8.65a.42.42 0 0 1 .128-.23l7.4-7.11a2.837 2.837 0 0 0 .873-2.04V37.22a.45.45 0 0 1 .35-.43L61 34.3v-9.33l-16.374 8.8a2.828 2.828 0 0 0-1.495 2.8z"/>
        </symbol>
        <symbol id="icon-dead-skanner" viewBox="0 0 67 97">
            <path id="icon-dead-skanner"
                  d="M15.655 87.68a30.488 30.488 0 0 1-12.253-24.4V33.71c0-.86.036-1.74.11-2.6a1.7 1.7 0 1 0-3.39-.29C.042 31.78 0 32.75 0 33.71v29.57a33.742 33.742 0 0 0 13.636 27.16 1.72 1.72 0 0 0 1.008.33 1.687 1.687 0 0 0 1.37-.7 1.715 1.715 0 0 0-.36-2.39zm7.936 4.22a31.227 31.227 0 0 1-3.085-1.28 1.7 1.7 0 0 0-2.27.8 1.714 1.714 0 0 0 .8 2.28 33.037 33.037 0 0 0 3.44 1.43 1.83 1.83 0 0 0 .558.1 1.714 1.714 0 0 0 .558-3.33zM65.3 55.51a1.7 1.7 0 0 0-1.7 1.71v6.07a30.23 30.23 0 0 1-30.1 30.29 29.4 29.4 0 0 1-3.516-.21 1.71 1.71 0 0 0-.393 3.4A33.49 33.49 0 0 0 67 63.29v-6.07a1.7 1.7 0 0 0-1.7-1.71zM33.5 0a33.083 33.083 0 0 0-19.915 6.6 33.57 33.57 0 0 0-11.98 16.77 1.72 1.72 0 0 0 1.1 2.16 1.7 1.7 0 0 0 2.14-1.11A30.19 30.19 0 0 1 15.612 9.35a29.724 29.724 0 0 1 17.892-5.93 30.23 30.23 0 0 1 30.1 30.29v16.66a1.7 1.7 0 1 0 3.4 0V33.71A33.642 33.642 0 0 0 33.5 0zM10.52 72.74a1.726 1.726 0 0 0-.774 2.3 26.7 26.7 0 0 0 9.59 10.74 26.256 26.256 0 0 0 25.09 1.77 1.72 1.72 0 0 0 .845-2.27 1.7 1.7 0 0 0-2.252-.85A22.6 22.6 0 0 1 33.5 86.5a22.857 22.857 0 0 1-12.338-3.61 23.256 23.256 0 0 1-8.365-9.37 1.694 1.694 0 0 0-2.278-.78zm39.334 10.97a1.723 1.723 0 0 0 1.123-.43 26.75 26.75 0 0 0 8.993-19.99V33.71a26.523 26.523 0 0 0-5.115-15.72 1.7 1.7 0 0 0-2.378-.37 1.717 1.717 0 0 0-.365 2.39 23.112 23.112 0 0 1 4.457 13.7v29.58a23.31 23.31 0 0 1-7.84 17.42 1.712 1.712 0 0 0-.153 2.41 1.68 1.68 0 0 0 1.277.59zm-3.247-69.09a1.652 1.652 0 0 0 .967.3 1.69 1.69 0 0 0 1.4-.73 1.715 1.715 0 0 0-.43-2.38 26.126 26.126 0 0 0-4.08-2.34 1.7 1.7 0 0 0-2.255.84 1.717 1.717 0 0 0 .84 2.27 23.41 23.41 0 0 1 3.557 2.04zM37.93 7.45a26.213 26.213 0 0 0-4.43-.38A26.592 26.592 0 0 0 7.03 33.71v28.76a1.7 1.7 0 1 0 3.4 0V33.71A23.164 23.164 0 0 1 33.5 10.5a23.685 23.685 0 0 1 3.86.32 1.71 1.71 0 0 0 .57-3.37zM17.384 22.78a1.723 1.723 0 0 0 .457 2.38 1.7 1.7 0 0 0 2.36-.46 16.013 16.013 0 0 1 29.337 9.01v19.17a1.7 1.7 0 1 0 3.4 0V33.71a19.413 19.413 0 0 0-35.555-10.93zM15.76 39.53a1.708 1.708 0 0 0 1.7-1.71v-4.11a1.7 1.7 0 1 0-3.4 0v4.11a1.708 1.708 0 0 0 1.7 1.71zm-1.7 23.76a19.618 19.618 0 0 0 9.988 17.09 1.663 1.663 0 0 0 .828.22 1.716 1.716 0 0 0 .83-3.21 16.193 16.193 0 0 1-8.245-14.1V44.67a1.7 1.7 0 1 0-3.4 0v18.62zm38.88 0v-3.11a1.7 1.7 0 1 0-3.4 0v3.11a16.108 16.108 0 0 1-16.038 16.14 15.81 15.81 0 0 1-3.82-.47 1.714 1.714 0 0 0-.812 3.33 19.44 19.44 0 0 0 24.07-19zM45.91 33.9a12.6 12.6 0 0 0-12.17-12.67 12.24 12.24 0 0 0-8.928 3.57 12.438 12.438 0 0 0-3.723 8.91v29.58a1.7 1.7 0 1 0 3.4 0V33.71a9 9 0 0 1 2.7-6.46 8.88 8.88 0 0 1 6.48-2.6 9.178 9.178 0 0 1 8.835 9.25v16.24a1.7 1.7 0 1 0 3.4 0V33.9zM28.12 65.27a8.9 8.9 0 1 0 17.79 0v-8.28a1.7 1.7 0 1 0-3.4 0v8.28a5.5 5.5 0 1 1-10.99 0V50.6a1.7 1.7 0 1 0-3.4 0v14.67zm9.06 1.05a1.708 1.708 0 0 0 1.7-1.71V33.82a5.445 5.445 0 0 0-5.11-5.51 5.293 5.293 0 0 0-3.978 1.48 5.462 5.462 0 0 0-1.673 3.92v9.59a1.7 1.7 0 1 0 3.4 0v-9.59a1.994 1.994 0 0 1 2.08-1.99 2.08 2.08 0 0 1 1.88 2.1v30.79a1.708 1.708 0 0 0 1.7 1.71z"/>
        </symbol>
        <symbol id="icon-facebook" viewBox="0 0 9.375 18.88">
            <path id="icon-facebook"
                  d="M.002 8.63H1.68v10.25h3.723V8.63h2.632l.714-3.31h-3.5a2.654 2.654 0 0 1 .245-1.89 1.92 1.92 0 0 1 1.363-.47 3.5 3.5 0 0 1 1.758.72L9.37.76A10.316 10.316 0 0 0 6.258.02 5.22 5.22 0 0 0 3.624.6a3.147 3.147 0 0 0-1.41 1.68 5.9 5.9 0 0 0-.43 2.6v.44H.053z"/>
        </symbol>
        <symbol id="icon-google-plus" viewBox="0 0 18.719 20">
            <path id="icon-google-plus"
                  d="M9.863 11.91l-.9-.69a1.353 1.353 0 0 1-.652-1.06 1.716 1.716 0 0 1 .7-1.2c1.053-.81 2.1-1.68 2.1-3.49a4.114 4.114 0 0 0-1.776-3.32h1.553l1.63-1.01h-4.94A7.8 7.8 0 0 0 2.84 2.61a4.4 4.4 0 0 0-1.6 3.3A3.932 3.932 0 0 0 5.4 9.77c.25 0 .526-.03.8-.05a2.2 2.2 0 0 0-.248.96 2.548 2.548 0 0 0 .75 1.67 11.1 11.1 0 0 0-4.787 1.13 3.535 3.535 0 0 0-1.93 3c0 1.82 1.754 3.52 5.39 3.52 4.31 0 6.592-2.34 6.592-4.65.002-1.7-.998-2.53-2.104-3.44zM6.58 9.08c-2.157 0-3.134-2.73-3.134-4.38a2.8 2.8 0 0 1 .55-1.82 2.367 2.367 0 0 1 1.757-.81c2.08 0 3.157 2.76 3.157 4.53a2.45 2.45 0 0 1-.627 1.79 2.56 2.56 0 0 1-1.704.69zm.024 9.89c-2.682 0-4.41-1.26-4.41-3a2.793 2.793 0 0 1 2.154-2.54 10.354 10.354 0 0 1 2.632-.39 5.07 5.07 0 0 1 .576.02c1.906 1.33 2.734 1.99 2.734 3.25 0 1.52-1.28 2.66-3.686 2.66zm9.59-9.93V6.58H14.95v2.46h-2.507v1.23h2.507v2.47h1.24v-2.47h2.52V9.04h-2.52z"/>
        </symbol>
        <symbol id="icon-imac" viewBox="0 0 159 122">
            <path id="icon-imac"
                  d="M103.77 119.1s-2.75-2.33-4.26-3.84a7.575 7.575 0 0 1-1.93-3.36l-1.2-12.8H62.994l-1.2 12.81a7.69 7.69 0 0 1-1.928 3.46c-1.515 1.52-4.27 3.8-4.27 3.8s-2.478 1.74 1.24 2.29c2.13.31 11.628.54 19.26.54H83.3c7.787 0 17.124-.25 19.254-.57 3.706-.55 1.216-2.33 1.216-2.33zM155.18 0H4.08A4.268 4.268 0 0 0 .003 4.17v88.44a4.255 4.255 0 0 0 4.077 4.15h151.1a4.04 4.04 0 0 0 3.82-4.15V4.17A4.053 4.053 0 0 0 155.18 0zm-2.75 89.75H6.1V7.01h146.33v82.74z"/>
        </symbol>
        <symbol id="icon-ipad" viewBox="0 0 94 122">
            <path id="icon-ipad"
                  d="M94 4.924A4.926 4.926 0 0 0 89.075 0H4.925A4.926 4.926 0 0 0 0 4.924V117.07A4.93 4.93 0 0 0 4.925 122h84.15A4.93 4.93 0 0 0 94 117.07V4.924zM47.2 119.47a2.76 2.76 0 1 1 2.765-2.76 2.758 2.758 0 0 1-2.765 2.76zm37.123-7.84H9.33V10.713h74.993V111.63z"/>
        </symbol>
        <symbol id="icon-iphone" viewBox="0 0 57 122">
            <path id="icon-iphone"
                  d="M57 8.21A8.166 8.166 0 0 0 48.88 0H8.12A8.166 8.166 0 0 0 0 8.21v105.58A8.168 8.168 0 0 0 8.12 122h40.76a8.168 8.168 0 0 0 8.12-8.21V8.21zm-22.535 2.557a1.29 1.29 0 0 1-1.284 1.3h-8.7a1.29 1.29 0 0 1-1.283-1.3v-.084a1.29 1.29 0 0 1 1.284-1.3h8.7a1.292 1.292 0 0 1 1.285 1.3v.084zm-5.4 107.993a5.365 5.365 0 1 1 5.3-5.36 5.332 5.332 0 0 1-5.303 5.36zm23.96-14.19H4.64V17.428h48.383v87.142z"/>
        </symbol>
        <symbol id="icon-ipod" viewBox="0 0 51 122">
            <path id="icon-ipod"
                  d="M49.247 0H1.8A9.33 9.33 0 0 0 0 .56v121.33s1.384.11 1.8.11h47.444c.5 0 1.753-.11 1.753-.11V.56a7.162 7.162 0 0 0-1.75-.56zm-23.82 110.64A19.47 19.47 0 1 1 44.85 91.17a19.447 19.447 0 0 1-19.422 19.47zM5.368 62.79V8.073h40.264V62.79H5.37zm19.937 19.27a9.175 9.175 0 1 0 9.15 9.17 9.162 9.162 0 0 0-9.154-9.17z"/>
        </symbol>
        <symbol id="icon-iwatch" viewBox="0 0 72 122"><title>icon-iwatch</title>
            <g id="Page-1" fill-rule="evenodd">
                <path
                    d="M13.95 1.813c-.31.43-.572.893-.78 1.38-.494 1.697-.812 3.44-.95 5.2-.48 3.13-1.23 8.31-1.23 8.31s-.53 2.727 1.07 2.76l4.58.1 14.63.008 20.87.01 4.09-.026c.554-.134.98-.578 1.09-1.137-.03-.807-.91-7.4-.91-7.4l-1.06-7.15c-.305-.233-.745-2.042-1.63-2.86C52.664.03 50.163.046 50.06.044c-3.46-.097-11.622 0-11.872 0H18.04c-1.564-.077-3.075.576-4.09 1.768zm-.01 118.307c-1.25-1.73-1.55-5.46-1.9-7.69-.48-3.11-1.12-7.06-1.12-7.06s-.57-2.47 1-2.76c1.566-.186 3.145-.243 4.72-.17l35.5-.02 4.09.03c.555.134.98.58 1.09 1.14-.03.8-.91 7.4-.91 7.4s-.834 5.314-1.443 7.702c-.168.656-.886 1.428-.886 1.428-.002-.002-.44.762-1.16 1.203-.785.48-1.86.637-1.86.637-3.46.1-12.62 0-12.87 0H18.04c-1.573.033-3.08-.643-4.1-1.84zm-1.61-94.527h43.41c4.946.02 8.946 4.034 8.95 8.98V87.43c-.003 4.946-4.004 8.96-8.95 8.98H12.33c-4.945-.023-8.943-4.035-8.95-8.98V34.573c.007-4.945 4.005-8.956 8.95-8.98zM68.06 64.37h2.15c.425 0 .77.345.77.77v18.11c0 .204-.08.4-.226.544-.144.145-.34.226-.544.226h-2.23v4.51c-.007 6.443-5.217 11.67-11.66 11.7H11.66C5.217 100.2.007 94.973 0 88.53V33.49c.008-6.444 5.217-11.67 11.66-11.7h44.66c6.443.03 11.652 5.256 11.66 11.7v5.83h1.97c1.132.003 2.048.92 2.05 2.053V51.2c-.002 1.132-.918 2.05-2.05 2.054h-1.97V64.37h.08z"
                    id="icon-iwatch"/>
            </g>
        </symbol>
        <symbol id="icon-location" viewBox="0 0 17 24">
            <path id="icon-location"
                  d="M8.5 0A8.577 8.577 0 0 0 0 8.674a9.576 9.576 0 0 0 1.253 4.584l5.54 9.783A1.933 1.933 0 0 0 8.5 24a1.974 1.974 0 0 0 1.708-.96l5.54-9.777A9.417 9.417 0 0 0 17 8.68 8.583 8.583 0 0 0 8.5 0zm0 11.236a3.167 3.167 0 1 1 3.1-3.167 3.143 3.143 0 0 1-3.1 3.166z"/>
        </symbol>
        <symbol id="icon-menu" viewBox="0 0 25 15">
            <path id="icon-menu"
                  d="M0 0h25v3H0V0zm0 6h25v3H0V6zm0 6h25v3H0v-3z"/>
        </symbol>
        <symbol id="icon-no-touch" viewBox="0 0 56.062 100">
            <path id="icon-no-touch"
                  d="M56.047 47.67v-1.06a4.23 4.23 0 0 0-4.182-4.26h-.448a4.226 4.226 0 0 0-4.182 4.26v4.81h-1.617v-4.81a4.22 4.22 0 0 0-4.17-4.26h-.46a4.23 4.23 0 0 0-4.178 4.26v4.81h-1.617v-4.81a4.228 4.228 0 0 0-4.178-4.26h-.456a4.223 4.223 0 0 0-4.18 4.26v4.81h-1.334V40.16a19.926 19.926 0 1 0-8.87.31v26.27C11.716 61.9 9.02 56.5 6.132 55.83c-3.728-.88-6.876 2.04-4.3 7.11s14.93 27.05 14.946 27.08c1.633 4.04 6.9 9.96 19.33 9.96 19.93 0 19.93-18.14 19.93-18.14V55.66c0-.02.008-.02.008-.04v-7.95zM20.84 19.26h-.456a4.25 4.25 0 0 0-4.208 4.29v4.73a8.65 8.65 0 1 1 8.874-.66v-4.06a4.25 4.25 0 0 0-4.21-4.3zM2.077 20.44a17.98 17.98 0 1 1 22.97 17.52v-5.53a13.082 13.082 0 0 0 7.8-12A12.786 12.786 0 1 0 16.18 32.79v5.53A18.275 18.275 0 0 1 2.077 20.44z"/>
        </symbol>
        <symbol id="icon-not-charge" viewBox="0 0 105 104">
            <path id="icon-not-charge"
                  d="M43.223 20.77H41.8a2.91 2.91 0 0 0-3.016 2.8v11.87h7.455V23.57a2.914 2.914 0 0 0-3.017-2.8zm19.985 0h-1.424a2.91 2.91 0 0 0-3.013 2.8v11.87h7.454V23.57a2.91 2.91 0 0 0-3.016-2.8zM52.508 0C23.562 0 .014 23.86.014 53.19A53.194 53.194 0 0 0 15.3 90.7a52.51 52.51 0 0 0 20.89 13.05 5.04 5.04 0 0 0 6.375-3.28 5.137 5.137 0 0 0-3.236-6.46 42.448 42.448 0 0 1-16.86-10.53 42.972 42.972 0 0 1-12.34-30.29c0-23.68 19.01-42.94 42.38-42.94s42.383 19.26 42.383 42.94a42.9 42.9 0 0 1-12.4 30.35c-3.07 2.8-10.7 8.41-15.27 8.41a6.892 6.892 0 0 1-5.535-2.36c-3.618-4.08-4.41-12.35-4.378-18.11A16.71 16.71 0 0 0 73.07 54.7V38.76H31.945V54.7a16.735 16.735 0 0 0 15.242 16.76c-.052 6.86.9 18.11 6.96 24.96a16.955 16.955 0 0 0 13.073 5.78c9.78 0 20.91-10.01 22.15-11.15l.16-.16A53.137 53.137 0 0 0 105 53.19C105 23.86 81.45 0 52.506 0z"/>
        </symbol>
        <symbol id="icon-phone" viewBox="0 0 24 24">
            <path id="icon-phone"
                  d="M12 0a12 12 0 1 0 12 12A12 12 0 0 0 12 0zm6.34 17.51l-.96.96a1.863 1.863 0 0 1-.69.278A11.334 11.334 0 0 1 5.25 7.286a1.794 1.794 0 0 1 .28-.66l.96-.96a1.607 1.607 0 0 1 1.5-.355l.2.07a1.878 1.878 0 0 1 1.1 1.16l.48 1.773a1.712 1.712 0 0 1-.39 1.52l-.64.64a6.815 6.815 0 0 0 4.79 4.793l.64-.64a1.74 1.74 0 0 1 1.52-.4l1.77.484a1.906 1.906 0 0 1 1.16 1.1l.07.205a1.6 1.6 0 0 1-.35 1.494z"/>
        </symbol>
        <symbol id="icon-three-arrows" viewBox="0 0 65 74">
            <path id="icon-three-arrows"
                  d="M.228 1.92l26.27 35.02L.257 72.04a1.368 1.368 0 0 0-.257.84A1 1 0 0 0 .76 74H.77a.64.64 0 0 0 .476-.24L32.21 37.82a1.386 1.386 0 0 0 .29-.88 1.347 1.347 0 0 0-.29-.88L1.244.24a.61.61 0 0 0-1.05.14 1.52 1.52 0 0 0 .033 1.54zm16.61 0L43.11 36.94l-26.243 35.1a1.375 1.375 0 0 0-.257.84 1 1 0 0 0 .763 1.12h.007a.64.64 0 0 0 .477-.24L48.82 37.82a1.386 1.386 0 0 0 .292-.88 1.347 1.347 0 0 0-.292-.88L17.856.24a.61.61 0 0 0-1.05.14 1.52 1.52 0 0 0 .033 1.54zm15.89 0L59 36.94l-26.243 35.1a1.375 1.375 0 0 0-.257.84 1 1 0 0 0 .763 1.12h.007a.64.64 0 0 0 .477-.24L64.71 37.82a1.386 1.386 0 0 0 .292-.88 1.347 1.347 0 0 0-.292-.88L33.746.24a.61.61 0 0 0-1.05.14 1.52 1.52 0 0 0 .032 1.54z"/>
        </symbol>
        <symbol id="icon-twitter" viewBox="0 0 19.562 18.16">
            <path id="icon-twitter"
                  d="M19.032 2.16a8.1 8.1 0 0 1-2.552 1 3.926 3.926 0 0 0-2.93-1.3 4.064 4.064 0 0 0-4.017 4.11 4.2 4.2 0 0 0 .1.93 11.3 11.3 0 0 1-8.278-4.29A4.184 4.184 0 0 0 2.598 8.1a3.894 3.894 0 0 1-1.82-.52v.05A4.1 4.1 0 0 0 4 11.67a4.086 4.086 0 0 1-1.058.14 4.69 4.69 0 0 1-.756-.07 4.028 4.028 0 0 0 3.75 2.85A7.957 7.957 0 0 1 .95 16.35a7.582 7.582 0 0 1-.96-.06 11.153 11.153 0 0 0 6.158 1.85c7.387 0 11.426-6.26 11.426-11.7l-.013-.53a8.15 8.15 0 0 0 2.01-2.13 7.822 7.822 0 0 1-2.307.65 4.106 4.106 0 0 0 1.77-2.27z"/>
        </symbol>
        <symbol id="icon-vk" viewBox="0 0 13.625 18.16">
            <path id="icon-vk"
                  d="M12.67 10.52a4.718 4.718 0 0 0-2.527-1.3v-.09a3.613 3.613 0 0 0 1.722-1.36 3.74 3.74 0 0 0 .623-2.13 3.565 3.565 0 0 0-.452-1.81 3.17 3.17 0 0 0-1.367-1.26 5.914 5.914 0 0 0-1.813-.58 22.407 22.407 0 0 0-2.843-.13H-.002v16.29h6.817a11.838 11.838 0 0 0 2.922-.3 6.238 6.238 0 0 0 2.11-1.03 4.415 4.415 0 0 0 1.293-1.52 4.59 4.59 0 0 0 .48-2.14 3.622 3.622 0 0 0-.95-2.64zM7.948 7.41a1.336 1.336 0 0 1-.71.63 2.438 2.438 0 0 1-.908.23c-.295.01-.808.02-1.54.02h-.538V4.84h.3c.762 0 1.336.01 1.72.02a2.957 2.957 0 0 1 1 .19 1.306 1.306 0 0 1 .66.6 1.8 1.8 0 0 1 .21.81 2.178 2.178 0 0 1-.198.95zm1 6.73a1.686 1.686 0 0 1-.852.71 3.69 3.69 0 0 1-1.3.29q-.64.03-2.31.03h-.23v-4.09h.79c.762 0 1.37.01 1.824.02a3.287 3.287 0 0 1 1.07.16 1.923 1.923 0 0 1 .96.64 1.952 1.952 0 0 1 .32 1.19 2.062 2.062 0 0 1-.276 1.05z"/>
        </symbol>
        <symbol id="icon-wifi-dead" viewBox="0 0 73 72">
            <path id="icon-wifi-dead"
                  d="M0 72V40h13.27v32H0zm33.18 0V30H19.91v42h13.27zm19.91 0V20H39.82v52h13.27zM73 72V0H59.73v72H73z"/>
        </symbol>
        <symbol id="icon-time" viewBox="0 0 17 17">
            <path id="icon-time"  d="M629.5,2353a8.5,8.5,0,1,0,8.5,8.5A8.508,8.508,0,0,0,629.5,2353Zm0,15.19a6.69,6.69,0,1,1,6.692-6.69A6.7,6.7,0,0,1,629.5,2368.19Zm4.43-6.95h-3.82v-4.6a0.7,0.7,0,1,0-1.4,0v5.3a0.7,0.7,0,0,0,.7.7h4.52A0.7,0.7,0,1,0,633.93,2361.24Z" transform="translate(-621 -2353)"/>
        </symbol>
        <symbol id="icon-phone-repair" viewBox="0 0 100 118">
            <path id="icon-phone-repair" d="M217.59,2793.47H169.463v-68.84h48.119v5.15h6.467v-6.55a11.3,11.3,0,0,0-11.272-11.24h-38.5A11.289,11.289,0,0,0,163,2723.23v80.54A11.28,11.28,0,0,0,174.272,2815h38.5a11.288,11.288,0,0,0,11.272-11.23v-10.42H217.59v0.12Zm-24.072,15.91a5.145,5.145,0,1,1,5.168-5.14A5.145,5.145,0,0,1,193.518,2809.38Zm-18.545-77.84H189.41v8.78H174.973v-8.78Zm0,22.48H189.41v8.78H174.973v-8.78Zm0,23.53H189.41v8.77H174.973v-8.77Zm65.681-19.67a19.507,19.507,0,0,0-3-7.28l5.177-5.16-5.29-5.26-5.168,5.16a19.375,19.375,0,0,0-7.29-3v-7.31H217.6v7.31a19.481,19.481,0,0,0-7.294,3l-5.16-5.16-5.288,5.26,5.169,5.17a19.4,19.4,0,0,0-3,7.27H194.7v7.45h7.329a19.539,19.539,0,0,0,3,7.27l-5.173,5.16,5.287,5.26,5.173-5.15a19.787,19.787,0,0,0,7.294,3v7.31h7.481v-7.31a19.635,19.635,0,0,0,7.29-3l5.168,5.15,5.29-5.25-5.177-5.16a19.53,19.53,0,0,0,3-7.27H248v-7.46h-7.342Zm-19.311,11.84a8.125,8.125,0,1,1,8.138-8.11A8.133,8.133,0,0,1,221.343,2769.72Z" transform="translate(-156 -2705)"/>
        </symbol>
    </svg>
</div>

    <!-- headerTop -->
    <header class="headerTop">
        <div class="container headerTop__container">
            <div class="row headerTop__row">
                <div class="col-xs-12 headerTop__itemInner">
                    <div class="headerTop__logoWrap">
                        <a href="#" class="headerTop__link">
                            <img src="/template/img/logo--black.png" alt="logo" class="headerTop__img">
                        </a>
                        
                        <p class="headerTop__text">Сеть сервисных центров<br>по ремонту техники Apple</p>
                    </div>

                    <div class="headerTop__address">
                        <div class="headerTop__addressWrapper">
                            <div class="headerTop__address-select">
                                <select id="touchpoint-filter" class="selectpicker filter">
                                    <option>Озерки-Просвещение</option>
                                    <option>Сенная/Спасская/Садовая</option>
                                    <option>Лесная</option>
                                </select>
                            </div>
                            
                            <div class="services__address-title">Выберите ближайший к вам центр:</div>
                        </div>

                        <div class="services__address-footer">
                            <div class="services__address-text">
                                <i class="glyphicon glyphicon-map-marker"></i>
                                <span></span>
                            </div>
                            <div class="services__address-phone">
                                <i><i class="glyphicon glyphicon-earphone"></i></i>
                                <span></span>
                            </div>
                        </div>
                    </div>
                
                </div>
            </div>
        </div>
    </header>
    <!-- headerTop End -->

    <!-- headerNav -->
    <div class="headerNav">
        <div class="container headerNav__container">
            <div class="row headerNav__row">
                <div class="col-xs-12 headerNav__innerItem">
                    <i class="glyphicon glyphicon-menu-hamburger"></i>
                    <nav class="headerNav__navigation">
                        <ul class="headerNav__list">
                            <li>
                                <a href="#" class="menuBtn">iPad</a>
                                <ul class="headerNav__sublist">
                                    <li><a href="#">iPad</a></li>
                                    <li><a href="#">iPad 2</a></li>
                                    <li><a href="#">iPad 3</a></li>
                                    <li><a href="#">iPad 4</a></li>
                                    <li><a href="#">iPad 5 (Air)</a></li>
                                    <li><a href="#">iPad mini</a></li>
                                    <li><a href="#">iPad mini 2</a></li>
                                    <li><a href="#">iPad mini 3</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" class="menuBtn">iPhone</a>
                                <ul class="headerNav__sublist">
                                    <li><a href="#">iPhone 3G</a></li>
                                    <li><a href="#">iPhone 4</a></li>
                                    <li><a href="#">iPhone 4S</a></li>
                                    <li><a href="#">iPhone 5</a></li>
                                    <li><a href="#">iPhone 5C</a></li>
                                    <li><a href="#">iPhone 5S</a></li>
                                    <li><a href="#">iPhone 6</a></li>
                                    <li><a href="#">iPhone 6 Plus</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" class="menuBtn">Mac</a>
                                <ul class="headerNav__sublist">
                                    <li><a href="#">MacBook Air</a></li>
                                    <li><a href="#">MacBook Pro</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Ноутбуки</a>
                            </li>
                            <li>
                                <a href="#">Акции</a>
                            </li>
                            <li>
                                <a href="#">Статьи</a>
                            </li>
                            <li>
                                <a href="#">Контакты</a>
                            </li>
                        </ul>
                    </nav>

                    <div class="headerNav__btnWrap">
                        <a href="#popup2" class="headerNav__orderButton">Оставить заявку</a>
                        <div id="popup2" class="popup mfp-hide">
                            <form action="send1.php" method="post">
                                <div class="popup__header">
                                    <div class="popup__title">БЕСПЛАТНАЯ ДИАГНОСТИКА</div>
                                    <div class="popup__info">Оставьте заявку и получите скидку 5%</div>
                                </div>
                                <div class="popup__footer">
                                    <input type="text" name="name" class="popup__inputText" placeholder="Введите имя">
                                    <input type="text" name="phone" class="popup__inputText" placeholder="Введите телефон">
                                    <input type="submit" value="Оставить заявку" class="popup__inputSubmit">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- headerNav End -->

    <!-- sliderMain -->
    <div class="sliderMain">
        <div class="sliderMain__flexslider flexslider">
            <!-- direction__wrapper -->
            <div class="direction__wrapper">
                <div class="container sliderMain__container sliderMain__container-direction">
                    <div class="row">
                        <div class="col-xs-12">
                            <ul class="flex-direction-nav">
                                <li class="flex-nav-prev">
                                    <a class="flex-prev" href="#"></a>
                                </li>
                                <li class="flex-nav-next">
                                    <a class="flex-next" href="#"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- direction__wrapper End -->

            <ul class="slides sliderMain__slides">
                <li class="sliderMain__item bg1">
                    <div class="container sliderMain__container">
                        <div class="row sliderMain__row">
                            <div class="col-xs-12 sliderMain__innerItem">
                                <h2 class="sliderMain__title">Скидка на замену дисплейного модуля в<br/> сборе со стеклом</h2>
                                <p class="sliderMain__text">iPhone 5/5s (копия ААА) 3200р/3400р</p>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="sliderMain__item bg2">
                    <div class="container sliderMain__container">
                        <div class="row sliderMain__row">
                            <div class="col-xs-12 sliderMain__innerItem">
                                <h2 class="sliderMain__title">Снижена цена на замену стекла с<br/> тачскрином на iPad</h2>
                                <ul class="sliderMain__text">
                                    <li>iPad 2 – 2200р <span class="small">вместо </span><span class="textThrough">2500р</span></li>
                                    <li>iPad 3/4 – 2500р <span class="small">вместо </span><span class="textThrough">3200р</span></li>
                                    <li>iPad Mini 1/2  – 2500р <span class="small">вместо </span><span class="textThrough">2800р</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="sliderMain__item bg3">
                    <div class="container sliderMain__container">
                        <div class="row sliderMain__row">
                            <div class="col-xs-12 sliderMain__innerItem">
                                <h2 class="sliderMain__title">Цена</h2>
                                <p class="sliderMain__text">Наши цены включают в себя только качественную<br> запчасть и работу, вы не переплачиваете за красивые<br> офисы, или обманную оригинальность запчастей.
                                </p>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="sliderMain__item bg4">
                    <div class="container sliderMain__container">
                        <div class="row sliderMain__row">
                            <div class="col-xs-12 sliderMain__innerItem">
                                <h2 class="sliderMain__title">Срочность</h2>
                                <p class="sliderMain__text">
                                    Мы имеем все необходимые запчасти всегда в наличии,<br> что позволяет нам сразу же приступить к ремонту<br> вашего iPhone или iPad, и снижает время ожидания.<br> В среднем ремонт занимает не более 40 минут 
                                </p>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="sliderMain__item bg5">
                    <div class="container sliderMain__container">
                        <div class="row sliderMain__row">
                            <div class="col-xs-12 sliderMain__innerItem">
                                <h2 class="sliderMain__title">Честность</h2>
                                <p class="sliderMain__text">
                                    Вы можете быть уверены, что все винты и<br> комплектующие будут установлены правильно,<br> и останутся на своих местах.
                                </p>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <!-- sliderMain End -->

    <!-- repairMain -->
    <div class="repairMain">
        <div class="container repairMain__container">
            <div class="row repairMain__row">
                <div class="col-xs-12">
                    <h3 class="repairMain__title">Ремонт iPhone в Санкт-Петербурге</h3>
                    <p class="repairMain__text">Каждый девайс - это хорошо продуманный, стильный и современный механизм. Основная проблема заключается в том, что их легко разбить. Поэтому ремонт Apple iPhone 4/4S, а так же ремонт iPhone 5 и 5S в Санкт-Петербурге осуществляют множество фирм, однако, в отличие от конкурентов, наш сервисный центр iPhone проводит работы любой сложности в присутствии клиента. Выполняя срочный ремонт Айфонов, мы используем оригинальные запчасти и предоставляем гарантию на всех этапах работы. Цена на ремонт iPhone в СПб зависит от типа работ, но любой пользователь может позволить себе замену кнопки включения и блокировки, поменять стекло экрана или дисплея, материнскую плату.</p>
                </div>
            </div>
        </div>
        <div class="container repairMain__container">
            <div class="row repairMain__row">
                <div class="col-xs-12 repairMain__innerItem">
                    <div class="repairMain__item">
                        <a href="/questions/1/" class="repairMain__itemLink">
                            <svg class="icon icon-iphone">
                                <use xlink:href="#icon-iphone"></use>
                            </svg>iPhone
                            <svg class="icon icon-arrow-tl">
                                <use xlink:href="#icon-arrow-tl"></use>
                            </svg>
                        </a>
                    </div>
                    
                    <div class="repairMain__item">
                        <a href="/questions/2/" class="repairMain__itemLink">
                            <svg class="icon icon-ipad">
                                <use xlink:href="#icon-ipad"></use>
                            </svg>iPad
                            <svg class="icon icon-arrow-tl">
                                <use xlink:href="#icon-arrow-tl"></use>
                            </svg>
                        </a>
                    </div>
                    
                    <div class="repairMain__item">
                        <a href="/questions/3/" class="repairMain__itemLink">
                            <svg class="icon icon-ipod">
                                <use xlink:href="#icon-ipod"></use>
                            </svg>iPod
                            <svg class="icon icon-arrow-tl">
                                <use xlink:href="#icon-arrow-tl"></use>
                            </svg>
                        </a>
                    </div>
                    
                    <div class="repairMain__item">
                        <a href="/questions/4/" class="repairMain__itemLink">
                            <svg class="icon icon-imac">
                                <use xlink:href="#icon-imac"></use>
                            </svg>iMac
                            <svg class="icon icon-arrow-tl">
                                <use xlink:href="#icon-arrow-tl"></use>
                            </svg>
                        </a>
                    </div>
                    
                    <div class="repairMain__item">
                        <a href="/questions/5/" class="repairMain__itemLink">
                            <svg class="icon icon-iwatch">
                                <use xlink:href="#icon-iwatch"></use>
                            </svg>iWatch
                            <svg class="icon icon-arrow-tl">
                                <use xlink:href="#icon-arrow-tl"></use>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- repairMain End -->

    <!-- intro -->
    <div class="intro">
        <div class="container intro__container">
            <div class="row intro__row">
                <div class="col-xs-12">
                    <h3 class="intro__title">Сервисный центр iPhone</h3>
                    <div class="intro__content">
                        <p>Мы предлагаем, пожалуй, самые приемлемые цены на ремонт Apple iPhone 4/4S и 5/5S в Санкт-Петербурге, т.к. специализируемся только на технике этой компании. Поэтому наши мастера выполняют работу любой сложности быстро и профессионально, используя только качественные запчасти.</p>
                        <p>Если у вас есть какие-либо вопросы, звоните по нашему контактному телефону, мы с радостью поможем. Важно отметить, что все консультации, а также диагностика сотовых телефонов бесплатны. Вы платите только за готовый результат и принятую работу. Гарантия на ремонт iPhone 4/4S и 5/5S составляет 3 месяца.</p>
                        <p>У нас всегда в наличии широкий выбор аксессуаров: бамперы, чехлы, защитные пленки, зарядки, кабели, док-станции и другие приятные мелочи. Наш сервисный центр iPhone осуществляет замену кнопки включения и блокировки, дисплея, материнской платы.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- intro End -->

    <!-- requestMain -->
    <div class="requestMain">
        <div class="container requestMain__container">
            <div class="row">
                <div class="col-sm-7 col-xs-12">
                    <div class="requestMain__text">
                        <svg class="icon icon-phone-repair">
                            <use xlink:href="#icon-phone-repair"></use>
                        </svg>
                        <div class="requestMain__textInner">
                            <p class="requestMain__text-light">Отремонтируем ваш гаджет</p>
                            <p class="requestMain__text-medium">в кратчайший срок!</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-1 col-xs-12">
                    <svg class="icon icon-three-arrows">
                        <use xlink:href="#icon-three-arrows"></use>
                    </svg>
                </div>
                <div class="col-sm-4 col-xs-12">
                    <a href='/contacts/' class="requestMain__btn">Заявка на ремонт</a>
                </div>
            </div>
        </div>
    </div>
    <!-- requestMain End -->

    <!-- sliderReviews -->
    <div class="sliderReviews">
        <div class="container sliderReviews__container">
            <div class="row sliderReviews__row">
                <div class="col-xs-12 sliderReviews__innerItem">
                    <h3 class="sliderReviews__title">Отзывы наших клиентов</h3>
                    <div class="sliderReviews__flexslider">
                        <ul class="sliderReviews__slideList slides">
                            <li class="sliderReviews__slidItem">
                                <div class="sliderReviews__content">
                                    <div class="sliderReviews__imgWrap">
                                        <img src="/template/img/photos/user_1.jpg" alt="" class="sliderReviews__img">
                                        <div class="sliderReviews__username">Илья Михайлов</div>
                                    </div>
                                    <p class="sliderReviews__comment">Сила притяжения с моим телефоном творит чудеса постоянно. Точно так же постоянно этот сервисный центр творит чудеса с моим телефоном) Спасибо) Быстро, качественно и недорого)</p>
                                </div>
                            </li>
                            <li class="sliderReviews__slidItem">
                                <div class="sliderReviews__content">
                                    <div class="sliderReviews__imgWrap">
                                        <img src="/template/img/photos/user_2.jpg" alt="" class="sliderReviews__img">
                                        <div class="sliderReviews__username">Илья Корнильев</div>
                                    </div>
                                    <p class="sliderReviews__comment">Рекомендую! Дважды менял экран - делают быстро (около 15 минут) и качественно, доволен.</p>
                                </div>
                            </li>
                            <li class="sliderReviews__slidItem">
                                <div class="sliderReviews__content">
                                    <div class="sliderReviews__imgWrap">
                                        <img src="/template/img/photos/user_3.jpg" alt="" class="sliderReviews__img">
                                        <div class="sliderReviews__username">Игорь Тарасенко</div>
                                    </div>
                                    <p class="sliderReviews__comment">Самые адекватные мастера, цены не заламывают, подробно все объясняют, не хамят. При мне разобрали и починили 5S! Авторизованный центр (не буду рекламировать какой) предложил менять на новый с доплатой ...</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- sliderReviews End -->

    <!-- addressMap -->
    <div class="addressMap">
        <div class="container addressMap__container">
            <h3 class="addressMap__title">Адреса сервисных центров</h3>
            <div class="row addressMap__row">
                <div class="col-xs-4 addressMap__innerItem">
                    <div class="addressMap__addressWrap">
                        <div class="addressMap__address">ул. Композиторов 4. помещение 245</div>
                        <button class="addressMap__btn">Озерки-Просвещение</button>
                        <a href="tel:+7 (812) 900-76-64" class="addressMap__phonenumber">+7 (812) 900-76-64</a>
                    </div>
                </div>
                <div class="col-xs-4 addressMap__innerItem">
                    <div class="addressMap__addressWrap">
                        <div class="addressMap__address">ул.Гороховая 45 (во Дворе)</div>
                        <button class="addressMap__btn">Сенная/Спасская/Садовая</button>
                        <a href="tel:+7 (812) 956-98-71" class="addressMap__phonenumber">+7 (812) 956-98-71</a>
                    </div>
                </div>
                <div class="col-xs-4 addressMap__innerItem">
                    <div class="addressMap__addressWrap">
                        <div class="addressMap__address">Лесной проспект д.61к1</div>
                        <button class="addressMap__btn">Лесная</button>
                        <a href="tel:+7 (812) 906-04-17" class="addressMap__phonenumber">+7 (812) 906-04-17</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="addressMap_map" id="yandex-map">
            <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=iu-Mm9jS4D8-WJyTfW_0aFp5eguDXs8S&amp;width=100%25&amp;height=415&amp;lang=ru_UA&amp;sourceType=constructor&amp;scroll=false"></script>
        </div> -->
    </div>
    <!-- addressMap End -->

    <div class="articles" style="min-height:300px;background: #30bced;">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <?php foreach ($newsList as $newsItem): ?>
                     <div class="articles__item" style="border:1px solid #369;padding:20px;text-align:center;margin-bottom:10px;">
                        <h3 class="articles__title"><?php echo $newsItem['title']; ?></h3>
                        <p class="articles__text"><?php echo $newsItem['short_content']; ?></p>
                        <div class="articles__date"><?php echo $newsItem['date']; ?></div>
                        <a href="/news/<?php echo $newsItem['id']; ?>" class="articles__link">Read more</a>
                    </div>   
                    <?php endforeach; ?>
                    

                </div>
            </div>
        </div>
    </div>

    <!-- footerMain -->
    <footer class="footerMain">
        <div class="container footerMain__container">
            <div class="row footerMain__row">
                <div class="col-xs-12 footerMain__innerItem">

                    <div class="footerMain__logoWrap">
                        <a href="#" class="footerMain__logoLink">
                            <img src="/template/img/logo--white.png" alt="" class="footerMain__logoImg">
                            <img src="/template/img/logo--white-small.png" alt="" class="footerMain__logoImg-small">
                        </a>
                    </div>

                    <div class="footerMain__socialWrap">
                        <ul>
                            <li class="footerMain__socialItem">
                                <a href="#" class="footerMain__socialLink vk"></a>
                            </li>
                            <li class="footerMain__socialItem">
                                <a href="#" class="footerMain__socialLink fb"></a>
                            </li>
                            <li class="footerMain__socialItem">
                                <a href="#" class="footerMain__socialLink twitter"></a>
                            </li>
                            <li class="footerMain__socialItem">
                                <a href="#" class="footerMain__socialLink gplus"></a>
                            </li>
                        </ul>
                    </div>

                    <div class="footerMain__navWrap">
                        <ul>
                            <li class="footerMain__navItem">
                                <a href="#" class="footerMain__navLink">Ноутбуки</a>
                            </li>
                            <li class="footerMain__navItem">
                                <a href="#" class="footerMain__navLink">Акции</a>
                            </li>
                            <li class="footerMain__navItem">
                                <a href="#" class="footerMain__navLink">Статьи</a>
                            </li>
                            <li class="footerMain__navItem">
                                <a href="#" class="footerMain__navLink">Контакты</a>
                            </li>
                        </ul>
                        <ul>
                            <li class="footerMain__navItem">
                                <a href="#" class="footerMain__navLink">iPad</a>
                            </li>
                            <li class="footerMain__navItem">
                                <a href="#" class="footerMain__navLink">iPhone</a>
                            </li>
                            <li class="footerMain__navItem">
                                <a href="#" class="footerMain__navLink">iPod</a>
                            </li>
                            <li class="footerMain__navItem">
                                <a href="#" class="footerMain__navLink">iWatch</a>
                            </li>
                            <li class="footerMain__navItem">
                                <a href="#" class="footerMain__navLink">Mac</a>
                            </li>
                        </ul>
                    </div>

                    <p class="footerMain__copyright">© Гараж S.Джобса, 2015</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- footerMain End -->




    <!--          *****************   javascript   ***************                    -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="/template/js/jquery-1.12.3.min.js"></script>
    <!-- slider JS -->
    <script type="text/javascript" src="/template/plugins/flexslider/jquery.flexslider-min.js"></script>
    <!-- popup JS -->
    <script src="/template/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>

    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.7.5/js/bootstrap-select.min.js"></script>



    <!-- custom js -->
    <script type="text/javascript" src="/template/js/custom.js"></script>
    <!-- initializations -->
    <script type="text/javascript" src="/template/js/init.js"></script>

</body>
</html>