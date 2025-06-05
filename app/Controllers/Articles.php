<?php

namespace App\Controllers;

class Articles extends BaseController
{
    private $articles = [
        1 => [
            'title' => 'Building the Future of Finance with Blockchain',
            'content' => 'How do you accommodate the needs of different functions—marketing, sales, product, and revenue—into your product development approach?
We accommodate the needs of different functions by starting with empathy for our customers, their users, and the real business challenges they’re trying to solve. It’s not just about roles like marketing or sales; we also consider things like digital maturity and technical comfort. That helps us get really clear up front on who we’re building for and what problem we’re solving. From there, ongoing feedback is key. We involve customers early—during discovery, in prototyping, and throughout development—so we’re constantly validating and adjusting. Our beta and pilot programs help us get new capabilities into customers’ hands quickly, and we’re lucky to have an incredible group of users who give us honest, thoughtful input that shapes the product every step of the way.
What groundbreaking digital shifts do you see happening in the next five years? How do you plan to advance Salsify’s product capabilities to address the same?
As I mentioned earlier, AI is going to completely transform how people discover, evaluate, and buy products. At Salsify, we’re aligning our entire product strategy around this shift, with a focus on AI, automation, and data analytics. We’re building capabilities that not only help our customers move faster and work smarter but also power more dynamic, personalized, and intelligent product experiences across every channel.
How do you accommodate the needs of different functions—marketing, sales, product, and revenue—into your product development approach?
We accommodate the needs of different functions by starting with empathy for our customers, their users, and the real business challenges they’re trying to solve. It’s not just about roles like marketing or sales; we also consider things like digital maturity and technical comfort. That helps us get really clear up front on who we’re building for and what problem we’re solving. From there, ongoing feedback is key. We involve customers early—during discovery, in prototyping, and throughout development—so we’re constantly validating and adjusting. Our beta and pilot programs help us get new capabilities into customers’ hands quickly, and we’re lucky to have an incredible group of users who give us honest, thoughtful input that shapes the product every step of the way.
What groundbreaking digital shifts do you see happening in the next five years? How do you plan to advance Salsify’s product capabilities to address the same?
As I mentioned earlier, AI is going to completely transform how people discover, evaluate, and buy products. At Salsify, we’re aligning our entire product strategy around this shift, with a focus on AI, automation, and data analytics. We’re building capabilities that not only help our customers move faster and work smarter but also power more dynamic, personalized, and intelligent product experiences across every channel.
How do you accommodate the needs of different functions—marketing, sales, product, and revenue—into your product development approach?
We accommodate the needs of different functions by starting with empathy for our customers, their users, and the real business challenges they’re trying to solve. It’s not just about roles like marketing or sales; we also consider things like digital maturity and technical comfort. That helps us get really clear up front on who we’re building for and what problem we’re solving. From there, ongoing feedback is key. We involve customers early—during discovery, in prototyping, and throughout development—so we’re constantly validating and adjusting. Our beta and pilot programs help us get new capabilities into customers’ hands quickly, and we’re lucky to have an incredible group of users who give us honest, thoughtful input that shapes the product every step of the way.
Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.

Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using Content here, content here, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).


',
            'image' => 'https://dummyimage.com/600x400/000/fff',
            'date' => '04 Jun 2025',
            'read_time' => '4 MINS READ',
            'category' => 'Fintech'
        ],

        2 => [
            'title' => 'Navigating Digital Transformation in Enterprises',
            'content' => 'Enterprises are accelerating their digital transformation efforts to stay competitive...  Lorem ipsum dolor sit amet...',
            'image' => 'https://dummyimage.com/600x400/000/fff',
            'date' => '02 Jun 2025',
            'read_time' => '5 MINS READ',
            'category' => 'Business Strategy'
        ],

        3 => [
            'title' => 'AI in Healthcare: Promise and Challenges',
            'content' => 'Artificial Intelligence is revolutionizing healthcare from diagnostics to treatment...',
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRhPwuylQNWxcaGsP-dDVX99POK6H-YGBUEUg&s',
            'date' => '01 Jun 2025',
            'read_time' => '3 MINS READ',
            'category' => 'Healthcare AI'
        ]
    ];

    public function index()
    {
        $data['articles'] = $this->articles;
        return view('articles', $data);
    }

    public function view($id)
    {
        if (!array_key_exists($id, $this->articles)) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        $article = $this->articles[$id];

        // Automatically split content into 3 parts for tabs
        $contentParts = explode("\n", wordwrap($article['content'], strlen($article['content']) / 3, "\n"));
        $article['trends_content'] = $contentParts[0] ?? 'No trends content';
        $article['innovation_content'] = $contentParts[1] ?? 'No innovation content';
        $article['opinion_content'] = $contentParts[2] ?? 'No expert opinion content';

        $data['articleItem'] = $article;
        return view('view_article', $data);
    }
}
