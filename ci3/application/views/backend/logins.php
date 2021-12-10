<!DOCTYPE html>
<html>
<head>
	<title>Form Logins</title>
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Rubik:400,700">
</head>
<style>
	*{
		font-family: 'Rubik', sans-serif;
	}

	#form {
		margin: 50px auto;
		width: 350px;
		padding:45px 30px 15px;
		position: relative;
		box-shadow: 5px 5px 25px rgba(0,0,0,.2);
		border-radius: 1px;
		background-color: #2c3e50;
		height: 450px;
		overflow: hidden
	}

	#form #toggle-forms{
		position: absolute;
		top: 15px;
		right: 30px;
		border: 1px solid #3a4a5d;
		border-radius: 20px;
		overflow: hidden;
		z-index: 99
	}

	#form #toggle-forms > button {
		border:none;
		background:none;
		background-color: #34495e;
		border: 1px solid #22303e;
		color: #FFF;
		float:left;
		border-bottom-right-radius: 20px;
		border-top-right-radius: 20px;
		padding:2px 10px;
	}

	#form #toggle-forms > button:first-of-type{
		border-right: 0;
		border-bottom-right-radius: 0;
		border-top-right-radius: 0;
		border-top-left-radius: 20px;
		border-bottom-left-radius: 20px;
	}

	#form #toggle-forms > button.active {
		background-color: #3498db;
	}

	#form form h4{
		text-transform: capitalize
	}

	.input-field label.active {
		color: #FFF !important;
		font-size: 1.1rem
	}

	#form form input:focus {
		border-bottom-color: dodgerblue !important
	}

	#form .row >button{
		background-color: dodgerblue
	}

	input {
		color: #FFF;
		padding-left: 15px !important
	}

	#form form{
		padding:45px 30px 15px;
		position: absolute;
		top:0;
		left: 0;
		height: 100%;
		width: 100%;
		background-color: #2c3e50;
		transition: all .3s linear;
		z-index: 2
	}

	#form form:last-of-type {
		left: 100%
	}

	#form.active form:first-of-type {
		left: -100% !important
	}

	#form.active form:last-of-type{
		left:0 !important
	}

	@media (max-width: 767px) {
		#form {
			width: 290px !important;
		}
	}
	.animate {
		height: 100%;
		display: block;
		margin: 0;
		padding: 0;
		width: 100%
	}

	.animate > li {
		position: absolute;
		height: 50px;
		width: 50px;
		top: 100%;
		left: 10px;
		background-color:  rgba(255,255,255,.1);
		z-index: -1;
		overflow: hidden;
		animation: move 10s linear infinite
	}

	.animate > li:nth-last-of-type(2) {
		left: 70px;
		animation-delay: 3.5s;
		height: 15px;
		width: 15px;
	}

	.animate > li:nth-last-of-type(3) {
		left: 140px;
		animation-delay: 3s
	}

	.animate > li:nth-last-of-type(4) {
		left: 210px;
		animation-delay: 5.5s
	}

	.animate > li:nth-last-of-type(5) {
		left: 280px;
		animation-delay: 1.8s;
		height: 65px;
		width: 65px
	}

	.animate > li:nth-last-of-type(6) {
		left: 140px;
		animation-delay: 6.8s;
		height: 25px;
		width: 25px
	}

	.animate > li:nth-last-of-type(7) {
		left: 280px;
		animation-delay: 5s;
		height: 35px;
		width: 35px
	}


	@keyframes move {
		to {top: -50px;transform: rotate(360deg)}
	}

	.forgot{
		color: dodgerblue
	}

	.forgot:hover {
		text-decoration: underline;
		cursor: pointer
	}	
	.form-content {
		background: #fbfbfb;
		border: none;
		outline: none;
		padding-top: 14px;
	}

	#forgot-pass {
		color: #2dbd6e;
		font-family: "Raleway", sans-serif;
		font-size: 10pt;
		margin-top: 3px;
		text-align: right;
	}
	#card {
		background: #fbfbfb;
		border-radius: 8px;
		box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);
		height: 410px;
		margin: 6rem auto 8.1rem auto;
		width: 329px;
	}
	#card-content {
		padding: 12px 44px;
	}
	#card-title {
		font-family: "Raleway Thin", sans-serif;
		letter-spacing: 4px;
		padding-bottom: 23px;
		padding-top: 13px;
		text-align: center;
	}
	#signup {
		color: #2dbd6e;
		font-family: "Raleway", sans-serif;
		font-size: 10pt;
		margin-top: 16px;
		text-align: center;
	}
	#submit-btn {
		background: -webkit-linear-gradient(right, #a6f77b, #2dbd6e);
		border: none;
		border-radius: 21px;
		box-shadow: 0px 1px 8px #24c64f;
		cursor: pointer;
		color: white;
		font-family: "Raleway SemiBold", sans-serif;
		height: 42.3px;
		margin: 0 auto;
		margin-top: 50px;
		transition: 0.25s;
		width: 153px;
	}
	#submit-btn:hover {
		box-shadow: 0px 1px 18px #24c64f;
	}
	.form {
		align-items: left;
		display: flex;
		flex-direction: column;
	}
	.form-border {
		background: -webkit-linear-gradient(right, #a6f77b, #2ec06f);
		height: 1px;
		width: 100%;
	}
	.form-content {
		background: #fbfbfb;
		border: none;
		outline: none;
		padding-top: 14px;
	}
	.underline-title {
		background: -webkit-linear-gradient(right, #a6f77b, #2ec06f);
		height: 2px;
		margin: -1.1rem auto 0 auto;
		width: 89px;
	}
</style>
<body>

	<section id="form">
		<div id="toggle-forms">
		</div>



		<form action="<?= base_url('auth/aksi_login')?>" method="post" class="form">
			<div class="row" align="center">
				<h4 class="white-text">login</h4>
			</div>
			<label for="user-email" style="padding-top:13px">
				&nbsp;<b>Username</b>
			</label>
			<input id="" class="form-content" type="text" name="username" autocomplete="on" required />
			<div class="form-border"></div>
			<label  style="padding-top:22px"><b>&nbsp;Password</b>
			</label>
			<input id="" class="form-content" type="password" name="password" required/>
			<div class="form-border"></div>
				<!-- <a href="#">
					<legend id="forgot-pass">Forgot password?</legend>
				</a> -->
				<input id="submit-btn" type="submit" name="submit" value="LOGIN" />


				<ul class="animate">
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
				</ul>
			</form>




			<form class="col s12" >
			</form>
		</section>



		<script>
			let $id = (id) => document.getElementById(id);
			var [login, register, form] = ['login', 'register', 'form'].map(id => $id(id));

			[login, register].map(element => {
				element.onclick = function () {
					[login, register].map($ele => {
						$ele.classList.remove("active");
					});
					this.classList.add("active");
					this.getAttribute("id") === "register"?  form.classList.add("active") : form.classList.remove("active");
				}
			});
		</script>

	</body>
	</html>