<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;

class ProjectenController extends Controller
{
    public function index()
    {
        return view('pages.projecten');
    }

    public function album(string $album)
    {
        $albums = [
            'interieur' => [
                'title' => 'Interieur detail',
                'description' => 'Voorbeelden van dieptereiniging, detailwerk, bekleding, contactpunten en nette afwerking van interieurs.',
                'fallback_cover' => asset('assets/projects/interieur/01.jpg'),
            ],
            'exterieur' => [
                'title' => 'Exterieur detail',
                'description' => 'Projecten gericht op handwas, decontaminatie, velgenreiniging, finishing en een strakke buitenzijde.',
                'fallback_cover' => asset('assets/projects/exterieur/01.jpg'),
            ],
            'polijsten' => [
                'title' => 'Polijsten & lakcorrectie',
                'description' => 'Voorbeelden van glansherstel, swirls verminderen en lakcorrectie waar veilig mogelijk.',
                'fallback_cover' => asset('assets/projects/polijsten/01.jpg'),
            ],
            'showroom' => [
                'title' => 'Verkoopklaar / showroomstaat',
                'description' => 'Totaalprojecten waarbij presentatie, afwerking en verkoopklare uitstraling centraal staan.',
                'fallback_cover' => asset('assets/projects/showroom/01.jpg'),
            ],
            'zakelijk' => [
                'title' => 'Zakelijk & wagenpark',
                'description' => 'Projecten voor bedrijfswagens, leaseauto’s en wagenparken met focus op representativiteit en consistentie.',
                'fallback_cover' => asset('assets/projects/zakelijk/01.jpg'),
            ],
            'coatings' => [
                'title' => 'Coatings & bescherming',
                'description' => 'Beelden van beschermlagen, coatings en behandelingen voor langdurige glans en makkelijker onderhoud.',
                'fallback_cover' => asset('assets/projects/coatings/01.jpg'),
            ],
        ];

        abort_unless(array_key_exists($album, $albums), 404);

        /*
         |------------------------------------------------------------
         | Cloud86 structuur:
         | - app staat in /apc-app
         | - webroot staat in /httpdocs
         |
         | Daarom NIET public_path() gebruiken voor projectfoto's.
         |------------------------------------------------------------
         */
        $httpdocsPath = dirname(base_path()) . '/httpdocs';
        $dir = $httpdocsPath . "/assets/projects/{$album}";

        $images = [];

        if (File::isDirectory($dir)) {
            $files = collect(File::files($dir))
                ->filter(function ($file) {
                    return in_array(strtolower($file->getExtension()), ['jpg', 'jpeg', 'png', 'webp'], true);
                })
                ->sortBy(function ($file) {
                    return strtolower($file->getFilename());
                }, SORT_NATURAL)
                ->values();

            foreach ($files as $file) {
                $images[] = asset("assets/projects/{$album}/" . $file->getFilename());
            }
        }

        $albumCover = !empty($images)
            ? $images[0]
            : $albums[$album]['fallback_cover'];

        return view('pages.projecten-album', [
            'album' => $album,
            'albumTitle' => $albums[$album]['title'],
            'albumDescription' => $albums[$album]['description'],
            'albumCover' => $albumCover,
            'images' => $images,
        ]);
    }
}