<?php namespace App\Controllers;
use App\Models\VoterModel;
use App\Models\positionsModel;
use App\Models\candidatesModel;
use App\Models\AdminModel;

// use Codeigniter\Controller;

class Admin extends BaseController
{

	//views--------------------------------------------------------------//
	public function index()
	{
		$data['title'] = 'iProffix | Admin';
		return view('admin_login',$data);
	}

	function dashboard()
	{
		$data['title'] = 'Admin | Dashboard';
		echo view('templates/head', $data);
		echo view('dashboard');
		echo view('templates/foot');
	}

	function candidates(){
		$data['title'] = 'Admin | Candidates';
		echo view('templates/head', $data);
		echo view('candidates');
		echo view('templates/foot');
	}

	function voters(){
		$data['title'] = 'Admin | Voters';
		echo view('templates/head', $data);
		echo view('voters');
		echo view('templates/foot');
	}

	function profile(){
		$data['title'] = 'Admin | Profile';
		echo view('templates/head', $data);
		echo view('adminProfile');
		echo view('templates/foot');
	}

	function accounts(){
		$data['title'] = 'Admin | accounts';
		echo view('templates/head', $data);
		echo view('admin_accounts');
		echo view('templates/foot');
	}


	





	//API--------------------------------------------------------------//



	function addNewAdmin(){
		$admin = new AdminModel();
		$username = $this->request->getVar('adminUsername');
		$password = $this->request->getVar('adminPassword');
		$admin_exists = $admin->where('username', $username)->countAllResults();
		if($admin_exists != 0){
			echo json_encode(['exists'=>'true']);	
		}
		else {
			$dataToSave = [
				'nick' => $this->request->getVar('adminNick'),
				'username' => $username,
				'role' => 'admin',
				'password' => password_hash($password , PASSWORD_DEFAULT)
				
			];
			$admin->save($dataToSave);
			echo json_encode(['status'=>'success']);
		}	
	}

	// function addArray($array){
	// 	$candidate = new candidatesModel();
	// 	$newarray = json_decode($array,true);

	// 	foreach ($newarray as $value) {
	// 		$data = [
	// 			'fullname' => $value['fullname'],
	// 			'post' => $value['post']
	// 		];
	// 		$candidate->save($data);
	// 	}
	// 	echo json_encode(['data'=>'success']);

	// }


	function loginAdmin(){
		$admin = new AdminModel();
		$username = $this->request->getVar('adminUsername');
		$password = $this->request->getVar('adminPassword');

		$admin_exists = $admin->where('username', $username)->countAllResults();
		$thisAdmin = $admin->where('username', $username)->first();
	
		if($admin_exists == 0){
			echo json_encode(['exists'=>'false']);	
		}
		else {
			if (password_verify($password, $thisAdmin['password'])){
			$loggedInAdmin = $admin->select(['id','nick','username','role'])->where('id', $thisAdmin['id'])->get()->getResultArray(); 
			echo json_encode(['data'=>$loggedInAdmin]);
			}
			else {
				echo json_encode(['exists'=>'false']);
			}
		}
	}


	function changeAdminPassword(){
		$admin = new AdminModel();
		$id = $this->request->getVar('adminId');
		$oldPassword = $this->request->getVar('oldPassword');
		$password = $this->request->getVar('newPassword');

		$thisAdmin = $admin->where('id', $id)->first();
		if (password_verify($oldPassword, $thisAdmin['password'])){
			$dataToSave = [
				'password' => password_hash($password , PASSWORD_DEFAULT)
			];
			$admin->set($dataToSave)->where('id',$id)->update();
			echo json_encode(['password'=>'valid']);
		}
		else {
			echo json_encode(['password'=>'invalid']);
		}
	}

	function getVoters(){
		$voters = new VoterModel();
		$table= $voters->findAll();
		$numberOfrows = $voters->countAll();
		$numberOfVoted = $voters->where('voted',1)->countAllResults();
		echo json_encode(['table'=>$table , 'numberOfVoters'=>$numberOfrows, 'numberOfVotersVoted'=>$numberOfVoted]);
	}

	function getOtherUsers(){
		$admin = new AdminModel();
		$requestId = $this->request->getVar('id');
		$role = ['superadmin'];
		$table= $admin->whereNotIn('role',$role)->findAll();
		$requestedProfile = $admin->select(['id','nick','username'])->where('id', $requestId)->get()->getResultArray();
		echo json_encode(['table'=>$table, 'profile' => $requestedProfile]);
	}

	function enableUser($id){
		$admin = new AdminModel();
		$admin->where('id',$id)->set('enabled', '1')->update();
		echo json_encode(['status'=>'success']);
	}

	function disableUser($id){
		$admin = new AdminModel();
		$admin->where('id',$id)->set('enabled', '0')->update();
		echo json_encode(['status'=>'success']);
	}

	function updateUser(){
		$admin = new AdminModel();
		$id = $this->request->getVar('id');
		$password = $this->request->getVar('password');
		$thisUsername = $this->request->getVar('username');

		//other users
		$thisId = [$id];
		$otherUsers= $admin->whereNotIn('id',$thisId)->findAll();
		
		//check if this username already exists among others
		$val = 0;
		foreach ($otherUsers as $names) {
			if ($names['username'] == $thisUsername){
				$val++;
			}
		}
		if($val >= 1){
			echo json_encode(['exists'=>'true']);	
		}

		else{
			$data = [
				'nick'=>$this->request->getVar('nick'),
				'username'=> $thisUsername,
				'password'=> password_hash($password , PASSWORD_DEFAULT),
			];
			$admin->where('id',$id)->set($data)->update();
			echo json_encode(['status'=>'success']);
		}	
	}


	function updateCandidate(){
		$candidate = new candidatesModel();
		$id = $this->request->getVar('id');
		$thisFullname = $this->request->getVar('fullname');
		$thisPost = $this->request->getVar('post');

		//other users
		$thisId = [$id];
		$others= $candidate->whereNotIn('id',$thisId)->findAll();
		
		//check if this combination already exists among others
		$val = 0;
		foreach ($others as $otherData) {
			if ($otherData['fullname'] == $thisFullname && $otherData['post'] == $thisPost){
				$val++;
			}
		}
		if($val >= 1){
			echo json_encode(['exists'=>'true']);	
		}

		else{
			$data = [
				'id'=>$id,
				'fullname'=> $thisFullname,
				'post'=> $thisPost
			];
			$candidate->where('id',$id)->set($data)->update();
			echo json_encode(['status'=>'success']);
		}	
	}




	function getCandidates(){
		$requestId = $this->request->getVar('id');
		$candidates = new candidatesModel();
		$table= $candidates->findAll();
		$numberOfrows = $candidates->countAll();
		$requestedProfile = $candidates->select(['id','fullname','post'])->where('id', $requestId)->get()->getResultArray();
		echo json_encode(['table'=>$table , 'numberOfCandidates'=>$numberOfrows, 'profile'=>$requestedProfile]);
	}

	function addNewVoter(){
		$voter = new VoterModel();
		$dataFind = [
			'firstname'=>$this->request->getVar('firstname'),
			'lastname'=>$this->request->getVar('lastname'),
		];
		$voter_exists = $voter->where($dataFind)->countAllResults();
		if($voter_exists >= 1){
			echo json_encode(['found'=>'true']);	
		}
		else {
			$data = [
				'firstname'=>$this->request->getVar('firstname'),
				'lastname'=>$this->request->getVar('lastname'),
				'code'=>$this->request->getVar('code'),
				'voted'=>0
			];
			$voter->save($data);
			echo json_encode(['found'=>'false']);
		}
	} 

	function addNewCandidate(){
		$candidate = new candidatesModel();
		$data = [
			'fullname'=>$this->request->getVar('fullname'),
			'post'=>$this->request->getVar('post')
		];
		$candidate_exists = $candidate->where($data)->countAllResults();
		if($candidate_exists >= 1){
			echo json_encode(['found'=>'true']);	
		}
		else {
			$candidate->save($data);
			echo json_encode(['found'=>'false']);
		}
	} 

	function addNewPosition($input){
		$position = new positionsModel();
		$post = $position->where('position', $input)->countAllResults();
		if($post >= 1){
			echo json_encode(['found'=>'true']);	
		}
		else {
			$data =['position'=>$input];
			$position->save($data);
			echo json_encode(['found'=>'false']);
		}
	}

	function deleteVoter($id){
		$voter = new VoterModel();
		$voter->where('id',$id)->delete($id);
		echo json_encode(['status'=>'success']);
	}

	function deleteUser($id){
		$admin = new AdminModel();
		$admin->where('id',$id)->delete($id);
		echo json_encode(['status'=>'success']);
	}


	function deleteCandidate($id){
		$candidate = new candidatesModel();
		$position = new positionsModel();
		$candidateDetails = $candidate->where('id',$id)->first();
		$postStillExists = $position->where('position', $candidateDetails['post'])->countAllResults();

		if ($postStillExists != 0){
			echo json_encode(['post'=>'exists']);
		}
		else{
			$candidate->where('id',$id)->delete($id);
			echo json_encode(['status'=>'success']);
		}
		
	}

	function deletePosition($id){
		$pos = new positionsModel();
		$pos->where('id',$id)->delete($id);
		echo json_encode(['status'=>'success']);
	}

	function getAllPositions(){
		$posts = new positionsModel();
		$positions = $posts->findAll();
		$noOfRows = $posts->countAll();
		echo json_encode(['status'=>'success','positions'=>$positions, 'noOfPositions'=> $noOfRows]);
	}

	// function displayPositions(){
	// 	$posts = new positionsModel();
	// 	$table = $posts->findAll();
	// 	$noOfRows = $posts->countAll();

	// 	foreach ($positions as $value) {
	// 		$table.='<tr>
	// 		<th>'.$num.'</th>
	// 		<td>'.$value['position'].'</td>
	// 		<td><button class="btn btn-link btn-sm" id="deletePosition" onclick="deletePosition('.$value['id'].');"
	// 		style="color: red"><span class="fa fa-times"></span></button></td>
	// 		</tr>';
	// 		$num += 1;
	// 	}
	// 	echo json_encode(['status'=>'success','table'=>$table, 'noOfPositions'=> $noOfRows]);
	// }


	// function incr($data){
	// 	$icr = new candidatesModel();
	// 	$ids = explode(",",$data);
	// 	$icr->whereIn('id', $ids)->set('num_of_votes','`num_of_votes`+ 1',FALSE)->update(); 


	// 	// $ids = [3,4];
	// 	// $icr->whereIn('id', $ids)->set('num_of_votes','`num_of_votes`+ 1',FALSE)->update(); 
	// }


}