<?php
// Routes


$app->get('/speaker/{slug}/', function (\Slim\Http\Request $request, $response, $args) {

    $repo = new \Bilbostack\Repository\SpeakerRepository(__DIR__ . '/../data/speakers.yml');

    $data = $repo->getSpeakerDataBySlug($request->getAttribute("slug")) ?:array();

    // Render index view
    return $this->renderer->render($response, 'speaker.php', [
        "speaker" => $data
    ]);
});

$app->get('/codigo-de-conducta/', function (\Slim\Http\Request $request, $response, $args) {
    return $this->renderer->render($response, 'coc.php');
});


$app->get('/como-llegar/', function (\Slim\Http\Request $request, $response, $args) {
    return $this->renderer->render($response, 'como_llegar.php');
});

$app->get('/', function ($request, $response, $args) {

    $spRepo = new \Bilbostack\Repository\SpeakerRepository(__DIR__ . '/../data/speakers.yml');
    $orgRepo = new \Bilbostack\Repository\OrgRepository(__DIR__ . '/../data/org.yml');
    $sponsorRepo = new \Bilbostack\Repository\SponsorRepository(__DIR__ . '/../data/sponsors.yml');
    $speakers = $spRepo->getData() ?:array();
    $org = $orgRepo->getData() ?:array();
    $sponsors_f  = $sponsorRepo->getFeatured() ?:array();
    $sponsors_nf = $sponsorRepo->getNotFeatured() ?:array();

    shuffle($speakers);
    shuffle($org);
    shuffle($sponsors_nf);
    shuffle($sponsors_f);


    // Render index view
    return $this->renderer->render($response, 'index.phtml', [
        "speakers"     => $speakers,
        "sponsors_f"     => $sponsors_f,
        "sponsors_nf"     => $sponsors_nf,
        "org"          => $org,
        "talk_helper"  => function($speaker_slug, $key="title") use($speakers)
        {
            foreach ($speakers as $speaker)
            {
                if($speaker["slug"]==$speaker_slug)
                {
                    if($key=="title" && isset($speaker["talk"]))
                    {
                        return $speaker["talk"]["title"];
                    }
                }

                if($speaker["slug"]==$speaker_slug)
                {
                    if($key=="name")
                    {
                        return $speaker["name"];
                    }
                }
            }

            return null;
        }
    ]);
});


