<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index()
    {
        $popular = file_get_contents('https://raznime.herokuapp.com/popular');
        $popular = json_decode($popular);
        $recent = file_get_contents('https://raznime.herokuapp.com/recent-release');
        $recent = json_decode($recent);
        $movies = file_get_contents('https://raznime.herokuapp.com/anime-movies');
        $movies = json_decode($movies);
        $ongoing = file_get_contents('https://raznime.herokuapp.com/top-airing');
        $ongoing = json_decode($ongoing);

        $data = array(
            'title' => 'Home',
            'isi' => 'home/homepage',
            'popular' => $popular,
            'recent' => $recent,
            'movies' => $movies,
            'ongoing' => $ongoing,
        );

        $this->load->view('layout_home', $data, FALSE);
        
    }
    
    public function details($id)
    {

        $details = file_get_contents("https://raznime.herokuapp.com/anime-details/{$id}");
        $details = json_decode($details);

        $data = array(
            'title' => 'Details',
            'isi' => 'home/details',
            'details' => $details,
        );

        $this->load->view('layout_home', $data, FALSE);
        
    }

    public function login()
    {
        $data = array(
            'title' => 'Login',
            'isi' => 'home/auth/login',
        );

        $this->load->view('layout_home', $data, FALSE);
    }
    
    public function daftar()
    {
        $data = array(
            'title' => 'Daftar',
            'isi' => 'home/auth/daftar',
        );

        $this->load->view('layout_home', $data, FALSE);
    }

    public function watch($anime,$id)
    {
        $details = file_get_contents("https://raznime.herokuapp.com/anime-details/{$anime}");
        $details = json_decode($details);
        $video = file_get_contents('https://raznime.herokuapp.com/stream/watch/' . $id);
        $video = json_decode($video);
        
        $data = array(
            'title' => 'Daftar',
            'isi' => 'home/watch',
            'video' => $video,
            'details' => $details,
        );

        $this->load->view('layout_home', $data, FALSE);
    }

    public function search()
    {
        $keyw = $this->input->get('keyw');
        $search = file_get_contents('https://raznime.herokuapp.com/search?keyw=' . $keyw);
        $search = json_decode($search);
        // var_dump($search); die;

        $data = array(
            'title' => 'Daftar',
            'isi' => 'home/search',
            'search' => $search,
        );

        $this->load->view('layout_home', $data, FALSE);
    }
}

/* End of file Home.php */

?>