      <script>
          $("span.menu-info").click(function(){
            $("ul.cl-effect-21").slideToggle("slow" , function(){
            });
          });
          </script>
          <!-- /script-nav -->
                    <div class="clearfix"> </div> 
       </div>
  </div>
<div class="header-banner">
	<?php 
  if ($this->session->flashdata('sukses')) {
    echo '<p class="warning" style="margin: 10px 20px;">'.$this->session->flashdata('sukses').'</p>';
  }
  echo validation_errors('<p class="warning" style="margin: 10px 20px;">','</p>');
   ?>
   <div class="slider">
      <ul class="rslides" id="slider2">
        <li><a href="#"><img src="<?php echo base_url() ?>asset/front/images/4.jpg" class="img-responsive" alt=""/></a></li>
        <li><a href="#"><img src="<?php echo base_url() ?>asset/front/images/2.jpg" class="img-responsive" alt=""/></a></li>
        <li><a href="#"><img src="<?php echo base_url() ?>asset/front/images/3.jpg" class="img-responsive" alt=""/></a></li>
      </ul>
    </div>
</div>
<!--doctor-self-->
<div class="doctor-self">
	<div class="container">
		<div class="doctor-self-info">
			<h3>WHAT WOULD OUR DEAN SAYS</h3>
			<div class="doctor-self-info-bottom">
				<div class="col-md-4 doctor-self-left">
					<img src="<?php echo base_url() ?>front/images/5.jpg" class="img-responsive" alt=""/>
					<h4>DR.JIMMY</h4>
					<h5>lorem lipsum doolr in groem horntim</h5>
				</div>
				<div class="col-md-8 doctor-self-right">
					<p>"Lorem Ipsum is simply dummy text of the printing and typesetting i
						ndustry. Lorem Ipsum has been the industry's standard dummy text 
						ever since the 1500s<br /><br /> reproduced below for those interested. Sections 1.10.32
						  and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero
						   are also reproduced in their exact original form, accompanied
						    by English versions from the 1914 translation by H. Rackham
						Lorem Ipsum is simply dummy text of the printing and typesetting i
						ndustry. Lorem Ipsum has been the industry's standard dummy text 
						ever since the 1500s"</p>
				</div>
				<div class="clearfix"> </div>
				</div>
		</div>
	</div>
</div>
<!--/doctor-self-->
<!--dogs-food-->
<div class="dogs-food">
	<div class="container">
		<div class="dogs-food-top-info">
		<div class="dogs-food-top">
			<div class="col-md-4 dogs-food-info">
				<img src="<?php echo base_url() ?>asset/front/images/dg-1.png">
				<h4>CARE</h4>
				<p>when an unknown printer took a galley of
					 type and scrambled it to make a type speci
					men book</p>
					 <a class="dogs-top-food" href="#">More</a>
			</div>
			<div class="col-md-4 dogs-food-info">
				<img src="<?php echo base_url() ?>asset/front/images/dg-2.png">
				<h4>CARE-+</h4>
				<p>when an unknown printer took a galley of
					 type and scrambled it to make a type speci
					men book</p>
					<a class="dogs-top-food" href="#">More</a>
			</div>
			<div class="col-md-4 dogs-food-info">
				<img src="<?php echo base_url() ?>asset/front/images/dg-3.png">
				<h4>TRAVEL</h4>
				<p>when an unknown printer took a galley of
					 type and scrambled it to make a type speci
					men book</p>
					<a class="dogs-top-food" href="#">More</a>
			</div>
			<div class="col-md-4 dogs-food-info">
				<img src="<?php echo base_url() ?>asset/front/images/dg-4.png">
				<h4>FRIEND-SHIP</h4>
				<p>when an unknown printer took a galley of
					 type and scrambled it to make a type speci
					men book</p>
					<a class="dogs-top-food" href="#">More</a>
			</div>
				<div class="col-md-4 dogs-food-info">
					<img src="<?php echo base_url() ?>asset/front/images/dg-5.png">
					<h4>DOG-HOME</h4>
					<p>when an unknown printer took a galley of
						 type and scrambled it to make a type speci
						men book</p>
						<a class="dogs-top-food" href="#">More</a>
				</div>
				<div class="col-md-4 dogs-food-info">
					<img src="<?php echo base_url() ?>asset/front/images/dg-6.png">
					<h4>DOG-FOOD</h4>
					<p>when an unknown printer took a galley of
						 type and scrambled it to make a type speci
						men book</p>
						<a class="dogs-top-food" href="#">More</a>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!--/dogs-food-->
<!--daily-updates-->
<div class="daily-updates">
	<div class="container">
		<!-- <div class="daily-updates-info">
		<h4>SUBSCRIBE FOR DAILY UPDATES</h4>
		<form>
			
					 <input type="text" class="text" value="EMAIL" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'EMAIL';}">
					 <input type="submit"value="SUBMIT">
		 	</form>
		 	<p>FOR HELP<span><a href="mailto:example@mail.com">pets-care@mail.com</a></span></p>
		 	</div> -->
	</div>
</div>
<!--/daily-updates-->
<!--support-->
<!-- <div class="support">
	<div class="container">
		<div class="support-info">
			<h4>OUR TEAM FOR SUPPORT</h4>
			<div class="support-info-left">
			<div class="col-md-10 support-info-left-bottom">
				<p>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
					 the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of ty
						pe and scrambled</p>
			</div>
			<div class="col-md-2 support-info-left-top">
				<img src="<?php echo base_url() ?>asset/front/images/support.png" class="img-responsive" alt=""/>
			</div>	
			<div class="clearfix"> </div>
			</div>
			<div class="support-info-right">
			<div class="col-md-2 support-info-right-bottom">
				<img src="<?php echo base_url() ?>asset/front/images/support.png" class="img-responsive" alt=""/>
			</div>	
			<div class="col-md-10 support-info-right-top">
				<p>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
					 the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of ty
						pe and scrambled</p>
			</div>
			<div class="clearfix"> </div>
			</div>
						<div class="clearfix"> </div>
		</div>
	</div>
</div> -->
	
<!--/support-->
<!--contact-->
<!-- <div class="contact">
	<div class="container">
		<div class="contact-info">
			<h4>CONTACT-US</h4>
			<p>Typesetting, remaining essentially unchanged. It was popularised in the 1960s</p>
		</div>
		<form>
						 <input type="text" class="text" value="NAME" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'NAME';}">
						 <input type="text" class="text" value="EMAIL" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'EMAIL';}">
						 <textarea onfocus="if(this.value == 'MESSAGE') this.value='';" onblur="if(this.value == '') this.value='MESSAGE';" >MESSAGE</textarea>	
						 <div class="clearfix"> </div>
						 <input type="submit"value="SUBMIT">
					</form>

	</div>
</div> -->
<!--/contact-->

</body>
</html>