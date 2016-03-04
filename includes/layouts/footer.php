 <!-- Footer -->
        <footer>
	        
            <div class="row">
                <div class="col-lg-12">
		               <!-- 			 svg for play button -->
					<svg width="104" height="104" id='pause'>
					<circle id="circle" cx="51" cy="51" r="40" stroke-dasharray="314" stroke-dashoffset="0" style="stroke-width:1px;stroke:#bd8a43;" />
					<line id='line1' x1="38" y1="30" x2="38" y2="70" style="stroke-width:2px;stroke:#bd8a43;stroke-linecap: round;" />
					<path id='line2' d="M 66 30 L 66 50 L 66 70" rx="10" ry="10" style="stroke-width:2px;stroke:#bd8a43;fill:#bd8a43;stroke-linejoin: round;stroke-linecap: round;">
					<animate
					attributeName="d"
					dur="300ms"
					from="M 66 30 L 66 50 L 66 70"
					to="M 38 30 L 70 50 L 38 70"
					begin="indefinite"
					fill="freeze"
					id="from_pause_to_play"
					/>
					</path>
					<animate
					xlink:href="#line2"
					attributeName="d"
					dur="300ms"
					from="M 38 30 L 70 50 L 38 70"
					to="M 66 30 L 66 50 L 66 70"
					fill="freeze"
					id="from_play_to_pause"
					begin="indefinite"
					/>
					</svg>
					<a href="#" class="social-button facebook"><i class="fa fa-facebook"></i></a><a href="#" class="social-button twitter"><i class="fa fa-twitter"></i></a>
					<div class="logo-footer">
					<img alt="Reina logo" title="Reina" src="../img/logo/logo2.png"/>
					<img alt="Yaşam logo" title="Yaşam" src="../img/logo/logo3.png"/>
	                </div>
                    <p class="reza-sign" >Powered by Reza Nehzati</p>                   
                </div>
            </div>
            <!-- /.row -->
            
			<audio id="myAudio">
			  <source src="music/background-music.mp3" type="audio/mpeg">
			</audio>

			

        </footer>

    <!-- /.container -->


    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
	<!-- Main javascript  -->
	<script src="js/script.js"></script>


</body>

</html>
