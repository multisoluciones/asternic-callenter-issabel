<div id="divCallCtrl" class="well" style="width:24%;">   
  <table class="call-table">
    <label align="center" id="txtRegStatus" > </label> 
    <label align="center" id="txtCallStatus"> </label>       
    <div class="call-controls">
      <button id="btnCall" disabled class="btn btn-primary call-button" data-toggle="dropdown">Call</button>
      <input type="text" class="call-input" id="txtPhoneNumber" value="" placeholder="Enter Number" />
      <input type="button" id="btnHangUp" class="btn btn-primary call-button" value="HangUp" onclick='sipHangUp();' disabled />
    </div>
  </br>
    <tr>  
      <td>
        <div id="divBtnCallGroup" class="btn-group">
          <input type="button" class="btn btn-primary call-button" id="btnMute" value="Mute" onclick='sipToggleMute();' />
        </td>
        <td>
          <input type="button" class="btn btn-primary call-button" id="btnTransfer" value="Transfer" onclick='sipTransfer();' /> 
        </td>
        <td>
          <input type="button" class="btn btn-primary call-button" id="btnHoldResume" value="Hold" onclick='sipToggleHoldResume();' />
        </td>
      </div>
    </tr>
  </table>
</br>
<table>
  <tr>
    <td>
      <input type="button" class="btn btn-primary dtmf-button" value="1" onclick="sipSendDTMF('1');" /><input type="button" class="btn btn-primary dtmf-button" value="4" onclick="sipSendDTMF('4');" /><input type="button" class="btn btn-primary dtmf-button" value="7" onclick="sipSendDTMF('7');" /><input type="button" class="btn btn-primary dtmf-button" value="*" onclick="sipSendDTMF('*');" /></td>
      <td>
      <input type="button" class="btn btn-primary dtmf-button" value="2" onclick="sipSendDTMF('2');" /><input type="button" class="btn btn-primary dtmf-button" value="5" onclick="sipSendDTMF('5');" /><input type="button" class="btn btn-primary dtmf-button" value="8" onclick="sipSendDTMF('8');" /><input type="button" class="btn btn-primary dtmf-button" value="0" onclick="sipSendDTMF('0');" /></td>
      <td>
      <input type="button" class="btn btn-primary dtmf-button" value="3" onclick="sipSendDTMF('3');" /><input type="button" class="btn btn-primary dtmf-button" value="6" onclick="sipSendDTMF('6');" /><input type="button" class="btn btn-primary dtmf-button" value="9" onclick="sipSendDTMF('9');" /><input type="button" class="btn btn-primary dtmf-button" value="#" onclick="sipSendDTMF('#');" />
      </td>
  </tr>
</table>
</div>
      


<!-- CSS
================================================== -->

<style>
.call-table {
  width: 100%;
}
.dtmf-button {
  width: calc(100% / 4);
  margin-left: 20%;
}
#btnHangUp {
  background-color: red;
}
#btnCall {
  height: 0.4em;
  width: 28%;
  background-color: green;
  display: flex;
  align-items: center;
  justify-content: center;
}
.call-controls {
  display: flex;
  justify-content: center;
}

.call-input {
  padding: 5px;
  width: 50%;
  text-align: center;
  border-radius: 1px;
  border: 1px solid gray;
  font-size: 13px;
  margin-left: 30px;
}

.call-button {
  width: auto;
  height: 10%;
  font-size: 10px;
  line-height: 40%;
  text-align: center;
  margin-left: 35px;
}

.btn {
  background-color: #3498db;
  color: #fff;
  border-radius: 100px;
  font-size: 13px;
  text-align: center;
  padding: 10px 20px;
  transition: all 0.1s ease-in-out;
  text-transform: uppercase;
  letter-spacing: 1px;
  font-weight: 600;
  box-shadow: 0px 4px #2980b9;
}

.btn:hover {
  background-color: #2980b9;
  box-shadow: 0px 2px #2980b9;
  transform: translateY(-2px);
}

.btn-primary {
  background-color: #3498db;
}


</style>

    <!-- Call button options -->
<ul id="ulCallOptions" class="dropdown-menu" style="visibility:hidden">
  <li><a href="#" onclick='sipCall("call-audio");'>Audio</a></li>
  <li><a href="#" onclick='uiDisableCallOptions();'><b>Disable these options</b></a></li>
</ul>

<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->    
<script src="modules/agent_console/webphone/app.js" type="text/javascript"> </script>
<script src="modules/agent_console/webphone/SIPml-api.js" type="text/javascript"> </script>

<!-- Audios -->
<audio id="audio_remote" autoplay="autoplay"> </audio>
<audio id="ringtone" loop src="modules/agent_console/webphone/sounds/ringtone.wav"> </audio>
<audio id="autoanswer" src="modules/agent_console/webphone/sounds/autoanswer.wav"> </audio>
<audio id="ringbacktone" loop src="modules/agent_console/webphone/sounds/ringbacktone.wav"> </audio>
<audio id="dtmfTone" src="modules/agent_console/webphone/sounds/dtmf.wav"> </audio>



