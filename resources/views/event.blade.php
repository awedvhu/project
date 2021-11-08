<!DOCTYPE html>
<html lang="zh-TW">

<head>
  <title>設定</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{asset('css/set.css') }}" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="js/home.js"></script>
</head>

<body>

    <div class="container-fluid">

    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="30" height="24" class="d-inline-block align-text-top">
                    Bootstrap
            </a>
        </div>
    </nav>
        <div class="row">
            <div class="col-2"  id="set_list">
                <div class="row row-cols-1 d-flex align-items-center text-center">                  
                    <div class="col" id="device">
                     <a href="{{asset('/device') }}">設備管理</a>
                        
                    </div>
                    <div class="col" id="event">
                        <a href="{{asset('/event') }}">異常事件</a>
                        
                    </div>
                    <div class="col" id="analyze">
                        <a href="{{asset('/analyze') }}">統計分析</a>
                        
                    </div>
                    <div class="col" id="set">
                        <a href="{{asset('/set') }}">系統管理功能</a>
                    </div>
                </div>
            </div>

            <div class="col-10">
                <div class="row row-cols-5 d-flex align-items-center text-center">
                    <div class="col">
                        序號
                    </div>
                    <div class="col">
                        序號
                    </div>
                    <div class="col">
                        序號
                    </div>
                    <div class="col">
                        序號
                    </div>
                    <div class="col">
                        序號
                    </div>
                </div>
            </div>
        </div>
    </div>
 

</body>

</html>