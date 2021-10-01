<!DOCTYPE html>
<html lang="en" dir="ltr" class="theme-light">
  <head>
    <meta charset="utf-8">
    <title>CTRL</title>
    <link rel="stylesheet" href="/includes/frameworks/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/includes/frameworks/fontawsome/css/all.css">
    <link rel="stylesheet" href="/includes/css/theme-switch.css">
    <link rel="stylesheet" href="/includes/css/master.css?v1">

    <script src="/includes/frameworks/bootstrap/js/bootstrap.min.js" charset="utf-8"></script>
    <script src="/includes/frameworks/fontawsome/js/all.js" charset="utf-8"></script>
    <script src="/includes/frameworks/jquery/jquery.js" charset="utf-8"></script>
    <script src="/includes/frameworks/irojs/iro.min.js" charset="utf-8"></script>
    <script src="/includes/js/websockets.js" charset="utf-8"></script>

  </head>
  <body onload="roomTile('kitchen');" oncontextmenu="return false;">
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
                        <div class="greeting float-start">
                          Good Night<img src="./includes/images/emoji/animated/sleeping_face.gif">
                        </div>
                        <!-- Desk: <p id="light__desk"></p> </br> Left: <p id="light__office_desk_left"></p> -->
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
                  <div class="col-lg-2 room-menu-item" onclick="roomTile('kitchen');">Kitchen</div>
                  <div class="col-lg-2 room-menu-item" onclick="roomTile('livingroom');">Living Room</div>
                  <div class="col-lg-2 room-menu-item" onclick="">Bedroom</div>
                  <div class="col-lg-2 room-menu-item" onclick='roomTile("office"); socketStates();'>Office</div>
                  <div class="col-lg-2 room-menu-item">Hall/Landing</div>
                  <div class="col-lg-2 room-menu-item">Spare Room</div>
                </div>
              </div>
            </div>
          </div>
          <div class="row mt-4">
            <div class="col-lg-12">
              <div id="room-tile" class="tile">
                <!-- Room Page -->
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




      <!-- Modal -->
      <div class="modal fade" id="lightModal" tabindex="-1" aria-labelledby="lightModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="lightModalLabel">Modal title</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-2">
                  <div class="light-modal">
                    <svg id="lamp" data-name="lamp" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 248.05 248.05">
                      <defs>
                        <radialGradient id="gradient" cx="134.51" cy="-0.09" r="350.14" gradientUnits="userSpaceOnUse">
                          <stop offset="0" stop-color="var(--color-stop)"/>
                          <stop offset="1" stop-color="var(--color-stop2)"/>
                        </radialGradient>
                        <radialGradient id="New_Gradient_Swatch_copy_12-2" cx="146.57" cy="11.97" r="350.14" xlink:href="#gradient"/>
                        <radialGradient id="New_Gradient_Swatch_copy_12-3" cx="146.57" cy="11.97" r="350.14" xlink:href="#gradient"/>
                        <radialGradient id="New_Gradient_Swatch_copy_12-4" cx="146.57" cy="11.97" r="350.14" xlink:href="#gradient"/>
                        <radialGradient id="New_Gradient_Swatch_copy_12-5" cx="146.57" cy="11.97" r="350.14" xlink:href="#gradient"/>
                        <radialGradient id="New_Gradient_Swatch_copy_12-6" cx="146.57" cy="11.97" r="350.14" xlink:href="#gradient"/>
                        <radialGradient id="New_Gradient_Swatch_copy_12-7" cx="146.57" cy="11.97" r="350.14" xlink:href="#gradient"/>
                        <radialGradient id="New_Gradient_Swatch_copy_12-8" cx="146.57" cy="11.97" r="350.14" xlink:href="#gradient"/>
                      </defs>
                      <rect class="cls-1" x="138.84" y="114.57" width="12.81" height="26.22"/>
                      <path class="cls-2" d="M108.29,132.62v20.23H121.1V129.57l39.36-9.39a14.9,14.9,0,0,0,11-18l-59.78,14.26a14.9,14.9,0,0,0-11,18Z" transform="translate(-12.06 -12.06)"/>
                      <path class="cls-3" d="M160.46,52.25a14.9,14.9,0,0,0,11-18L111.71,48.56a14.9,14.9,0,0,0-11,18Z" transform="translate(-12.06 -12.06)"/>
                      <path class="cls-4" d="M160.46,74.89a14.89,14.89,0,0,0,11-17.94L111.71,71.21a14.89,14.89,0,0,0-11,17.94Z" transform="translate(-12.06 -12.06)"/>
                      <path class="cls-5" d="M160.46,97.54a14.9,14.9,0,0,0,11-18L111.71,93.85a14.9,14.9,0,0,0-11,18Z" transform="translate(-12.06 -12.06)"/>
                      <path class="cls-6" d="M112.78,201.56a17,17,0,0,0,17,17h8.94a17,17,0,0,0,17-17h-42.9Z" transform="translate(-12.06 -12.06)"/>
                      <path class="cls-7" d="M136.08,12.06a124,124,0,1,0,124,124A124,124,0,0,0,136.08,12.06Zm0,233.89h-1.23a14,14,0,0,0,13.38-14v-11h-28v11a14,14,0,0,0,13,14,110.09,110.09,0,1,1,2.8,0Z" transform="translate(-12.06 -12.06)"/>
                      <path class="cls-8" d="M98,154.93v18.32a25.48,25.48,0,0,0,25.48,25.48h25.17a25.47,25.47,0,0,0,25.47-25.48V154.93H98Z" transform="translate(-12.06 -12.06)"/>
                    </svg>
                  </div>
                </div>
                <div class="col-lg-4">
                </div>
                <div class="col-lg-2">
                  <input type="hidden" id="entity_hidden">
                  <div class="button b2" id="button-11">
                    <input id="stateToggle" type="checkbox" class="checkbox">
                    <div class="knobs">
                      <span></span>
                    </div>
                    <div class="layer"></div>
                  </div>
                </div>
                <div class="col-lg-2"></div>
              </div>
              <div class="row">
                <div class="col-lg-12">
                  <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                      <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Colour</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Kelvin</button>
                    </li>
                  </ul>
                  <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab"><div id="picker" data-entity_id=""></div></div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>




    <script>
    function scaleValue(value, from, to) {
    	var scale = (to[1] - to[0]) / (from[1] - from[0]);
    	var capped = Math.min(from[1], Math.max(from[0], value)) - from[0];
    	return (capped * scale + to[0]).toFixed(2);
    }

    var colorPicker = new iro.ColorPicker("#picker", {
      wheelLightness: false
    });
    colorPicker.on('input:end', function(color) {
      console.log(this.el.attributes["data-hum"]);
      console.log(color.value);
      changeColour(color.red, color.green, color.blue, parseInt(scaleValue(color.value, [0,100], [0,255])), document.getElementById('picker').getAttribute('data-entity_id').replace("__", "."));
    });
    // colorPicker.color.rgb	= { r: 255, g: 0, b: 0 }
    </script>
    <script src="/includes/js/theme-switch.js" charset="utf-8"></script>
    <script>
    var timeoutId = 0;

    // $(document).on("mousedown", ".item", function() {
    //     timeoutId = setTimeout(function(){
    //       $("#lightModal .modal-title").text( $(".item-title", this).text());
    //       // $("#lightModal").modal('toggle');
    //     }, 1000);
    // }).on('mouseup mouseleave', function() {
    //     clearTimeout(timeoutId);
    // });

    // function myFunction1() {
    //   console.log('Fired');
    //   $("#lightModal .modal-title").text( $(".item-title", this).text());
    //   $("#lightModal").modal('toggle');
    // }


    $(document).on("mousedown", ".item", function () {
      // $("#lightModal .modal-title").text( $(this).data('element'));
      item_this = this;
          timeoutId = setTimeout(lightModalTrigger, 500);
      }).on('mouseup mouseleave', function() {
          clearTimeout(timeoutId);
      });


      $(document).on("touchstart", ".item", function () {
        // $("#lightModal .modal-title").text( $(this).data('element'));
        item_this = this;
            timeoutId = setTimeout(lightModalTrigger, 1000);
        }).on('touchend touchmove', function() {
            clearTimeout(timeoutId);
        });
      // $("#lightModal .modal-title").text( $(".item-title", this).text());
      // console.log($(".item-title", this).text());
      // $("#lightModal").modal('toggle');
       function lightModalTrigger() {
         $("#lightModal .modal-title").text( $(".item-title", item_this).text());
         if (item_this.getAttribute('data-state') == 'on') {
            $(".light-modal svg").css("fill", $(item_this).data('colour'));
            var regExp = /\(([^)]+)\)/;
            var col = regExp.exec($(item_this).data('colour'));
            // console.log(col[1]);
            // console.log(col[1].split(" ")[0]);
            // console.log(col[1].split(" ")[1]);
            // console.log(col[1].split(" ")[2]);

            colorPicker.color.rgb	= { r: col[1].split(" ")[0], g: col[1].split(" ")[1], b: col[1].split(" ")[2] };
            colorPicker.color.value	= $(item_this).data('brightness');
         } else {
           $(".light-modal svg").css("fill", 'var(--colour-background)');
         }

         console.log("State: " + item_this.getAttribute('data-state'));
         document.getElementById('button-11').setAttribute('data-element', item_this.getAttribute('data-element'));
         document.getElementById('picker').setAttribute('data-entity_id', item_this.getAttribute('data-element'));
         document.getElementById('entity_hidden').value = item_this.getAttribute('data-element');
         if (item_this.getAttribute('data-state') == "on") {
           $(".checkbox").prop( "checked", true );
           $(".checkbox").value
           // console.log('Fired');
           // document.getElementById('button-11').setAttribute('data-element', item_this.getAttribute('data-element'));
           // $("#button-11").data('element', 'test');
           // console.log('End Fired' + $("#button-11").data('element'));
         } else {
           $(".checkbox").prop( "checked", false );
         }
         console.log($(".item-title", item_this).text());
         $("#lightModal").modal('toggle');
       }


      $('#button-11').click(function(){
        console.log(this.checked);
            if(this.checked){
                toggleLight(document.getElementById('entity_hidden').value.replace("__", "."), 'off');
                this.checked = false;
                return false;

            } else {
                toggleLight(document.getElementById('entity_hidden').value.replace("__", "."), 'on');
                this.checked = true;
                return false;

            }
        });



        function roomTile(room) {
          switch(room) {
            case 'kitchen':
              $("#room-tile").load("rooms/kitchen.php");
              $('.room-menu-item').removeClass('active');
              $(event.target).addClass("active");
              break;
            case 'livingroom':
              $("#room-tile").load("rooms/living_room.php");
              $('.room-menu-item').removeClass('active');
              $(event.target).addClass("active");
              break;
            case 'office':
              $("#room-tile").load("rooms/office.php");
              $('.room-menu-item').removeClass('active');
              $(event.target).addClass("active");
              break;
            default:
              // code block
          }
        }
    </script>
  </body>
</html>
