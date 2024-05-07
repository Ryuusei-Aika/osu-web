<?php

// Copyright (c) ppy Pty Ltd <contact@ppy.sh>. Licensed under the GNU Affero General Public License v3.0.
// See the LICENCE file in the repository root for full licence text.

return [
    'page_description' => 'Artistas destacados en osu!',
    'title' => 'Artistas destacados',

    'admin' => [
        'hidden' => 'EL ARTISTA ESTÁ ACTUALMENTE OCULTO',
    ],

    'beatmaps' => [
        '_' => 'Mapas',
        'download' => 'descargar plantilla del mapa',
        'download-na' => 'plantilla del mapa aún no disponible',
    ],

    'index' => [
        'description' => 'Los artistas destacados son artistas con los que colaboramos para brindarle música nueva y original a osu!. Estos artistas y una selección de sus trabajos han sido escogidos por el equipo de osu! por ser geniales y adecuados para el mapping. Algunos de estos artistas destacados también crearon nuevas canciones exclusivas para su uso en osu!.<br><br>Todas las canciones en esta sección son proporcionadas como archivos .osz con ritmo previamente calculado y han sido licenciadas oficialmente para su uso en osu! y contenido relacionado con osu!.',
    ],

    'links' => [
        'beatmaps' => 'Mapas de osu!',
        'osu' => 'Perfil de osu!',
        'site' => 'Sitio web oficial',
    ],

    'songs' => [
        '_' => 'Canciones',
        'count' => ':count_delimited canción|:count_delimited canciones',
        'original' => 'osu! original',
        'original_badge' => 'ORIGINAL',
    ],

    'tracklist' => [
        'title' => 'título',
        'length' => 'duración',
        'bpm' => 'bpm',
        'genre' => 'género',
    ],

    'tracks' => [
        'index' => [
            '_' => 'búsqueda de pistas',

            'exclusive_only' => [
                'all' => 'Todos',
                'exclusive_only' => 'osu! original',
            ],

            'form' => [
                'advanced' => 'Búsqueda avanzada',
                'album' => 'Álbum',
                'artist' => 'Artista',
                'bpm_gte' => 'BPM mínimo',
                'bpm_lte' => 'BPM máximo',
                'empty' => 'No se encontraron pistas que coincidieran con ese criterio de búsqueda.',
                'exclusive_only' => 'Tipo',
                'genre' => 'Género',
                'genre_all' => 'Todos',
                'length_gte' => 'Duración mínima',
                'length_lte' => 'Duración máxima',
            ],
        ],
    ],
];
