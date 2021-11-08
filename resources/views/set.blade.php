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
                <div class="d-grid gap-2 btn-group" id="event_button">
                    <button class="btn btn-secondary btn-lg dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        事件設定
                    </button>
                    <ul class="dropdown-menu" style="width:100%;">
                        <li><a class="dropdown-item" href="#">等級</a></li>
                        <li><a class="dropdown-item" href="#">類別</a></li>
                    </ul>
                </div>

                <div class="d-grid gap-2 btn-group" id="event_button">
                    <button class="btn btn-secondary btn-lg dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        單位/代碼
                    </button>
                    <ul class="dropdown-menu" style="width:100%;">
                        <li><a class="dropdown-item" href="#">地點</a></li>
                        <li><a class="dropdown-item" href="#">攝影機</a></li>
                        <li><a class="dropdown-item" href="#">單位</a></li>
                    </ul>
                </div>
                
                <div class="d-grid gap-2 btn-group" id="event_button">
                    <button class="btn btn-secondary btn-lg dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        設備
                    </button>
                    <ul class="dropdown-menu" style="width:100%;">
                        <li><a class="dropdown-item" href="#">攝影機</a></li>
                        <li><a class="dropdown-item" href="#">功能</a></li>
                    </ul>
                </div>

                <div class="d-grid gap-2 btn-group" id="event_button">
                    <button class="btn btn-secondary btn-lg dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        統計分析
                    </button>
                    <ul class="dropdown-menu" style="width:100%;">
                        <li><a class="dropdown-item" href="#">攝影機</a></li>
                        <li><a class="dropdown-item" href="#">功能</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-10">
                <div class="row row-cols-5 d-flex align-items-center text-center">
                    <div class="col" id="event_list">
                        序號
                    </div>
                    <div class="col">
                        事件編號
                    </div>
                    <div class="col">
                        通報時間
                    </div>
                    <div class="col">
                        位置
                    </div>
                    <div class="col">
                        動作
                    </div>
                </div>
            </div>
        </div>
    </div>
 

</body>

</html>