<!-- Navigation Section -->

<div class="navbar navbar-fixed-top custom-navbar" role="navigation">
    <!-- navbar header -->
    <div class="navbar-header">
        <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
             <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
                 <span class="icon icon-bar"></span>
        </button>
		 <div class="fuse-logo">
			<img src="img/logo.png" alt="Article Picture">
		</div>
    </div>

    <div class="collapse navbar-collapse">
       <ul class="nav-fuse navbar-nav navbar-right">
		<li><a href="#firstSection" class="smoothScroll">Home</a></li>
			<li style=" background: #E91E63; "><a onclick="document.getElementById('id01fuse').style.display='block'" href="#" class="smoothScroll">Login</a></li>
            <li><a href="#secondSection" class="smoothScroll">recent</a></li>
			<li><a href="#fifthSection" class="smoothScroll">Mobile App</a></li>
            <li><a href="#thirdSection" class="smoothScroll">Our Comunity</a></li>
            <li><a href="#sixSection" class="smoothScroll">Events</a></li>
            <li><a href="#fourthSection" class="smoothScroll">MemberShip</a></li>
        </ul>
    </div>
</div>

<!--modal section-->
<div id="id01fuse" class="modal">
<div id="overlay"></div>
<?php include 'modal-login.php';?>
</div>
