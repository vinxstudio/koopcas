<template>
	<div class="atmgateway">
		<nav class="navbar navbar-expand-lg p-0" id="toolbar">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item">
					<a class="nav-link" tabindex="0" id="menuDropdown-0">File</a>
				</li>
			</ul>
		</nav>

		<table class="table table-sm table-bordered table-hover custom-table">
		  	<thead>
			    <tr>
			      <th scope="col">ID</th>
			      <th scope="col">TRANS</th>
			      <th scope="col">CARD NUMBER</th>
			      <th scope="col">ACCT NUMBER</th>
			      <th scope="col">AMOUNT</th>
			      <th scope="col">CURRBAL</th>
			      <th scope="col">AVAILBAL</th>
			      <th scope="col">STATUS</th>
			      <th scope="col">TIME</th>
			      <th scope="col">TMNLID</th>
			      <th scope="col">TIME</th>
			    </tr>
			    <tr class="bg-dark">
			      <td>123</td>
			      <td>123</td>
			      <td>123</td>
			      <td>123</td>
			      <td>123</td>
			      <td>123</td>
			      <td>123</td>
			      <td>123</td>
			      <td>123</td>
			      <td>123</td>
			      <td>123</td>
			    </tr>
  			</thead>
  		</table>

		<div align="center" class="col-auto">
			<button class="btn btn-sm justify-content-center btn-outline-primary mr-1" type="button">
				<i class="fa fa-search mr-1"></i><u>G</u>o
			</button>
			<button class="btn btn-sm justify-content-center btn-outline-primary" type="button">
				<i class="fa fa-times-circle mr-1"></i>Cancel
			</button>
		</div>

	</div>	
</template>

<style>
.atmgateway {
	width: 100%;
    padding-left: 15px;
    padding-right: 15px;
}
</style>