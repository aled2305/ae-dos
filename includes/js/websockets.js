let requestID = 1;
let entity = ["light.desk", "light.office", "light.office_desk_left", "light.office_desk_right", "light.office_centre", "light.kitchen", "light.kitchen_table"];
socket ="";
socketConnect();

// Home Assistant Web Socket URL
function socketConnect(){
  socket = new WebSocket("ws://homeassistant.local:8123/api/websocket");
}
// Send authorisation key
function socketAuth(){
  socket.send(JSON.stringify({"type": "auth", "access_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiIwMDdjNGM4M2Q4Nzk0MDJjOTY0YmVhMzljMzZiOTNlZiIsImlhdCI6MTYzMjM0OTM5NiwiZXhwIjoxOTQ3NzA5Mzk2fQ.gxeIuN02_WmHu4dZJLMHjrRQ7O1CR9O6YRM4ge4azys"}));
}

function socketStates(){
  // Get status off all entities
  socket.send(JSON.stringify({"id": requestID, "type": "get_states"}));
  requestID++;
}

function socketEvents() {
  // Subscribe to update events
  socket.send(JSON.stringify({"id": requestID, "type": "subscribe_events"}));
  requestID++;
}

function toggleLight(entity, state) {
  two = {"entity_id": entity};
  socket.send(JSON.stringify({"id": requestID, "type": "call_service","domain": "light","service": "toggle", "target": two}));
  requestID++;

}

function changeColour(red, green, blue, brightness, entity_id) {
  socket.send(JSON.stringify({"id": requestID,"type": "call_service","domain": "light","service": "turn_on", "service_data": {"rgb_color": [red, green, blue], "brightness" : brightness}, "target": { "entity_id": entity_id}}));
  requestID++;
}

socket.onopen = function(e) {
  // alert("[open] Connection established");
  // alert("Sending to server");




  // Run initial functions
  socketAuth();
  socketStates();
  socketEvents();
  // changeColour(255, 255, 255, 255);

};


// Run's when a websocket message is received
socket.onmessage = function(event) {

  // Convert websocket data into object
  const obj = JSON.parse(event.data);
  console.log('Start');
  console.log(obj);
  console.log('End');
  // console.log(obj['event']['data']['entity_id']);
  // entity_type = obj['event']['data']['entity_id'].split(".")[0];
  // console.log(entity_type);

  // Check if received message has the type "Result" and ID "1". If so then this message is the return for our "get_states" request.
  if (obj['type'] == "result" && obj['result'] != null) {

        // Crate all obj results into obj2
        const obj2 = obj['result'];
        console.log(obj);
        console.log(obj['result']);

        // Run myFunction for each value in obj2
        obj2.forEach(myFunction);

        // myFunction
        function myFunction(item) {
          // console.log(item.attributes.rgb_color);


          // If obj2 now knows as item, has "entity_id" that matches an entry in the entity array declaird above then continue.
          if (entity.includes(item['entity_id'])) {

            // Home Assistant "entity_id" include a full stop. This string converts all full stops to __ and set's the value of sensor.
            sensor = item['entity_id'].replace(".", "__");
            entity_type = item['entity_id'].split(".")[0];


            if(item['attributes']['rgb_color'] != 'undefined' && item['attributes']['rgb_color'] != null){

                // This function will set the "state" key value of the item "entity_id" to the current "state" as declaired in the item.
                this[sensor] = {
                  state: item['state'],
                  colourR: item['attributes']['rgb_color'][0],
                  colourG: item['attributes']['rgb_color'][1],
                  colourB: item['attributes']['rgb_color'][2],
                  brightness: item['attributes']['brightness']
                };

            }

            if(typeof(document.getElementById(sensor)) != 'undefined' && document.getElementById(sensor) != null){
              switch (entity_type) {
                case "light":
                  updateLight(sensor);
                  break;
                case "sensor":

                  break;
                default: "light"

              }
                      // document.getElementById(sensor).innerHTML = "Loaded state:" + window[sensor].state;
            //           document.getElementById(sensor).innerHTML = "Updated state:" + window[sensor].state;
                } else{
                      console.log(sensor + 'Element does not exist!');
                }

          }
          // document.getElementById(sensor).innerHTML = "Loaded state:" + window[sensor].state;
        }
        // console.log(`${event.data}`);
        console.log(light__desk['state']);
        // document.getElementById("light__desk").innerHTML = "Loaded state:" + light__desk['state'];
      };



      // Check if received message has the type "event" and ID "2". If so then this message is the return for our "subscribe_events" request.
      if (obj['type'] == "event" && obj['event']['event_type'] == "state_changed") {

        // console.log(obj['event']['data']['entity_id']);

        // If obj has "entity_id" that matches an entry in the entity array declaird above then continue.
        if (entity.includes(obj['event']['data']['entity_id'])) {
          // console.log("True via if funcation");

          // Home Assistant "entity_id" include a full stop. This string converts all full stops to __ and set's the value of sensor.
          sensor = obj['event']['data']['entity_id'].replace(".", "__");
          entity_type = obj['event']['data']['entity_id'].split(".")[0];
          console.log(entity_type);

          // Set the state of the object declaired as sensor


          // window[sensor].state = obj['event']['data']['new_state']['state'];



          // sensor['state'] = obj['event']['data']['new_state']['state'];
          // console.log(sensor.state);
          // console.log(light__desk);
          if(typeof(document.getElementById(sensor)) != 'undefined' && document.getElementById(sensor) != null){
                    switch (entity_type) {
                      case "light":
                        window[sensor].state = obj['event']['data']['new_state']['state'];
                        if(obj['event']['data']['new_state']['attributes']['rgb_color'] != 'undefined' && obj['event']['data']['new_state']['attributes']['rgb_color'] != null){
                          window[sensor].colourR = obj['event']['data']['new_state']['attributes']['rgb_color'][0];
                          window[sensor].colourG = obj['event']['data']['new_state']['attributes']['rgb_color'][1];
                          window[sensor].colourB = obj['event']['data']['new_state']['attributes']['rgb_color'][2];
                        }
                        window[sensor].brightness = obj['event']['data']['new_state']['attributes']['brightness']
                        updateLight(sensor);
                        break;
                      case "sensor":

                        break;
                      default: "light"

                    }
          //           document.getElementById(sensor).innerHTML = "Updated state:" + window[sensor].state;
              } else{
                    console.log(sensor + 'Element does not exist!');
              }
          // document.getElementById("light__desk").innerHTML = "Updated state:" + light__desk['state'];
        }





//         var element = document.getElementById("test");
//
//     //If it isn't "undefined" and it isn't "null", then it exists.
//     if(typeof(element) != 'undefined' && element != null){
//           console.log('Element exists!');
//     } else{
//           console.log('Element does not exist!');
//     }



    };

    function scaleValue(value, from, to) {
    	var scale = (to[1] - to[0]) / (from[1] - from[0]);
    	var capped = Math.min(from[1], Math.max(from[0], value)) - from[0];
    	return (capped * scale + to[0]).toFixed(2);
    }


    function updateLight (item) {
      // document.getElementById(item).innerHTML = "Current state:" + window[sensor].state;
      if (window[sensor].state == "on") {
        document.getElementById(item).getElementsByClassName("item-icon")[0].classList.add("on");
        colour = "rgb(" + window[sensor].colourR + " " + window[sensor].colourG + " " + window[sensor].colourB + ")";
        // document.getElementById(item).getElementsByClassName("item-icon on")[0].querySelector('#gradient').style.setProperty('--color-stop', colour);
        // document.getElementById(item).getElementsByClassName("item-icon on")[0].querySelector('#gradient').style.setProperty('--color-stop2', colour);
        document.getElementById(item).getElementsByClassName("item-icon on")[0].querySelector('svg').style.setProperty('fill', colour);
        document.getElementsByClassName("light-modal")[0].querySelector('svg').style.setProperty('fill', colour);
        document.getElementById(item).setAttribute('data-colour', colour);
        colorPicker.color.rgb	= { r: window[sensor].colourR, g: window[sensor].colourG, b: window[sensor].colourB };
        document.getElementById(item).setAttribute('data-brightness', parseInt(scaleValue(window[sensor].brightness, [0,255], [0,100])));
        colorPicker.color.value	= scaleValue(window[sensor].brightness, [0,255], [0,100]);
        document.getElementById(item).setAttribute('data-state', window[sensor].state);
        document.getElementById(item).getElementsByClassName("item-icon on")[0].querySelector('svg').style.setProperty('filter', "brightness(" + scaleValue(window[sensor].brightness, [0,255], [0.7,1]) + ")");
        document.getElementById('stateToggle').checked = true;
        // ((window[sensor].brightness - 0) * (1 - 0)) / (255 - 0) + 0
        // ((value - oldRange.min) * (newRange.max - newRange.min)) / (oldRange.max - oldRange.min) + newRange.min

      } else {
        document.getElementById(item).setAttribute('data-state', "off");
        document.getElementById(item).getElementsByClassName("item-icon")[0].classList.remove("on");
        document.getElementById(item).getElementsByClassName("item-icon")[0].querySelector('svg').style.setProperty('fill', "var(--colour-background)");
        document.getElementsByClassName("light-modal")[0].querySelector('svg').style.setProperty('fill', "var(--colour-background)");
        document.getElementById(item).getElementsByClassName("item-icon")[0].querySelector('svg').style.setProperty('filter', "brightness(1)");
        document.getElementById('stateToggle').checked = false;
      }

    }

  };
