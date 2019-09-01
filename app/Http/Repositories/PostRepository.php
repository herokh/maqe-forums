<?php

namespace App\Http\Repositories;

use GuzzleHttp\Client;
use Carbon\Carbon;

class PostRepository extends HttpBaseRepository {

    private $authorRepository;

    function __construct(Client $client, AuthorRepository $authorRepository) {
        $this->client = $client;
        $this->authorRepository = $authorRepository;
        $this->jsonUrl = 'json/posts.json';
    }

    public function getList() {
        $posts = $this->get();
        $authors = $this->authorRepository->get();

        foreach ($posts as $post) {
            $post->author = $authors->where('id', $post->author_id)->first();
            $post->created_at_readable = Carbon::createFromTimeStamp(strtotime($post->created_at))->diffForHumans();
        }

        return $posts;
    }

}
