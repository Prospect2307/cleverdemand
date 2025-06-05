<?php

namespace App\Controllers;

class PressRelease extends BaseController
{
    private $pressReleases = [
        1 => [
            'title' => 'Oxylabs Launches New AI Dataset Platform',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua...',
            'image' => 'https://dummyimage.com/600x400/000/fff',
            'date' => '05 Jun 2025',
            'read_time' => '4 MINS READ',
            'category' => 'AI & Machine Learning'
        ],
        2 => [
            'title' => 'Agentuity Announces Cloud Solutions for AI Agents',
            'content' => 'Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat...',
            'image' => 'https://dummyimage.com/600x400/000/fff',
            'date' => '02 Jun 2025',
            'read_time' => '3 MINS READ',
            'category' => 'Cloud Technology'
        ],
             3 => [
            'title' => '3 lorem Announces Cloud Solutions for AI Agents',
            'content' => 'Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat...',
            'image' => 'https://dummyimage.com/600x400/000/fff',
            'date' => '02 Jun 2025',
            'read_time' => '3 MINS READ',
            'category' => 'Cloud Technology'
        ],
        // Add more press releases here
    ];

    public function index()
    {
        $pressReleases = $this->pressReleases;

        // Filter logic (optional, basic example)
        $categoryFilter = $this->request->getGet('category') ?? '';
        $searchFilter = $this->request->getGet('search') ?? '';

        if ($categoryFilter !== '') {
            $pressReleases = array_filter($pressReleases, function ($item) use ($categoryFilter) {
                return strcasecmp($item['category'], $categoryFilter) === 0;
            });
        }

        if ($searchFilter !== '') {
            $pressReleases = array_filter($pressReleases, function ($item) use ($searchFilter) {
                return stripos($item['title'], $searchFilter) !== false || stripos($item['content'], $searchFilter) !== false;
            });
        }

        $data['pressReleases'] = $pressReleases;

        return view('pressrelease', $data);
    }

    public function view($id)
    {
        if (!array_key_exists($id, $this->pressReleases)) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        $data['pressReleaseItem'] = $this->pressReleases[$id];
        return view('view_pressrelease', $data);
    }
}
