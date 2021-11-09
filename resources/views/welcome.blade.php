<!DOCTYPE html>
<html lang="zh-TW">

<head>
  <title>首頁</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{asset('css/home.css') }}" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="js/home.js"></script>
</head>

<body>

  <div class="container-fluid">
    <div class="row">
      <div class="col-3" id="event_list">
        <div id="event">
          <div class="row row-cols-4 d-flex align-items-center text-center" id="event_column">
            <div class="col" id="event_image">
              警示狀態
            </div>
            <div class="col">
              等級
            </div>
            <div class="col">
              位置
            </div>
            <div class="col">
              處理狀態
            </div>
          </div>
        </div>

        <div id="event">
          <div data-bs-toggle="modal" data-bs-target="#exampleModal">
            <div class="row row-cols-4 d-flex align-items-center text-center" id="event_column">
              <div class="col" id="event_image">
                <img src="{{asset('photo/red.jpg') }}" class="img-fluid" />
              </div>
              <div class="col">
                1
              </div>
              <div class="col">
                主顧樓
              </div>
              <div class="col">
                處理中
              </div>
            </div>
          </div>
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  ...
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <br/>
        <div id="event">
          <div data-bs-toggle="modal" data-bs-target="#exampleModal">
            <div class="row row-cols-4 d-flex align-items-center text-center" id="event_column">
              <div class="col" id="event_image">
                <img src="{{asset('photo/red.jpg') }}" class="img-fluid" />
              </div>
              <div class="col">
                1
              </div>
              <div class="col">
                主顧樓
              </div>
              <div class="col">
                處理中
              </div>
            </div>
          </div>
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  ...
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
                </div>
              </div>
            </div>
          </div>
        </div>

        <br/>
        <div id="event">
          <div data-bs-toggle="modal" data-bs-target="#exampleModal">
            <div class="row row-cols-4 d-flex align-items-center text-center" id="event_column">
              <div class="col" id="event_image">
                <img src="{{asset('photo/yellow.jpg') }}" class="img-fluid" />
              </div>
              <div class="col">
                2
              </div>
              <div class="col">
                主顧樓
              </div>
              <div class="col">
                處理中
              </div>
            </div>
          </div>
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  ...
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
                </div>
              </div>
            </div>
          </div>
        </div>

        <br/>
        <div id="event">
          <div data-bs-toggle="modal" data-bs-target="#exampleModal">
            <div class="row row-cols-4 d-flex align-items-center text-center" id="event_column">
              <div class="col" id="event_image">
                <img src="{{asset('photo/yellow.jpg') }}" class="img-fluid" />
              </div>
              <div class="col">
                2
              </div>
              <div class="col">
                主顧樓
              </div>
              <div class="col">
                處理中
              </div>
            </div>
          </div>
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  ...
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
                </div>
              </div>
            </div>
          </div>
        </div>

        <br/>
        <div id="event">
          <div data-bs-toggle="modal" data-bs-target="#exampleModal">
            <div class="row row-cols-4 d-flex align-items-center text-center" id="event_column">
              <div class="col" id="event_image">
                <img src="{{asset('photo/green.jpg') }}" class="img-fluid" />
              </div>
              <div class="col">
                3
              </div>
              <div class="col">
                主顧樓
              </div>
              <div class="col">
                處理中
              </div>
            </div>
          </div>
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  ...
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
                </div>
              </div>
            </div>
          </div>
        </div>

        <br/>
        <div id="event">
          <div data-bs-toggle="modal" data-bs-target="#exampleModal">
            <div class="row row-cols-4 d-flex align-items-center text-center" id="event_column">
              <div class="col" id="event_image">
                <img src="{{asset('photo/green.jpg') }}" class="img-fluid" />
              </div>
              <div class="col">
                3
              </div>
              <div class="col">
                主顧樓
              </div>
              <div class="col">
                處理中
              </div>
            </div>
          </div>
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  ...
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-6">
        <div id="map">
        <img src="{{asset('photo/3D主顧.png') }}" class="img-fluid" />
        </div>
       


      </div>

      <div class="col-3">
        <div class="bg-secondary" style="height:300px;">
          攝影機影像
        </div>

        <div class="bg-secondary" style="height:300px;">
          辨識中攝影機影像
        </div>
        <div id="event">
          <div class="row row-cols-1" id="event_column">
            <div class="col" id="video_data">
              現場人數： 10
            </div>
            <div class="col" id="video_data">
              限制人數： 20
            </div>
            <div class="col" id="video_data">
              攝影機編號：1
            </div>
            <div class="col" id="video_data">
              位置：主顧樓
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  

</body>

</html>