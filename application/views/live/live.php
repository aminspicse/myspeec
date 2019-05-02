<div class="content-wrapper bg-white" style="">
    <div class="row">
        <div class="col-md-8 col-xs-12">
            <video autoplay controls muted width="100%" height="100%"></video>
        </div>
        <div class="col-md-4">
            <h2 id="data" ></h2><hr>

             <!-- Left-aligned media object -->
            <div class="media">
                <div class="media-left">
                <img src="<?= $this->session->userdata('photo')?>" class="media-object rounded-circle" style="width:50px">
                </div>
                <div class="media-body">
                <h4 class="media-heading">MD. AL AMIN</h4>
                <p>Hi Mr, Are you first time live</p>
                </div>
            </div>
            <!-- Right-aligned media object -->
            <div class="media">
                <div class="media-body">
                <h4 class="media-heading ">MR, TANIM</h4>
                <p>Hello </p>
                </div>
                <div class="media-right">
                <img src="<?= $this->session->userdata('photo')?>" class="media-object rounded-circle" style="width:50px">
                </div>
            </div>

            <form action="<?= base_url('SMS/chating/')?>" method="post">
                <div class="input-group">
                    <div class="input-group-append">
                        <span class="input-group-text attach_btn"><i class="fas fa-paperclip"></i></span>
                    </div>
                    <textarea name="message" class="form-control type_msg" placeholder="Type your message..."></textarea>
                    <div class="input-group-append">
                        <input type="submit" name="send" value="Send" class="btn btn-info">
                        <!--
                            <span class="input-group-text send_btn"><i class="fas fa-location-arrow"></i></span>
                        -->
                    </div>
                </div>
			</form>
        </div>
    </div>
    <div class="row">
        <button onclick="live() + chat()" class="btn-danger">Live</button>
    </div>
</div>
</body>

    <script>
        function live(){
                // get video dom element
            const video = document.querySelector('video');
            
            // request access to webcam
            navigator.mediaDevices.getUserMedia({video: {width: 1024, height: 768}}).then((stream) => video.srcObject = stream);
            
            // returns a frame encoded in base64
            const getFrame = () => {
                const canvas = document.createElement('canvas');
                canvas.width = video.videoWidth;
                canvas.height = video.videoHeight;
                canvas.getContext('2d').drawImage(video, 0, 0);
                const data = canvas.toDataURL('image/png');
                return data;
            }
            const WS_URL = 'ws://localhost:3001';
            const FPS = 3;
            const ws = new WebSocket(WS_URL);
            ws.onopen = () => {
                console.log(`Connected to ${WS_URL}`);
                setInterval(() => {
                    ws.send(getFrame());
                }, 1000 / FPS);
            }
		}
        function chat(){
            return document.getElementById('data').innerHTML = "Live Chat";
        }
    </script>
</html>