<?php 
namespace App\Controllers;
use CodeIgniter\Controller;

class DbTest extends Controller
{
    public function index()
    {
        $db = \Config\Database::connect();
        echo "✅ Connected to database: " . $db->getDatabase();
    }
}
