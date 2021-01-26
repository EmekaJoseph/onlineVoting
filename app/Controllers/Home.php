<?php namespace App\Controllers;
use App\Models\positionsModel;
use App\Models\candidatesModel;
use App\Models\VoterModel;

class Home extends BaseController
{
	public function index()
	{
		$data['title'] = 'iProffix | Home';
		echo view('voter_signin', $data);
	}


	function voting()
	{
		$data['title'] = 'iProffix | Voting';
		echo view('voting', $data);
	}

	function leaderboard()
	{
		$data['title'] = 'iProffix | Board';
		echo view('leaderBoard', $data);
	}

	//'''''''''''''''''''''API''''''''''''''''''''''''''''

	function getAllPositions()
	{
		$posts = new positionsModel();
		$positions = $posts->findAll();
		echo json_encode(['data'=>$positions]);
	}


	function getCandidatesByPosition($position){
		$candidates = new candidatesModel();
		$data= $candidates->where('post', $position)->findAll();
		echo json_encode(['data'=>$data]);
	}



	function incr($data){
		$icr = new candidatesModel();
		$ids = explode(",",$data); // produces e.g:  $ids = [3,4];
		$icr->whereIn('id', $ids)->set('num_of_votes','`num_of_votes`+ 1',FALSE)->update(); 
		echo json_encode(['status'=>'success']);
	}


	function loginVoter($code){
		$voter = new VoterModel();
		$code_exists = $voter->where('code', $code)->countAllResults(); 
		$loggedInVoter = $voter->where('code', $code)->findAll(); 

		if($code_exists == 0){
			echo json_encode(['exists'=>'false']);	
		}
		else {
			echo json_encode(['data'=>$loggedInVoter]);
		}
	}


	function saveVoterStatus (){
		$id = $this->request->getVar('id');
		$data = [
			'vote_date'=>$this->request->getVar('vote_date'),
			'vote_time'=>$this->request->getVar('vote_time'),
			'voted'=>1
		];
		$voter = new VoterModel();
		$voter->set($data)->where('id',$id)->update();

		echo json_encode(['status'=>'success']);

	}
}



