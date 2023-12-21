<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ContactModel;
use App\Models\TicketModel;
use App\Models\Users;
use DateTime;

class Home extends BaseController
{
    public $faker;
    public $ticket;
    public $contact;
    public $users;

    public function __construct()
    {
        $this->ticket = new TicketModel();
        $this->contact = new ContactModel();
        $this->faker = \Faker\Factory::create('id_ID');
        $this->users = new Users();
    }

    public function gettimestamp($datetime)
    {
        date_default_timezone_set('Asia/Jakarta');
        $currentTimestamp = time();
        $currentDate = date('Y-m-d H:i:s', $currentTimestamp);
        $date = strtotime($datetime);
        $elapse = $currentTimestamp - $date;

        echo "waktu saat ini -> " . $currentDate . "\n" . "jumlah selisih detik -> " . $currentTimestamp - $date . "\n";

        if ($elapse < 60) {
            return "one minutes ago!";
        } elseif ($elapse < 60 * 5) {
            return "5 minutes ago!";
        } elseif ($elapse < 60 * 15) {
            return "15 minutes ago!";
        } elseif ($elapse < 60 * 30) {
            return "30 minutes ago!";
        } elseif ($elapse < 60 * 60) {
            return "one hour ago!";
        } elseif ($elapse < (60 * 60 * 24 / 2)) {
            return "12 hour ago!";
        } elseif ($elapse < (60 * 60 * 24)) {
            return "one day ago!";
        } elseif ($elapse < (60 * 60 * 24 * 7)) {
            return "one week ago!";
        } else {
            return "a year ago";
        }
    }

    public function index()
    {
        $data = [
            'name' => 'dashboard',
            'title' => 'laman dashboard',
            // 'session' => $this->session,
            'homeNavButton' => true,
            'ticketNavButton' => false,
            'contactNavButton' => false,
            'formNavButton' => false,
            'manageUserNavButton' => false,
            'ticketAll' => $this->ticket->findAll(),
            'open_ticket'       => $this->ticket->where('type', 'new')->where('status', 'open')->countAllResults(),
            'close_ticket'      => $this->ticket->where('type', 'new')->where('status', 'close')->countAllResults(),
            'open_mt'           => $this->ticket->where('type', 'mt')->where('status', 'open')->countAllResults(),
            'done_mt'           => $this->ticket->where('type', 'mt')->where('status', 'close')->countAllResults(),
            'new_Januari'       => $this->ticket->where('type', 'new')->where('MONTH(created_at)', 1)->countAllResults(),
            'new_Februari'      => $this->ticket->where('type', 'new')->where('MONTH(created_at)', 2)->countAllResults(),
            'new_Maret'         => $this->ticket->where('type', 'new')->where('MONTH(created_at)', 3)->countAllResults(),
            'new_April'         => $this->ticket->where('type', 'new')->where('MONTH(created_at)', 4)->countAllResults(),
            'new_Mei'           => $this->ticket->where('type', 'new')->where('MONTH(created_at)', 5)->countAllResults(),
            'new_Juni'          => $this->ticket->where('type', 'new')->where('MONTH(created_at)', 6)->countAllResults(),
            'new_Juli'          => $this->ticket->where('type', 'new')->where('MONTH(created_at)', 7)->countAllResults(),
            'new_Agustus'       => $this->ticket->where('type', 'new')->where('MONTH(created_at)', 8)->countAllResults(),
            'new_September'     => $this->ticket->where('type', 'new')->where('MONTH(created_at)', 9)->countAllResults(),
            'new_Oktober'       => $this->ticket->where('type', 'new')->where('MONTH(created_at)', 10)->countAllResults(),
            'new_November'      => $this->ticket->where('type', 'new')->where('MONTH(created_at)', 11)->countAllResults(),
            'new_Desember'      => $this->ticket->where('type', 'new')->where('MONTH(created_at)', 12)->countAllResults(),
            'mt_Januari'       => $this->ticket->where('type', 'mt')->where('MONTH(created_at)', 1)->countAllResults(),
            'mt_Februari'      => $this->ticket->where('type', 'mt')->where('MONTH(created_at)', 2)->countAllResults(),
            'mt_Maret'         => $this->ticket->where('type', 'mt')->where('MONTH(created_at)', 3)->countAllResults(),
            'mt_April'         => $this->ticket->where('type', 'mt')->where('MONTH(created_at)', 4)->countAllResults(),
            'mt_Mei'           => $this->ticket->where('type', 'mt')->where('MONTH(created_at)', 5)->countAllResults(),
            'mt_Juni'          => $this->ticket->where('type', 'mt')->where('MONTH(created_at)', 6)->countAllResults(),
            'mt_Juli'          => $this->ticket->where('type', 'mt')->where('MONTH(created_at)', 7)->countAllResults(),
            'mt_Agustus'       => $this->ticket->where('type', 'mt')->where('MONTH(created_at)', 8)->countAllResults(),
            'mt_September'     => $this->ticket->where('type', 'mt')->where('MONTH(created_at)', 9)->countAllResults(),
            'mt_Oktober'       => $this->ticket->where('type', 'mt')->where('MONTH(created_at)', 10)->countAllResults(),
            'mt_November'      => $this->ticket->where('type', 'mt')->where('MONTH(created_at)', 11)->countAllResults(),
            'mt_Desember'      => $this->ticket->where('type', 'mt')->where('MONTH(created_at)', 12)->countAllResults(),
        ];

        return view('dashboard', $data);
    }

    public function manageUser()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('users');
        $builder->distinct()->select('users.id as userid, username, users.email as usermail, auth_groups.name as role, auth_logins.success as status');
        $builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $builder->join('auth_logins', 'auth_logins.user_id = users.id');
        $query = $builder->get();

        // $q = $this->users->distinct()
        //     ->select('users.id as userid, username, users.email as usermail, auth_groups.name as role, auth_logins.success as status')
        //     ->join('auth_groups', 'auth_groups.user_id = users.id')
        //     ->join('auth_logins', 'auth_logins.user_id = users.id')
        //     ->get()
        //     ->getResult();

        $data = [
            'name' => 'manajemen akun',
            'title' => 'menu manajemen akun',
            'homeNavButton' => false,
            'ticketNavButton' => false,
            'contactNavButton' => false,
            'formNavButton' => false,
            'manageUserNavButton' => true,
            'users' => $query->getResult(),
            // 'users' => $q,
        ];

        return view('user/manageUser', $data);
    }

    public function editUser($userId)
    {
        $data = [
            'name' => 'manajemen akun',
            'title' => 'menu manajemen akun',
            'homeNavButton' => false,
            'ticketNavButton' => false,
            'contactNavButton' => false,
            'formNavButton' => false,
            'manageUserNavButton' => true,
            'users' => $this->users->where('id', $userId)->findAll(),
        ];

        return view('user/editUser', $data);
    }

    public function testing()
    {
        $query = $this->request->getGet('search');
        $count = $this->request->getGet('count');
        $type = $this->request->getGet('type');
        $order_by = $this->request->getGet('order_by');
        $status = $this->request->getGet('status');

        $data = [
            'name' => 'testing',
            'title' => 'halaman testing',
            'query' => $this->ticket->searchData($query, $count, $type, $order_by, $status),
            'pager' => $this->ticket->pager,
            'homeNavButton' => false,
            'ticketNavButton' => false,
            'contactNavButton' => false,
            'formNavButton' => false,
            'manageUserNavButton' => false,
            'contact'   => $this->contact->paginate(5, 'contact'),
        ];

        session()->setFlashdata('message', 'kamu baru saja kembali dari testing!');

        return view('testing', $data);
    }

    public function testing2()
    {
        $data = [
            'media' => $this->request->getFile('media'),
            'namespace' => $this->request->getVar('namespace')
        ];

        $file = $this->request->getFile('media');
        dd($file->getMimeType());
    }
}
