<div class="page">
	<div class="card">
		 <div class="card-content">
		 	  <a class="waves-effect waves-light btn modal-trigger" data-target="add-user-role" href="#" ng-click="clicked_addnew()"><i class="material-icons left">create</i>Add User Role</a>

		 </div>

		 <div class="card-action">
		 	     <table class="highlight">
			        <thead>
			          <tr>
			              <th>Name</th>
			              <th>Edit</th>
			              <th>Delete</th>
			          </tr>
			        </thead>

			        <tbody>
			          <tr ng-repeat="user_role in user_roles">
			            <td style="width: 65%;">{{user_role.roleName}}</td>
			            <td><a class="waves-effect waves-light btn  modal-trigger" ng-click="clicked(user_role)" data-target="edit-user-role" href="#"><i class="material-icons left">edit</i>Edit</a></td>
			            <td><a class="waves-effect waves-light btn red" ng-click="deleteSelected(user_role)"><i class="material-icons left">delete</i>Delete</a></td>
			          </tr>

			        </tbody>
			      </table>
            
		 </div>
	</div>

  <!-- Add new -->
  <div id="add-user-role" class="modal">
    <div class="modal-content">
      <h4>Add New User Role</h4>
      <form action="">
      	 <div class="row">
      	 	<div class="input-field col l12 m12 s12">
      	 		<input id="role-name" type="text" class="validate" ng-model="newUserRole.roleName" required >
      	 		<label for="role-name">Role Name</label>
      	 	</div>
      	 </div>
      	 <div class="row">
      	 	<div class="div">Access</div>
      	 	<div class="col l6 m6 s12" ng-repeat="permission in permissions">
			      <label>
			        <input type="checkbox" value="{{permission.pageId}}" ng-model="permission.is_active" ng-true-value="'1'" ng-false-value="'0'"/>
			        <span>{{permission.pageName}}</span>
			      </label>
      	 	</div>
      	</div>
      	 	<div class="row">
      	 		<div class="col l12 m12 s12">
      				 <input type="submit" class="waves-effect btn modal-close" ng-click="saveUserRole(permissions,newUserRole)" value="Add">
      			</div>
      		</div>
      </form>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-green btn-flat">Close</a>
    </div>
  </div>


  <!-- Update -->
  <div id="edit-user-role" class="modal">
    <div class="modal-content">
      <h4>Update User Role</h4>
      <form>
      	 <div class="row">
      	 	<div class="input-field col l12 m12 s12">
            <input type="hidden" value="{{clickedUserRole.roleId}}">
      	 		<input id="update-name" type="text" class="validate" ng-model="clickedUserRole.roleName">
      	 		<label for="update-name">Role Name</label>
      	 	</div>
      	 </div>
      	 <div class="row">
      	 	<div class="div">Access</div>
      	 	<div class="col l6 m6 s12" ng-repeat="permission in permissions">
			      <label>
			        <input type="checkbox" value="{{permission.upId}}" ng-model="permission.is_active" ng-true-value="'1'" ng-false-value="'0'" />
			        <span>{{permission.pageName}}</span>
			      </label>
      	 	</div>
			</div>
      	 	<div class="row">
      	 		<div class="col l12 m12 s12">
      				 <input type="submit" class="waves-effect btn modal-close" ng-click="editUserRole(permissions,clickedUserRole)" value="Update">
      			</div>
      		</div>
      </form>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-green btn-flat">Close</a>
    </div>
  </div>


</div>


          