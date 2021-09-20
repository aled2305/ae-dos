<!DOCTYPE html>
<html lang="en" dir="ltr" class="theme-light">
  <head>
    <meta charset="utf-8">
    <title>AE-DOS</title>
    <link rel="stylesheet" href="/includes/frameworks/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/includes/frameworks/fontawsome/css/all.css">
    <link rel="stylesheet" href="/includes/css/theme-switch.css">
    <link rel="stylesheet" href="/includes/css/master.css">

    <script src="/includes/frameworks/bootstrap/js/bootstrap.min.js" charset="utf-8"></script>
    <script src="/includes/frameworks/fontawsome/js/all.js" charset="utf-8"></script>
    <script src="/includes/frameworks/jquery/jquery.js" charset="utf-8"></script>

  </head>
  <body>
    <div class="container-fluid h-100 p-3">
      <div class="row h-100">
        <div class="col-lg-8">
          <div class="row">
            <div class="col-lg-12">
              <div class="tile">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="greeting float-start">Good Night<img src="./includes/images/emoji/animated/sleeping_face.gif"></div>
                      </div>
                      <div class="col-lg-6">
                        <div class="row">
                          <div class="col-lg-12">
                            <div class="time float-end">12:30pm</div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-lg-12">
                            <div class="date float-end">Monday, 20th September 2021</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row room-menu">
                  <div class="col-lg-2 room-menu-item">Kitchen</div>
                  <div class="col-lg-2 room-menu-item active">Living Room</div>
                  <div class="col-lg-2 room-menu-item">Bedroom</div>
                  <div class="col-lg-2 room-menu-item">Office</div>
                  <div class="col-lg-2 room-menu-item">Hall/Landing</div>
                  <div class="col-lg-2 room-menu-item">Spare Room</div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="tile h-100"></div>
        </div>
      </div>
    </div>
    <!-- Theme Switcher -->
    <div class="theme-switch">
      <label id="switch" class="switch">
          <input type="checkbox" onchange="toggleTheme()" id="slider">
          <span class="slider round"></span>
      </label>
    </div>
    <script src="/includes/js/theme-switch.js" charset="utf-8"></script>
  </body>
</html>
