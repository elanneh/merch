<div id="login">
	<h1>Please Log In</h1>
	<form action="/Admins/admin_login" method="post">
	    <p>User Name</p>
	    <input type="text" class="form-control" id="inputUser" name="admin_email">    	
	    <label for="inputPassword">Password</label>
	    <input type="password" class="form-control" id="inputPassword" name="password">	
	  	<p><input type="submit" value="Log In"></p>
	</form>
</div>
<a href="/Admins/dashboard">Dashboard</a>

<?= $this->session->flashdata('message'); ?>