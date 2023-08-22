<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <title>Laravel QR Code NeoBitose</title>
  <style>
    /* CSS */
    .button-57 {
      position: relative;
      overflow: hidden;
      border: 1px solid #18181a;
      color: #18181a;
      display: inline-block;
      font-size: 15px;
      line-height: 15px;
      padding: 18px 18px 17px;
      text-decoration: none;
      cursor: pointer;
      background: #fff;
      user-select: none;
      -webkit-user-select: none;
      touch-action: manipulation;
    }

    .button-57 span:first-child {
      position: relative;
      transition: color 600ms cubic-bezier(0.48, 0, 0.12, 1);
      z-index: 10;
    }

    .button-57 span:last-child {
      color: white;
      display: block;
      position: absolute;
      bottom: 0;
      transition: all 500ms cubic-bezier(0.48, 0, 0.12, 1);
      z-index: 100;
      opacity: 0;
      top: 50%;
      left: 50%;
      transform: translateY(225%) translateX(-50%);
      height: 14px;
      line-height: 13px;
    }

    .button-57:after {
      content: "";
      position: absolute;
      bottom: -20%;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: black;
      transform-origin: bottom center;
      transition: transform 600ms cubic-bezier(0.48, 0, 0.12, 1);
      transform: skewY(9.3deg) scaleY(0);
      z-index: 50;
    }

    .button-57:hover:after {
      transform-origin: bottom center;
      transform: skewY(9.3deg) scaleY(2);
    }

    .button-57:hover span:last-child {
      transform: translateX(-50%) translateY(-100%);
      opacity: 1;
      transition: all 900ms cubic-bezier(0.48, 0, 0.12, 1);
    }
  </style>
</head>

<body>

  <div class="text-center" style="margin-top: 50px;">
    <h3>QrCode for {{ $linkqr }}</h3><br>
    <div class="row">
      <div class="col col-sm-2 col-md-3 mt-5">
        <div>
          <img width="300" height="300" src="data:image/png;base64, {!! base64_encode(
              QrCode::size(600)->format('png')->generate($linkqr),
          ) !!} ">
        </div><br>
        <div> <a href="data:image/png;base64, {!! base64_encode(
            QrCode::size(600)->format('png')->generate($linkqr),
        ) !!} " download> <button class="button-57"
              role="button"><span class="text">Pilih Disini</span><span>Download sekarang</span></button></a>
        </div>
      </div>
      <div class="col col-sm-2 col-md-3 mt-5">
        <div>
          <img width="300" height="300" src="data:image/png;base64, {!! base64_encode(
              QrCode::style('dot')->size(600)->format('png')->generate($linkqr),
          ) !!} ">
        </div><br>
        <div> <a href="data:image/png;base64, {!! base64_encode(
            QrCode::style('dot')->style('dot')->size(600)->format('png')->generate($linkqr),
        ) !!} " download> <button class="button-57"
              role="button"><span class="text">Pilih Disini</span><span>Download sekarang</span></button></a>
        </div>
      </div>
      <div class="col col-sm-2 col-md-3 mt-5">
        <div>
          <img width="300" height="300" src="data:image/png;base64, {!! base64_encode(
              QrCode::size(600)->format('png')->merge('https://hmifunej.id/images/HMIF-LOGO-BESAR.png', 0.5, true)->generate($linkqr),
          ) !!} ">
        </div><br>
        <div> <a href="data:image/png;base64, {!! base64_encode(
            QrCode::size(600)->format('png')->merge('https://hmifunej.id/images/HMIF-LOGO-BESAR.png', 0.5, true)->generate($linkqr),
        ) !!} " download> <button class="button-57"
              role="button"><span class="text">Pilih Disini</span><span>Download sekarang</span></button></a>
        </div>
      </div>
      <div class="col col-sm-2 col-md-3 mt-5">
        <div>
          <img width="300" height="300" src="data:image/png;base64, {!! base64_encode(
              QrCode::style('dot')->size(600)->format('png')->merge('https://hmifunej.id/images/HMIF-LOGO-BESAR.png', 0.5, true)->generate($linkqr),
          ) !!} ">
        </div><br>
        <div> <a href="data:image/png;base64, {!! base64_encode(
            QrCode::style('dot')->size(600)->format('png')->merge('https://hmifunej.id/images/HMIF-LOGO-BESAR.png', 0.5, true)->generate($linkqr),
        ) !!} " download> <button class="button-57"
              role="button"><span class="text">Pilih Disini</span><span>Download sekarang</span></button></a>
        </div>
      </div>
      <div class="col col-sm-2 col-md-3 mt-5">
        <div>
          <img width="300" height="300" src="data:image/png;base64, {!! base64_encode(
              QrCode::gradient(53, 79, 92, 16, 185, 129, 'radial')->size(600)->format('png')->generate($linkqr),
          ) !!} ">
        </div><br>
        <div> <a href="data:image/png;base64, {!! base64_encode(
            QrCode::gradient(53, 79, 92, 16, 185, 129, 'radial')->size(600)->format('png')->generate($linkqr),
        ) !!} " download> <button class="button-57"
              role="button"><span class="text">Pilih Disini</span><span>Download sekarang</span></button></a>
        </div>
      </div>
      <div class="col col-sm-2 col-md-3 mt-5">
        <div>
          <img width="300" height="300" src="data:image/png;base64, {!! base64_encode(
              QrCode::gradient(53, 79, 92, 16, 185, 129, 'radial')->style('dot')->size(600)->format('png')->generate($linkqr),
          ) !!} ">
        </div><br>
        <div> <a href="data:image/png;base64, {!! base64_encode(
            QrCode::gradient(53, 79, 92, 16, 185, 129, 'radial')->style('dot')->style('dot')->size(600)->format('png')->generate($linkqr),
        ) !!} " download> <button class="button-57"
              role="button"><span class="text">Pilih Disini</span><span>Download sekarang</span></button></a>
        </div>
      </div>
      <div class="col col-sm-2 col-md-3 mt-5">
        <div>
          <img width="300" height="300" src="data:image/png;base64, {!! base64_encode(
              QrCode::gradient(53, 79, 92, 16, 185, 129, 'radial')->size(600)->format('png')->merge('https://hmifunej.id/images/HMIF-LOGO-BESAR.png', 0.5, true)->generate($linkqr),
          ) !!} ">
        </div><br>
        <div> <a href="data:image/png;base64, {!! base64_encode(
            QrCode::gradient(53, 79, 92, 16, 185, 129, 'radial')->size(600)->format('png')->merge('https://hmifunej.id/images/HMIF-LOGO-BESAR.png', 0.5, true)->generate($linkqr),
        ) !!} " download> <button class="button-57"
              role="button"><span class="text">Pilih Disini</span><span>Download sekarang</span></button></a>
        </div>
      </div>
      <div class="col col-sm-2 col-md-3 mt-5">
        <div>
          <img width="300" height="300" src="data:image/png;base64, {!! base64_encode(
              QrCode::gradient(53, 79, 92, 16, 185, 129, 'radial')->style('dot')->size(600)->format('png')->merge('https://hmifunej.id/images/HMIF-LOGO-BESAR.png', 0.5, true)->generate($linkqr),
          ) !!} ">
        </div><br>
        <div> <a href="data:image/png;base64, {!! base64_encode(
            QrCode::gradient(53, 79, 92, 16, 185, 129, 'radial')->style('dot')->size(600)->format('png')->merge('https://hmifunej.id/images/HMIF-LOGO-BESAR.png', 0.5, true)->generate($linkqr),
        ) !!} " download> <button class="button-57"
              role="button"><span class="text">Pilih Disini</span><span>Download sekarang</span></button></a>
        </div>
      </div>
    </div>
  </div>

</body>

</html>
